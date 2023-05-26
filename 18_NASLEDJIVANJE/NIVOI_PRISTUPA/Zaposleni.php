<?php

require_once "Osoba.php";

class Zaposleni extends Osoba{

    protected $plata;
    protected $pozicija;

    public function setPlata($plata){
        $this->plata = $plata;
    }
    public function getPlata(){
        return $this->plata;
    }

    public function setPozicija($pozicija){
        $this->pozicija = $pozicija;
    }
    public function getPozicija(){
        return $this->pozicija;
    }

    public function __construct($i, $p, $g, $plata, $pozicija){
        parent::__construct($i, $p, $g);
        $this->setPlata($plata);
        $this->setPozicija($pozicija);
    }

    public function ispisZaposleni(){
        parent::ispis();
        echo "<p>Plata: " . $this->plata . "; Pozcija: " . $this->pozicija . ";</p>";
    }
}





?>