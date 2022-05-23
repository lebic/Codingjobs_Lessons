<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        form input {
            margin-top: 1vh;
        }
    </style>

    <?php
    include 'header.php';
    ?>




    <form action="" method="$_POST">
        <h3> sign-in</h3>
        <input type="text" name="firstname" placeholder="Give me your first name">
        <input type="text" name="lastname" placeholder="Give me your last name">
        <input type="email" name="email" placeholder="Give me your email">
        <input type="password" name="password" placeholder="Give me your password">
        <input type="submit" name="submitBtn" value="Send">

    </form>

    <?php
    include_once 'footer.php';
    ?>
</body>

</html>