<?php
    $broj = 150;
    if ($broj <= 10)
    {
        echo "<p>Broj prve desetice</p>";
    }
    elseif ($broj <= 20)
    {
        echo "<p>Broj druge desetice</p>";
    }

    else
    {
        echo "<p>Broj veci od 20</p>";
    }

    //Alternativno
    if ($broj > 20)
    {
        echo "<p>Broj veci od 20</p>";
    }
    elseif ($broj > 10)
    {
        echo "<p>Broj druge desetice</p>";
    }
    else
    {
        echo "<p>Broj prve desetice</p>";
    }
?>