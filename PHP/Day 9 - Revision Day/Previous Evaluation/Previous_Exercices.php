<?php

$array = array(3, 5, 1, 7, 4);

function has_dupes($array)
{
    $dup_array = array();

    foreach ($array as $values) {
        if (++$dup_array[$values] > 1) {
            return 'There are duplicates';
        }
    }
    return false;
}

echo has_dupes($array);
