<?php

namespace WPML;

use WPML\Forms\Translation\Config;
use WPML\Forms\Translation\Registration;
use WPML\Forms\UI\Notices;
use WPML\Forms\UI\Welcome;

class Forms {

	/**
	 * Path to plugin.php file.
	 *
	 * @var string $pluginFilePath
	 */
	private $pluginFilePath;

	/**
	 * Plugin loader class name.
	 *
	 * @var string $className
	 */
	private $className;

	/**
	 * Forms constructor.
	 *
	 * @param string $pluginFilePath Path to plugin.php file.
	 * @param string $className Plugin loader class name.
	 */
	public function __construct( $pluginFilePath, $className ) {
		$this->pluginFilePath = $pluginFilePath;
		$this->className      = $className;
	}

	/** Adds hooks. */
	public function addHooks() {
		add_action( 'init', [ $this, 'init' ] );
	}

	/**
	 * Checks if dependencies are loaded.
	 *
	 * @return bool
	 */
	private function dependenciesLoaded() {
		return did_action( 'wpml_loaded' ) && did_action( 'wpml_after_tm_loaded' ) && did_action( 'wpml_st_loaded' );
	}

	public function init() {

		if ( $this->dependenciesLoaded() ) {

			global $wp_filesystem;

			if ( ! $wp_filesystem ) {
				WP_Filesystem();
			}

			$config_helper = new Config(
				new \WPML_XML2Array(),
				$wp_filesystem
			);

			$config = $config_helper->getXmlArray( dirname( $this->pluginFilePath ) . '/wpml-forms-config.xml' );

			$addon_loaders = wpml_collect( [ $this->className ] );

			$addon_loaders->each( function ( $class ) use ( $config ) {
				/** @var \WPML\Forms\Loader\Base $loader */
				$loader = new $class( $config );
				$loader->load();
			} );

			$bulk_registration_option_name = wpml_forms_bulk_registration_option_name( $this->pluginFilePath );
			if ( get_option( $bulk_registration_option_name, false ) ) {
				$bulk = new Registration();
				$bulk->register();
				delete_option( $bulk_registration_option_name );
			}

			$welcome_notice = new Welcome();
			$welcome_notice->addHooks();

		} else {
			$notice = new Notices();
			$notice->addHooksForMissingDependencies();
		}
	}
}
