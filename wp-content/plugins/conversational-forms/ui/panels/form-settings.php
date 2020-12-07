<?php
/**
 * Form Settings panel
 *
 * @package Caldera_Forms Modified by QuantumCloud
 * @author    Josh Pollock <Josh@CalderaWP.com>
 * @license   GPL-2.0+
 * @link
 * @copyright 2016 CalderaWP LLC
 */
?>
<div style="display: none;" class="qcformbuilder-editor-body qcformbuilder-config-editor-panel " id="settings-panel">
	<h3>
		<?php esc_html_e( 'Form Settings', 'qcformbuilder-forms' ); ?>
	</h3>

	<input type="hidden" name="config[wfb_version]" value="<?php echo esc_attr( WFBCORE_VER ); ?>">

	<div class="qcformbuilder-config-group">
		<label for="wfb-form-name">
			<?php esc_html_e( 'Form Name', 'qcformbuilder-forms' ); ?>
		</label>
		<div class="qcformbuilder-config-field">
			<input id="wfb-form-name"type="text" class="field-config required" name="config[name]" value="<?php echo $element[ 'name' ]; ?>" style="width:500px;" required="required">
		</div>
	</div>
	<div class="qcformbuilder-config-group">
		<p>This Form Name will be label of the button if you add it in WPBot start menu.</p>
		<p>If you update the Form Name and already added in start menu before, then please hit the Save Settings in WPBot Lite > Start Menu.</p>
	</div>
	
