<?php

    class Knjiga {

        private $naslov;
        private $autor;
        private $godIzdanja;
        private $brojStrana;
        private $cena;

        public function setNaslov($n){
            $this->naslov = $n;
        }

        public function getNaslov(){
            return $this->naslov;
        }

        public function setAutor($a){
            $this->autor = $a;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function setGodIzdanja($godI){
            $this->godIzdanja = $godI;
        }

        public function getGodIzdanja(){
            return $this->godIzdanja;
        }

        public function setBrojStrana($brojS){
            $this->brojStrana = $brojS;
        }

        public function getBrojStrana(){
            return $this->brojStrana;
        }

        public function setCena($c){
            $this->cena = $c;
        }

        public function getCena(){
            return $this->cena;
        }

        

        public function __construct($n, $a, $godI, $brojS, $c){
            $this->setNaslov($n);
            $this->setAutor($a);
            $this->setGodIzdanja($godI);
            $this->setBrojStrana($brojS);
            $this->setCena($c);
        }

        /** public function ispis(){
            echo "<p>Naslov: " . $this->naslov . "; Autor: " . $this->autor . "; Godina izdanja: " . $this->godIzdanja . "; Broj strana: " . $this->brojStrana . "; Cena: " . $this->cena . "</p>";
        }*/
        

        public function ispis1(){
            echo "<p>Naslov: " . $this->naslov . "; Autor: " . $this->autor;
            if($this->dugackoime($this->autor)){
                echo " (ime autora je dugacko);";
            }
            else{
                echo " (ime autora nije dugacko);";
            }
            echo " Godina izdanja: " . $this->godIzdanja . "; Broj strana: " . $this->brojStrana;
            if($this->obimna($this->brojStrana)){
                echo " (knjiga je obimna);";
            }
            else{
                echo " (knjiga nije obimna);";
            }
            echo " Cena: " . $this->cena . "din";
            if($this->skupa($this->cena)){
                echo " (knjiga je skupa);";
            }
            else{
                echo "(knjiga nije skupa)";;
            }


        }

        public function obimna($broj){
            if($broj > 600){
                return true;
            }
            else{
                return false;
            }
        }

        public function skupa($cenaKnjige){
            if($cenaKnjige > 8000){
                return true;
            }
            else{
                return false;
            }
        }

        public function dugackoime($imeAutora){
            if(strlen($imeAutora) > 18){
                return true;
            }
            else{
                return false;
            }
        }

    }

    $k1 = new Knjiga("Platforma", "Misel Uelbek", 2001, 350, 990);
    $k1->ispis1();

    $k2 = new Knjiga("Serotonin", "Misel Uelbek", 2019, 250, 1990);
    $k2->ispis1();

    $k3 = new Knjiga("Na Zapadu nista novo", "Erih Marija Remark", 1928, 400, 800);
    $k3->ispis1();


?>