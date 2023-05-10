<?php

    $godine = array(
        "Pera" => 28,
        "Lazar" => 26,
        "Violeta" => 35,
        "Marko" => 35
    );

    foreach($godine as $i => $g) {
        echo "<p> Osoba $i ima $g godina.</p>";
    }

    foreach($godine as $g) {
        echo "<p>Osoba ima $g godina.</p>";
    }



    // foreach petlja moze da se koristi i za indeksne nizove
    $brojevi = array(5, -6, 3.3, 17.8, 0);
    $brojevi[100] = 50;

    foreach ($brojevi as $broj) {
        echo "$broj &nbsp;";
    }

    foreach($brojevi as $indeks => $broj) {
        echo "<p>Element sa indeksom $indeks ima vrednost $broj</p>";
    }

    // Zadatak 1.

    $cars = array(
        "Audi A3" => 2004,
        "Opel Corsa" => 1998,
        "Opel Astra" => 2016,
        "Peugeot 208" => 2004,
        "Ford Focus" => 2015
    );

    // Ispisati sve automobile, kao i njihova godista
    foreach($cars as $marka => $god) {
        echo "<p>Automobil $marka proizveden $god. godine.</p>";
    }

    // Ispisati automobile koji su stariji od 10 godina.
    $trenutnaGodina = date("Y");
    foreach($cars as $marka => $god) {
        if ($trenutnaGodina - $god > 10) {
            echo "<p>Automobil $marka je stariji od 10 godina.</p>";
        }
    }

    // Ispisati automobile cija marka sadrzi string "Opel", a proizvedena su posle 2000. godine.
    foreach($cars as $marka => $god) {
        if(strpos($marka, "Opel") !== false && $god >= 2000) {
            echo "<p>Automobil $marka je proziveden posle 2000. godine</p>";
        }
    }

    // Zadatak 2./3.

    $podaci = array(
        "Pera" => 203,
        "Marija" => 169,
        "Janko" => 179,
        "Violeta" => 180,
        "Milos" => 173,
        "Isidora" => 203,
        "Vuk" => 165,
        "Dragan" => 194
    );

    foreach($podaci as $ime => $visina) {
        echo "<p>Osoba $ime je visoka $visina.</p>";
    }

    // Zadatak 4.
    $suma = 0;
    foreach($podaci as $ime => $visina) {
        $suma += $visina;
    }
    $prosek = round($suma / count($podaci), 2);
    echo "<p>$prosek</p>";

    foreach($podaci as $ime => $visina) {
        if($visina > $prosek) {
            echo "<p>$ime je natprosecno visoka osoba.</p>";
        }
    }

    // Zadatak 5.
    
    $maks = 0;
    foreach($podaci as $visina) {
        if ($visina > $maks) {
            $maks = $visina;
        }
    }

    foreach($podaci as $ime => $visina) {
        if($visina == $maks) {
            echo "<p>$ime ima maksimalnu visinu.</p>";
        }
    }

    // Zadatak 6.
    foreach($podaci as $ime => $visina) {
        if ($visina < $prosek && $ime[0] == "V") {
            echo "<p>Osoba $ime je visoka ispod proseka</p>";
        }
    }
    
    






?>