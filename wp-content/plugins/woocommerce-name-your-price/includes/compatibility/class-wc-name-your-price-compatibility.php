<?php
/**
 * Plugin Cross-Compatibility
 *
 * @author   Kathy Darling
 * @category Compatibility
 * @package  WooCommerce Name Your Price/Compatibility
 * @since    2.7.0
 * @version  2.11.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ){
	exit; 	
}

class WC_Name_Your_Price_Compatibility {

	function __construct() {

		// Initialize.
		$this->init();

	}

	/**
	 * Init compatibility classes.
	 *
	 * @since  2.11.0
	 */
	public function init() {

		// Load modules.
		add_action( 'plugins_loaded', array( $this, 'load_modules' ), 100 );

	}

	/**
	 * Prevent deprecated mini-extensions from initializing.
	 *
	 * @since  2.11.0
	 */
	public function load_modules() {

		// Variable products.
		$module_paths[ 'variable_products' ] = 'modules/class-wc-nyp-variable-products-compatibility.php';

		// Stripe fixes.
		if ( class_exists( 'WC_Stripe' ) ) {
			$module_paths[ 'stripe' ] = 'modules/class-wc-nyp-stripe-compatibility.php';
		}

		/**
		 * 'wc_nyp_compatibility_modules' filter.
		 *
		 * Use this to filter the required compatibility modules.
		 *
		 * @since  2.11.0
		 * @param  array $module_paths
		 */
		$module_paths = apply_filters( 'wc_nyp_compatibility_modules', $module_paths );
		foreach ( $module_paths as $name => $path ) {
			require_once( $path );
		}

	}

	/*-----------------------------------------------------------------------------------*/
	/* Syncing */
	/*-----------------------------------------------------------------------------------*/

	/**
	 * Sync variable product has_nyp status.
	 * @param	WC_Product $product
	 * @return	void
	 * @access	public
	 * @since	2.5.1
	 * @deprecated 2.11.0
	 */
	public function variable_sync_has_nyp_status( $product ){
		wc_deprecated_function( 'WC_Name_Your_Price_Compatibility::variable_sync_has_nyp_status', '3.0.0', 'WC_NYP_Variable_Products_Compatibility::variable_sync_has_nyp_status()' );
		return WC_NYP_Variable_Products_Compatibility::variable_sync_has_nyp_status( $product );
	}

	/**
	 * Sync variable product prices against NYP minimum prices.
	 * @param	string $product_id
	 * @param	array $children - the ids of the variations
	 * @return	void
	 * @access	public
	 * @since	2.0
	 * @deprecated 2.11.0
	 */
	public function variable_product_sync( $product_id, $children ){
		wc_deprecated_function( 'WC_Name_Your_Price_Compatibility::variable_product_sync', '2.7.0', 'No longer need to sync prices as that happens automatically in WooCommerce core.' );

		$has_nyp = 'no';

		if ( $children ) { 

			$min_price    = null;
			$max_price    = null;
			$min_price_id = null;
			$max_price_id = null;

			// Main active prices
			$min_price            = null;
			$max_price            = null;
			$min_price_id         = null;
			$max_price_id         = null;

			// Regular prices
			$min_regular_price    = null;
			$max_regular_price    = null;
			$min_regular_price_id = null;
			$max_regular_price_id = null;

			// Sale prices
			$min_sale_price       = null;
			$max_sale_price       = null;
			$min_sale_price_id    = null;
			$max_sale_price_id    = null;

			foreach ( array( 'price', 'regular_price', 'sale_price' ) as $price_type ) {
				foreach ( $children as $child_id ) {
					
					// if NYP 
					if( WC_Name_Your_Price_Helpers::is_nyp( $child_id ) ) {

						$has_nyp = 'yes';

						// Skip hidden variations
						if ( 'yes' === get_option( 'woocommerce_hide_out_of_stock_items' ) ) {
							$stock = get_post_meta( $child_id, '_stock', true );
							if ( $stock !== "" && $stock <= get_option( 'woocommerce_notify_no_stock_amount' ) ) {
								continue;
							}
						}

						// get the nyp min price for this variation
						$child_price 		= get_post_meta( $child_id, '_min_price', true );

						// if there is no set minimum, technically the min is 0
						$child_price = $child_price ? $child_price : 0;

						// Find min price
						if ( is_null( ${"min_{$price_type}"} ) || $child_price < ${"min_{$price_type}"} ) {
							${"min_{$price_type}"}    = $child_price;
							${"min_{$price_type}_id"} = $child_id;
						}

						// Find max price
						if ( is_null( ${"max_{$price_type}"} ) || $child_price > ${"max_{$price_type}"} ) {
							${"max_{$price_type}"}    = $child_price;
							${"max_{$price_type}_id"} = $child_id;
						}

					} else {

						$child_price = get_post_meta( $child_id, '_' . $price_type, true );

						// Skip non-priced variations
						if ( $child_price === '' ) {
							continue;
						}

						// Skip hidden variations
						if ( 'yes' === get_option( 'woocommerce_hide_out_of_stock_items' ) ) {
							$stock = get_post_meta( $child_id, '_stock', true );
							if ( $stock !== "" && $stock <= get_option( 'woocommerce_notify_no_stock_amount' ) ) {
								continue;
							}
						}

						// Find min price
						if ( is_null( ${"min_{$price_type}"} ) || $child_price < ${"min_{$price_type}"} ) {
							${"min_{$price_type}"}    = $child_price;
							${"min_{$price_type}_id"} = $child_id;
						}

						// Find max price
						if ( $child_price > ${"max_{$price_type}"} ) {
							${"max_{$price_type}"}    = $child_price;
							${"max_{$price_type}_id"} = $child_id;
						}

					}

				}

				// Store prices
				update_post_meta( $product_id, '_min_variation_' . $price_type, ${"min_{$price_type}"} );
				update_post_meta( $product_id, '_max_variation_' . $price_type, ${"max_{$price_type}"} );

				// Store ids
				update_post_meta( $product_id, '_min_' . $price_type . '_variation_id', ${"min_{$price_type}_id"} );
				update_post_meta( $product_id, '_max_' . $price_type . '_variation_id', ${"max_{$price_type}_id"} );
			}

			// The VARIABLE PRODUCT price should equal the min price of any type
			update_post_meta( $product_id, '_price', $min_price );

			// set status for variable product
			update_post_meta( $product_id, '_has_nyp', $has_nyp );

			wc_delete_product_transients( $product_id );

		}

	}


	/*-----------------------------------------------------------------------------------*/
	/* Subscriptions */
	/*-----------------------------------------------------------------------------------*/

	/**
	 * Resolves the string to array notice for variable period subs by providing the billing period if one does not exist.
	 *
	 * @param string $period
	 * @param obj $product
	 * @return string
	 * @since 2.2.0
	 */
	public function product_period( $period, $product ){

		wc_deprecated_function( 'WC_Name_Your_Price_Compatibility::product_period', '2.7.0', 'No longer need to filter the period as the period is modified at runtime.' );

		if( WC_Name_Your_Price_Helpers::is_billing_period_variable( $product ) && empty( $period ) ){
			$period = is_admin() ? WC_Name_Your_Price_Helpers::get_minimum_billing_period( $product ) : WC_Name_Your_Price_Helpers::get_posted_period( $product );		
		}

		return $period;
	}

} // end class