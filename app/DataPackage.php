<?php

class DataPackage {

	public $name;
	
	public $email;
	
	function __construct($name, $email) {
		$this->name 	= $name;
		$this->email 	= $email;
	}
}

?>