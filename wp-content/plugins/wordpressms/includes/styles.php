<?php
	function admin_styles($hook) {
		global $sms_settings_hook;
	    global $sms_twilio_hook;

		if($hook == $sms_settings_hook || $hook == $sms_twilio_hook) {
			//Register plugin styles and scripts, enqueue these from the plugin options page.
			wp_register_style('bootstrap', WPSMS_URL . 'lib/bootstrap/css/bootstrap.min.css');
			wp_register_style('wpsms-css', WPSMS_URL . 'css/wpsms.css');
			wp_enqueue_style('bootstrap');
			wp_enqueue_style('wpsms-css');
		} else {
			return;
		}
    }
    if(is_admin()) add_action('admin_enqueue_scripts','admin_styles');
