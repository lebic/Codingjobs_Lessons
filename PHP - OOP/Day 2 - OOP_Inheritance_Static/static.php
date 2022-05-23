<?php

/*

STATIC

A static method/property is not related to a specific object but to the class.

A static method/property can be accessible without creating an object. (you ask directly the class).

*/

class Sheep
{
    private $name;
    private $count;
    public static $countCloned;

    public function __construct($n)
    {
        $this->name = $n;
        //This keyword refers to the object
        $this->count += 1;

        // Self keyword refers to the class
        self::$countCloned += 1;
    }
}

//Create Sheeps;
$sheep1 = new Sheep('Paul');

echo '<pre>';
print_r($sheep1);
echo '<pre>';

$sheep2 = new Sheep('Baba');

echo '<pre>';
print_r($sheep2);
echo '<pre>';

$sheep3 = new Sheep('Bobo');

echo '<pre>';
print_r($sheep2);
echo '<pre>';

// Access static property
echo Sheep::$countCloned;
