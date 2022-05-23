<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Exercice_3</title>

    <style>
        .text-error {
            margin: 0%;
            padding: 0.2vh 0.2vh 0.2vh 0.2vh;
            font-size: 1.5vh;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            padding: 5vh;

            background-color: red;
            min-height: 40vh;
            max-height: fit-content;
            border-radius: 2vh;
            width: 20%;
        }

        h1 {
            font-family: 'inter', sans-serif;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;

        }

        input {
            margin: 1vh;
        }
    </style>
</head>

<body>






    <div class="container">
        <h1> SIGN-IN</h1>
        <form action="" method="POST">
            <?php

            $userInfo = array();

            if (isset($_POST["submitBtn"])) {

                $errors = false;

                if (empty($_POST['firstname'])) {
                    $errors = true;
                    echo '<p class="text-error"> *first name is mandatory </p><br>';
                } else
                    array_push($userInfo, $_POST["firstname"]);



                if (empty($_POST['lastname'])) {
                    $errors = true;
                    echo '<p class="text-error"> *last name is mandatory </p><br>';
                } else
                    array_push($userInfo, $_POST["lastname"]);


                if (str_contains($_POST['email'], '@')) {
                    if (strlen($_POST['email']) >= 8) {
                        if (strlen($_POST['email']) <= 50) {
                            array_push($userInfo, $_POST["email"]);
                        } else
                            $errors = true;
                        echo '<p class="text-error"> *email is too long </p><br>';
                    } else
                        $errors = true;
                    echo '<p class="text-error"> *email is too short </p><br>';
                } else
                    $errors = true;
                echo '<p class="text-error"> *email is not valid </p><br>';


                if ($_POST["password"] === $_POST["confirmPassword"]) {
                    if ((strlen($_POST['password']) > 8)) {
                        array_push($userInfo, $_POST["password"]);
                        echo  $userInfo[0] . ' ' . $userInfo[1] . ', welcome bruh!';
                    } else
                        $errors = true;
                    echo '<p class="text-error"> *Password too short </p><br>';
                } else
                    $errors = true;
                echo '<p class="text-error"> *Password is not the same </p><br>';
            }

            ?>
            <input type="text" name="firstname" placeholder="Give your firstname">
            <input type="text" name="lastname" placeholder="Give your lastname">
            <input type="email" name="email" placeholder="Give your email">
            <input type="password" name="password" placeholder="Give your password">
            <input type="password" name="confirmPassword" placeholder="Confirm your password">
            <input type="checkbox" name="newsletter">
            <label for="newsletter"> Subscribe to the newsletter</label>

            <input type="submit" name="submitBtn" value="Send">
        </form>
    </div>



    <?php


    /*
    -- Exercise : 
	
		- Part 1 :
	   		Create a page "signin.php", with the following fields:
	            - Last Name
	            - First name
	            - E-mail
	            - Password
	            - Confirmation of password
	            - Checkbox "Subscribe to the newsletter"
	
			When the form is being submitted, we will display the summary of what the user entered.
		- Part 2 :
			2. Add validations on the different fields of the form:
				- The name and the first name are mandatory.
				- The e-mail must be between 8 and 50 characters
				- The fields "Password" and "Confirmation" must be identical and have at least 8 characters
			BONUS: Make the form values ​​reappear with each submission, in case of error.
    */

    ?>


</body>

</html>