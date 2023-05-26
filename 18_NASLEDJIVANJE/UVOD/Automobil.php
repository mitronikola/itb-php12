<?php

    require_once "Vozilo.php";

    class Automobil extends Vozilo{
        public function voziAutomobil(){
            echo "<p>Automobil $this->tip ($this->boja boja) u pokretu!</p>";
            //echo "<p>Automobil ". $this->getTip() . "(" . ($this->getBoja()) . " boja) u pokretu!</p>";
        }
    
    }




?>