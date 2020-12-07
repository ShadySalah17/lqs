<?php

namespace WPML\Forms\Hooks\WpForms;

use WPML\Forms\Hooks\Base;

class Notifications extends Base {

	/** Adds hooks. */
	public function addHooks() {
		add_filter( 'wpforms_process_before_form_data', [ $this, 'applyConfirmationTranslations' ] );
		add_filter( 'wpforms_emails_send_email_data', [ $this, 'applyEmailTranslations' ], 10, 2 );
		add_action( 'wpforms_email_send_after', [ $this, 'restoreLanguage' ] );
	}

	/**
	 * Applies translations to email data.
	 *
	 * @param array              $data Email data.
	 * @param \WPForms_WP_Emails $emails WPForms email object.
	 *
	 * @return mixed
	 */
	public function applyEmailTranslations( $data, \WPForms_WP_Emails $emails ) {
		$package = $this->newPackage( $this->getId( $emails->form_data ) );
		do_action( 'wpml_switch_language_for_email', $data['to'] );
		$translated = $package->translateFormSettings( [ 'notifications' => [ $emails->notification_id => $data ] ] );
		foreach ( $emails->fields as &$field ) {
			$field['name'] = $package->translateString( $field['name'], strval( $this->getId( $field ) ), 'label' );
		}

		return $translated['notifications'][ $emails->notification_id ];
	}

	/**
	 * Restores current language.
	 *
	 * @codeCoverageIgnore
	 */
	public function restoreLanguage() {
		do_action( 'wpml_restore_language_from_email' );
	}


	/**
	 * Applies form confirmations translations.
	 *
	 * @param array $formData Form data.
	 *
	 * @return array
	 */
	public function applyConfirmationTranslations( array $formData ) {

		$package = $this->newPackage( $this->getId( $formData ) );

		if (
			$this->notEmpty( 'settings', $formData )
			&& $this->notEmpty( 'confirmations', $formData['settings'] )
		) {
			$translated = $package->translateFormSettings(
				[ 'confirmations' => $formData['settings']['confirmations'] ]
			);

			$formData['settings']['confirmations'] = $translated['confirmations'];
		}

		return $formData;
	}
}
