<div class="ap-tabs-board" id="board-how_to_use-settings" style="display: none;">
    <div class="ap-tab-wrapper">
        <p><?php _e( 'There are four main settings panels that will help you to setup the plugin and the frontend form properly.', 'anonymous-post-pro' ); ?></p>
        <dl>
            <dt><strong><?php _e( 'General settings', 'anonymous-post-pro' ); ?></strong></dt>
            <dd><p><?php _e( 'In this tab you can customize all the settings regarding the form and plugin general settings.All the settings setups such as Form Title,Post Publish Status,Admin notification and many more can be customized from this panel.', 'anonymous-post-pro' ); ?></p></dd>

            <dt><strong><?php _e( 'Form Settings', 'anonymous-post-pro' ); ?></strong></dt>
            <dd><p><?php _e( 'In this tab you can customize all the detailed settings regarding the form.You can setup all the necessary fields that needs to be shown in the form for post submission.You can also setup the necessary labels for the form fields.', 'anonymous-post-pro' ); ?></p></dd>

            <dt><strong><?php _e( 'Captcha settings', 'anonymous-post-pro' ); ?></strong></dt>
            <dd><p><?php _e( 'In this tab you can customize all the settings regarding the form security options.You can either enable or disable the captcha, setup the label for the captcha field and also you can provide the custom message for captcha error.Though you can disable the captcha in the form but we suggest you to enable this for keeping your form more secure.', 'anonymous-post-pro' ); ?></p></dd>

            <dt><strong><?php _e( 'Form Style Settings', 'anonymous-post-pro' ); ?></strong></dt>
            <dd><p><?php _e( 'In this tab you can customize all the settings regarding the form style options.You can either enable or disable the plugin style,or choose the style from already built in templates or use form styler to style yourself.', 'anonymous-post-pro' ); ?></p></dd>

            <dt><strong><?php _e( 'Using Shortcode', 'anonymous-post-pro' ); ?></strong></dt>
            <dd>
                <p>
                    <?php _e( 'For viewing the form in the front end, you can place', 'anonymous-post-pro' ); ?> <br /><br />
                    <input type="text" readonly="readonly" value='[ap-form id="form_id"]' onfocus="this.select();"/><br /><br />
                    <?php _e( "shortcode in  any page's content editor where you want to display the post submission form.Or if you want to use it in your template file then you can use", 'anonymous-post-pro' ); ?> <br /><br /><input type="text" readonly="readonly" value="&lt;?php echo do_shortcode('[ap-form id=&quot;form_id&quot;]');?&gt;" onfocus="this.select();" style="width: 370px;"/> <?php _e( 'where form_id is the respective form id', 'anonymous-post-pro' ); ?></p>
                <p><?php _e( 'If you have kept the redirection url in the general settings tabs then once the form is submitted, the page will be redirected to the url that you have kept in that field.So to display your custom message after successful post submission in the redirected page, then please use', 'anonymous-post-pro' ); ?> <br /><br /><input type="text" readonly="readonly" value="[ap-form-message]" onfocus="this.select();"/> <br/><br/><?php _e( 'inside the page editor or', 'anonymous-post-pro' ); ?>
                    <br /><br /><input type="text" readonly="readonly" value="&lt;?php echo do_shortcode('[ap-form-message]');?&gt;" style="width: 360px;"/><br /> <br /><?php _e( "inside the template file  of the redirected page where you want to display the custom post submission message.If you won't place any url in the redirect url field , then the form will be submitted to the same page. So in that case the message will be automatically displayed in the top of the form just after the form title so you don't need to use shortcode for this case.", 'anonymous-post-pro' ); ?>
                </p>
                <p><b><?php _e( 'Note:', 'anonymous-post-pro' ); ?> </b><i><?php _e( "Please don't copy paste the above shortcodes directly onto the visual editor.Please type or copy paste into the text version editor.", 'anonymous-post-pro' ); ?></i></p>
            </dd>

        </dl>


    </div>
</div>