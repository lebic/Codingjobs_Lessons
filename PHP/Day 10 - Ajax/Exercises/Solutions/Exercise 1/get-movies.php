<?php

$conn = mysqli_connect('localhost', 'root', '', 'movie_db');
$results = mysqli_query($conn, 'SELECT * FROM movies');
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
mysqli_close($conn);

?>

<?php foreach ($movies as $movie) : ?>

    <img src="<?= $movie['poster']; ?>" width="200px">

    <p>
        <strong>Title :</strong>
        <a href="movie.php?id=<?= $movie['id']; ?>">
            <?= $movie['title']; ?>
        </a>

    </p>

    <p>
        <strong>Views :</strong>
        <?= $movie['views']; ?>
    </p>
    <hr>
<?php endforeach; ?>