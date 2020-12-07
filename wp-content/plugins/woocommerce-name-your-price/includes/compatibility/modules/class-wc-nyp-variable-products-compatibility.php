<?php
/**
 * Variable Products Compatibility
 *
 * @author   Kathy Darling
 * @category Compatibility
 * @package  WooCommerce Name Your Price/Compatibility
 * @since    3.0.0
 * @version  3.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The Main WC_NYP_Variable_Products_Compatibility class
 **/
class WC_NYP_Variable_Products_Compatibility {


	/**
	 * WC_NYP_Variable_Products_Compatibility Constructor
	 *
	 * @access public
	 * @since 3.0.0
	 */
	public static function init() {

		// Variable products- sync has_nyp status of parent.
		add_action( 'woocommerce_variable_product_sync_data', array( __CLASS__, 'variable_sync_has_nyp_status' ) );

    }

	/**
	 * Sync variable product has_nyp status.
	 * @param	WC_Product $product
	 * @return	void
	 * @access	public
	 * @since	3.0.0
	 */
	public static function variable_sync_has_nyp_status( $product ){

		$product->delete_meta_data( '_has_nyp' );

		// Only run on supported types.
		if( $product->is_type( WC_Name_Your_Price_Helpers::get_variable_supported_types() ) ) {

			global $wpdb;

			$children = $product->get_visible_children();

			$has_nyp   = $children ? array_unique( $wpdb->get_col( "SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_nyp' AND meta_value = 'yes' AND post_id IN ( " . implode( ',', array_map( 'absint', $children ) ) . " )" ) ) : array();

			if ( ! empty( $has_nyp ) ) {
				$product->add_meta_data( '_has_nyp', 'yes', true );
			}

		}
	}


} // End class: do not remove or there will be no more guacamole for you.

WC_NYP_Variable_Products_Compatibility::init();
