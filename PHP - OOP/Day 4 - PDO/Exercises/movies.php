<?php

require_once 'Class/Movie.php';

// Connect to the DB
$dsn = 'mysql:host=localhost;dbname=movie_db';
$pdo = new PDO($dsn, 'root', '');

$results = $pdo->query('SELECT * FROM movies a 
INNER JOIN directors b ON a.director_id = b.id');
$movies = $results->fetchAll(PDO::FETCH_CLASS, 'Movie');

foreach ($movies as $movie) {
    echo $movie->__tostring();
    echo '<hr>';
}
