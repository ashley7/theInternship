<?php
header("Content-type:text/plane");

$phone_number = $_POST['phoneNumber'];

$textFromUser = $_POST['text'];

$sessionID = $_POST['sessionId'];

$serviceCode = $_POST['serviceCode'];

if(empty($textFromUser)){

	$textFromUser = "0";

}else{

	$textFromUser = "0*".$textFromUser;

}

$inputArray = explode("*", $textFromUser);

$level = count($inputArray);

switch ($level) {

	case 1:

		$response = "CON Welcome to the Climate (U) Limited";

	    $response .= "\n 1. Register";

	    $response .= "\n 2. Add a tree";

	    echo $response;

		break;

	case 2:		 

		echo "CON At index 0 = ".$inputArray[0]."\n Index 1 = ".$inputArray[1];
		 
		break;

	case 3:


	 
		break;
	
	default:

		echo"The option selected is not valid";

		break;
}


 
if ($level == 0) {

	
	 
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




