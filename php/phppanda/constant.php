<?php
//demonstrating constants
//declaring a constant

define('PI', 3.142);

//output our contant
echo PI;

echo "<br />";

class Circle
{
    /**
     * The value of PI.
     *
     * @var float
     */
    const PI = 3.14159265359;

    /**
     * Calculate the circumference of a circle from diameter.
     *
     * @param  mixed $diameter
     * @return mixed
     */
    public function circumference($diameter)
    {
        return $diameter * SELF::PI;
    }
}
// the constant pi can be assessed even before instantiation 
echo "<br />";
echo Circle::PI;
echo "<br />";
//instanciate the class
$result = new Circle;

//output 31.4159265359
echo $result->circumference(10);

?>