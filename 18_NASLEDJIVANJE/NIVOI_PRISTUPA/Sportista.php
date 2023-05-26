<?php

class Sportista{
    protected $ime;
    protected $prezime;
    protected $godinaRodjenja;
    protected $gradRodjenja;

    public function setIme($i){
        $this->ime = $i;
    }
    public function getIme(){

    }

    public function setPrezime($p){
        $this->prezime = $p;
    }
    public function getPrezime(){
        return $this->prezime;
    }

    public function setGodinaRodjenja($godina){
        $this->godinaRodjenja = $godina;
    }
    public function getGodinaRodjenja(){
        return $this->godinaRodjenja;
    }

    public function setGradRodjenja($grad){
        $this->gradRodjenja = $grad;
    }
    public function getGradRodjenja(){
        return $this->gradRodjenja;
    }

    public function __construct($i, $p, $godina, $grad){
        $this->setIme($i);
        $this->setPrezime($p);
        $this->setGodinaRodjenja($godina);
        $this->setGradRodjenja($grad);
    }

}



?>