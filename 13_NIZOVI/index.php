<?php

    //Bez nizova
    $car1 = "BMW";
    $car2 = "Volvo";
    $car3 = "Toyota";

    //Sa nizovima
    $cars = array("BMW", "Volvo", "Toyota"); // $cars = ["BMW", "Volvo", "Toyota"];
    //Elementi ovo niza su: "BMW", "Volvo", "Toyota"
    //Indeksi elementa ovog niza su: 0, 1, 2

    var_dump($cars);

    echo "<hr>";

    var_dump($car1);

    echo "<hr>";

    print_r($cars);

    // Pristupanje elementima
    echo "<hr>";
    $prviElement = $cars[0];
    $drugiElement = $cars[1];
    $treciElement = $cars[2];

    echo "$prviElement, $drugiElement, $treciElement";
    echo "<p>Prvi element u nizu je: $cars[0]</p>";

    // Izmena elemenata
    echo "<hr>";
    $cars[1] = "Peugeot";
    print_r($cars);

    echo "<hr>";
    $cars[30] = "Audi";
    print_r($cars);

    ///////////////////////////////
    echo "<hr>";
    $polaznici = [];
    $polaznici[] = "Aleksandar";
    $polaznici[] = "Uros";
    $polaznici[] = "Milijana";
    $polaznici[] = "Andreja";
    $polaznici[] = "Nikola";

    print_r($polaznici);

    $duzina = count($polaznici); //Prebrojava koliko polaznika ima, tj. koliko ima elemenata u nizu
    echo "<p>U nizu ima $duzina polaznika</p>";

    for ($i=0; $i<$duzina; $i++) {
        echo "<p>$polaznici[$i] </p>";
    }

    //////////////////////////////////
    echo "<hr>";
    // Zadatak 2.
    // Odrediti zbir elemenata celobrojnog niza.

    $brojevi = [5, 14, -4, 0, 11, -7, 9];
    $sum = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        echo "$brojevi[$i] ";
        $sum += $brojevi[$i];
    }
    echo "<p>Suma elemenata je: $sum</p>";

    // Ugradjena f-ja
    $zbir = array_sum($brojevi);
    echo "<p>Zbir elemenata niza je: $zbir</p>";


    // Zadatak 3.
    echo "<hr>";
    // Odrediti srednju vrednost elemenata celobrojnog niza
    echo "<p>Aritmeticka sredina je: " . $arsr = array_sum($brojevi) / count($brojevi) . "</p>";

    $brojevi = [];
    // Dopuna - 1.nacin
    if (count($brojevi) == 0) {
        echo "<p>Niz je prazan - aritmeticka sredina je 0</p>";
    }
    else {
        echo "<p>Aritmeticka sredina je: " . $arsr = array_sum($brojevi) / count($brojevi) . "</p>";
    }
    
    // Dopuna - 2.nacin
    if ($brojevi == []) {
        echo "<p>Niz je prazan - aritmeticka sredina je 0</p>";
    }
    else {
        echo "<p>Aritmeticka sredina je: " . $arsr = array_sum($brojevi) / count($brojevi) . "</p>";
    }

    // Dopuna - 3.nacin
    if (empty($brojevi)) {
        echo "<p>Niz je prazan - aritmeticka sredina je 0</p>";
    }
    else {
        echo "<p>Aritmeticka sredina je: " . $arsr = array_sum($brojevi) / count($brojevi) . "</p>";
    }
    
    // Dopuna - 4.nacin
    if (!$brojevi) {
        echo "<p>Niz je prazan - aritmeticka sredina je 0</p>";
    }
    else {
        echo "<p>Aritmeticka sredina je: " . $arsr = array_sum($brojevi) / count($brojevi) . "</p>";
    }

    // Zadatak 4.
    // Odrediti maksimalnu vrednost u celobrojnom nizu
    echo "<hr>";

    $brojevi = [5, 14, -4, 0, 11, -7, 91];
    $max = $brojevi[0];
    for ($i=0; $i < count($brojevi); $i++) {
        if ($brojevi[$i] > $max) {
            $max = $brojevi [$i];
        }
    }
    echo "<p>Maksimalna vrednost u nizu je: $max</p>";

    // Zadatak 6.
    echo "<hr>";
    // Odrediti indeks najveceg elementa celobrojnog niza
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6

    // 6.1 indeks prvog pojavljivanja max elementa

    // 1.nacin
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for ($i=0; $i < count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if ($trenutniElement > $maks) {
            $maks = $trenutniElement;
        }
    }
    for ($i=0; $i < count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if ($trenutniElement == $maks) {
            $indeksMaks = $i;
            break;
        }
    }
    echo "<p>Indeks najveceg elementa u nizu je: $indeksMaks</p>";


    //2.nacin
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for ($i=0; $i < count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if ($trenutniElement > $maks) {
            $maks = $trenutniElement;
            $indeksMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, a indeks njegovog prvog pojavljivanja je $indeksMaks</p>";

    // 6.1 indeks poslednjeg pojavljivanja max elementa
    // 1.nacin
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6
    $maks = $brojevi[0];
    $indeksMaks = 0;
    for ($i=0; $i < count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if ($trenutniElement >= $maks) {
            $maks = $trenutniElement;
            $indeksMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, a indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";

    // 2.nacin, kretanje od kraja niza
    $brojevi = [5, 14, -4, 14, 11, -7, 14]; // indeksi: 1, 3, 6
    $brElemenata = count($brojevi); // 7
    $indeksMaks = $brElemenata - 1;
    $maks = $brojevi[$indeksMaks];
    for ($i=$indeksMaks; $i >= 0; $i--) {
        $trenutniElement = $brojevi[$i];
        if ($trenutniElement > $maks) {
            $maks = $trenutniElement;
            $indeksMaks = $i;
        }
    }
    echo "<p>Najveci element ima vrednost $maks, a indeks njegovog poslednjeg pojavljivanja je $indeksMaks</p>";


    // Svi maksimumi
    // 1. nacin
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14]; // indeksi: 2, 4, 7
    $maks = $brojevi[0];
    // 1. prolazak odredjuje maksimum
    for ($i=0; $i < count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if ($trenutniElement > $maks) {
            $maks = $trenutniElement;
        }
    }
    echo "Najveci element ima vrednost $maks, a indeksi pojavljivanja ovog elementa su: ";
    // 2. prolazak trazi sve elemente jednake maksimumu i belezi njihove indekse
    $sviIndeksiMaks = [];
    for ($i=0; $i<count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if ($trenutniElement == $maks) {
            $sviIndeksiMaks [] = $i;
            echo "$i; ";
        }
    }
    echo "<hr>";

    // 2. nacin
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14]; // indeksi: 2, 4, 7
    $maks = $brojevi[0];
    $sviIndeksiMaks = [];
    for ($i=0; $i < count($brojevi); $i++) {
        $trenutniElement = $brojevi[$i];
        if ($trenutniElement > $maks) {
            $maks = $trenutniElement;
            $sviIndeksiMaks = [$i];
        }
        elseif ($trenutniElement == $maks) {
            $sviIndeksiMaks [] = $i;
        }
    }
    echo "Najveci element ima vrednost $maks, a indeksi pojavljivanja ovog elementa su: ";
    for ($i=0; $i < count($sviIndeksiMaks); $i++) {
        echo "$sviIndeksiMaks[$i]; ";
    }

    // Ispis niza moze i sa implode
    


    ////////////////////////////////////

?>