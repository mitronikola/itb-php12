<?php

require_once "Oblik.php";

class Kvadrat extends Oblik{
    private $a;

    public function setA($a){
        if($a > 0){
            $this->a = $a;
        }
        else{
            $this->a = 0;
        }
        
    }
    public function getA(){
        return $this->a;
    }

    public function __construct($a){
        parent::__construct("Kvadrat");
        $this->setA($a);
    }

    public function obim(){ // OVERRIDE
        return $this->a*4;
    }

    public function povrsina(){ // OVERRIDE
        return $this->a**2;
    }

    
}


?>