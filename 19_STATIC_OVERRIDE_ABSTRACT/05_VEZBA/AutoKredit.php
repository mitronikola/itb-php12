<?php

require_once "Kredit.php";

class AutoKredit extends Kredit{
    private $autoKamata;

    public function setAutoKamata($aK){
        $this->autoKamata = $aK;
    }
    public function getAutoKamata(){
        return $this->autoKamata;
    }

    public function __construct($n, $o, $gK, $bG, $aK){
        parent::__construct($n, $o, $gK, $bG);
        $this->autoKamata = $aK;
    }

    public function ispis(){
        echo "<p>Naziv banke: " . $this->naziv . "; Osnovica: " . $this->osnovica . "; Godisnja kamata: " . $this->godisnjaKamata . "; Broj godina otplate: " . $this->brojGodOtplate . "; Auto kamata: " . $this->autoKamata . "; Mesecna rata: " . $this->mesecnaRata() . ";</p>";
    }

    public function mesecnaRata(){
        $kamata = $this->osnovica * $this->brojGodOtplate * ($this->godisnjaKamata + $this->autoKamata) / 100;
        $ukupanIznos = $this->osnovica + $kamata;
        $mesecna_rata = $ukupanIznos / ($this->brojGodOtplate * 12);
        return $mesecna_rata;
    }
}





?>