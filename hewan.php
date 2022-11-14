<?php
require_once "robot.php";
//inheritance
class robot_hewan extends robot{

    public function get_kekuatan (){
        echo "saya hewan laut biasa berenang ...";

    }

    //overriding
    public function get_suara(){

        return "suaranya adalah ..." . $this->suara;
    }

}


?>
