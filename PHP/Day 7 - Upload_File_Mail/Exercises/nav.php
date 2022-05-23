<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../Exercises/css/nav.css" rel="stylesheet">
</head>

<body>
    <?php if (isset($_POST['logoutBtn'])) {

        setcookie("login", "", time()  - 3600);
        unset($_COOKIE['login']);
        header("location:../Exercises/Login_Exercise.php");
    }
    ?>

    <?php if (!isset($_COOKIE['login']) || isset($_POST['logoutBtn'])) : ?>
        <div id="nav">
            <ul>
                <li>
                    <a href="homepage.php">homepage</a>
                </li>
                <li>
                    <a href="Upload_File_Exercise.php">register</a>
                </li>
                <li>
                    <a href="Login_Exercise.php">login</a>
                </li>


            </ul>

        </div>



    <?php else : ?>

        <div id="nav">
            <ul>
                <li>
                    <a href="homepage.php">homepage</a>
                </li>

                <li>
                    <form action="" method="POST">
                        <label for="logoutBtn"> Logout</label>
                        <input id="logoutBtn" type="submit" name="logoutBtn" value="Logout" hidden>
                    </form>

                </li>
            </ul>

        </div>

    <?php endif; ?>



</body>

</html>