<?php



// EX1
/*
if (isset($_COOKIE['viewed'])) {
    $lastVisit = $_COOKIE['viewed'];
    echo "Welcome back! Last visit was" . $lastVisit;
} else
    echo "Oh it is your first time here? Hello my friend! ";

*/



//EX2

//Check if my cookie 'count' exist

//Btn reset
if (isset($_POST['resetBtn'])) {
    setcookie('count', 0, time() - 3600);
    unset($_COOKIE['count']);
}

if (!isset($_COOKIE['count'])) {
    echo "Welcome! This is the first time you have viewed this page.";
    setcookie('count', 1);
    setcookie('first_visit', time());
} else {
    setcookie('count', $_COOKIE['count'] + 1);

    echo "You have viewed this page " . $_COOKIE['count'] . " times.";
    echo "Your first visit on this website was :" . date('d/m/y/h:i:s', $_COOKIE['first_visit']);
}



?>
<form action="" method="post">
    <input type="submit" value="Reset" name="resetBtn" id="resetBtn">
</form>