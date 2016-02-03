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

get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-5">
			<h2>Send an SMS</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-5">
			<form name="sendSms" method="GET">
				<div class="form-group">
					<label for="to">To: </label>
					<input class="form-control" type="text" name="to" placeholder="Number">
				</div>
				<div class="form-group">
					<label for="message">Message: </label>
					<textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary pull-right" type="submit">Send</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
get_footer();
