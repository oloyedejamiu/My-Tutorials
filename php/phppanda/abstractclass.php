<?php

abstract class Animal{
	//declare awesomeness of animal
	private $awesome = true;

	public function isAwesome() {
		return $this->awesome;
	}
}


abstract class generalAnimal{
	abstract public function makeNoise();

}

class Dog extends generalAnimal{
	public function makeNoise(){
		echo 'woof';
	}
	}

$dog = new Dog;
//if we instanciate abstract class with $animal = new Animal;, a fatal error would be outputted
/*
Fatal error: Cannot instantiate abstract class Animal in C:\xampp\htdocs\tutorials\My-Tutorials\php\phppanda\abstractclass.php on line 14 */
//$animal = new Animal;




?>