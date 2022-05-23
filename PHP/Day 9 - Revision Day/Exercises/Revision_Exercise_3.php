<?php

/*

	-- Exercise 1 :


	Write a function that:
	    - Takes two arguments as numbers.
		- Function should make sure the arguments are numbers
	    - Check which is the largest number.
		- RETURN the message (don't echo inside the function)

	The expected result is this:
		If one of the arguments is not a number, display : 
			'Expecting numbers !!!';
		Else : 
		    The first number is larger (if the first number is larger than the second number)
	    	The first number is smaller (if the first number is smaller than the second number)
		    The two numbers are identical (if the two numbers are equal)

*/ ?>

<h3>Exercise 1 : </h3>

<?php
function BiggerNumber($a, $b)
{
	if (!is_string($a) & !is_string($b)) {
		if ($a > $b) {
			return  'The bigger number is ' . $a;
		} elseif ($a != $b) {
			return  'The bigger number is ' . $b;
		}
		return  'Thoses are equals';
	}
	echo 'Thoses are not numbers, idiot. I want NUMBEEEEERS!';
}

echo BiggerNumber(9, 3);

?>

<?php
/*
	-- Exercise 2 :
	
	Based on this array : 

	$contact = array(
		0 => array(
			'name' => 'ricardo',
		    'phone' => '036487487',
		    'email' => 'ricard@gmail.com'
		),
		1 => array(
			'name' => 'emmanuel',
		    'phone' => '03644287487',
		    'email' => 'manu@gmail.com'
		),
		2 => array(
			'name' => 'john',
		    'phone' => '036492377',
		    'email' => 'john@gmail.com'
		)
	);


	Write a PHP script that displays the mail and phone next to username (for each user)
	Output should looks like this :

		Ricardo informations
			Phone : 036487487
			Mail : ricard@gmail.com

		Emmanuel informations
			Phone : 03644287487
			Mail : manu@gmail.com


*/ ?>

<h3>Exercise 2</h3>

<?php

$contacts = array(
	0 => array(
		'name' => 'ricardo',
		'phone' => '036487487',
		'email' => 'ricard@gmail.com'
	),
	1 => array(
		'name' => 'emmanuel',
		'phone' => '03644287487',
		'email' => 'manu@gmail.com'
	),
	2 => array(
		'name' => 'john',
		'phone' => '036492377',
		'email' => 'john@gmail.com'
	)
);

?>

<?php foreach ($contacts as $contact => $contact_value) : ?>

	<div>
		<p> <strong> <?= $contact_value['name'] ?></strong> informations</p>
		<p>Phone: <?= $contact_value['phone'] ?></p>
		<p>Email: <?= $contact_value['email'] ?></p>
	</div>


<?php endforeach; ?>





<?php
/*
	-- Exercise 3 :
	
	Based on Exercise 2

	Create a function that :
		- Expect a name(string) as argument
		- Look in the array if you find a contact matching the name
		- If yes, display informations about it
		- If no, display a message saying 'No results matching your search'


*/ ?>

<h3>Exercise 3</h3>

<?php


function FindContact($a)
{
	$contacts = array(
		0 => array(
			'name' => 'ricardo',
			'phone' => '036487487',
			'email' => 'ricard@gmail.com'
		),
		1 => array(
			'name' => 'emmanuel',
			'phone' => '03644287487',
			'email' => 'manu@gmail.com'
		),
		2 => array(
			'name' => 'john',
			'phone' => '036492377',
			'email' => 'john@gmail.com'
		)
	);

	$search = false;

	foreach ($contacts as $c) {
		if (!is_string($a)) {
			return "This is not a word or doesn't exist, bruh";
		} elseif (in_array($a, $c, true)) {
			if ($c['name'] == $a) {
				$search = $c;
				break;
			}
		}
	}

	if ($search == false)
		echo 'No results';
	else {
		foreach ($search as $key => $value) {
			echo $key . ' = ' . $value . '<br>';
		}
	}
}

echo FindContact('ricardo');

?>