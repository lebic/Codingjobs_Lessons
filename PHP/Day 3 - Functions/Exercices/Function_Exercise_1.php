<?php

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
- Exercise 1

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    "The first number is higher" (if the first number is higher than the second number)
    "The first number is smaller" (if the first number is smaller than the second number)
    "The two numbers are identical" (if the two numbers are equal)

*/

function comparator($a, $b)
{
	if ($a !== $b) {
		if ($a > $b) {

			echo 'The first number is higher ';
		} else echo 'The first number is smaller';
	} else echo 'The first number is equal ';
}

echo comparator(10, 10);




echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*

-- Exercice 2
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

function displayImg($src)
{
	echo '<img src="' . $src . '">';
}

displayImg("https://www.cuisineactuelle.fr/imgre/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fcac.2F2018.2F09.2F25.2F484d0a87-d3ba-4498-b3a9-37b9870bed34.2Ejpeg/400x400/quality/80/crop-from/center/potatoes-maison-aux-epices.jpeg");


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Copy the code from Michel supermarket exercise.
	    - Calculates the sum of Michel's expenses (already done)
	3.2
	Write a function that will:
	- Take an array as input
	- Calculate the sum of the expenses of the array
	- return the sum

*/

$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);

function Calculator($a)
{
	$total = 0;
	foreach ($a as $value) {
		$total += $value;
	}
	return $total;
}

echo Calculator($array);






echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

function multiply($a = 2, $b = 2)
{
	if (!empty($a)) {
		$total = 0;
		$b = 2;
		$total = $a * $b;
		return $total;
	}
	if (!empty($b)) {
		$total = 0;
		$a = 2;
		$total = $a * $b;
		return $total;
	}
}

echo multiply(10, 2) . '<br>';
echo multiply(4);



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/

function palindrome($word)
{
	$wordLenght = strlen($word) - 1;
	$reversedWord = '';

	for ($i = $wordLenght; $i > -1; $i--) {
		$reversedWord .= $word[$i];
	}

	if ($reversedWord === $word) {
		echo $word . ' is a palindrome';
	} else {
		echo $word . ' is not a palindrome';
	}
}

echo palindrome("kayak");

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*
-- Exercice 6

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.

*/

function primeNumber($num)
{

	for ($x = 2; $x <= $num / 2; $x++) {
		if ($num % $x === 0) {
			return $num . ' is a not prime number';
		} else {
			return $num . ' is a prime number';
		}
	}
}


echo primeNumber(13);



echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7 :
	Write a PHP function that return the reverse(mirror) of an array.
	You can use only one other variable (simple, no array).
	You can only use count() or strlen() function.
*/

$array = [20, 9, 100, -5];

function reverse($array)
{
	for ($i = 0; $i < count($array) / 2; $i++) {
		$c = $array[count($array) - $i - 1];
		$array[count($array) - $i - 1] = $array[$i];
		$array[$i] = $c;
	}

	return $array;
}

echo '<pre>';
var_dump(reverse($array));
echo '</pre>';
