<?php

add_action( 'rest_api_init', 'api_hooks' );
function api_hooks() {
    $namespace = 'SMS';
	global $account_sid;
    global $auth_token;
    global $twilioNum;

    $account_sid = get_option('accountSID');
	$auth_token = get_option('authToken');
	$twilioNum = get_option('phoneNumber');

    register_rest_route( $namespace, '/send/', array(
        'methods' => 'GET',
        'callback' => 'wpsms_send',
    ) );

    register_rest_route( $namespace,'/list/', array(
    	'methods' => 'GET',
    	'callback' => 'wpsms_list'
    ));
}

function wpsms_send( WP_REST_Request $request ){
	global $account_sid;
    global $auth_token;
    global $twilioNum;
    
	$to = (isset($_GET['to'])) ? $_GET['to'] : false;
	$content = (isset($_GET['content'])) ? $_GET['content'] : false;
	$user_msgs;

	try {

        $client = new Services_Twilio($account_sid, $auth_token);

        $message = $client->account->messages->sendMessage(
		  $twilioNum, // From a Twilio number in your account
		  $to, // Text any number
		  $content
		);

        $user_msgs = array("delivery_status"=>"Message sent successfully to $to.");

    } catch (Exception $ex) {

       	$user_msgs = array("delivery_status" =>'ERROR sending to '. $to . ': ' . $ex->getMessage());

    }

	$response = new WP_REST_Response($user_msgs);
	$response->header( 'Access-Control-Allow-Origin', apply_filters( 'wpsms_access_control_allow_origin', '*' ) );
	return $response;
}

function wpsms_list(WP_REST_Request $request){
	$list_sms = array();
	$item = array();
	global $account_sid;
	global $auth_token;
	try {
		$client = new Services_Twilio($account_sid, $auth_token);
		foreach ($client->account->messages as $message) {
			$from = $message->from;
			$to = $message->to;
			$body = $message->body;
			$date_sent = $message->date_sent;
			array_push($item, array("from"=>$from,"to"=>$to,"body"=>$body,"date_sent"=>$date_sent));
		}
		$list_sms = array_merge($list_sms,array("list"=>$item));
		$response = new WP_REST_Response($list_sms);
		$response->header( 'Access-Control-Allow-Origin', apply_filters( 'wpsms_access_control_allow_origin', '*' ) );
		return $response;
	} catch (Exception $ex) {
		$user_msgs = array("data" =>'ERROR:' . $ex->getMessage());
		$response = new WP_REST_Response($user_msgs);
		$response->header( 'Access-Control-Allow-Origin', apply_filters( 'wpsms_access_control_allow_origin', '*' ) );
	}
	
}