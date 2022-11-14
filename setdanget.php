<?php
//class

class  robot {

//property

public $suara;
public $berat;


//method set dan get

public function set_suara($suara){
    $this->suara = $suara;
}

public function get_suara(){
    return $this->suara;
}

}

$robot1 = new robot;
$robot2 = new robot;
$robot1 ->set_suara("ngik ngik ngok");
echo "bunyinya... " . $robot1->get_suara();

$robot2 ->set_suara("titut titut");
echo "bunyinya... " . $robot2->get_suara();

?>