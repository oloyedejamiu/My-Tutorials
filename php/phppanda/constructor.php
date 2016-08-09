<?php

class Panda {
	var $name ;


	function __construct(){

		$name = $this->name;
	}

	function makenameLoud($name){
		return strtoupper($name);
	}
}
//instanciate panda object
$first = new Panda;

// setting the name property
$name = "oloyede jamiu";

//output name 
echo $first->makenameLoud($name);