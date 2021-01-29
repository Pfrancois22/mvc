<?php

echo substr("http://mvc/index.php", 0, -9);

var_dump($_SERVER['SCRIPT_FILENAME']);


// var_dump (substr(($_SERVER['SCRIPT_FILENAME']) 1, -5));

var_dump("PATH_REQUIRE", $_SERVER['SCRIPT_FILENAME']);


var_dump("PATH", $_SERVER["PHP_SELF"]);

var_dump(ini_set('session.cookie_lifetime', false));

// $toto = "toto";
// $titi = "titi";
// echo ini_set( $toto,  $titi);
// echo $toto;

error_reporting(E_ALL);
ini_set('display_errors', true);