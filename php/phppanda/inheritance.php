<?php

class Panda
{
    // Properties
    var $coat = 'fluffy';
    var $colour;

    // Method
    function getCoat()
    {
        return $this->coat;
    }

    // Method
    function getColour()
    {
        return $this->colour;
    }
}

class GiantPanda extends Panda{
	// declare variable for Giant Panda
	var $coat = "less fluffy";

}
//instanciate the panda object
$giantpanda = new GiantPanda;

//output the inherited property as fluffy because it inherited the base or parent class
//echo $giantpanda->getCoat();

//output the inherited property as less fluffy because there is no inheritance
echo $giantpanda->getCoat();