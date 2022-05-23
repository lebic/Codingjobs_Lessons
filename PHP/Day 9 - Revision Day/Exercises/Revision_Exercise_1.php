<?php

/*
	1. Display the type of each variable at the end of the script (using only one function)
	2. Display the type AND the value of each variable (using only one function)
*/
$x = 5;
$y = "1";
$z = true;
$n = 2.5;
$f = $x + $y;
$k = $n * $y;

$values = array($x, $y, $z, $n, $z, $f, $k);


echo '<hr>' . 'EX1-2' . '<br>';


foreach ($values as $value) {
	echo gettype($value) . '<br>';
}
foreach ($values as $value) {
	echo print_r($value) . '<br>';
}


/*
	Show the date (in a nice format) for :
		- Today
		- Tomorrow
		- The same date than today one month later
*/
echo '<hr>' . 'EX2' . '<br>';

echo date('D,d,M,Y,H:i:s') . '<br>';
$tomorrow = date('D,d,M,Y,H:i:s', strtotime('tomorrow'));
echo $tomorrow . '<br>';

$futureDate = date('D,d,M,Y,H:i:s', strtotime('+1 year'));
echo $futureDate . '<br>';

/*
	Create an array with the numbers from 1 to 100 : Create it dynamically using a loop.
	Once it has been created, display it in a HTML list (ul/li)

	Use one loop to create the array.
	Use a second loop to display it.
*/
echo '<hr>' . '<br>' . 'EX3' . '<br>';
$nb = array();

for ($i = 0; $i < 101; $i++) {
	array_push($nb, $i);
};

?>

<table>
	<tr>
		<td>KEYS </td>
		<td>VALUES </td>

	</tr>

	<tr>
		<td>
			<?php
			foreach ($nb as $key => $values) : ?>

				<?= $key ?>

			<?php endforeach; ?>
		</td>
		<td>
			<?php
			foreach ($nb as $key => $values) : ?>

				<?= $values ?>

			<?php endforeach; ?></td>
	</tr>


</table>



<?php
/*
	Practice query using the moviedb :
	1. Connect to DB and choose the moviedb
	2. Go to SQL tab and run a query to get all movies by George Lucas
	3. Display the movies in a HTML <table>
		You should display title, views, the poster and the name of the director.
*/


echo '<hr>' . '<br>' . 'EX4' . '<br>';







// 1. Connect to the D.B.
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');
$movies = array();

// True if you connected, false if not
if ($conn) {
	echo 'Connected ! ';

	// 2. Prepare the query
	$query = 'SELECT title,views,poster,directors.name FROM movies INNER JOIN directors ON directors.id = movies.director_id WHERE directors.name LIKE "%George Lucas%"';

	// 3. Executing the query (send query to DB)
	$results = mysqli_query($conn, $query);

	// I retrieved results but I need to fetch before using them
	// 4. Fetch the results as an associative array
	$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
	echo 'Problem with connection !';
}

// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<?php foreach ($movies as $movie) : ?>
	<div>
		<p>
			<strong>Title :</strong>
			<?= $movie["title"] ?>
		</p>

		<p>
			<strong> Views :</strong>
			<?= $movie["views"] ?>
		</p>

		<p>
			<?= '<img src="' . $movie["poster"] . '" width="150vh" >' ?>
		</p>

		<p>
			<strong> Name of director :</strong>
			<?= $movie["name"] ?>
		</p>
	</div>



<?php endforeach; ?>

<body>
	<div>

	</div>
</body>

</html>