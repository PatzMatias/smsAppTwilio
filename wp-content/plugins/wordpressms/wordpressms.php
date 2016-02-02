<?php
/*
Plugin Name: WordpresSMS
Plugin URI:  http://patzmatias.github.io
Description: A messaging app in Wordpress
Version:     1.5
Author:      Patrick Matias
Author URI:  http://patzmatias.github.io
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: wordpresms
*/

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	} // Exit if accessed directly
	register_activation_hook( __FILE__, 'wpsms_activate' );
	function wpsms_activate() {
		flush_rewrite_rules();
	}
	if( !defined( 'WPSMS_PATH' ) ) {
		define( 'WPSMS_PATH', plugin_dir_path( __FILE__ ) );
	}

	if( !defined( 'WPSMS_URL') ){
		define('WPSMS_URL', plugin_dir_url( __FILE__ ));
	}


	require_once(WPSMS_PATH . 'lib/twilio-php/Services/Twilio.php');
	require_once(WPSMS_PATH . 'admin/admin-page.php');
	require_once(WPSMS_PATH . 'includes/scripts.php');
	require_once(WPSMS_PATH . 'includes/styles.php');
	require_once(WPSMS_PATH . 'admin/rest-routes.php');
?>