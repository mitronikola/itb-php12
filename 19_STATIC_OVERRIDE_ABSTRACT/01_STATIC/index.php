<?php

require_once "Krug.php";

$krug1 = new Krug(10);
$krug2 = new Krug(5);

echo "<hr>";
echo "<p style='color:red'>Broj krugova do sada je: " . Krug::getBrojKrugova() . "</p>";
echo "<hr>";

$krug3 = new Krug(6.6);

echo "<p>Obim kruga sa poluprecnikom " . $krug1->getR() . " je: " . $krug1->obimKruga() . "</p>";
echo "<hr>";
echo "<p>Povrsina kruga sa poluprecnikom " . $krug1->getR() . " je: " . $krug1->povrsinaKruga() . "</p>";
echo "<hr>";
echo "<p>Obim kruga sa poluprecnikom " . $krug2->getR() . " je: " . $krug2->obimKruga() . "</p>";
echo "<hr>";
echo "<p>Povrsina kruga sa poluprecnikom " . $krug2->getR() . " je: " . $krug2->povrsinaKruga() . "</p>";
echo "<hr>";
echo "<p>Obim kruga sa poluprecnikom " . $krug3->getR() . " je: " . $krug3->obimKruga() . "</p>";
echo "<hr>";
echo "<p>Povrsina kruga sa poluprecnikom " . $krug3->getR() . " je: " . $krug3->povrsinaKruga() . "</p>";

// echo Krug::PI;

// $a->pi = 3.14159; // ovako postavimo ako je public polje
echo "<hr>";
echo "<p style='color:red'>Broj krugova do sada je: " . Krug::getBrojKrugova() . "</p>";
echo "<hr>";

$krug4 = new Krug(2);
echo "<hr>";
echo "<p>Obim kruga sa poluprecnikom " . $krug4->getR() . " je: " . $krug4->obimKruga() . "</p>";
echo "<hr>";
echo "<p>Povrsina kruga sa poluprecnikom " . $krug3->getR() . " je: " . $krug4->povrsinaKruga() . "</p>";

$krug4->setPi(3.14159);
echo "<hr>";
echo "<p>Obim kruga sa poluprecnikom " . $krug4->getR() . " je: " . $krug4->obimKruga() . "</p>";
echo "<hr>";
echo "<p>Povrsina kruga sa poluprecnikom " . $krug4->getR() . " je: " . $krug4->povrsinaKruga() . "</p>";

echo "<hr>";
echo Krug::getPi();

$krug5 = new Krug(2.7);
echo "<hr>";
echo "<p>Obim kruga sa poluprecnikom " . $krug5->getR() . " je: " . $krug5->obimKruga() . "</p>";
echo "<hr>";
echo "<p>Povrsina kruga sa poluprecnikom " . $krug5->getR() . " je: " . $krug5->povrsinaKruga() . "</p>";
Krug::setBrojDecimala(4);
echo "<hr>";
echo "<p>Obim kruga sa poluprecnikom " . $krug5->getR() . " je: " . $krug5->obimKruga() . "</p>";
echo "<hr>";
echo "<p>Povrsina kruga sa poluprecnikom " . $krug5->getR() . " je: " . $krug5->povrsinaKruga() . "</p>";

echo "<hr>";
echo "<p style='color:red'>Broj krugova do sada je: " . Krug::getBrojKrugova() . "</p>";

echo "<hr>";
echo "<hr>";
echo "<hr>";















?>