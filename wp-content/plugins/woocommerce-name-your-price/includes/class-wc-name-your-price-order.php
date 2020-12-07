<?php

/**
 * WC_Name_Your_Price_Order class.
 */
class WC_Name_Your_Price_Order {

	/**
	 * __construct function.
	 *
	 * @access public
	 * @return void
	 */
	public function __construct() {

		// Functions for cart actions - ensure they have a priority before addons (10)
		add_filter( 'woocommerce_order_again_cart_item_data', array( $this, 'order_again_cart_item_data' ), 5, 3 );

	}

	/*-----------------------------------------------------------------------------------*/
	/* Order Filters */
	/*-----------------------------------------------------------------------------------*/

	/**
	 * Add cart session data from existing order.
	 *
	 * @param array $cart_item_data
	 * @param WC_Order_Item_Product (supports array notation due to ArrayAccess)
	 * @param WC_Order
	 * @return array
	 *
	 * @todo Switch from array to object notation.
	 * 
	 * @since 2.4.0
	 */
	public function order_again_cart_item_data( $cart_item_data, $line_item, $order ) {

		$nyp_product = $line_item->get_product();

		if( WC_Name_Your_Price_Helpers::is_nyp( $nyp_product ) ){
			
			$line_price = $line_item->get_subtotal();

			// If the order prices include tax then we need to add back the tax on this product.
			// Otherwise, the subtotal is the original price entered *minus* tax.
			if ( $nyp_product->is_taxable() && $order->get_prices_include_tax() ) {

				// Use the taxes array items here as they contain taxes to a more accurate number of decimals.
				$taxes = $line_item->get_taxes();
				$line_price += array_sum( $taxes['subtotal'] );

			}

			$cart_item_data['nyp'] = ( double ) WC_Name_Your_Price_Helpers::standardize_number( $line_price );
		}

		if ( WC_Name_Your_Price_Helpers::is_subscription( $nyp_product ) && WC_Name_Your_Price_Helpers::is_billing_period_variable( $nyp_product ) ) {

			$subscription = $this->find_subscription( $line_item, $order );

			if( is_callable( array( $subscription, 'get_billing_period' ) ) ) {
				$cart_item_data['nyp_period'] = $subscription->get_billing_period();
			}
			
		}

		return $cart_item_data;
	}

	/**
	 * Find the order item's related subscription.
	 * Slightly hacky, matches product ID against product ID of subscription.
	 * Will fail if multiple variable billing period subs exist in subscription.
	 * @since 2.4.0
	 */
	public function find_subscription( $order_item, $order ) {

		$order_items_product_id = wcs_get_canonical_product_id( $order_item );

		$subscription_for_item    = null;

		foreach ( wcs_get_subscriptions_for_order( $order, array( 'order_type' => 'parent' ) ) as $subscription ) {
		    foreach ( $subscription->get_items() as $line_item ) {
		        if ( wcs_get_canonical_product_id( $line_item ) == $order_items_product_id ) {
		            $subscription_for_item = $subscription;
		            break 2;
		        }
		    }
		}

		return $subscription_for_item;
	}

} //end class
