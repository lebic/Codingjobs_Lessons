<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <?php
        /*

-- Character Exercise

We will continue the 'Character' exercise.

Instead of attack and defense point variables, you need to replace those with an array :
        -- An array of characteristics (attak point, defense point... put anything you want)
        Use an associative array.

You have to use a loop to display all the characteristics now !
*/

        $image = "banana.png";
        $lastName = "Banana";
        $firstName = "Guy";


        $skillsPoint = array(
                "Strenght" => 5,
                "Charisma" => 10,
                "Magic" => "frost",
                "Stealth" => 50,
                "Perception" => 20,
        );


        // First way : handle displaying in PHP
        // echo '<p>Last name : ' . $lastName . '</p>';
        // echo '<p> First name : ' . $firstName . '</p>';
        ?>

        <!-- Second way : Mix of HTML and PHP  -->
        <img src="<?php echo $image; ?>" width="100px">
        <p>Last Name : <?php echo $lastName; ?></p>
        <p>First Name : <?php echo $firstName; ?></p>

        <div class="skills-container">

                <ul>
                        <?php
                        foreach ($skillsPoint as $key => $value) {
                                echo " $key : $value  <br>";
                        }
                        ?>
                </ul>


        </div>

        <?php

        echo "Strenght: $skillsPoint[strenght] <br>" . "Charisma:$skillsPoint[charisma] <br>" . "Magic:$skillsPoint[magic] <br>" . "Stealth:$skillsPoint[stealth] <br>" . "Perception:$skillsPoint[perception] <br>"
        ?>
        <style>
                .skills-container {
                        margin: 2vh;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-between;
                        align-items: center;

                        padding: 1vh;
                        font-family: 'inter', sans-serif;

                        background-color: lightblue;
                        border-radius: 2vh;
                        width: 30vh;
                }

                .skills-container li {
                        list-style: none;
                }

                ul {
                        padding: 1vh 2vh 1vh 1vh;
                }
        </style>
</body>

</html>