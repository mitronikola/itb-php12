<?php

    class Pacijent {
        var $ime;
        var $visina;
        var $tezina;

        function Stampaj(){
            echo 
            "
                <table>
                    <tr>
                        <td>Ime: </td>
                        <td>" . $this->ime . "</td>
                    </tr>
                    <tr>
                        <td>Visina: </td>
                        <td>" . $this->visina . "</td>
                    </tr>
                    <tr>
                        <td>Tezina: </td>
                        <td>" . $this->tezina . "</td>
                    </tr>
                    <tr>
                        <td>BMI: </td>
                        <td>" . round($this->Bmi()) . "</td>
                    </tr>
                    <tr>
                        <td>Osoba ima kritican BMI: </td>
                        <td>" . ($this->Kritican()?"IMA":"NEMA") . "</td>
                    </tr>
                </table>
            ";
        }


        /**Indeks telesne mase (BMI) je vrednost koja se dobije kada težinu osobe u kilogramima podelimo sa kvadratom visine u metrima */
        function Bmi(){
            return $this->tezina / ($this->visina**2);
        }

        function Kritican(){
            $bmi = $this->Bmi();
            if($bmi > 40 || $bmi < 15){
                return true;
            }
            else{
                return false;
            }
        }
    }


    $p1 = new Pacijent();
    $p1->ime = "Pera";
    $p1->visina = 1.85;
    $p1->tezina = 140;
    $p1->stampaj();
    $p1->Bmi();
    $p1->Kritican();

    $p2 = new Pacijent();
    $p2->ime = "Marko";
    $p2->visina = 1.62;
    $p2->tezina = 35;
    $p2->stampaj();
    $p2->Bmi();

    $p3 = new Pacijent();
    $p3->visina = 1.75;
    $p3->tezina = 90;
    $p3->ime = "Ivana";
    $p3->stampaj();
    $p3->Bmi();




?>