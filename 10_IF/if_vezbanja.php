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
    echo "<p>Veci je broj 2`" . (($a > $b) ? $a : $b) . "</p>";

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

?>
