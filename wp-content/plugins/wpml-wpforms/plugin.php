<?php
/**
 * Plugin Name: WPForms Multilingual
 * Plugin URI: https://wpml.org/documentation/related-projects/creating-multilingual-forms-using-wpforms-and-wpml/?utm_source=wpmlplugin&utm_campaign=forms-plugin&utm_medium=plugin&utm_term=forms
 * Description: Add multilingual support for WPForms | <a href="https://wpml.org/documentation/related-projects/creating-multilingual-forms-using-wpforms-and-wpml/?utm_source=wpmlplugin&utm_campaign=forms-plugin&utm_medium=plugin&utm_term=forms">Documentation</a>
 * Author: OnTheGoSystems
 * Author URI: http://www.onthegosystems.com/
 * Version: 0.1.2
 * Plugin Slug: wpml-wpforms
 */

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/wpml/forms/loader.php';

wpml_forms_initialize(
	__DIR__ . '/vendor/wpml/forms',
	untrailingslashit( plugin_dir_url( __FILE__ ) ) . '/vendor/wpml/forms'
);

function wpml_wpforms() {
	$forms = new \WPML\Forms( __FILE__, \WPML\Forms\Loader\WpForms::class );
	$forms->addHooks();
}

add_action( 'plugins_loaded', 'wpml_wpforms' );

function wpml_wpforms_activation_hook() {
	update_option( wpml_forms_bulk_registration_option_name( __FILE__ ), true );
}

register_activation_hook( __FILE__, 'wpml_wpforms_activation_hook' );
