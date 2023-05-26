<?php

    class Film{
        var $naslov;
        var $reziser;
        var $godinaIzdanja;

        function stampaj(){
            //echo "<p>Film " . $this->naslov . " rezirao je " . $this->reziser . ", " . $this->godinaIzdanja . " godine!</p>";
            echo
            "
                <table>
                    <tr>
                        <td>Naslov filma: </td>
                        <td>" . $this->naslov . "</td>
                    </tr>
                    <tr>
                        <td>Ime rezisera: </td>
                        <td>" . $this->reziser . "</td>
                    </tr>
                    <tr>
                        <td>Godina izdanja: </td>
                        <td>" . $this->godinaIzdanja . "</td>
                    </tr>
                </table>
            
            
            
            ";
        }
    }


    $f1 = new Film();
    $f1->naslov = "The Goodfather";
    $f1->reziser = "Francis Ford Coppola";
    $f1->godinaIzdanja = 1972;
    $f1->stampaj();

    $f2 = new Film();
    $f2->naslov = "Pulp Fiction";
    $f2->reziser = "Quentin Tarantino";
    $f2->godinaIzdanja = 1994;
    $f2->stampaj();

    $f3 = new Film();
    $f3->naslov = "Snatch";
    $f3->reziser = "Guy Ritchie";
    $f3->godinaIzdanja = 2000;
    $f3->stampaj();




?>