<?php
	function admin_scripts($hook) {
		global $sms_settings_hook;
	    global $sms_twilio_hook;

		if($hook == $sms_settings_hook || $hook == $sms_twilio_hook) {
			//Register plugin styles and scripts, enqueue these from the plugin options page.
			wp_register_script('bootstrap-js', WPSMS_URL . 'lib/bootstrap/js/bootstrap.min.js');
			wp_enqueue_script('bootstrap-js');
		} else {
			return;
		}
    }
    if(is_admin()) add_action('admin_enqueue_scripts','admin_scripts');
