<?php

setcookie('count', isset($_COOKIE['count']) ? $_COOKIE['count']++ : 1);

var_dump($_COOKIE);
