<?php
    //Zadatak 21
    $a21 = 12;
    $b21 = 12;
    $c21 = -122;

    if ($a21 > $b21 && $a21 > $c21) {
        echo "<p>$a21 je najveci uneti broj";
    }
    elseif ($b21 > $a21 && $b21 > $c21) {
        echo "<p>$b21 je najveci uneti broj";
    }
    elseif ($c21 > $a21 && $c21 > $b21) {
        echo "<p>$c21 je najveci uneti broj";
    }
    elseif ($a21 >= $b21 && $a21 > $c21) {
        echo "<p>$a21 i $b21 su jednaki i veci od $c21";
    }
    else {
        echo "<p>Sva tri broja su jednaka</p>";
    }

    //Zadatak 22
    $temp = 41;
    if ($temp < -15 || $temp > 40) {
        echo "<p>Temperatura $temp ℃ je ekstremna</p>";
    }
    
    //Zadatak 23
    //$godina23 = date ('Y');
    //echo "<p>$godina23</p>";
    $godina23 = 2100;
    if ($godina23 % 4 == 0 && ($godina23 % 100 !== 0 || $godina23 % 400 ==0)) {
        echo "<p>Godina je prestupna</p>";
    }
    else {
        echo "<p>Godina je prosta</p>";
    }

    //Zadatak 24
    $p1 = 17;
    $k1 = 22;
    $p2 = 11;
    $k2 = 17;

    if ($k1 <= $p2 || $k2 <= $p1) {
        echo "<p>Smene se ne preklapaju</p>";
    }
    else {
        echo "<p>Smene se preklapaju</p>";
    }

    //Zadatak 25
    
    //Zadatak 26
    $openRadni = 9;
    $closedRadni = 20;
    $openVikend = 10;
    $closedVikend = 18;
    date_default_timezone_set('Europe/Belgrade');
    $dan26 = date ('w');
    $vreme26 = date ('H');
    //$dan26 = 6;
    //$vreme26 = 10;
    
    if ($dan26 > 0 && $dan26 < 6) {
        if ($vreme26 >= $openRadni && $vreme26 < $closedRadni) {
            echo "<p>Butik je otvoren</p>";
        }
        else {
            echo "<p>Butik je zatvoren</p>";
        }
    }
    else {
        if ($vreme26 >= $openVikend && $vreme26 < $closedVikend) {
            echo "<p>Butik je otvoren</p>";
        }
        else {
            echo "<p>Butik je zatvoren</p>";
        }
    }
?>