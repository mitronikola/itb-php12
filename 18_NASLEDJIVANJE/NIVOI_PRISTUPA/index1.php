<?php

require_once "Zaposleni.php";

$osoba1 = new Osoba("Nikola", "Mitrovic", 1993);
$osoba1->ispis();

$osoba2 = new Zaposleni("Nikola", "Mitrovic", 1993, 50000, "ekonomista");
echo "<hr>";
$osoba2->ispisZaposleni();

$osoba3 = new Zaposleni("Petar", "Mirkovic", 1996, 80000, "sportista");
$osoba4 = new Zaposleni("Milica", "Milicevic", 1980, 150000, "ekonomista");
$osoba5 = new Zaposleni("Rade", "Radic", 2001, 58500, "doktor");
$osoba6 = new Zaposleni("Jovana", "Jovanovic", 1978, 88500, "novinar");

$niz = [$osoba2, $osoba3, $osoba4, $osoba5, $osoba6];

function prosekPlate($arr){
    $sum = 0;
    foreach($arr as $zaposleni){
        $sum += $zaposleni->getPlata();
    }
    $prosek = $sum / count($arr);
    return $prosek;
}

echo "<hr>";
echo prosekPlate($niz);

function natprosecnaPlata($arr, $zaposleni){
    $prosek = prosekPlate($arr);
    if($zaposleni->getPlata() > $prosek){
        return true;
    }
    else{
        return false;
    }
}

echo "<hr>";

if(natprosecnaPlata($niz, $osoba6)){
    echo "<p>Zaposleni " . $osoba6->getIme() . " " . $osoba6->getPrezime() . " ima natprosecnu platu!</p>";
}
else{
    echo "<p>Zaposleni " . $osoba6->getIme() . " " . $osoba6->getPrezime() . " nema natprosecnu platu!</p>";
}


require_once "Kosarkas.php";

$sportista1 = new Kosarkas("Pera", "Peric", 1994, "Uzice", [24, 32, 16, 27, 34]);
$sportista2 = new Kosarkas("Luka", "Doncic", 1998, "Ljubljana", [35, 18, 29, 15, 40, 50, 41]);
$sportista3 = new Kosarkas("Nikola", "Jokic", 1995, "Sombor", [56, 46, 37]);
$sportista4 = new Kosarkas("Steph", "Curry", 1989, "San Francisco", [23, 22, 32, 40]);
$sportista5 = new Kosarkas("Vlatko", "Cancar", 1996, "Maribor", [22, 38, 29, 12, 18, 21]);

$niz = [$sportista1, $sportista2, $sportista3, $sportista4, $sportista5];

function najviseUtakmica($arr){
    $max = 0;
    foreach($arr as $kosarkas){
        if(count($kosarkas->getPoeni()) > $max){
            $max = count($kosarkas->getPoeni());
            $kosarkasMaxUtakmica = $kosarkas;
        }
    }
    return $kosarkasMaxUtakmica;
}
echo "<hr>";
echo "<p>Igrac sa najvise utakmica je: </p>";
najviseUtakmica($niz)->ispis();
echo "<hr>";

function najvisePoena($arr){
    $max = 0;
    foreach($arr as $kosarkas){
        for($i=0; $i < count($kosarkas->getPoeni()); $i++){
            if($kosarkas->getPoeni()[$i] > $max){
                $max = $kosarkas->getPoeni()[$i];
                $kosarkasMaxPoeni = $kosarkas;
            }
        }
    }
    return $kosarkasMaxPoeni;
}

echo "<p>Kosarkas koji je postigao najveci broj poena na jednoj utakmici je: </p>";
najvisePoena($niz)->ispis();
echo "<hr>";

function najviseProsecnoPoena($arr){
    $niz = [];
    foreach($arr as $kosarkas){
        $sum = 0;
        for($i = 0; $i < count($kosarkas->getPoeni()); $i++){
            $sum += $kosarkas->getPoeni()[$i];
            $prosek = $sum / count($kosarkas->getPoeni());
        }
        $niz["$prosek"] = $kosarkas;
    }
    $maxProsek = 0;
    foreach($niz as $p => $kosarkas){
        $prosek = floatval($p);
        if($prosek > $maxProsek){
            $maxProsek = $prosek;
            $kosarkasProsekMax = $kosarkas;
        }
    }
    return $kosarkasProsekMax;
}


echo "<p>Kosarkas koji je u porseku postigao najvise poena je: </p>";
najviseProsecnoPoena($niz)->ispis();






?>