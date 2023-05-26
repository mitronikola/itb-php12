<?php

    class Osoba{
        protected $ime;
        protected $prezime;
        protected $godinaRodjenja;

        public function setIme($i){
            $this->ime = $i;
        }
        public function getIme(){
            return $this->ime;
        }

        public function setPrezime($p){
            $this->prezime = $p;
        }
        public function getPrezime(){
            return $this->prezime;
        }

        public function setGodinaRodjenja($g){
            $this->godinaRodjenja = $g;
        }
        public function getGodinaRodjenja(){
            return $this->godinaRodjenja;
        }

        public function __construct($i, $p, $g){
            $this->setIme($i);
            $this->setPrezime($p);
            $this->setGodinaRodjenja($g);
        }

        public function ispis(){
            echo "<p>Ime: " . $this->ime . "; Prezime: " . $this->prezime . "; Godina rodjenja: " . $this->godinaRodjenja . ";</p>";
        }


    }



?>