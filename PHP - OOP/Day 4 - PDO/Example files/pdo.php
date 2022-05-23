<?php

/*

PDO - PHP Data Object

PDO is an abstraction layer to query/access the database.
It can handle around 12 different types of DB.

PDO is using OOP.

Using PDO, we have to use a DSN to connect.
A DSN summarize the arguments to connect.

*/

// Connect to the DB
$dsn = 'mysql:host=localhost;dbname=movie_db';
$pdo = new PDO($dsn, 'root', '');

// Execute a query 
$deleteMovie = 'DELETE FROM movies WHERE id >= 20';
$res = $pdo->exec($deleteMovie);
// exec() only return the number of lines that are affected

echo '<pre>';
var_dump($res);
echo '</pre>';


// Retrieve some movies
$results = $pdo->query('SELECT * FROM movies');
// query() will retrieve a set of records that needs to be fetched

$movies = $results->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($movies);
// echo '</pre>';
// $movie = $results->fetch(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($movie);
// echo '</pre>';


/*

Prepared statements

Pros : 
    - Safety
    - Better performance
    - Usefull when insert multiple records

*/

// ASSUME/IMAGINE THERE IS A FORM :
$email = $_POST['email'];
$password = $_POST['password'];

// Use question mark instead of the variable/value
$query = 'SELECT *
FROM users
WHERE email = ?
AND password = ?';

$prep = $pdo->prepare($query);
// $prep->bindValue('?', $email);
// $prep->bindValue('?', $password);

// Execute and fetch
$prep->execute([':mail' => $email, ':password' => $password]);
$myUser = $prep->fetch(PDO::FETCH_ASSOC);

// echo 'Id : ' . $myUser['id'];
// echo 'Username : ' . $myUser['username'];
// echo 'Mail : ' . $myUser['mail'];


// Insert a movie
$prep = $pdo->prepare('INSERT INTO movies(title) VALUES(?)');

$movies = array(
    'Jurassic Park',
    'John Wick',
    'Titanic'
);



$title = 'Jurassic park';
$prep->bindParam(1, $title);
$prep->execute();

// If title changes, you dont have to bind again the variable
$title = 'John Wick';
$prep->execute();

$title = 'Titanic';
$prep->execute();


// If you have a list : 
$title = '';
$prep->bindParam(1, $title);

foreach ($movies as $movie) {
    $title = $movie['title'];
    $prep->execute();
}
