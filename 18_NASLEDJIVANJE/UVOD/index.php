<?php

    require_once "Automobil.php";

    /* OVAKO SMO RADILI DOK JE U OSNOVNOJ KLASI SVE BILO PUBLIC
    $v = new Vozilo();
    //$v->boja = "bela";
    //$v->tip = "BMW";

    //echo "<p>$v->boja, $v->tip</p>";
    $v->voziVozilo();


    $a = new Automobil();
    //$a->boja = "zuta";
    //$a->tip = ("Peugeout");
    //echo "<p>$a->boja, $a->tip</p>";
    $a->voziVozilo();
    $a->voziAutomobil();
    */

    $v = new Vozilo("bela", "BMW");
    $v->voziVozilo();

    $a = new Automobil("zuta", "Peugeout");
    $a->voziVozilo();
    $a->voziAutomobil();

?>