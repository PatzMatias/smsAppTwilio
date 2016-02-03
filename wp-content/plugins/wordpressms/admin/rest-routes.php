<?php

add_action( 'rest_api_init', 'api_hooks' );
function api_hooks() {
    $namespace = 'SMS';

    register_rest_route( $namespace, '/send/', array(
        'methods' => 'GET',
        'callback' => 'wpsms_send',
    ) );

}

function wpsms_send( WP_REST_Request $request ){

	$success = array("success"=>"true");
	$response = new WP_REST_Response( $success );
	$response->header( 'Access-Control-Allow-Origin', apply_filters( 'wpsms_access_control_allow_origin', '*' ) );

	return $response;
}