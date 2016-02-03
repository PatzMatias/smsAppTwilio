<?php
/**
 * The template for displaying all send-sms page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blank
 */

get_header(); 
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<h2>List</h2>
		</div>
	</div>
</div>
<div class="container-fluid" id="listSms">
	<h4>Fetching Messages...</h4>
</div>

<?php
get_footer();
