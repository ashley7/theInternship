<?php

require("master.php");

$persons = [

	'Charles' => 2000,
	'Thembo' => 2005,
];

foreach ($persons as $key => $value) {

	echo "<br>". computeYear($key,$value);
	 
} 
