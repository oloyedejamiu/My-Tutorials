<?php

class myName{
	//declare class variable 
	private $name ='oloyede';
	//declare class funtion 
	public function getName(){

		echo 'my name is = '. $this->name;
	}
}

//instanciate the class object
$name = new myName();

$name -> getName();

?>