<?php

/*
require_once "robot.php";
require_once "hewan.php";
require_once "orang.php";

/*$robot = new robot("ngik ngik ngok", 20);
echo $robot->testing();
*/


//echo orang::$suara;

/*
$robot = new robot ("testing", 10);
$robot -> set_suara ("okey dokey") -> set_berat (15);

echo $robot -> suara . " - " . $robot ->berat;
*/

spl_autoload_register(function($class_name){
    include $class_name . ".php";

});

$robot = new robot ("testing", 10);
echo $robot->suara;
    






?>