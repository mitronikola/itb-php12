<?php

abstract class Oblik{

    private $nazivOblika;
    const TROUGAO = "Trougao";
    const KVADRAT = "Kvadrat";
    const PRAVOUGAONIK = "Pravougaonik";
    const ROMB = "Romb";

    public function __construct($n){
        $this->nazivOblika = $n;
    }

    public abstract function obim();

    public abstract function povrsina();

    public function ispis(){
        echo "<p>" . $this->nazivOblika . ": " . $this->obim() . ", " . $this->povrsina() . "</p>";
    }






}



?>