<?php

/*

    Exercise :

    This exercise is based on the 'Register_Exercise'.

    In this exercise, you'll have to create the login process.

    - Step 1 :
        Create a 'login.php' file or grab the one from Session_Exercise_1
    
    - Step 2 :
        When the user log in, before saving email in session you must :
            - Check if the user email exists in the DB.
            - If it doesn't exists, display error message.
            - If it exists, check if password matches and display result message.
            Do not forget to use password_verify.

    */

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php include 'nav.php' ?>


    <h1>login</h1>

    <?php
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


        // Inserts only if NO errors,
        if (count($errors) == 0) {


            $email = trim($_POST['email']);
            $password = $_POST['password'];

            $conn = mysqli_connect('localhost', 'root', '', 'users_db');
            $query = "SELECT * FROM users WHERE email  ='$email' ";
            $result = mysqli_query($conn, $query);
            $user = mysqli_fetch_assoc($result);


            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            if ($user != null) {
                if (password_verify($password, $user['password'])) {
                    echo 'Welcome user!';
                    setcookie("login", $email . time() * 3600); //expire after 1hour
                    header("location:../Exercises/homepage.php");
                } else
                    echo 'Password is wrong';
            } else {
                echo 'Email not found. Try another email.';
            }
        } else {
            echo 'Problem into the DB.';
            die();
        }
        mysqli_close($conn);
    }


    ?>

    <form action="" method="POST" enctype="multipart/form-data">



        <input type="text" name="username" placeholder="Username">
        <?php if (isset($errors['username'])) echo $errors['username']; ?>
        <br>

        <input type="text" name="email" placeholder="Email">
        <?php if (isset($errors['email'])) echo $errors['email']; ?><br>

        <input type="password" name="password" placeholder="Password">
        <?php if (isset($errors['password'])) echo $errors['password']; ?><br>

        <input type="password" name="cPassword" placeholder="Confirm Password"><br>
        <input type="submit" name="loginBtn" value="Login">
    </form>

</body>

</html>