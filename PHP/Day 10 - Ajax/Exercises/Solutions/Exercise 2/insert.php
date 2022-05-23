<?php

// Validations
$errors = array();

if (empty($_POST['title']))
    $errors['title'] = 'Title is mandatory !';

if (empty($_POST['director_id']))
    $errors['director_id'] = 'Director is mandatory !';

if (!empty($errors)) {
    // Display errors
    foreach ($errors as $errType => $errValue) {
        echo '<span class="error">' . $errType . ' : ' . $errValue . '</span><br>';
    }
} else {
    // Try to insert
    $title = trim($_POST['title']);
    $views = trim($_POST['views']);
    $director_id = trim($_POST['director_id']);
    $poster = trim($_POST['poster']);

    $conn = mysqli_connect('localhost', 'root', '', 'movie_db');
    $query = "INSERT INTO movies(title, views, director_id, poster)
    VALUES('$title', $views, $director_id, '$poster')";
    $result = mysqli_query($conn, $query);

    // Check if successfully inserted
    if ($result)
        echo '<p class="success">Successfully inserted in the DB!</p>';
    else
        echo '<p class="error">Problem inserting into the DB.</p>';
}
