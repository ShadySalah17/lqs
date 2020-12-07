<?php

namespace WPML\Forms\Loader;

use WPML\Forms\Hooks\WpForms\Notifications;
use WPML\Forms\Hooks\WpForms\Package;
use WPML\Forms\Hooks\WpForms\Strings;
use WPML\Forms\Translation\Factory;

class WpForms extends Base {

	/** Gets package slug. */
	protected function getSlug() {
		return 'wpforms';
	}

	/** Gets package title. */
	protected function getTitle() {
		return 'WPForms';
	}

	/** Checkis if plugin is active. */
	protected function isAddonActive() {
		return did_action( 'wpforms_loaded' );
	}

	/** Adds hooks. */
	protected function addHooks() {

		$factory = new Factory( $this->preferences );

		$wpforms = new Strings(
			$this->getSlug(),
			$this->getTitle(),
			$factory
		);
		$wpforms->addHooks();

		$notifications = new Notifications(
			$this->getSlug(),
			$this->getTitle(),
			$factory
		);
		$notifications->addHooks();

		$package_filter = new Package( $this->getSlug() );
		$package_filter->addHooks();
	}
}
