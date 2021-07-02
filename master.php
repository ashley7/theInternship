<?php

 function computeYear($name_of_person,$year_of_birth)
{

	$current_year =  (int)date("Y");

	$ageToday = $current_year - $year_of_birth;

	return $name_of_person. " is ".$ageToday." years";
	 
}