<?php

/* an human is represented by name, an haircolor, a gender and an height.

Create the matching classs.
The name shoul not be editable after creation of the object.

Create two different object from this class.
Display the two objects properties using tostring.
*/

require_once 'Human.php';

$George = new Human("George", "Red", "Male", 178);
echo $George;

$Jeanne = new Human("Jeanne", "Blue", "Female", 167);
echo $Jeanne;
