<?php

require_once "AutoKredit.php";
require_once "StambeniKredit.php";

$aK1 = new AutoKredit("OTP banka", 100000, 10.12, 5, 12.43);

$sK1 = new StambeniKredit("Banca Intesa", 250000, 05.65, 10);

$aK2 = new AutoKredit("Vojvodjanska banka", 1000000, 08.12, 15, 07.43);
$aK3 = new AutoKredit("Erste banka", 250000, 05.48, 2, 12.85);

$sK2 = new StambeniKredit("Societe general", 18900000, 05.18, 17);
$sK3 = new StambeniKredit("Banca Intesa", 25000000, 03.65, 25);

$krediti = [$aK1, $aK2, $aK3, $sK1, $sK2, $sK3];

foreach($krediti as $kredit){
    $kredit->ispis();
}













?>