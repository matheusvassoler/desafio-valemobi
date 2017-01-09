<?php

require_once 'ger/Models/Merchandise.php';

//Store all merchandise in the variable
$allMerchandise = Merchandise::showAllMerchandise();

//Filter the submit button
$submit = filter_input(INPUT_POST, "register", FILTER_SANITIZE_MAGIC_QUOTES);

//Check if exist a registration request
if(isset($submit)) {

	//Filter all fields from register
	$id 			 = filter_input(INPUT_POST, "code", FILTER_SANITIZE_MAGIC_QUOTES);
	$merchandiseType = filter_input(INPUT_POST, "merchandiseType", FILTER_SANITIZE_MAGIC_QUOTES);
	$name 			 = filter_input(INPUT_POST, "name", FILTER_SANITIZE_MAGIC_QUOTES);
	$quantity		 = filter_input(INPUT_POST, "quantity", FILTER_SANITIZE_MAGIC_QUOTES);
	$price 			 = filter_input(INPUT_POST, "price", FILTER_SANITIZE_MAGIC_QUOTES);
	$businessType 	 = filter_input(INPUT_POST, "businessType", FILTER_SANITIZE_MAGIC_QUOTES);

	//Create the object 
	$merchandise = new Merchandise;
	$merchandise->setId($id);
	$merchandise->setMerchandiseType($merchandiseType);
	$merchandise->setName($name);
	$merchandise->setQuantity($quantity);
	$merchandise->setPrice($price);
	$merchandise->setBusinessType($businessType);

	//Verify the execution of the method addMerchandise
	if($merchandise->addMerchandise()) {
		header("Location: merchandise-table.php");
	} else {
		echo "ERRO!";
	}

}
