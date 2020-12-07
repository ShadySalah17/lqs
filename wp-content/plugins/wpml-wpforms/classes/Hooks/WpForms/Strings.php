<?php

namespace WPML\Forms\Hooks\WpForms;

use WPML\Forms\Hooks\Registration;

class Strings extends Registration {

	/** Adds hooks. */
	public function addHooks() {
		parent::addHooks();
		add_action( 'wpforms_save_form', [ $this, 'register' ] );
		add_filter( 'wpforms_frontend_form_data', [ $this, 'applyTranslations' ] );
	}

	/**
	 * Gets field ID from provided data.
	 *
	 * @param array $data Field data.
	 *
	 * @return string|null
	 */
	public function getFieldId( array $data ) {
		return ( array_key_exists( 'id', $data )
			&& ( is_string( $data['id'] ) || is_int( $data['id'] ) ) )
			? strval( $data['id'] ) : null;
	}

	/**
	 * Registers form for translation.
	 *
	 * @param int $formId Form ID.
	 */
	public function register( $formId ) {

		$content = get_post_field( 'post_content', $formId, 'raw' );
		$data    = json_decode( $content, true );
		$package = $this->newPackage( $formId );

		if ( $this->notEmpty( 'settings', $data ) ) {
			$package->registerFormSettings( $data['settings'] );
		}

		if ( $this->notEmpty( 'fields', $data ) ) {
			foreach ( $data['fields'] as $field ) {
				$fieldID = $this->getFieldId( $field );
				if ( ! is_null( $fieldID ) ) {
					$package->registerField( $fieldID, $field );
				}
			}
		}
		$package->cleanup();
	}

	/**
	 * Applies translations to form.
	 *
	 * @param array $formData Form data.
	 *
	 * @return array
	 */
	public function applyTranslations( array $formData ) {

		$package = $this->newPackage( $this->getId( $formData ) );

		if ( $this->notEmpty( 'settings', $formData ) ) {
			$formData['settings'] = $package->translateFormSettings( $formData['settings'] );
		}

		if ( $this->notEmpty( 'fields', $formData ) ) {
			foreach ( $formData['fields'] as &$field ) {
				$fieldID = $this->getFieldId( $field );
				if ( ! is_null( $fieldID ) ) {
					$field = $package->translateField( $field, $fieldID );
				}
			}
		}

		return $formData;
	}

	/**
	 * Adds forms info for bulk registration.
	 *
	 * @param array $items Array of form infos.
	 *
	 * @return array
	 */
	public function bulkRegistrationItems( array $items ) {

		$forms = wpforms()->form->get();
		if ( is_array( $forms ) ) {
			foreach ( $forms as $form ) {
				$items[] = $this->getBulkRegistrationItem( $form->ID, $form->post_title );
			}
		}

		return $items;
	}

	/**
	 * Registers forms for translation.
	 *
	 * @param array $forms Array of form IDs.
	 */
	public function bulkRegistration( array $forms ) {
		foreach ( $forms as $formId ) {
			$this->register( $formId );
		}
	}
}
