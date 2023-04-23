<?php
    
    $pol = 'm';
    $godine = 16;

    if ($pol == 'm')
    {
        if ($godine >= 18)
        {
            echo "<p>Musko, punoletan</p>";
        }
        else
        {
            echo "<p>Musko, maloletan</p>";
        }
    }
    else
    {
        if ($godine >= 18)
        {
            echo "<p>Zensko, punoletna</p>";
        }
        else
        {
            echo "<p>Zensko, maloletna</p>";
        }
    }

    $pol = 'z';
    $godine = 24;

    if ($pol == 'm' && $godine >= 18)
    {
        echo "<p>Musko, punoletan</p>"; 
    }
    elseif ($pol == 'm' && $godine < 18)
    {
        echo "<p>Musko, maloletan</p>";
    }
    elseif ($pol == 'z' && $godine >= 18)
    {
        echo "<p>Zensko, punoletna</p>";
    }
    else
    {
        echo "<p>Zensko, maloletna</p>";
    }

    //Zadatak 19
    $x19 = 12;
    $y19 = 90;
    $z19 = 120;

    //Najveci
    if ($x19 > $y19) {
        if ($x19 > $z19) {
            $max19 = $x19;
        }
        else {
            $max = $z19;
        }
    }

    else {
        if ($y19 > $z19) {
            $max19 = $y19; 
        }
        else {
            $max19 = $z19;
        }
    }

    //Najmanji
    if ($x19 < $y19) {
        if ($x19 < $z19) {
            $min19 = $x19;
        }
        else {
            $min = $z19;
        }
    }

    else {
        if ($y19 < $z19) {
            $min19 = $y19; 
        }
        else {
            $min19 = $z19;
        }
    }

    echo  "<p> $min19 " . $sre = $x19 + $y19 + $z19 - ($max19 + $min19) . " $max19 </p>";

    //Zadatak 20
    $x20 = 200;
    $y20 = 199;

    if ($x20 > $y20) {
        if ($x20 % 2 == 0) {
            echo "<p>Veci broj $x20 je paran";
        }
        else {
            echo "<p>Veci broj $x20 je neparan";
        }
    }
    else {
        if ($y20 % 2 == 0) {
            echo "<p>Veci broj $y20 je paran";
        }
        else {
            echo "<p>Veci broj $y20 je neparan";
        }
    }



?>