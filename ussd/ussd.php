<?php
header("Content-type:text/plane");

$phone_number = $_POST['phoneNumber'];

$textFromUser = $_POST['text'];

$sessionID = $_POST['sessionId'];

$serviceCode = $_POST['serviceCode'];

$inputArray = explode("*", $textFromUser);

var_dump($inputArray);

if (count($inputArray) == 0) {

	$response = "CON Welcome to the Climate (U) Limited";

	$response .= "\n 1. Register";

	$response .= "\n 2. Add a tree";

	echo $response;
	 
}





 






// Welcome message 

// Choose an option 

//   1. Register 
//   2. Add a tree 
//   3. Council 

// 1.  WHat is your name?
//     send them sms that they have registered 

// 2.  Check id they have registered 
//     Enter number of of trees 
//      Send a thank you message




