<?php



$conn = mysqli_connect('localhost', 'root', '', 'movie_db');
$query = "SELECT id, name FROM directors";
$result = mysqli_query($conn, $query);
$directors = mysqli_fetch_all($result, MYSQLI_ASSOC)
?>

<?php foreach ($directors as $director) : ?>
    <option value="<?php $director['id'] ?> "> <?php $director['name'] ?> </option>


<?php endforeach; ?>