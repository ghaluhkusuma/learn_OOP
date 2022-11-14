<?php

require_once "robot.php";
require_once "hewan.php";

$robot1 = new robot("ngik ngik ngok", 20);
$robot1->set_berat(30);
echo "beratnya... " . $robot1->get_berat() . "<br>";


$robothewan = new robot_hewan("huamh", 10);
echo $robothewan->get_suara();



?>