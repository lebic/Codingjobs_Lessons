<?php

/*

INHERITANCE

Represent a relationship between classes.
It takes the form of a parent/child relationship.

Children will benefits the properties and methods of the parent.
The parent cannot benefit properties and methos of the children.

Diffrent children can inherit from the same parent.
A class can only inherit from one parent class.

The main purpose of inheritance is reusability.

*/

class Vehicule
{
    //Properties: (children can access)
    protected $nbWheel;
    protected $brand;
    //Children can't access it
    private $model;

    public function __construct($b, $m)
    {
        $this->brand = $b;
        $this->model = $m;
        $this->nbWheel = 4;
    }

    public function horn()
    {
        echo 'Tuut tuuut';
    }

    public function __toString()
    {
        return 'brand:' . $this->brand . '<br>
        model:' . $this->model . '<br>
        Wheel:' . $this->nbWheel . '<br> <hr>';
    }
}

class Car extends Vehicule
{
    private $nbDoors;
    public function __construct($b, $m)
    {
        // ask the parent construct
        parent::__construct($b, $m);
        $this->nbDoors = 4;
    }
    public function slam_the_door()
    {
        echo 'SLAM!';
    }
}

class MotorBike extends Vehicule
{
    public function __construct($b, $m)
    {
        // ask the parent construct
        parent::__construct($b, $m);
        $this->nbWheel = 2;
    }
}



$myVehicule = new Vehicule('BMW', 'm5');

echo $myVehicule;

// Even without anything in the Car object, it has all properties of the Vehicule Object

$audi = new Car('Audi', 'shitB1');
echo $audi;

$yamaha = new MotorBike('Yamaha', 'mt01');
echo '<pre>';
var_dump($yamaha);
echo '<pre>';
