<?php
header("Content-type:text/plane");

require('../AfricasTalkingGateway.php');

require('sql_connection.php');

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

	case 2:		// text = 0*1  OR  0*2 

		 if($inputArray[1]   ==  1) {//he wants to register// 

		 	echo "CON What is is your name?";



		 }elseif ($inputArray[1] == 2) {//he wants to add a tree

		 
		 }else{

		 	echo "END Invalid option";

		 }
		  
		break;

	case 3: // 0*1*Charles

	     if($inputArray[1]   ==  1) {//he wants to register// 

		 	$user_name = $inputArray[2];

		 	$saveUser = $sqliCon->query("INSERT INTO members(phone_number,name)VALUES('$phone_number','$user_name')");

		 	if($saveUser){

		 		$message = "Hello ".$user_name." Thank you for registering with Climate (U) ltd";		        
				$apikey     = "8ca31226367ab4abde28fc34a62a2ef852d0e730b66c02348c98ed7499ca087c";			 
				$gateway    = new AfricasTalkingGateway("sandbox", $apikey,"sandbox");

				$gateway->sendMessage($phone_number, $message); 

				echo "END Thank you for registering"; 

		 	}else{

		 		echo "END Failed to register ".$sqliCon->error;

		 	}





		 }elseif ($inputArray[1] == 2) {//he wants to add a tree

		 
		 }  

	 
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




