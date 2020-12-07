<?php
/**
 * Single Product Price Input
 * 
 * @author 		Kathy Darling
 * @package 	WC_Name_Your_Price/Templates
 * @version     2.11.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<div class="nyp" <?php echo WC_Name_Your_Price_Helpers::get_data_attributes( $nyp_product, $prefix ); ?> >

	<?php do_action( 'woocommerce_nyp_before_price_input', $nyp_product ); ?>

	<label for="<?php echo 'nyp' . $prefix; ?>">
		<span class="nyp-field-label">
			<?php echo WC_Name_Your_Price_Helpers::get_price_input_label_text( $nyp_product ); ?>
		</span>
		<?php do_action( 'woocommerce_nyp_price_input_label_hint', $nyp_product ); ?>
	</label>

	<?php echo WC_Name_Your_Price_Helpers::get_price_input( $nyp_product, $prefix ); ?>

	<?php do_action( 'woocommerce_nyp_after_price_input', $nyp_product ); ?>

</div>
		