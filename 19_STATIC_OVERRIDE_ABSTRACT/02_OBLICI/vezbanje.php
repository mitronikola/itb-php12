<?php

class Trougao1{
    private $a;
    private $b;
    private $c;

    private static function straniceTrougla($prvaStranica, $drugaStranica, $trecaStranica){
        return ($prvaStranica > 0 && $drugaStranica > 0 && $trecaStranica > 0 && $prvaStranica + $drugaStranica > $trecaStranica && $drugaStranica + $trecaStranica > $prvaStranica && $prvaStranica + $trecaStranica > $drugaStranica);
    }

    public function setA($prvaStranica){
        if(self::straniceTrougla($prvaStranica, $this->b, $this->c)){
            $this->a = $prvaStranica;
        }
        else{
            echo "<p>Ne moze da se promeni vrednost stranice a!</p>";
        }
    }
    
    public function getA(){
        return $this->a;
    }

    public function setB($drugaStranica){
        if(self::straniceTrougla($this->a, $drugaStranica, $this->c)){
            $this->b = $drugaStranica;
        }
        else{
            echo "<p>Ne moze da se promeni vrednost stranice b!</p>";
        }
    }

    public function getB(){
        return $this->b;
    }

    public function setC($trecaStranica){
        if(self::straniceTrougla($this->a, $this->b, $trecaStranica)){
            $this->c = $trecaStranica;
        }
        else{
            echo "<p>Ne moze da se promeni vrednost stranice c!</p>";
        }
    }

    public function getC(){
        return $this->c;
    }

    public function __construct($prvaStranica, $drugaStranica, $trecaStranica){
        if(self::straniceTrougla($prvaStranica, $drugaStranica, $trecaStranica)){
            $this->a = $prvaStranica;
            $this->b = $drugaStranica;
            $this->c = $trecaStranica;
        }
        else{
            $this->a = 0;
            $this->b = 0;
            $this->c = 0; 
        }
    }
    
}






?>