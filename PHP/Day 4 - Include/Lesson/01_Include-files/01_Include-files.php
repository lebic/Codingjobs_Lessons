<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01_Include-files</title>
</head>

<body>
    <?php
    //Inclide a file => warning if errors
    include 'nav.html';
    ?>



    <h1> My awesome page</h1>
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi laborum dolore voluptate ex cupiditate magnam veritatis, laudantium rem facere repellendus nulla eligendi aperiam est delectus. Eligendi dolor aliquam a ea?</p>
    </div>

    <h2>Movie list</h2>

    <?php

    include_once 'footer.html';
    include_once 'variables.php';

    echo 'Your name is :' . $var1;

    ?>


</body>

</html>