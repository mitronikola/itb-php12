<?php

    // Zadatak 1.
    for ($i = 1; $i <= 20; $i++) {
        echo "$i ";
    }
    echo "<hr>";

    // Zadatak 2.
    for ($i = 20; $i >= 1; $i--) {
        echo "$i ";
    }
    echo "<hr>";

    // Zadatak 3.
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "$i ";
        }
    }
    echo "<hr>";

    //Zadatak 4.
    for ($i = 5; $i <= 15; $i++) {
        echo $i * 2 . " ";
    }
    echo "<hr>";

    //Zadatak 5.
    $rez = 0;
    for ($i = 1; $i <= 100; $i++) {
        $rez += $i;
    }
    echo "Suma brojeva od 1 do 100 je: $rez ";
    echo "<hr>";

    //Zadatak 6.
    $rez = 0;
    $n = 10;
    for ($i = 1; $i <= $n; $i++) {
        $rez += $i;
    }
    echo "Suma brojeva od 1 do $n je: $rez ";
    echo "<hr>";

    //Zadatak 7.
    $rez = 0;
    $n = 10;
    $m = 20;
    for ($i = $n; $i <= $m; $i++) {
        $rez += $i;
    }
    echo "Suma brojeva od $n do $m je: $rez ";
    echo "<hr>";

    //Zadatak 8.
    $n = 2;
    $m = 6;
    $proizvod = 1;
    for ($i = $n; $i <= $m; $i++) {
        $proizvod *= $i;
    }
    echo "Proizvod brojeva od $n do $m je: $proizvod ";
    echo "<hr>";

    //Zadatak 9.
    $n = 2;
    $m = 6;
    $suma = 0;
    for ($i = $n; $i <= $m; $i++) {
        $suma += $i**2;
    }
    echo "Suma kvadrata brojeva od $n do $m je: $suma ";
    echo "<hr>";

    /////////////////////////////////

    //Zadatak 10.
    //1.nacin
    $n = 7;
    for ($i= 1; $i<=$n; $i++) {
        if($i%3==1) {
            echo "<img src='../resources/1.jpg' alt=''slika1 style='width:300px; height:200px;'>";
        }
        elseif ($i%3==2) {
            echo "<img src='../resources/2.jpg' alt=''slika2 style='width:300px; height:200px;'>";
        }
        else {
            echo "<img src='../resources/3.jpg' alt=''slika3 style='width:300px; height:200px;'>";
        }
    }

    echo "<hr>";

    //2.nacin
    $n=7;
    for ($i=1; $i<=$n; $i++) {
        $ost = $i%3;
        if($ost==0) {
            $ost = 3;
        }
        echo "<img src='../resources/$ost.jpg' alt='slika3' style='width:300px; height:200px;'>";
    }

    //3.nacin - probaj preko naredbe Switch


    echo "<hr>";
    //Zadatak 10. dodatni
    //Da je zadatak glasio da treba da n puta ispisete 3 slike
    $n=4;
    for ($i=1; $i<=$n; $i++) {
        for ($j=1; $j<=3; $j++) {
            echo "<img src='../resources/$j.jpg' alt='slika' style='width:300px; height:200px;'>";
        }
        echo "<br/>";
    }


    //Dodatni zadatak. Sahovska tabla, for petlje.
    //Zadatak 11.
    echo "<hr>";
    $n=30;
    $zbir=0;
    for ($i; $i<=$n; $i++) {
        if ($i%9==0) {
            $zbir+=$i;
        }
    }
    echo "<p>Zbir brojeva deljivih sa 9 u intervalu od 1 do 30 je: $zbir</p>";

    //Zadatak 12.
    echo "<hr>";
    $n=100;
    $pro=1;
    for ($i=20; $i<=$n; $i++) {
        if ($i%11==0) {
            $pro*=$i;
        }
    }
    echo "<p>Proizvod brojeva deljivih sa 11 u intervalu od 20 do 100 je: $pro</p>";

    //Zadatak 13.
    echo "<hr>";
    $n=150;
    $br=0;
    for ($i=5; $i<=$n; $i++) {
        if ($i%13==0) {
            $br++;
        }
    }
    echo "<p>Brojeva deljivih sa 13 u intervalu od 5 do 150 je: $br</p>";

    //Zadatak 14.
    echo "<hr>";
    $n=4;
    $m=12;
    $sum=0;
    $br=0;
    for ($i=$n; $i<=$m; $i++) {
        $sum+=$i;
        $br++;
    }
    $arsr=$sum/$br;
    echo "<p>Aritmeticka sredina brojava od $n do $m je $arsr</p>";

    //Zadatak 15.
    echo "<hr>";
    $n = 5;
    $m = -20;
    if ($n>$m) {
        $i=$m;
        $j=$n;
    }
    else {
        $i=$n;
        $j=$m;
    }
    $brN=0;
    $brP=0;
    for ($i; $i<=$j; $i++) {
        if ($i<0) {
            $brN++;
        }
        elseif ($i>0) {
            $brP++;
        }
    }
    echo "<p>U intervalu od $n do $m ima $brN negativnih brojeva i $brP pozitivnih brojeva</p>";

    //Zadatak 16.
    echo "<hr>";
    $n=50;
    $br=0;
    for ($i=5; $i<=$n; $i++) {
        if ($i%3==0 || $i%5==0) {
            $br++;
        }
    }
    echo "<p>Brojeva deljivih sa 3 ili sa 5 u intervalu od 5 do 50 je: $br</p>";

    //Zadatak 17.
    echo "<hr>";
    $n=2;
    $m=22;
    $br=0;
    $suma=0;
    for ($i=$n; $i<=$m; $i++) {
        if ($i%10==4) {
            $br++;
            $suma+=$i;
        }
    }
    echo "<p>Brojeva u intervalu od $n do $m kojima je poslednja cifra 4 i parni su ima: $br; dok njihova suma iznosi: $suma</p>";

    //Zadatak 18.
    echo "<hr>";
    $n=2;
    $m=22;
    $a=6;
    for ($i=$n;$i<=$m; $i++) {
        if ($i%$a==0) {
            echo "$i ";
        }
    }

    //2. nacin
    echo "<hr>";
    $start = ceil($n/$a) * $a;
    $end = floor ($m/$a) * $a;
    for ($i=$start; $i<=$end; $i+=$a) {
            echo "$i ";
    }

    //Zadatak 19.
    echo "<hr>";
    $n=2;
    $m=22;
    $a=6;
    for ($i=$n;$i<=$m; $i++) {
        if ($i%$a!=0) {
            echo "$i ";
        }
    }

    //Zadatak 20.
    echo "<hr>";
    $n=2;
    $m=22;
    $a=6;
    $sum=0;
    for ($i=$n;$i<=$m; $i++) {
        if ($i%$a!=0) {
            $sum+=$i;
        }
    }
    echo "<p>Suma brojeva koji nisu deljivi sa $a u intervalu od $n do $m je: $sum</p>";

    //Zadatak 21.
    echo "<hr>";
    $n=2;
    $m=22;
    $a=4;
    $b=5;
    $pro=1;
    for ($i=$n;$i<=$m; $i++) {
        if ($i%$a==0 && $i%$b!=0) {
            $pro*=$i;
        }
    }
    echo "<p>Proizvod brojeva koji su deljivi sa $a, a nisu deljivi sa $b u intervalu od $n do $m je: $pro</p>";

    //2.nacin
    echo "<hr>";
    $pro=1;
    $start = ceil($n/$a) * $a;
    $end = floor ($m/$a) * $a;
    for ($i=$start; $i<=$end; $i+=$a) {
        if ($i % $b == 0) {
            continue; //Kada dodje do ove linije ne izvrsava se ono sto je unutar petlje, vec nastavlja naradni korak u petlji
        }
        $pro*=$i;
    }
    echo "<p>Proizvod brojeva koji su deljivi sa $a, a nisu deljivi sa $b u intervalu od $n do $m je: $pro</p>";
?>