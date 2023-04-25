<?php

    // Zadatak 1.
    for ($i = 1; $i <= 20; $i++) {
        echo "$i ";
    }
    echo "<hr>";

    // Zadatak 2.
    for ($i = 20; $i >= 1; $i--) {
        echo "$i ";
    }
    echo "<hr>";

    // Zadatak 3.
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "$i ";
        }
    }
    echo "<hr>";

    //Zadatak 4.
    for ($i = 5; $i <= 15; $i++) {
        echo $i * 2 . " ";
    }
    echo "<hr>";

    //Zadatak 5.
    $rez = 0;
    for ($i = 1; $i <= 100; $i++) {
        $rez += $i;
    }
    echo "Suma brojeva od 1 do 100 je: $rez ";
    echo "<hr>";

    //Zadatak 6.
    $rez = 0;
    $n = 10;
    for ($i = 1; $i <= $n; $i++) {
        $rez += $i;
    }
    echo "Suma brojeva od 1 do $n je: $rez ";
    echo "<hr>";

    //Zadatak 7.
    $rez = 0;
    $n = 10;
    $m = 20;
    for ($i = $n; $i <= $m; $i++) {
        $rez += $i;
    }
    echo "Suma brojeva od $n do $m je: $rez ";
    echo "<hr>";

    //Zadatak 8.
    $n = 2;
    $m = 6;
    $proizvod = 1;
    for ($i = $n; $i <= $m; $i++) {
        $proizvod *= $i;
    }
    echo "Proizvod brojeva od $n do $m je: $proizvod ";
    echo "<hr>";

    //Zadatak 9.
    $n = 2;
    $m = 6;
    $suma = 0;
    for ($i = $n; $i <= $m; $i++) {
        $suma += $i**2;
    }
    echo "Suma kvadrata brojeva od $n do $m je: $suma ";
    echo "<hr>";

    //Zadatak 10.
?>