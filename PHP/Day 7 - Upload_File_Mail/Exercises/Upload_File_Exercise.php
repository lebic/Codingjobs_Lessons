<?php

/*
	Based on the 'Register_Exercise'.

	Edit the 'register.php' page.

	Now, the user can also upload a profile image.
	The image is not mandatory.

	For this you have to follow those steps : 
		1. On PHPMYADMIN, edit the 'user' table and add a new attribute : poster (if needed).
		2. Edit 'register.php' : Add the input to upload a file on the register form
		3. Create the PHP code that will save the file on the server ('uploads' folder)
		4. Grab the name of the image (only the name) and save it in the DB
		4.5 Make the name of the picture to be the username
		5. Display the profile image on the account page !
*/

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
</head>

<body>
	<?php include 'nav.php' ?>

	<h1>Register</h1>

	<?php
	//hiding errors because of the two include below
	error_reporting(0);
	ini_set('display_errors', 0);
	$userName = '';
	$email = '';
	$errors = array();

	// Make sure I clicked on the submit btn
	if (!empty($_POST)) {


		$userName = htmlspecialchars(trim($_POST['username']));
		$email = htmlspecialchars(trim($_POST['email']));
		$password = $_POST['password'];



		// Username : mandatory
		if (empty($userName))
			$errors['username'] = 'Username is mandatory.';

		if (empty($email))
			$errors['email'] = 'Email is mandatory.';
		else if (!strpos($email, '@'))
			$errors['email'] = 'Email is not valid.';


		if (empty($password))
			$errors['password'] = 'Password is mandatory.';
		else if ($password != $_POST['cPassword'])
			$errors['password'] = 'Passwords are not matching.';


		// Inserts only if NO errors
		if (count($errors) == 0) {
			// 1. Connect to the D.B.
			$conn = mysqli_connect('localhost', 'root', '', 'users_db');


			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);


			if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) {
				echo 'Error during upload';
				die();
			}

			//extension of file
			$extFoundInArray = array_search($_FILES['myFile']['type'], array(
				'jpg' => 'image/jpeg',
				'png' => 'image/png',
				'gif' => 'image/gif'
			));

			if ($extFoundInArray == false) {
				echo 'File must be an image !';
				die();
			} else {
				$fileName = substr($_FILES['myFile']['name'], 0, strpos($_FILES['myFile']['name'], '.'));
				$nbFile = 0;

				do {
					$destinationPath = 'images/' . $userName . "-" . $nbFile . "." . $extFoundInArray;
					$nbFile++;
				} while (file_exists($destinationPath));

				// move/save permanently the file
				if (move_uploaded_file($_FILES['myFile']['tmp_name'], $destinationPath)) {

					$query = "INSERT INTO users(username, email, password, picture)
           			 VALUES('$userName', '$email', '$hashedPassword','$destinationPath')";
					$result = mysqli_query($conn, $query);
					if ($result) {
						echo 'Successfully inserted in the DB!';
					} else {
						echo 'Problem inserting into the DB.';
						die();
					}
				} else
					echo 'Problem inserting into the DB.';
				mysqli_close($conn);
			}
		}
	} else error_reporting(E_ALL);
	ini_set('display_errors', 1);

	?>

	<form action="" method="POST" enctype="multipart/form-data">


		<input type="file" name="myFile"> <br>
		<input type="text" name="username" placeholder="Username">
		<?php if (isset($errors['username'])) echo $errors['username']; ?>
		<br>

		<input type="text" name="email" placeholder="Email">
		<?php if (isset($errors['email'])) echo $errors['email']; ?><br>

		<input type="password" name="password" placeholder="Password">
		<?php if (isset($errors['password'])) echo $errors['password']; ?><br>

		<input type="password" name="cPassword" placeholder="Confirm Password"><br>
		<input type="submit" name="registerBtn" value="Register">
	</form>

</body>

</html>