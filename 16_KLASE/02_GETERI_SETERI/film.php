<?php

    class Film{
        private $naslov;
        private $reziser;
        private $godinaIzdanja;


        public function getNaslov(){
            return $this->naslov;
        }

        public function getReziser(){
            return $this->reziser;
        }

        public function getGodinaIzdanja(){
            return $this->godinaIzdanja;
        }

        public function setNaslov($n){
            $this->naslov = $n;
        }

        public function setReziser($r){
            $this->reziser = $r;
        }

        public function setGodinaIzdanja($g){
            if($g > 1800){
                $this->godinaIzdanja = $g;
            }
            else{
                $this->godinaIzdanja = 1800;
            }
        }
        
    }

    $f1 = new Film();
        
    $f1->setNaslov("The Goodfather");
    $f1->setReziser("Francis Ford Coppola");
    $f1->setGodinaIzdanja(1972);

    echo "<p>Naslov filma: " . $f1->getNaslov() . "; Reziser: " . $f1->getReziser() . "; Godina izdanja: " . $f1->getGodinaIzdanja() . "</p>";

    $f2 = new Film();

    $f2->setNaslov("Pulp Fiction");
    $f2->setReziser("Quentin Tarantino");
    $f2->setGodinaIzdanja(1794);

    echo "<p>Naslov filma: " . $f2->getNaslov() . "; Reziser: " . $f2->getReziser() . "; Godina izdanja: " . $f2->getGodinaIzdanja() . "</p>";

    $f3 = new Film();

    $f3->setNaslov("Snatch");
    $f3->setReziser("Gay Ritchie");
    $f3->setGodinaIzdanja(2000);

    echo "<p>Naslov filma: " . $f3->getNaslov() . "; Reziser: " . $f3->getReziser() . "; Godina izdanja: " . $f3->getGodinaIzdanja() . "</p>";



?>