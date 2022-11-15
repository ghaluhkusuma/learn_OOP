<?php
require_once "robot.php";

//inheritance || pewarisan
class robot_hewan extends robot{

    public function get_kekuatan (){
        echo "saya hewan laut biasa berenang ...";

    } 

    //overriding
    public function get_suara(){

        return "suaranya adalah ..." . $this->suara;
    }


    public function testing(){
    return $this->get_suara();
    }

}


?>
