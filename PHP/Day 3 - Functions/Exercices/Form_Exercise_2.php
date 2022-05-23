<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Exercise_2</title>
</head>

<body>



    <?php


    /* -- Exercise : 
	2.1 (Already done in previous exercise) :
	Write a PHP script that gives the multiplication table of 2.
	Multiplication table from 1 to 10.
	2.2 :
	Edit this script to give the multiplication table of any number ($x for example) in a HTML table
	2.3 :
	Create a form with one input.
	When you validate this form, it should display the multiplication table of the number you entered.
	You have to check if the value is correct (numeric value).
	2.4 :
	Display the multiplication table in a nice HTML format table style.
*/


    if (!empty($_GET)) {
        $userNumber = $_GET['userNumber'];
        $multiTable = array();

        for ($i = 1; $i < 11; $i++) {
            $multiTable[$i] = $i * $userNumber;
        }
        echo '<ul>';
        foreach ($multiTable as $key => $value) {
            echo "<li>$key * $userNumber = $value</li>";
        }
        echo '</ul>';
    }

    ?>



    <form action="" method="$_GET">
        <input type="number" name="userNumber">
        <input type="submit" name="submitBtn" value="Multiply">
    </form>





</body>

</html>