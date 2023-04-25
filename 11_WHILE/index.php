<?php

    // while petlja
    /*
        1. Postavite pocetnu vrednost - inicijalizacija
        2. while (uslov)
            2.a. TRUE - Blok naredbi koji se odvija ukoliko je uslov u while petlji ispunjen
            2.b. FALSE - Ne izvrsava se blok naredbi unutar while petlje vec se prelazi na kod ispod bloka 
    */

    // Zadatak 1.a.

    $i = 1;
    while ($i <= 20) {
        echo "$i " ;
        $i++;
    }
    echo "<p>KRAJ</p>";

    // Zadatak 1.b.

    $i = 1;
    while ($i <= 20) {
        echo "$i <br/>";
        $i++;
    }
    echo "<p>KRAJ</p>";

    //Zadatak 2

    $i = 20;
    while ($i >= 1) {
        echo "$i ";
        $i -= 1;
    }
    echo "<i>$i <br/></i>"; //$i ima vrednost nula nakon izvrsenja petlje je 0

    //Zadatak 4
    // 1. nacin

    $n = 5;
    $i = 1;
    while ($i <= $n) {
        if ($i % 3 == 0) {
            echo "<p style='color:red;'>Hello $i</p>";
        }
        elseif ($i % 3 == 1) {
            echo "<p style='color:blue;'>Hello $i</p>";
        }
        else {
            echo "<p style='color:orange;'>Hello $i</p>";
        }

        $i++;
    }

    // 2.nacin

    $n = 5;
    $i = 1;
    while ($i <= $n) {
        if ($i % 3 == 0) {
            $boja = "purple";
        }
        elseif ($i % 3 == 1) {
            $boja = "lime";
        }
        else {
            $boja = "magenta";
        }
        echo "<p style='color:$boja;'>Hello $i</p>";
        $i++;
    }

    //Zadatak 3
    $i = 2;
    while ($i <= 20) {
        if ($i % 2 == 0) {
        echo "$i ";
        }
        $i++;
    }
    
    //Zadatak 5
    $n = 8;
    $i = 1;
    echo "<hr>";
    while ($i <= $n) {
        if ($i % 2 == 0) {
            $okvir = "2px blue dotted";
        }
        elseif ($i % 2 == 1) {
            $okvir = "2px red solid";
        }
        echo "<img src='slike/chipmunk.jpg' alt='slika' width='300px' height='200px' style='border:$okvir; margin: 5px 5px'>";
        $i++;
    }

    //Zadatak 6
    $i = 1;
    $suma = 0;
    while ($i <= 100) {
        $suma += $i;
        $i++;
    }
    echo "<p>$suma</p>";

    //Zadatak 7
    $i = 1;
    $n = 5;
    $suma = 0;
    while ($i <= $n) {
        $suma += $i;
        $i++;
    }
    echo "<p>Suma brojeva od 1 do $n je: $suma</p>"; 

    //Zadatak 8
    $n = 6;
    $m = 10;
    $suma = 0;
    while ($n <= $m) {
        $suma += $n;
        $n++;
    }
    echo "<p>Suma brojeva od 6 do 10 je: $suma</p>";

    //Zadatak 9
    $n = 6;
    $m = 10;
    $proizvod = 1;
    while ($n <= $m) {
        $proizvod = $n * $proizvod;
        $n++;
    }
    echo "<p>Proizvod brojeva od 6 do 10 je: $proizvod</p>";

    //Zadatak 10
    $n = 6;
    $m = 10;
    $sumaP = 0;
    $sumaN = 0;
    while ($n <= $m) {
        if ($n % 2 == 0) {
            $sumaP += $n*$n;
            $n++; 
        }
        else {
            $sumaN += $n*$n*$n;
            $n++;
        }
    }
    echo "<p>Suma kvadrata parnih brojeva je: $sumaP, dok je suma kubova nepranih brojeva: $sumaN";

    //Zadatak 11
    echo "<hr>";
    $k = 18;
    $i = 1;
    while ($k >= $i) {
        if ($k % $i == 0) {
            echo "$i ";   
        }
        $i++;
    }
    
    //Zadatak 12
    $n = 25;
    if ($n % 2 == 0 || $n % 3 == 0 || $n % 5 == 0) {
        echo "<p>Broj nije prost</p>";
    }
    else {
        echo "<p>Broj je prost</p>";
    }
    
        

?>
