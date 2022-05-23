<?php

/*

Abstraction ! 

Abstraction is used when the parent (inheritance) should not be instantiate.
Use it when you want to implement 'rules' for the children.

An abstract class is meant to be extended by a class.

The structure of the class is still the same as a regular one, you juste add the keyword 'abstract'.

Abtract:
1. An Abstract class can contain regular methods (not abstract)
2. A class can be abstract without any abstract method.
3. If a class contain one or more abstract methods, it must be an abstract class.
4. Used to provide a template for potential future inherited

Interface:
1 Use an interface whe a role must be deifned for other classes as well, regardless of the inheritance of these classes.
2. You can't intantiate an interface and create an object
3. Interface can't contain concrete methods
4. A class can implement multiple interfaces

*/

abstract class Shape
{
    protected $length;

    // I have to implement this method in the children because it's abstract
    public abstract function calculateSurface();

    public function regular_method()
    {
        echo 'Do anything you want, its a regular method';
    }
}

// This will not work : 
// $myShape = new Shape();

class Circle extends Shape
{
    public function calculateSurface()
    {
        echo 'Surface of the circle';
    }
}

$myCircle = new Circle();
$myCircle->calculateSurface();
$myCircle->regular_method();

print_r($myCircle);
