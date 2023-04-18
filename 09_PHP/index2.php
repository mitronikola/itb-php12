<?php
    /*zadatak3*/
    $cena = 1400;
    $nov = 2000;
    $kusur = $nov - $cena;
    echo "<hr>";
    echo "Kusur je: " . $kusur;
    echo "<hr>";

    /* Zadatak 4*/
    $eur = 100;
    $kursEur = 117.5;
    $din = $eur * $kursEur;
    echo "100e prema srednjem kursu NBS-a je: " . $din;
    echo "<hr>";
    /*Pogledati sta je Beti pircala o formatima brojeva u <cetvrtak></cetvrtak>*/

    /* Zadatak 5*/
    $din = 10000;
    $eur = $din / $kursEur;
    echo "10000 prema srednjem kursu NBS-a je: " . $eur . " evra";
    echo "<hr>";

    /* Zadatak 6*/
    $eur = 100;
    $kursEurDin = 117.5;
    $kursDolDin = 106.7;
    $din = $eur * $kursEurDin;
    $dol = $din / $kursDolDin;
    echo "Vrednost u dolarima nakon konverzije: " . $dol;
    echo "<hr>";

    /* Zadatak 10*/
    $cena = 70;
    $popust = 20;
    $cenaBezPopusta = $cena * 100 / (100 - $popust);
    echo "Cena bez popusta: " . $cenaBezPopusta;
    echo "<hr>";

    // Drugi nacin:
    $udeo = (100 - $popust) / 100;
    $cenaBezPopusta = $cena / $udeo;
    echo "Cena bez popusta: " . $cenaBezPopusta;
    echo "<hr>";

    //Zadatak 11
    $n = 56;
    $brojDana = floor($n / 3);
    $brojNeiskorTableta = $n % 3;
    echo "Mirko ce imati tableta za " . $brojDana . " dana " . " dok ce mu ostati " . $brojNeiskorTableta . " neiskoriscene tablete. ";
    echo "<hr>";

?>