<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Exercise_1</title>

    <style>
        p {
            font-family: 'inter', sans-serif;
            text-transform: uppercase;
            filter: brightness(5);
        }

        .ValidText {

            color: green;
        }

        .InvalidText {
            color: red;
        }
    </style>
</head>

<body>



    <?php

    /* 
-- Exercise 1 :
	
	1.1 : 
	Create a new page with a basic connection form with email and password input.
	1.2 :
	Get the click of the button.
	1.3 :
	Check if the mail contains the '@' symbol. 
	If yes, display 'valid email';
	If no, display 'invalid email';
	To do this you have to check for "str_contains" function on Google and try it !
	1.4 :
	When the user validates the form: display a message in red if invalid, show in green if valid.

-- Exercise 2 :
	
	Create an HTML form with one input (date picker) and a 'submit' button.
	When the 'submit' button is clicked, display the difference (in timestamp) between the date of today and the date in the input.
	Do not worry about what's in the input once the button is clicked.
*/

    if ((isset($_POST["submitBtn"])) && (!empty($_POST['email']))) {

        if (str_contains($_POST['email'], '@')) {
            echo '<p class="ValidText">Valid email</p>';
        } else
            echo '<p class="InvalidText">Invalid email</p>';
    }

    ?>

    <form action="" method="POST">
        <input type="text" name="email" placeholder="Give me your email">
        <input type="password" name="password" placeholder="Give me your password">
        <input type="submit" name="submitBtn" value="Send">
    </form> <br>

    <form action="" method="GET">
        <input type="date" name="datepicker">
        <input type="submit" name="submitdateBtn" value="Send">
    </form>

    <?php

    $timeStampForm = strtotime($_GET['datepicker']);
    $timeStampNow = strtotime('now');

    if (isset($_GET['submitdateBtn'])) {
        $differenceTimestamp = ($timeStampForm) - ($timeStampNow);
    }

    echo 'Difference of timestamps between now and your date =' . $differenceTimestamp;















    ?>


</body>

</html>