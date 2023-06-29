<?php

class Trougao{
    private $a;
    private $b;
    private $c;

    public function setA($a){
        if($a > 0 && $a+$this->b>$this->c && $a+$this->c>$this->b && $this->b+$this->c>$a){
            $this->a = $a;
        }
        else{
            echo "<p>Ne moze da se PROMENI vrednost stranice a!</p>";
        }
    }
    public function getA(){
        return $this->a;
    }

    public function setB($b){
        if($b > 0 && $this->a+$b>$this->c && $this->a+$this->c>$b && $b+$this->c>$this->a){
            $this->b = $b;
        }
        else{
            echo "<p>Ne moze da se PROMENI vrednost stranice a!</p>";
        }
    }
    public function getB(){
        return $this->b;
    }

    public function setC($c){
        if($c > 0 && $this->a+$this->b>$c && $this->a+$c>$this->b && $this->b+$c>$this->a){
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
        if($a > 0 && $b > 0 && $c > 00 && $a+$b>$c && $a+$c>$b && $b+$c>$a){
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

    public function obimTrougla(){
        return $this->a + $this->b + $this->c;
    }

    public function povrsinaTrougla(){
        $s = $this->obimTrougla()/2;
        return sqrt($s*($s-$this->a)*($s-$this->b)*($s-$this->c));
    }

}






?>