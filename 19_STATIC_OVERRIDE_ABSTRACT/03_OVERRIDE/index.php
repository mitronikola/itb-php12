<?php

require_once "Trougao.php";
require_once "Kvadrat.php";
require_once "Pravougaonik.php";
require_once "Romb.php";


$t1 = new Trougao(3,4,5);
$t1->setA(60);
//echo "<p>" . $t1->obimTrougla() . ", " . $t1->povrsinaTrougla() . "</p>";

$t2 = new Trougao(12,5.6,4);
$t3 = new Trougao(9.7,10,3);

$p1 = new Pravougaonik(5, 9);
//echo "<p>" . $p1->obimPravougaonik() . ", " . $p1->povrsinaPravougaonik() . "</p>";

$p2 = new Pravougaonik(10, 7.6);
$p3 = new Pravougaonik(2.4, 8);

$k1 = new Kvadrat(3);
//echo "<p>" . $k1->obimKvadrata() . ", " . $k1->povrsinaKvadrata() . "</p>";

$k2 = new Kvadrat(5);
$k3 = new Kvadrat(5);

$r1 = new Romb(6, 15);

$oblici = [$t1, $k1, $p1];
foreach($oblici as $oblik){
    echo "<p>" . $oblik->obim() . ", " . $oblik->povrsina() . "</p>";
}

$oblici[] = $r1;
foreach($oblici as $oblik){
    //echo "<p>" . $oblik->obim() . ", " . $oblik->povrsina() . "</p>";
    $oblik->ispis();
}






?>