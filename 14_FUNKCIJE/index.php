<?php

function mojaFunkcija() {
    echo "<p>Moja prva funkcija</p>";
}

mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();

function mojaFunkcija2($tekst) {
    $b="nova promenljiva";
    echo "<p>F-ja sa parametrom: $tekst i $b</p>";
}

mojaFunkcija2("1. nacin");
$a = "2. nacin";
mojaFunkcija2($a);

$b = "van f-je";


// F-je sa dva parametra

function ispisImena($ime, $prezime) {
    echo "<p>Ime i prezime je: $ime $prezime</p>";
}

ispisImena("Petar", "Petrovic");
$i="Lazar";
$p="Lazic";
ispisImena($i, $p);


function ispisImena2($ime, $prezime=null, $godine) {
    echo "<p>Ime je: $ime";
    if($prezime) {
        echo ", Prezime je: $prezime";
    }
    echo ", Ima godina: $godine";
    echo "</p>";
}

ispisImena2("Mika", null, 25);
ispisImena2("Mika", "Mikic", 28);


/**
 * f-ja koja sabira dva broja
 * @param int $a - prvi parametar broj
 * @param int $b - drugi parametar broj
 * 
 * @return int - suma da dobijena broja
 */
function zbir(int $a, int $b){
    $c = $a + $b;
    // echo "<p>$c</p>";
    return $c;
}

$pom = zbir(3, 8);
echo "<p>$pom</p>";
echo zbir(3, "10");

echo "<hr>";
echo zbir(zbir(3,5), 10);

$a=zbir(4, 9);
$b=zbir(5, 10);
echo "<p>" . zbir($a, $b) . "</p>";

//include( putanja do fajla, nece da pravi problem ako je pogresan put do fajla );
//require( pravi problem ako je pogresan put do fajla );

// Zadaci

// Zadatak 1.

function neparan($broj) {
    //echo "<p>Pocetak</p>";
    $rez = true;
    if($broj % 2 == 0) {
        $rez = false;
    }
    //echo "<p>Kraj</p>";
    return $rez;
}

$a = 15;
if(neparan($a)) {
    echo "<p>Broj je neparan</p>";
}
else {
    echo "<p>Broj je paran</p>";
}


// Zadatak 2.a.

function maks2($a, $b) {
    if($a > $b) {
        return $a;
    }
    else {
        return $b;
    }
}

$broj1 = 55;
$broj2 = 45;
$veci = maks2($broj1, $broj2);
echo "<p>Veci od brojeva $broj1 i $broj2 je: $veci</p>";

// Zadatak 2.b.

function maks4($a, $b, $c, $d) {
    /*$maksAB = maks2($a, $b);
    $maksCD = maks2($c, $d);
    $maks = maks2($maksAB, $maksCD);

    return $maks;*/

    return maks2(maks2($a,$b), maks2($c, $d));
}

$b1 = 10;
$b2 = 25;
$b3 = 0;
$b4 = 10;

$r = maks4($b1, $b2, $b3, $b4);
echo "<p>Maksimalni od brojeva $b1, $b2, $b3, $b4 je: $r</p>";

// Dodatni zadatak
// Prosledjivanje parametara po vrednosti
function uvecaj(&$a, $korak=10) {
    $a = $a + $korak;
}

$broj = 15;
uvecaj($broj);
echo "<p>$broj</p>";

// Prosledivanje paramatera po referenci
function uvecaj2($a, $korak=10) {
    return $a + $korak;
}

$broj = 15;
$broj=uvecaj2($broj);
echo "<p>$broj</p>";


function proba($a=1, $b=3, $c=10) {
    if(is_null($a)) $a=1;
    return $a+$b+$c;
}

echo proba(null, 33);

// Zadatak 3.
echo "<hr>";
function slika($url) {
    echo "<img src='$url'>";
}

slika("https://cdn.shopify.com/s/files/1/0526/4352/8887/products/ATVINC0078-1888_Vincent_Van_Gogh_Terrasse_De_Cafe_Le_Soir_Place_Du_Forum_1200x630.jpg?v=1617699071");

// Zadatak 4.
echo "<hr>";
function obojenaRec($boja, $tekst) {
    echo "<p style='color:$boja'>$tekst<p>";
}

obojenaRec("red", "Ovo je tekst crvene boje");
obojenaRec("blue", "Ovo je tekst plave boje");

// Zadatak 5.
function recenica1($recenica, $i, $korak) {
    for ($i; $i < 35 ; $i+=$korak) {
        echo "<p style='font-size:" . $i . "px'>recenica</p>";
    }
} 

recenica1("Ovo je recenica", 10, 5);

// Zadatak 6.

function recenica2($fontSize) {
    echo "<p style='font-size:" . $fontSize . "px'>Ovo je recenica</p>";
}

for($i = 10; $i < 35; $i+=5) {
    recenica2($i);
}

// Zadatak 7.

function aritmeticka($n, $m) {
    $sum = 0;
    $br = 0;
    if($n <= $m) {
        for($i = $n; $i <= $m; $i++) {
        $sum += $i;
        $br++;
        }
        return "<p>Aritmeticka sredina brojeva $br1 i $br2 je:" . $sum / $br . "</p>"; 
    }
    else {
        return "<p>Uneli ste neispravne parametre</p>";
    }
        

    
}

