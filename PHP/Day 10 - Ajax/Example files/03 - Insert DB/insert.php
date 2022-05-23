<?php

// Validations
if (empty($_POST['name']))
    echo 'Name is mandatory !';
else {
    $name = trim($_POST['name']);
    $bio = trim($_POST['bio']);
    $gender = trim($_POST['gender']);
    $date_of_birth = $_POST['date_of_birth'];

    // 1. Connect to the D.B.
    $conn = mysqli_connect('localhost', 'root', '', 'spotify');

    $query = "INSERT INTO artists(name, bio, gender, date_of_birth)
    VALUES('$name', '$bio', '$gender', '$date_of_birth')";

    // 3. Executing the query (send query to DB)
    $result = mysqli_query($conn, $query);

    // When insert/update/delete, it returns true or false
    if ($result)
        echo 'Successfully inserted in the DB!';
    else
        echo 'Problem inserting into the DB.';
}
