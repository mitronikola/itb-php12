<?php

require_once "Kredit.php";

class StambeniKredit extends Kredit{
    public function mesecnaRata(){
        $mesecna_kamata = $this->godisnjaKamata / 12 / 100;
        $stepen = pow(1 + $mesecna_kamata, $this->brojGodOtplate * 12);
        $mesecna_rata = ($this->osnovica * $mesecna_kamata * $stepen) / ($stepen - 1);
        return $mesecna_rata;
    }

}















?>