$br1 = 9;
$br2 = 8;
echo aritmeticka($br1, $br2);


// Zadatak 8.

function aritmetickeCifre($n, $m) {
    $sum = 0;
    $br = 0;
    for ($i = $n; $i <= $m; $i++) {
        if($i % 10 == 3) {
            $sum+=$i;
            $br++;
        }
    }
    if($br) {
        return "<p>Aritmeticka sredina brojeva u intervalu od $n do $m kojima je poslednja cifra 3 je: " . $sum / $br . "</p>";
    }
    else {
        return "<p>Uneli ste neispravne parametre</p>";
    }
    
}

echo aritmetickeCifre(4, 13);


// Zadatak 9.

function praksa($n, $a, $d) {
    $sumaPlata = $a;
    for ($i = 2; $i <= $n; $i++) {
        $sumaPlata += $a + $d;
    }
    return number_format($sumaPlata, 2, ',', '.'); // $sumaPlata = $a + (n-1) * ($a + $d)
}

function praksa2($n, $a, $d) {
    $sumaPlata = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sumaPlata += $a + $d;
    }
    return $sumaPlata - $d; // $sumaPlata = $n * ($a + $d) - $d
}

echo "<hr>";
$n = 10;
$a = 1000;
$d = 120;
echo praksa($n, $a, $d);

// Zadatak 10.
echo "<hr>";
for($i=1; $i <= 51; $i++) {
    $niz[] = $i;
}


for($i = 0; $i < count($niz); $i++) {
    if(neparan($niz[$i])) {
        echo $niz[$i] . " ";
    }
}

echo "<hr>";
foreach($niz as $v) {
    if(neparan($v)) {
        echo $v . " ";
    }
}


// Zadatak 11.
echo "<hr>";
function brojNeparnih($arr) {
    $brojNeparnih = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if(neparan($arr[$i])) {
            $brojNeparnih++;
        }
    }
    return $brojNeparnih;
}

echo brojNeparnih($niz);

// Zadatak 12.

$niz = [
    '01.05.2023.' => 19, 
    '02.05.2023.' => 22,
    '03.05.2023.' => 18,
    '04.05.2023.' => 15,
    '05.05.2023.' => 25
];



function najnizaTemp($arr) {
    $minTemp = 100;
    $minDatum = "";
    $minDan = 0;
    $dan = 1;
    foreach($arr as $datum => $temp) {
        if($minTemp > $temp) {
            $minTemp = $temp;
            $minDatum = $datum;
            $minDan = $dan;
        }
        $dan++;
    }
    $dani = ['Ponedeljak', 'Utorak', 'Sreda', 'Cetvrtak', 'Petak'];
    echo "<p style='color: blue'>" . $dani[$minDan-1] ." ".$minDatum." sa temp ".$minTemp."</p>";


}

function najvisaTemp($arr) {
    $maxTemp = -100;
    $maxDatum = "";
    $dan = 0;
    foreach($arr as $datum => $temp) {
        if($maxTemp < $temp) {
            $maxTemp = $temp;
            $maxDatum = $datum;
        }
        $dan++;
    }
    $dani = ['Ponedeljak', 'Utorak', 'Sreda', 'Cetvrtak', 'Petak'];
    echo "<p style='color:red;'>" . $dani[$dan-1] ." ". $maxDatum . " sa temp " . $maxTemp . "</p>";
}

echo najnizaTemp($niz);
echo najvisaTemp($niz);


// Zadatak 13.
/* Dat je niz rečenica. Napraviti funkciju ili više njih kako biste zelenom bojom ispisali sve palindromske rečenice iz niza rečenica, a crvenom bojom ispisati sve ostale rečenice.
Rečenica je palindromska ukoliko se isto čita slava na desno i sdesna na levo (neračunajući razmake)  */
echo "<hr>";
$niz = [
    "Able was I ere I saw Elba." => 1,
    "Good morning/afternoon/evening!" => 0,
    "Was it a cat I saw?" => 1,
    "Hey, how is everything going on?" => 0,
    "Do geese see God?" => 1,
    "Don't you think the weather is great today?" => 0
];

function palindromi($arr) {
    foreach($arr as $key => $value) {
        if($value) {
            echo "<p style='color:green'> $key </p>";
        }
        else {
            echo "<p style='color:red'> $key </p>";
        }
    }
}

echo palindromi($niz);

// 2. nacin
echo "<hr>";
$niz = [
    "Able was I ere I saw Elba.",
    "Good morning/afternoon/evening!",
    "Was it a cat I saw?",
    "Hey, how is everything going on?",
    "Do geese see God?",
    "Don't you think the weather is great today?"
];



 function palindromi2($arr) {
    foreach($arr as $recenica) {
        $dummy = $recenica;
        $dummy = strtolower($dummy);
        $dummy = rtrim($dummy, "! ? .");
        $dummy = str_replace(" ", "", $dummy);
        if($dummy === strrev($dummy)){
            echo "<p style='color:green;'> $recenica </p>";
        }
        else {
            echo "<p style='color:red;'> $recenica </p>";
        }
    }
} 

palindromi2($niz);


?>

