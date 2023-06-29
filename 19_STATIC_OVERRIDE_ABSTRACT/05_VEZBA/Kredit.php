<?php

abstract class Kredit{
    protected $naziv;
    protected $osnovica;
    protected $godisnjaKamata;
    protected $brojGodOtplate;

    public function setNaziv($n){
        $this->naziv = $n;
    }
    public function getNaziv(){
        return $this->naziv;
    }

    public function setOsnovica($o){
        $this->osnovica = $o;
    }
    public function getOsnovica(){
        return $this->osnovica;
    }

    public function setGodisnjaKamata($gK){
        $this->godisnjaKamata = $gK;
    }
    public function getGodisnjaKamata(){
        return $this->godisnjaKamata;
    }

    public function setBrojGodOtplate($bG){
        $this->brojGodOtplate = $bG;
    }
    public function getBrojGodOtplate(){
        return $this->brojGodOtplate;
    }

    public function __construct($n, $o, $gK, $bG){
        $this->naziv = $n;
        $this->osnovica = $o;
        $this->godisnjaKamata = $gK;
        $this->brojGodOtplate = $bG;
    }

    public function ispis(){
        echo "<p>Naziv banke: " . $this->naziv . "; Osnovica: " . $this->osnovica . "; Godisnja kamata: " . $this->godisnjaKamata . "; Broj godina otplate: " . $this->brojGodOtplate . "; Mesecna rata: " . $this->mesecnaRata() . ";</p>";
    }

    abstract public function mesecnaRata();
}















?>