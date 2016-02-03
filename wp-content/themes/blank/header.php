<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blank
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<?php
	if ( is_admin_bar_showing() ) :
?>
	<style>
		.wrapper .navbar-fixed-top{
			margin-top: 32px;
		}
	</style>
<?php
	endif;
?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#actionMenu" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	       		<span class="icon-bar"></span>
			</button>
	     	 <a class="navbar-brand" href="/">TwilioSMS</a>
	    </div>
		<div class="collapse navbar-collapse" id="actionMenu">
			<ul class="nav navbar-nav">
				<li class="<?php if(is_page('send-sms')) echo 'active';?>"><a href="<?php if($_SERVER['SERVER_NAME'] == '54.201.36.22') echo '/twilioSms'; ?>/send-sms">Send SMS</a></li>
				<li class="<?php if(is_page('list-sms')) echo 'active';?>"><a href="<?php if($_SERVER['SERVER_NAME'] == '54.201.36.22') echo '/twilioSms'; ?>/list-sms">List SMS</a></li>
			</ul>
		</div>
	</nav>
<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
