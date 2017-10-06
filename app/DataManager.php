<?php

include "DataPackage.php";

class DataManager {

	public $data;
	
	private $csvFilePath;
	
	function validateData() {
		$name 			= $_POST["name"];
		$email 			= $_POST["email"];
		$this->data 	= new DataPackage($name, $email);
	}
	
	function packData() {
		
	}
	
	function writeData() {
		
	}
}

$manager = new DataManager();
$manager->validateData();
echo $manager->data->name;

?>