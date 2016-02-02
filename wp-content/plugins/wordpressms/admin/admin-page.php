<?php
	function setup_theme_admin_menus() {
	    global $sms_settings_hook;
	    global $sms_twilio_hook;

	    $sms_settings_hook = add_menu_page('SMS Settings', 'SMS Settings', 'manage_options', 
	        'sms_settings', 'sms_settings_page');
	         
	    $sms_twilio_hook = add_submenu_page('sms_settings', 
	        'Twilio Credentials Settings', 'Twilio Credentials', 'manage_options', 
	        'twilio_creds', 'twilio_form'); 
	}

	function sms_settings_page(){
?>

	<div class="wrap">
		<h2>SMS Settings</h2>
	</div>
<?php
	}

	function twilio_form() {
		include_once(WPSMS_PATH . 'admin/display-twilio-form.php');
	}

	add_action("admin_menu", "setup_theme_admin_menus");
?>