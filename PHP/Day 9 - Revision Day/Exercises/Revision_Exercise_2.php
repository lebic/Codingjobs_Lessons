<?php

/*
    -- Exercise 1 :
    
    Thanks to that array : 
    $array = array(
        'lastname' => 'simon',
        'firstname' => 'simon',
        'phone' => '+3526455748'
        'mail' => 'simon@simon.fr',
        'address' => '6 rue de la gare',
        'city' => 'Mondelange'
    );

    Using a loop, display the content of this array (keys and values)
*/

echo '<hr>' . 'EX1' . '<br>';

$array = array(
	'lastname' => 'simon',
	'firstname' => 'simon',
	'phone' => '+3526455748',
	'mail' => 'simon@simon.fr',
	'address' => '6 rue de la gare',
	'city' => 'Mondelange'
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php foreach ($array as $key => $value) : ?>
		<p><?= $key ?> => <?= $value ?> </p>
	<?php endforeach; ?>
</body>

</html>



<?php


/* -- Exercise :
1 :
Create a function 'multiplicationTable'
2 :
This function should have on argument $x
3:
The function should return the multiplication table of $x (from 1 to 20).
4 :
Create a form with one input.
When you validate this form, it should display the multiplication table of the number you entered (using the function).
You have to check if the value is correct (no float and no string, ONLY integer).
5 :
Display the multiplication table in a nice HTML format table style.
*/
echo '
<hr>' . 'EX2/1,2,3' . '<br>';
function multiplicationTable($x)
{
	$table = array();
	for ($i = 0; $i < 21; $i++) {
		$result = $i * $x;
		array_push($table, $result);
	}
	return print_r(array_values($table));
};
echo multiplicationTable(5);


echo '<hr>' . 'EX2/4,5' . '<br>';

if (isset($_GET['multiplyBtn'])) {
	echo multiplicationTable($_GET['number']);
} ?>






<form action="" method="GET">
	<input type="number" name="number" id="multiplyBtn">
	<input type="submit" name="multiplyBtn" value="Send">
</form>