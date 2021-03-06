<?php

// WORKING WITH DATABASE 

// 1. Connect to the D.B.

$conn = mysqli_connect('localhost', 'root', '', 'library');
$books = array();

// True if you are connected, false if not

if ($conn) {
    echo 'Connected ! ' . '<br>';

    //2. Prepare the query
    $query = 'SELECT * FROM books';

    //3. Executing the query (send query to DB)
    $results = mysqli_query($conn, $query);

    // I retrieved results but I need to fetch before using them
    // 4. Fetch the results as an associative array
    $books = mysqli_fetch_all($results, MYSQLI_ASSOC);


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