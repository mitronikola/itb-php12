<?php

require_once "Oblik.php";

class Trougao extends Oblik{
    private $a;
    private $b;
    private $c;

    private static function uslovZaTrougao($a, $b, $c){
        return ($a > 0 && $b > 0 && $c > 0 && $a+$b>$c && $a+$c>$b && $b+$c>$a);
    }

    public function setA($a){
        if(self::uslovZaTrougao($a, $this->b, $this->c)){
            $this->a = $a;
        }
        else{
            echo "<p>Ne moze da se promeni vrednost stranice a!</p>";
        }
    }
    public function getA(){
        return $this->a;
    }

    public function setB($b){
        if(self::uslovZaTrougao($this->a, $b, $this->c)){
            $this->b = $b;
        }
        else{
            echo "<p>Ne moze da se PROMENI vrednost stranice b!</p>";
        }
    }
    public function getB(){
        return $this->b;
    }

    public function setC($c){
        if(self::uslovZaTrougao($this->a, $this->b, $c)){
            $this->c = $c;
        }
        else{
            $this->a = 0;
            $this->b = 0;
            $this->c = 0;
        }
        
    }
    public function getC(){
        return $this->c;
    }

    public function __construct($a, $b, $c){
        parent::__construct("Trougao");
        if(self::uslovZaTrougao($a, $b, $c)){
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        else{
            $this->a = 0;
            $this->b = 0;
            $this->c = 0;
        }
    }

    public function obim(){
        return $this->a + $this->b + $this->c;
    }

    public function povrsina(){
        $s = $this->obim()/2;
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    
}






?>