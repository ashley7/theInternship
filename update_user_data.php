<?php
require('php_mysql.php');

$names = $_POST['name_of_person'];

$phone = $_POST['phone_number_of_person'];

$user_id = $_POST['user_id'];

$check = $connection->query("UPDATE users SET NAME= '$names', PHONE_NUMBER = '$phone' WHERE ID = '$user_id' ");

if($check)
	header("Location:user_form.php");
else
	echo $connection->error;

  