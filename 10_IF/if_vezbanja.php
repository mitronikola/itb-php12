<?php

    // Zadatak 1
    $a = 19.35;
    $b = -3.14;

    if ($a > $b)
    {
        echo "<p>Veci je broj $a</p>";
    }
    else
    {
        echo "<p>Veci je broj $b</p>"; //Ne ispisuje "Veci je broj"
    }

    //Alternativno:
    echo "<p>Veci je broj " . (($a > $b) ? $a : $b) . "</p>";

    //Zadatak 4
    $dobaDana = date("a");

    //echo "<p>$dobaDana</p>";

    if ($dobaDana == "am")
    {
        echo "<p>Pre podne</p>";
    }
    else 
    {
        echo "<p>Posle podne</p>";
    }

    //Alternativno
    if ($dobaDana == "pm")
    {
        echo "<p>Posle podne</p>";
    }
    else 
    {
        echo "<p>Pre podne</p>";
    }

    // Zadatak 3
    $pol = "Z";
    if ($pol == "M")
    {
        echo "<p> <img src='icons/m.png' alt='muski pol'> </p>";
    }
    else
    {
        echo "<p> <img src='icons/f.png' alt='zenski pol'> </p>";
    }

    //Zadatak 2
    $t = -0.1;
    if ($t >= 0)
    {
        echo "<p>Temperatura je u plusu</p>";
    }
    else
    {
        echo "<p>Temperatura je u minusu</p>";
    }

    //Zadatak 5
    $trenutnaGod = date("Y");
    //echo "<p>$trenutnaGod</p>";
    $godinaRodj = 2006;
    $razlika = $trenutnaGod - $godinaRodj;
    if ($razlika >= 18)
    {
        echo "<p>Osoba je punoletna</p>";
    }
    else
    {
        echo "<p>Osoba nije punoletna</p>";
    }

    //Zadatak 6
    $a = 9;
    $b = -6;
    $c = 6;

    if ($a > $b)
    {
        $pom = $a;
        $a = $b;
        $b = $pom;
    } 

    if ($a > $c)
    {
        $pom = $a;
        $a = $c;
        $c = $pom;
    }

    if ($b > $c)
    {
        $pom = $b;
        $b = $c;
        $c = $pom;
    }

    echo "<p>$a <= $b <= $c</p>";

    //Zadatak 7
    $poeni = 90;
    if ($poeni <= 50)
    {
        echo "<p>Student je pao ispit</p>";
    }
    elseif ($poeni <= 60)
    {
        echo "<p>Student je polozio ispit i dobio ocenu 6</p>";
    }
    elseif ($poeni <= 70)
    {
        echo "<p>Student je polozio ispit i dobio ocenu 7</p>";
    }
    elseif ($poeni <= 80)
    {
        echo "<p>Student je polozio ispit i dobio ocenu 8</p>";
    }
    elseif ($poeni <= 90)
    {
        echo "<p>Student je polozio ispit i dobio ocenu 9</p>";
    }
    else
    {
        echo "<p>Student je polozio ispit i dobio ocenu 10</p>";
    }

    //Zadatak 8
    $danasnjiDan = date ("D");
    //echo "<p>$danasnjiDan</p>";
    //$danasnjiDan = "Sat";

    if ($danasnjiDan == "Mon")
    {
        echo "<p>Radni dan</p>";
    }
    elseif ($danasnjiDan == "Tue")
    {
        echo "<p>Radni dan</p>"; 
    }
    elseif ($danasnjiDan == "Wen")
    {
        echo "<p>Radni dan</p>";
    }
    elseif ($danasnjiDan == "Tue")
    {
        echo "<p>Radni dan</p>";
    }
    elseif ($danasnjiDan == "Fri")
    {
        echo "<p>Radni dan</p>";
    }
    else
    {
        echo "<p>Vikend</p>";
    }
    
    //Zadatak 9
    date_default_timezone_set('Europe/Belgrade');
    $trenutnoVreme = date ("G");
    //echo "<p>$trenutnoVreme</p>";
    if ($trenutnoVreme < 12)
    {
        echo "<p>dobro jutro</p>";
    }
    elseif ($trenutnoVreme < 18)
    {
        echo "<p>dobar dan</p>"; 
    }
    else 
    {
        echo "<p>dobro vece</p>";
    }

    //Zadatak 10
    $dan1 = 29;
    $mesec1 = 6;
    $godina1 = 1934;
    $dan2 = 30;
    $mesec2 = 6;
    $godina2 = 1934;

    if ($godina1 > $godina2)
    {
        echo "<p>$dan2.$mesec2.$godina2 je raniji datum</p>";
    }
    elseif ($godina1 < $godina2)
    {
        echo "<p>$dan1.$mesec1.$godina1 je raniji datum</p>";  
    }
    elseif ($mesec1 > $mesec2)
    {
        echo "<p>$dan2.$mesec2.$godina2 je raniji datum</p>";
    }
    elseif ($mesec1 < $mesec1)
    {
        echo "<p>$dan1.$mesec1.$godina1 je raniji datum</p>";
    }
    elseif ($dan1 > $dan2)
    {
        echo "<p>$dan2.$mesec2.$godina2 je raniji datum</p>"; 
    }
    elseif ($dan1 < $dan2)
    {
        echo "<p>$dan1.$mesec1.$godina1 je raniji datum</p>";
    }
    else
    {
        echo "<p>Datumi su identicni</p>";
    }

    //Zadatak 11
    //echo "<p>$trenutnoVreme</p>";
    $trenutniSati = date ("G");
    $trenutniMinuti = date ("i");
    //echo "<p>$trenutniSati:$trenutniMinuti</p>";
    if ($trenutniSati < "09")
    {
        echo "<p>Ne radi</p>";
    }
    elseif ($trenutniSati < "17")
    {
        echo "<p>Radi</p>";
    }
    else 
    {
        echo "<p>Ne radi</p>";
    }


    // Zadatak 12
    // Prvi lekar
    $p1 = 9;
    $k1 = 17;

    // Drugi lekar
    $p2 = 1;
    $k2 = 3;

    if  ($k1 < $p2)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    elseif ($k2 < $p1)
    {
        echo "<p>Ne preklapaju se</p>";
    }
    else
    {
        echo "<p>Preklapaju se</p>";
    }

    //Zadatak 13
    $n = 45;
    if ($n % 2 == 0)
    {
        echo "<p>$n je paran broj</p>";
    }
    else
    {
        echo "<p>$n je neparan broj</p>";
    }

    //Zadatak 15
    $n1 = 14;
    $n2 = 71.1;

    if ($n1 > $n2)
    {
        //$razlika = $n1 - $n2;
        echo "<p> " . $n1 - $n2 . " </p>";
    }
    elseif ($n1 < $n2)
    {
        //$razlika = $n2 -$n1;
        echo "<p> " . $n2 - $n1 . " </p>";
    }
    else
    {
        echo "<p>Brojevi su jednaki</p>";
    }

    //Zadatak 16
    $n3 = 0;
    if ($n3 <= 0)
    {
        echo "<p> " . $n3 - 1 . " </p>";
    }
    else
    {
        echo "<p> " . $n3 + 1 . " </p>";
    }
    //Zadatak 17
    $a = 5;
    $b = 9;
    $c = -3;

    $max = $a;
    if ($b > $max)
    {
        $max = $b;
    }
    if ($c > $max)
    {
        $max = $c;
    }

    $min = $a;
    if ($b < $min)
    {
        $min = $b;
    }
    if ($c < $min)
    {
        $min = $c;
    }

    $sr = $a + $b + $c - ($min + $max);

    echo "<p>$min <= $sr <= $max</p>";

    //Zadatak 18
    $n10 = -10;
    if (fmod($n10,1) !==0.0)
    {
        echo "<p>Broj nije ceo</p>";
    }
    else
    {
        echo "<p>Broj je ceo</p>";
    }

?>