<!--
	<div class="qcformbuilder-config-group">
		<label for="wfb-shortcode-preview">
			<?php echo esc_html__( 'Shortcode', 'qcformbuilder-forms' ); ?>
		</label>
		<div class="qcformbuilder-config-field">
			<input type="text" id="wfb-shortcode-preview" value="<?php echo esc_attr( '[qcformbuilder_form id="' . $element[ 'ID' ] . '"]' ); ?>" style="width: 500px; background: #efefef; box-shadow: none; color: #8e8e8e;" readonly="readonly">
		</div>
	</div>

	<div class="qcformbuilder-config-group">
		<fieldset>
			<legend>
				<?php esc_html_e( 'Scroll To Top On Submit', 'qcformbuilder-forms' ); ?>
			</legend>
			<div class="qcformbuilder-config-field">
				<label for="scroll_top-enable">
					<input id="scroll_top-enable" type="radio" class="field-config" name="config[scroll_top]" value="1" <?php if ( ! empty( $element[ 'scroll_top' ] ) ){ ?>checked="checked"<?php } ?> aria-describedby="scroll_top-disable-description">
					<?php esc_html_e( 'Enable', 'qcformbuilder-forms' ); ?>
					<p class="description" id="scroll_top-disable-description">
						<?php esc_html_e( 'When form is submitted, scroll page to form message.', 'qcformbuilder-forms' ); ?>
					</p>
				</label>
				<label for="scroll_top-disable">
					<input id="scroll_top-disable" type="radio" class="field-config" name="config[scroll_top]" value="0" <?php if ( empty( $element[ 'scroll_top' ] ) ){ ?>checked="checked"<?php } ?> aria-describedby="scroll_top-enable-description">
					<?php esc_html_e( 'Disable', 'qcformbuilder-forms' ); ?>
					<p class="description" id="scroll_top-enable-description">
						<?php esc_html_e( 'When form is submitted, do not scroll page.', 'qcformbuilder-forms' ); ?>
					</p>
				</label>
			</div>
		</fieldset>
	</div>

	<div class="qcformbuilder-config-group" style="width:500px;">
		<label for="wfb-success-message">
			<?php esc_html_e( 'Success Message', 'qcformbuilder-forms' ); ?>
		</label>
		<div class="qcformbuilder-config-field">
			<textarea id="wfb-success-message" class="field-config block-input magic-tag-enabled required" name="config[success]" required="required" aria-describedby="wfb-success-message-description"><?php if ( ! empty( $element[ 'success' ] ) ) {
					esc_html_e( $element[ 'success' ] );
				} else {
					esc_html_e( 'Form has been successfully submitted. Thank you.', 'qcformbuilder-forms' );
				} ?>
			</textarea>
		</div>
		<p class="description" id="wfb-success-message-description">
			<?php esc_html_e( 'Message to show after form is submitted.', 'qcformbuilder-forms' ); ?>
		</p>
	</div>


	<div class="qcformbuilder-config-group">
		<fieldset>
			<legend>
				<?php esc_html_e( 'Capture Entries', 'qcformbuilder-forms' ); ?>
			</legend>
			<div class="qcformbuilder-config-field">
				<label for="db_support-enable">
					<input id="db_support-enable" type="radio" class="field-config" name="config[db_support]" value="1" <?php if ( ! empty( $element[ 'db_support' ] ) ){ ?>checked="checked"<?php } ?>>
					<?php esc_html_e( 'Enable', 'qcformbuilder-forms' ); ?>
				</label>
				<label for="db_support-disable">
					<input id="db_support-disable" type="radio" class="field-config" name="config[db_support]" value="0" <?php if ( empty( $element[ 'db_support' ] ) ){ ?>checked="checked"<?php } ?>>
					<?php esc_html_e( 'Disable', 'qcformbuilder-forms' ); ?>
				</label>
			</div>
		</fieldset>
	</div>

    <div class="qcformbuilder-config-group">
        <label id="qcformbuilder-forms-label-delete-all-entries" for="qcformbuilder-forms-delete-entries-field">
            <?php esc_html_e( 'Delete Saved Entries', 'qcformbuilder-forms' ); ?>
        </label>
        <div
            id="qcformbuilder-forms-delete-entries-field"
            class="qcformbuilder-config-field"
        >
            <a
                href="#"
                class="button"
                id="qcformbuilder-forms-delete-all-form-entries"
                aria-describedby="qcformbuilder-forms-delete-entries-description"
                <?php //a used as button because that's the only way the JavaScript will work ?>
                role="button"
            >
                <?php esc_html_e('Delete All Saved Entries', 'qcformbuilder-forms'); ?>
            </a>
            <div
                 id="qcformbuilder-forms-confirm-delete-all-form-entries"
                 style="display: none;"
            >
                <p>
                    <?php esc_html_e('Are you sure you want to delete all the entries saved for this form ?', 'qcformbuilder-forms'); ?>
                </p>
                <button
                    id="qcformbuilder-forms-yes-confirm-delete-all-form-entries"
                    class="button"
                >
                    <?php esc_html_e('Yes', 'qcformbuilder-forms'); ?>
                </button>
                <button
                        id="qcformbuilder-forms-no-confirm-delete-all-form-entries"
                        class="button"
                >
                    <?php esc_html_e( 'No', 'qcformbuilder-forms'); ?>
                </button>
                <span id="qcformbuilder-forms-delete-entries-spinner" class="spinner"></span>
            </div>
            <p
                class="description"
                id="qcformbuilder-forms-delete-entries-description"
            >
                <?php esc_html_e( 'Delete all the entries saved for this form. This can NOT be undone.', 'qcformbuilder-forms' ); ?>
            </p>
        </div>
    </div>

	<div class="qcformbuilder-config-group">
		<fieldset>
			<legend>
				<?php esc_html_e( 'Create sub-menu entry viewer', 'qcformbuilder-forms' ); ?>
			</legend>
			<div class="qcformbuilder-config-field">
				<label for="pin-toggle-roles-enable">
					<input  id="pin-toggle-roles-enable" type="radio" class="field-config pin-toggle-roles" name="config[pinned]" value="1"  <?php if ( ! empty( $element[ 'pinned' ] ) ){ ?>checked="checked"<?php } ?> aria-describedby="pin-toggle-roles-description">
					<?php esc_html_e( 'Enable', 'qcformbuilder-forms' ); ?>
				</label>
				<label for="pin-toggle-roles-disable">
					<input id="pin-toggle-roles-disable" type="radio" class="field-config pin-toggle-roles" name="config[pinned]" value="0" <?php if ( empty( $element[ 'pinned' ] ) ){ ?>checked="checked"<?php } ?> aria-describedby="pin-toggle-roles-description">
					<?php  esc_html_e( 'Disable', 'qcformbuilder-forms' ); ?>
				</label>
			</div>
			<p class="description" id="pin-toggle-roles-description">
				<?php esc_html_e( 'Creates a sub-menu item of the Qcformbuilder Forms menu and a page to show entries for this form.', 'qcformbuilder-forms' ); ?>
			</p>
		</fieldset>
	</div>



	<div id="qcformbuilder-pin-rules" <?php if ( empty( $element[ 'pinned' ] ) ){ ?>style="display:none;"<?php } ?>>
		<div class="qcformbuilder-config-group">
			<fieldset>
				<legend>
					<?php echo esc_html__( 'View Entries', 'qcformbuilder-forms' ); ?>
				</legend>
				<div class="qcformbuilder-config-field" style="max-width: 500px;">
					<label for="pin_role_all_roles">
						<input type="checkbox" id="pin_role_all_roles" class="field-config visible-all-roles"
						       data-set="form_role" value="1"
						       name="config[pin_roles][all_roles]" <?php if ( ! empty( $element[ 'pin_roles' ][ 'all_roles' ] ) ) {
							echo 'checked="checked"';
						} ?>>
						<?php esc_html_e( 'All', 'qcformbuilder-forms' ); ?>
					</label>
					<hr>
					<?php

					$editable_roles = qcformbuilder_forms_get_roles();

					foreach ( $editable_roles as $role => $role_details ) {
						if ( 'administrator' === $role ) {
							continue;
						}
						$id = 'wfb-pin-role-' . $role;
						?>
						<label for="<?php echo esc_attr( $id ); ?>">
							<input id="<?php echo esc_attr( $id ); ?>" type="checkbox"
							       class="field-config form_role_role_check gen_role_check"
							       data-set="form_role" name="config[pin_roles][access_role][<?php echo $role; ?>]"
							       value="1" <?php if ( ! empty( $element[ 'pin_roles' ][ 'access_role' ][ $role ] ) ) {
								echo 'checked="checked"';
							} ?>>
							<?php echo esc_html( $role_details[ 'name' ] ); ?>
						</label>
						<?php
					}

					?>
				</div>
			</fieldset>
		</div>
	</div>

	<div class="qcformbuilder-config-group">
		<fieldset>
			<legend>
				<?php esc_html_e( 'State', 'qcformbuilder-forms' ); ?>
			</legend>
			<div class="qcformbuilder-config-field">
				<label for="wfb-forms-state">
					<input type="checkbox" id="wfb-forms-state" class="field-config" name="config[form_draft]" value="1" <?php if ( ! empty( $element[ 'form_draft' ] ) ){ ?>checked="checked"<?php } ?>>
					<?php esc_html_e( 'Deactivate / Draft', 'qcformbuilder-forms' ); ?>
				</label>
			</div>
		</fieldset>
	</div>

	<div class="qcformbuilder-config-group">
		<fieldset>
			<legend>
				<?php esc_html_e( 'Hide Form', 'qcformbuilder-forms' ); ?>
			</legend>
			<div class="qcformbuilder-config-field">
				<label for="wfb-hide-form">
					<input id="wfb-hide-form" type="checkbox" class="field-config" name="config[hide_form]" value="1" <?php if ( ! empty( $element[ 'hide_form' ] ) ){ ?>checked="checked"<?php } ?>>
					<?php echo esc_html__( 'Enable', 'qcformbuilder-forms' ); ?>
					: <?php echo esc_html__( 'Hide form after successful submission', 'qcformbuilder-forms' ); ?>
				</label>
			</div>
		</fieldset>
	</div>

	<div class="qcformbuilder-config-group">
		<fieldset>
			<legend>
				<?php esc_html_e( 'Honeypot', 'qcformbuilder-forms' ); ?>
			</legend>
			<div class="qcformbuilder-config-field">
			    <?php esc_html_e('This setting has moved to Anti-Spam tab', 'qcformbuilder-forms' ); ?>
			</div>
		</fieldset>
	</div>


	<div class="qcformbuilder-config-group">
        <label for="wfb-gravatar-field">
            <?php esc_html_e( 'Gravatar Field', 'qcformbuilder-forms' ); ?>
        </label>
        <div class="qcformbuilder-config-field">
            <select id="wfb-gravatar-field" aria-describedby="wfb-gravatar-field-description" style="width:500px;" class="field-config qcformbuilder-field-bind" name="config[avatar_field]"
                    data-exclude="system" data-default="<?php if ( ! empty( $element[ 'avatar_field' ] ) ) {
                echo $element[ 'avatar_field' ];
            } ?>" data-type="email">
                <?php
                if ( ! empty( $element[ 'avatar_field' ] ) ) {
                    echo '<option value="' . $element[ 'avatar_field' ] . '"></option>';
                }
                ?>
            </select>
            <p class="description" id="wfb-gravatar-field-description">
                <?php esc_html_e( 'Used when viewing an entry from a non-logged in user.', 'qcformbuilder-forms' ); ?>
            </p>
        </div>
    </div>-->

	<?php

	/**
	 * Runs at the bottom of the general settings panel
	 *
	 * @since unknown
	 *
	 * @param array $element Form config
	 */
	//do_action( 'qcformbuilder_forms_general_settings_panel', $element );
	?>
</div>
