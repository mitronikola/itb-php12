<?php

require_once "Sportista.php";

class Kosarkas extends Sportista{
    protected $poeni;

    public function setPoeni($poeni){
        $this->poeni = $poeni;
    }
    public function getPoeni(){
        return $this->poeni;
    }
    
    public function __construct($i, $p, $godina, $grad, $poeni){
        parent::__construct($i, $p, $godina, $grad);
        $this->setPoeni($poeni);
    }

    public function ispis(){
        echo "<p>" . $this->ime . " " . $this->prezime . " rodjen " . $this->godinaRodjenja . ". godine u " . $this->gradRodjenja . "!</p>";
    }
}







?>