<?php

/*
	Part 1 :
	Create a class 'CoffeeCup' with these properties :
		- quantity (cl)
		- brand (brand of coffee)
		- temperature
	All properties are private
	Create all getters and setters for this class.
	Use example :
	
*/
echo 'PART 1 <hr>';
require_once 'CoffeeCup.php';

$myCoffee = new CoffeeCup(25, 'Malongo', 65);
echo $myCoffee;


/*
	Part 2 :
	Create these methods :
		- sip : Accept one integer as parameter which match the quantity we want to drink (in cl).
		When calling this method, program will display 'Remain XX cl of coffee'
		Example :
		$myCoffee->sip(3);
		- refill : no arguments and just fill to maximum
		When calling this method, program will display 'Mug full again';
		Example :
		$myCoffee->refill();
*/
echo 'PART 2 <hr>';

echo $myCoffee->sip(16) . '<br>';

echo $myCoffee->refill() . '<br> <hr>';



/*
	Part 3 :
	Now we save the max. volume of the mug (cl) in the object.
	You need to add another properties $volume
	We define the volume of the mug when creating the object but can't edit later.
	Example :
	$myCoffee = new CoffeeCup(20); // Mug with 20 cl volume
	$otherCoffee = new CoffeeCup(33); // Another mug with 33 cl volume
*/
echo 'PART 3 <hr>';

$myCoffee = new CoffeeCup(20, 'Lapatino', 65);
$otherCoffee = new CoffeeCup(33, 'Latte', 65);

echo $otherCoffee;

echo $myCoffee->sip(5);
echo $myCoffee->sip(10);
echo $myCoffee;
echo $myCoffee->refill();
echo $myCoffee;



/*
	Part 4 : 
	Change the method 'refill' to make the fill automatic
*/
echo 'PART 4 <hr>';
echo $myCoffee;
echo $myCoffee->sip(10);
echo $myCoffee->refill();
echo $myCoffee;


/* 
	Part 5 :
	- Delete the setQuantity() method.
		We can no longer edit the quantity of the coffee.
		We can only fill ou sip the cup.
	- During the creation of the cup, make the quantity automatically define at the maximum possible (volume of the cup).
	- Delete the setBrand() method. You can't change the brand once the coffe is in the cup.
	- Change the constructor to also accept the brand of the cup as an argument.
	- Replace the setTemperature method by reHeat() and coolDown().
		Both of them will accept, as argument, the number of degree to add or remove to the temperature.
		Both of them will display the new temperature of the coffee.
	- Add the temperature as an argument in your constructor.
*/
echo 'PART 5 <hr>';

$myCoffee = new CoffeeCup(40, 'Papatino', 65);
echo $myCoffee;
echo $myCoffee->sip(31);
echo $myCoffee;
echo $myCoffee->refill();
echo $myCoffee;
echo $myCoffee->coolDown(40);
echo $myCoffee;
echo $myCoffee->reHeat(50);
echo $myCoffee;


/* 
	Step 6 :
	
	Edit the sip() method to make sure it's enough coffee left in the cup.
	If there is not enough coffee, define the quantity to 0
	Display also a message, example : "You sipe X cl, left Y cl of coffee" 
	Now we should be able to run this code :
	$myCoffee = new CoffeeCup(20, 'Malongo', 65); // 20 cl, brand Malongo, 65 °C
	while($myCoffee->getQuantity() > 0) { // While there is coffee in my cup
	    $quantityToSip = rand(1, 6);
	    $myCoffee->sip($quantityToSip);
	    $myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
	}
*/

echo 'PART 6 <hr>';

$myCoffee = new CoffeeCup(20, 'Malongo', 65);
while ($myCoffee->get_quantity() > 0) {
    // While there is coffee in my cup
    $quantityToSip = rand(1, 6);
    $myCoffee->sip($quantityToSip);
    $myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
}


/*
require_once 'Solutions/CoffeeCup.php';

$myCoffee = new CoffeeCup(20, 'Malongo', 65); // 20 cl, brand Malongo, 65 °C

while ($myCoffee->getQuantity() > 0) { // While there is coffee in my cup
    $quantityToSip = rand(1, 6);
    $myCoffee->sip($quantityToSip);
    $myCoffee->coolDown(1.5); // Cup loose 1.5 °C on each sip
}
*/