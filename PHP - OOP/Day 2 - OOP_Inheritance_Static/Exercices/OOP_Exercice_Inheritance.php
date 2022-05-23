<?php

/*
- Part 1 : 
An animal is represented by a number of legs, a color, a gender and a name.
A dog is able to bark.
A cat is able to meow.

	-> Create the matching classes
*/
require_once 'Class/Animal.php';
require_once 'Class/Dog.php';
require_once 'Class/Cat.php';
require_once 'Class/Human.php';
require_once 'Class/Robot.php';

echo 'PART1 <br><hr>';

$newAnimal = new Animal("Lou", 4, 'brown', 'male');
echo $newAnimal;

$doggo = new Dog('Suzy', 4, 'brown', 'female');
echo $doggo;

$douglas = new Cat('Douglas', 3, 'black', 'male');
echo $douglas;

$doggo->Bark('Woof <br>');
$douglas->Meow('Meow, je suis un chaat');



/*
- Part 2 :

A human being is a magical creature that does not belong to the animal kingdom but is represented by a name, a hair color and a gender.

A robot is a mechanical creature that is defined by an identifier and a color.

	-> Create the matching classes
*/

echo '<hr> PART2 <br><hr>';

$newHuman = new Human('Paul', 'blond', 'male');
$newRobot = new Robot('2B', 'white');

echo $newHuman;
echo $newRobot;

/*
- Part 3 :

Human and robot can work, create a 'work()' method (just display some stuff).
*/
echo '<hr> PART3 <br><hr>';

$newHuman->Work('I WORK <br>');
$newRobot->Work();

/*
- Part 4 : 

Human can talk.

	-> Change your code to match

*/
echo '<hr> PART4 <br><hr>';

$newHuman->Talk('Im waaaalking heeere <br>');
$newRobot->NotTalk();
