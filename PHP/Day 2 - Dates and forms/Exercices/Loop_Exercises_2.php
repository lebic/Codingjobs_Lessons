<?php

/*
	- Exercise 1 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>1.03,"Tomato"=>2.3,"Oignon"=>1.85,"Red cabbage"=>0.85)
	    Write a script that will : 
	    1. Sort by value (try to look on google) and display the array
	    2. Sort by key in descending order and display the array
	    3. Use a loop to calculate the total of Michel spendings.

	*/


// sort($array);
$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);

asort($array);

echo '<pre>';
var_dump($array);
echo '</pre>';

//with "asort()" we are not loosing the name or the array


// EX1.3

$total = 0;

foreach ($array as $value) {
	$total += $value;
}
echo 'Total spendings : ' . $total . '<br>';



/*
	- Exercise 2 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 1 etc.

		Do it by using a for loop.
		Once it's done, try to do it also with the while loop.
	*/

$numbers = array();

for ($i = 0; $i < 21; $i++) {
	// numbers[$i]
	//$numbers[] = $i;
	array_push($numbers, $i);
};

echo '<pre>';
var_dump($numbers);
echo '</pre>';


$x = 0;
while ($x <= 10) {
	$numbers[] = $x;
	$x++;
}


/*
	-Exercise 3 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

$multiNumbers = array();
for ($i = 1; $i < 11; $i++) {
	$multiNumbers[] = $i * 2;
}

echo '<pre>';
var_dump($multiNumbers);
echo '</pre>';


/*-Exercise 4 :
		Create an array of random numbers.
		You can create it manually. For example $array = [5, 20, 6, -6, 100]

		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
		You have to use loop + variable

/*
		2. Find the position of the max/min also.
		*/

$array = [5, 20, 650, -6, 100];

$max = $array[0];
$min = $array[0];
$posMax = 0;
$posMin = 0;

foreach ($array as $key => $value) {


	if ($max < $value) {
		$max = $value;
		$posMax = $key;
	}
	if ($min > $value) {
		$min = $value;
		$posMin = $key;
	}
};

echo 'Biggest number is :' . $max . '<br>' . 'Position:' . $posMax . '<br>';

echo 'Lowest number is :' . $min . '<br>' . 'Position:' . $posMin . '<br>';




/*
		3. CHALLENGE (optional)
		You can only use 2 variables ($array and $i doesn't count).
		*/


$array = [5, 40, 50, 1000, 100];


$posMax = 0;
$posMin = 0;

foreach ($array as $key => $value) {


	if ($array[$posMax] < $value) {

		$posMax = $key;
	}
	if ($array[$posMin] > $value) {

		$posMin = $key;
	}
};

echo 'Biggest number is :' . $array[$posMax] . '<br>' . 'Position:' . $posMax . '<br>';

echo 'Lowest number is :' . $array[$posMin] . '<br>' . 'Position:' . $posMin . '<br>';
