<?php
class Sephiroth{

	function equipWeapon(Weapon $weapon){

		echo 'die cloud die';
	}
}

class Weapon {


}

class Masamune extends Weapon
{

}

class Murasame extends Weapon
{

}


//instanciate sephiroth class
$sephiroth = new Sephiroth;

//instanciate the weapon class
$weapon = new Weapon;

//Instantiate a Masamune class.
$masamune = new Masamune;

// Instantiate a Murasame class.
$murasame = new Murasame;

//calling equip weapon method
$sephiroth ->equipWeapon($weapon);


// Call the equipWeapon() method with masamune.
$sephiroth->equipWeapon($masamune);

// Call the equipWeapon() method with murasame.
$sephiroth->equipWeapon($murasame);

?>