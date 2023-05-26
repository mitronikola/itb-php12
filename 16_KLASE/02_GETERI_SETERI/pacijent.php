<?php

    class Pacijent {
        private $ime;
        private $visina;
        private $tezina;

        public function getIme(){
            return $this->ime;
        }

        public function getVisina(){
            return $this->visina;
        }

        public function getTezina(){
            return $this->tezina;
        }

        public function setIme($i){
            $this->ime = $i;
        }

        public function setVisina($v){
            if($v >= 0 && $v <= 250){
                $this->visina = $v;
            }
            elseif($v < 0){
                $this->visina = 0;
            }
            else{
                $this->visina = 250;
            }
        }

        public function setTezina($t){
            if($t >= 0 && $t <= 550){
                $this->tezina = $t;
            }
            elseif($t < 0){
                $this->tezina = 0;
            }
            else{
                $this->tezina = 250;
            }
        }

        public function Stampaj(){
            echo 
            "
                <table>
                    <tr>
                        <td>Ime: </td>
                        <td>" . $this->getIme() . "</td>
                    </tr>
                    <tr>
                        <td>Visina: </td>
                        <td>" . $this->getVisina() . "</td>
                    </tr>
                    <tr>
                        <td>Tezina: </td>
                        <td>" . $this->getTezina() . "</td>
                    </tr>
                </table>
            ";
        }
        

}


    $p1 = new Pacijent();
            
    $p1->setIme("Pera");
    $p1->setVisina(1.89);
    $p1->setTezina(100);

    $p1->Stampaj();

    $p2 = new Pacijent();

    $p2->setIme("Mara");
    $p2->setVisina(1.78);
    $p2->setTezina(88);

    $p2->Stampaj();

    $p3 = new Pacijent();

    $p3->setIme("Zika");
    $p3->setVisina(2.05);
    $p3->setTezina(109);

    $p3->Stampaj();








?>