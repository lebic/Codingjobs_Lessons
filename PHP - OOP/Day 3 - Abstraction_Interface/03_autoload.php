<?php

// Load automatically the classes you need 
// This function, by default, will look inside the same folder
spl_autoload_register();

// If it's in a different folder, you have to do this:
function projectAutoload($className)
{
    require_once "Class/$className.php";
}
spl_autoload_register('projectAutoload');

projectAutoload("Robot");

$ashBot = new Robot('Z-4545', 'gold');

print_r($ashBot);
