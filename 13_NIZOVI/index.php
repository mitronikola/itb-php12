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

    // Zadatak 7.
    echo "<hr>";
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    $zbir = 0;
    $broj = 0;

    for ($i=0; $i < count($brojevi); $i++) {
        $zbir += $brojevi[$i];
    }

    $arsr = $zbir / count($brojevi);

    for ($i=0; $i < count($brojevi); $i++) {
        if ($brojevi [$i] > $arsr) {
            $broj++;
        }
    }

    echo "<p>Elemenata celobrojnog niza koji su veci od srednje vrednosti niza ima: $broj.</p>";

    // Zadatak 8.
    echo "<hr>";
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    $zbir = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        if ($brojevi[$i] > 0) {
            $zbir += $brojevi[$i];
        }
    }
    echo "<p>Zbir pozitivnih elemenata celobrojnog niza je: $zbir.</p>";

    // Bonus zadatak
    // Izracunati srednju vrednost parnih elemenata celobrojnog niza
    $zbir = 0;
    $broj = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        if ($brojevi[$i] % 2 == 0) {
            $zbir += $brojevi[$i];
            $broj++;
        }
    }
    if ($broj != 0) {
    $arsr = $zbir / $broj;
    }
    else {
        $arsr = 0;
    }
    echo "<p>Srednja vrednost parnih elemenata celobrojnog niza je: $arsr</p>";

    // Zadatak 9.
    echo "<hr>";
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    $br = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        if ($brojevi[$i] % 2 == 0) {
            $br++;
        }
    }
    echo "<p>Broj parnih elemenata celobrojnog niza je: $br.</p>";

    // Zadatak 10.
    echo "<hr>";
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    $zbir = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        if ($i % 2 == 0) {
            $zbir += $brojevi[$i];
        }
    }
    echo "<p>Zbir elemenata celobrojnog niza sa parnim indeksom je: $zbir.</p>";

    // Zadatak 11.
    echo "<hr>";
    $brojevi = [5, 6, 14, -4, 14, 11, -7, 14];
    for ($i = 0; $i < count($brojevi); $i++) {
        $brojevi[$i] *= -1;
    }
    print_r ($brojevi);
    
    // Zadatak 12.
    echo "<hr>";
    $brojevi = [5, 6, 13, -4, 15, 11, -7, 14];
    for ($i = 0; $i < count($brojevi); $i++) {
        if ($brojevi[$i] % 2 != 0 && $i % 2 == 0)
        $brojevi[$i] *= -1;
    }
    print_r ($brojevi);

    // Zadatak 13.
    echo "<hr>";
    $brojevi = [5, 6, 13, -4, 15, 11, -7, 14];
    $br = 0;
    for ($i = 0; $i < count($brojevi); $i++) {
        if ($brojevi[$i] % 2 == 0 && $i % 2 != 0)
        $br++;
    }

    echo "<p>Broj parnih elemenata sa neparnim indeksom je: $br</p>";

    // Zadatak 14.
    echo "<hr>";
    $cars = ["Toyota", "Audi", "Peugeot", "BMW", "Mercedes"];
    for ($i = 0; $i < count($cars); $i++) {
        echo "<p> Duzina stringa " . $cars[$i] . " je: " . strlen($cars[$i] . "</p>");
    }

    // Zadatak 15.
    echo "<hr>";
    $cars = ["Toyota", "Audi", "Peugeot", "BMW", "Mercedes"];
    $max = strlen($cars[0]);
    for ($i = 1; $i < count($cars); $i++) {
        if (strlen($cars[$i]) > $max) {
            $max = strlen($cars[$i]);
            $carsMax = $cars[$i];
        }
    }
    
    echo "<p>Element u nizu sa najvecom duzinom je: $carsMax</p>";

    // Zadatak 16.
    echo "<hr>";
    $cars = ["Toyota", "Audi", "Peugeot", "BMW", "Mercedes"];
    $br = 0;
    $zbir = 0;
    for ($i = 0; $i < count($cars); $i++) {
        $zbir += strlen($cars[$i]);
    }
    $arsr = $zbir / count($cars);
    for ($i = 0; $i < count($cars); $i++) {
        if (strlen($cars[$i]) > $arsr) {
            $br++;
        }
    }

    echo "<p>Broj elemenata u nizu cija je duzina veca od prosecne duzine svih stringova je: $br</p>";

    // Zadatak 17.
    echo "<hr>";

    // Kako da odredimo da li se u nekom stringu nalazi neki podstring?
    // Koristimo funkciju strpos($str1, $str2)
    // Rezultat poziva ove f-je:
    // 1) Ako se $str2 nalazi unutar $str1, onda se vraca INDEKS PRVOG pojavljivanja
    // CEO BROJ (0, 1, 2, 3, ...), CASE SENSITIVE
    // 2) Ako se $str2 ne nalazi unutar $str1, onda se vraca FALSE
    // VRACA LOGICKU VREDNOST
    // var_dump(strpos("Sreda", "a"));



    $cars = ["Toyota", "Audi", "Peugeot", "BMW", "Mercedes", "Renault"];
    $br = 0;
    for ($i = 0; $i < count($cars); $i++) {
        if (strpos($cars[$i], "a") !== false) {
            $br++;
        }
    }
    echo "<p>Broj elemenata u nizu koji sadrze slovo 'a' je: $br";

    //Zadatak 18.
    $cars = ["Toyota", "Audi", "Peugeot", "BMW", "Mercedes", "Renault", "Aston Martin"];
    $brojPocinjeA = 0;
    for ($i = 0; $i < count($cars); $i++) {
        // if ($cars[$i][0] == "a" || $cars[$i][0] == "A")
        // if (strtolower($cars[$i][0]) == "a")
        if (strpos($cars[$i], "a") === 0 || strpos($cars[$i], "A") === 0) {
            $brojPocinjeA++;
        }
    }
    echo "<p>Broj elemenata u nizu koji pocinju na slovo 'a' ili 'A' je: $brojPocinjeA";


    // Napredniji zadaci 
    // Zadatak 19. 
    echo "<hr>";
    $a = [-9, -8, -7, -6, -5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    for ($i = $a[0]; $i <= $a[count($a)-1]; $i++) {
        if($i > 0) {
        $b[] = $i;
        }
    } 


    print_r($b);

    // Zadatak 20.
    echo "<hr>";
    $a = [-9, -8, -7, -6, -5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $b = [-9, -8, -7, -6, -5, -4, -3, -2, -1, 0, 1, 2, 3, 4, 5, 6, 7, 8];
    for ($i = $a[0], $j = $b[0]; $i <= $a[count($a)-1], $j <= $b[count($b)-1]; $i++, $j++) {
        $c[] = [$i, $j] ;
    }
    
    print_r($c);










?>  
