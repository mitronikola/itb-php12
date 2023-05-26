<?php

    require_once "Vozilo.php";
    require_once "Automobil.php";

    $v = new Vozilo("a", "b", "c");
    $v->ispis();

    echo $v->javnoPolje;

    $a = new Automobil("d", "e", "f", 5);
    $a->ispis();
    $a->ispisAuto();




?>.