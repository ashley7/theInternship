<?php
header("Content-type: text/plane");

$text = $_POST["text"];

$phone_number = $_POST["phoneNumber"];

$session = $_POST["sessionId"];

$serviceCode = $_POST["serviceCode"];

if(empty($text)){

	$response = "CON Welcome to the Climate change system";

	$response .= "\n1.Register as a member";
	$response .= "\n2.Add Tree";
	$response .= "\n3.Close";

	echo $response;	 

}




