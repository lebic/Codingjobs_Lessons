<?php

// WORKING WITH DATABASE 

// 1. Connect to the D.B.

$conn = mysqli_connect('localhost', 'root', '', 'library');
$books = array();

// True if you are connected, false if not

if ($conn) {
    echo 'Connected ! ' . '<br>';

    //2. Prepare the query
    $query = 'INSERT INTO books(title, price, date_of_release, sells, author_id)
    VALUES("Moby Dick",5,"1989-01-20",2000000,1) ';

    //3. Executing the query (send query to DB)
    $results = mysqli_query($conn, $query);


    // 4. When insert/update/delete, it returns true or false
    if ($results)
        echo 'Successfully inserted in the DB!';
    else
        echo 'Problem inserting into the DB!';


    //echo '<pre>';
    //var_dump($books);
    //echo '<pre>';


} else {
    echo 'Problem with connection!';
}

// Close the connection
mysqli_close($conn)
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
    <?php foreach ($books as $book) : ?>
        <p>
            <strong> Title:</strong>
            <!--Clearer way to echo a php echo-->
            <?= $book['title']; ?>
        </p>
        <hr>
    <?php endforeach; ?>
</body>

</html>