<!DOCTYPE html>
<html>
<body>
<?php
	// Include the Twilio PHP library
	require '..\twilio-php-master\Services\Twilio.php';

	// Twilio REST API version
	$version = "2010-04-01";

	// Set our Account SID and AuthToken
	$sid = 'AC6ec38eec290d98eec8553e047397ba1c';
	$token = 'c20d0079e3589de4677ed9553d24f46b';
	
	// A phone number you have previously validated with Twilio
	$phonenumber = '+18058079069';
	
	// Instantiate a new Twilio Rest Client
	$client = new Services_Twilio($sid, $token, $version);

	try {
		// Initiate a new outbound call
		$call = $client->account->calls->create(
			'+15033510708', // The number of the phone initiating the call
			$phonenumber, // The number of the phone receiving call
			'https://raw.githubusercontent.com/jfhannel/TwilioApp/master/rest/handle_call.xml' // The URL Twilio will request when the call is answered
		);
		echo 'Started call: ' . $call->sid;
	} catch (Exception $e) {
		echo 'Error: ' . $e->getMessage();
	}
	?>
	</body>
	</html>
