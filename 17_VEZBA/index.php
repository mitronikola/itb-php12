<?php

    
    //// Zadatak 1.

    $ocene = [10, 9, 9, 10, 9, 10, 10, 10, 10, 9, 10, 9, 10];

    function prosecnaOcena($ocene){
        $sum = 0;
        for($i=0; $i<count($ocene); $i++){
            $sum += $ocene[$i];
        }
        $prosek = $sum / count($ocene);
        return $prosek;
    }

    echo round(prosecnaOcena($ocene), 2);
    echo "<hr>";

    function maxOcena($ocene){
        $max = $ocene[0];
        for($i=1; $i<count($ocene); $i++){
            if($ocene[$i] > $max){
                $max = $ocene[$i];
            }
        }
        return $max;
    }

    echo maxOcena($ocene);
    echo "<hr>";


    function brojMaxPredmeta($ocene){
        $maxOcena = maxOcena($ocene);
        $brojMaxOcena = 0;
        for($i=0; $i<count($ocene); $i++){
            if($ocene[$i] == $maxOcena){
                $brojMaxOcena++;
            }
        }

        return $brojMaxOcena;
    }

    echo brojMaxPredmeta($ocene);
    echo "<hr>";


    function kandidat($ocene){
        $br1 = 0;
        $br2 = 0;
        for($i=0; $i<count($ocene); $i++){
            if($ocene[$i] != 9 && $ocene[$i] != 10){
                return false;
            }
            elseif($ocene[$i] == 9){
                $br1++;
            }
            elseif($ocene[$i] == 10){
                $br2++;
            }
        }
        if($br2 >= $br1){
            return true;
        }
        else{
            return false;
        }
    }

    if(kandidat($ocene)){
        echo "<p>Student je kandidat za studenta generacije!</p>";
    }
    else{
        echo "<p>Student nije kandidat za studenta generacije!</p>";
    }

    function maxDuzinaNiza($ocene){
        $max = maxOcena($ocene);
        $br = 0;
        $maxNiz = 0;
        for($i=0; $i<count($ocene); $i++){
            if($ocene[$i] == $max){
                $br++;
                if($br > $maxNiz){
                    $maxNiz = $br;
                }
            }
            else{
                $br=0;
            }
        }
        return $maxNiz;
    }

    echo "<hr>";
    echo maxDuzinaNiza($ocene);

    // Zadatak 2.

    $student = [
        ["naziv ispita" => "Opsta psihopatologija", "datum polaganja" => "2022/02/12", "ocena" => 9],
        ["naziv ispita" => "Kognitivna psihologija", "datum polaganja" => "2021/08/22", "ocena" => 9],
        ["naziv ispita" => "Psihologija opazanja", "datum polaganja" => "2020/06/28", "ocena" => 10],
        ["naziv ispita" => "Metodologija psiholoskih istrazivanja", "datum polaganja" => "2022/01/15", "ocena" => 10],
        ["naziv ispita" => "Statistika 1", "datum polaganja" => "2019/07/01", "ocena" => 10],
        ["naziv ispita" => "Psihologija ucenja", "datum polaganja" => "2020/09/19", "ocena" => 9]
    ];

    // 2. Napisati funkciju koja vraća prosečnu ocenu studenta.

    /*function prosecnaOcenaA($student){
        $sum = 0;
        for($i=0; $i<count($student); $i++){
            $sum += $student[$i]["ocena"];
        }
        return $prosek = $sum / count($student);
    }
    echo "<hr>";
    echo prosecnaOcenaA($student);*/

    // 2. - drugi nacin

    function prosecnaOcenaA($student){
        $sum = 0;
        foreach($student as $v){
            $sum += $v["ocena"];
        }
        return $prosek = $sum / count($student);
    }
    echo "<hr>";
    echo prosecnaOcenaA($student);

    // 3. Napisati funkciju koja vraća maksimalnu ocenu koju je student dobio u toku studija.

    function maxOcenaA($student){
        $maxOcena = $student[0]["ocena"];
        foreach($student as $v){
            if($v["ocena"] > $maxOcena){
                $maxOcena = $v["ocena"];
            }
        }
        return $maxOcena;
    }

    echo "<hr>";
    echo maxOcenaA($student);

    // 4. Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.
    /* function brojMaxOcenaA($student){
        $maxOcena = maxOcenaA($student);
        $br = 0;
        foreach($student as $v){
            if($v["ocena"] == $maxOcena){
                $br++;
            }
        }
        return $br;
    }

    echo "<hr>";
    echo brojMaxOcenaA($student); */

    // 4. drugi nacin
    function brojMaxOcenaA($student){
        $maxOcena = maxOcenaA($student);
        $br = 0;
        for($i=0; $i<count($student); $i++){
            if($student[$i]["ocena"] == $maxOcena){
                $br++;
            }
        }
        return $br;
    }
    echo "<hr>";
    echo brojMaxOcenaA($student);

    // 5. Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki
    // nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.
    echo "<hr>";
    function kandidatA($student){
        $br9 = 0;
        $br10 = 0;
        foreach($student as $v){
            if($v["ocena"] < 9){
                return false;
            }
            elseif($v["ocena"] == 9){
                $br9++;
            }
            else{
                $br10++;
            }
        }
        if($br10 >= $br9){
            return true;
        }
        else{
            return false;
        }
    }

    if(kandidatA($student)){
        echo "<p>Student je kandidat za studenta generacije!</p>";
    }
    else{
        echo "<p>Student nije kandidat za studenta generacije!</p>";
    }


    // 6. Napisati funkciju koja vraća maksimalnu dužinu podniza u kojoj je dobijao maksimalnu ocenu (ova dužina može biti jednaka 1). 
    
    function maxOcenaDuzinaA1($student){
        $maxOcena = maxOcenaA($student);
        $br = 0;
        $maxNiz = 0;
        foreach($student as $v){
            if($v["ocena"] == $maxOcena){
                $br++;
                if($br > $maxNiz){
                    $maxNiz = $br;
                }
            }
            else{
                $br = 0;
            }
        }
        return $maxNiz;
    }
    echo "<hr>";
    echo maxOcenaDuzinaA1($student);


    // 6. drugi nacin

    $student = [
        ["naziv ispita" => "Opsta psihopatologija", "datum polaganja" => "2022/02/12", "ocena" => 9],
        ["naziv ispita" => "Kognitivna psihologija", "datum polaganja" => "2021/08/22", "ocena" => 9],
        ["naziv ispita" => "Psihologija opazanja", "datum polaganja" => "2020/06/28", "ocena" => 6],
        ["naziv ispita" => "Metodologija psiholoskih istrazivanja", "datum polaganja" => "2022/01/15", "ocena" => 10],
        ["naziv ispita" => "Statistika 1", "datum polaganja" => "2019/07/01", "ocena" => 10],
        ["naziv ispita" => "Psihologija ucenja", "datum polaganja" => "2020/09/19", "ocena" => 9],
        ["naziv ispita" => "Psihologija opazanja", "datum polaganja" => "2020/06/28", "ocena" => 6],
        ["naziv ispita" => "Statistika 2", "datum polaganja" => "2020/06/05", "ocena" => 10],
        ["naziv ispita" => "Psihologija medjuljudskih odnosa", "datum polaganja" => "2019/09/01", "ocena" => 10],
        ["naziv ispita" => "Klinicka psihologija", "datum polaganja" => "2022/01/29", "ocena" => 9]
    ];

    /* function maxOcenaDuzinaA2($student){
        $maxOcena = maxOcenaA($student);
        
        $max = 0;
        $br = 0;
        $niz = [];
        foreach($student as $v){
            if($v["ocena"] == $maxOcena){
                $niz[] = $v["ocena"];
                $nizGlavni[] = $niz;
            }
            else{
                $niz = [];
            }
        }
        var_dump($nizGlavni);
        $maxNiz = 0;
        foreach($nizGlavni as $niz){
            if(count($niz) > $maxNiz){
                $maxNiz = count($niz);
            }
        }
        
        return $maxNiz;
    }
    echo "<hr>";
    echo maxOcenaDuzinaA2($student); */

    // Zadatak 8.
    // Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja ispisuje predmete koje je polagao date godine.
    echo "<hr>";
    function polozeniPredmetiGod($student, $godina){
        echo "<p>Godine $godina. student je polozio sledece ispite: ";
        foreach($student as $v){
            if((strpos($v["datum polaganja"], $godina)) !== false){
                echo $v["naziv ispita"] . "(" . $v["ocena"] . "); ";
            }
        }
        echo "</p>";
    }

    polozeniPredmetiGod($student, 2020);

    // Zadatak 9.
    // Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja vraća prosečnu ocenu studenta na ispitima koje je
    // polagao date godine. 

    function prosecnaOcenaGod($student, $godina){
        $sum = 0;
        $br = 0;
        foreach($student as $ispit){
            if((strpos($ispit["datum polaganja"], $godina)) !== false){
                $sum += $ispit["ocena"];
                $br++;
            }
        }
        if($br == 0){
            return 0;
        }
        return $prosekGod = round($sum / $br, 2);
    }
    echo "<hr>";
    echo prosecnaOcenaGod($student, 2022);

    // Zadatak 10.
    // Napisati funkciju koja vraća naziv predmeta na kojem je student dobio maksimalnu ocenu. Ukoliko ima više ovakvih predmeta, 
    // vratiti onaj koji je najskorije položio.

    /* function nazivPredmetaMaxOcena($student){
        $maxOcena = maxOcenaA($student);
        foreach($student as $ispit){
            if($ispit["ocena"] == $maxOcena){
                $nazivPredmeta = $ispit["naziv ispita"];
            }
        }
        return $nazivPredmeta;
    }
    echo "<hr>";
    echo nazivPredmetaMaxOcena($student); */

    /*function nazivPredmetaMaxOcena($student){
        $maxOcena = maxOcenaA($student);
        for($i = count($student)-1; $i >= 0; $i--){
            if($student[$i]["ocena"] == $maxOcena){
                return $student[$i]["naziv ispita"];
            }
        }
    }

    echo "<hr>";
    echo nazivPredmetaMaxOcena($student);*/

    // Nacin na casu
    echo '<hr>';
    function predmetNajvecaOcena($student){
        $maxOcena = maxOcenaA($student);
        $maxTime = 0;
        $rezultat = "";
        foreach($student as $predmeti){
            if($predmeti["ocena"] == $maxOcena && strtotime($predmeti["datum polaganja"]) >= $maxTime){
                $maxTime = strtotime($predmeti["datum polaganja"]);
                $rezultat = $predmeti["naziv ispita"];
            }
    }
    return $rezultat;
    }

    echo predmetNajvecaOcena($student);
    

    // Zadatak 11.
    // Napisati funkciju kojoj se prosleđuje i neki string kao dodatni parametar, kao i dva cela broja, a koja vraća broj ispita koje
    // je student položio, a čiji naziv predmeta sadrži dati string, kao i da se ocena nalazi između zadata dva broja.
    function poklapanje($student, $string, $br1, $br2){
        $br = 0;

        for($i = 0; $i < count($student); $i++){
            //$nazivIspita = strtolower($student[$i]["naziv ispita"]);
            $x = stripos($student[$i]["naziv ispita"], $string);
            if($x !== false && $student[$i]["ocena"] >= $br1 && $student[$i]["ocena"] <= $br2){
                $br++;
            } 
            elseif($x !== false && $student[$i]["ocena"] <= $br1 && $student[$i]["ocena"] >= $br2){
                $br++;
            }
        }
        return $br;
    }
    echo "<hr>";
    echo poklapanje($student, "psiho", 10, 7);

    //////////////////// Zadatak 3.

    









    
    


    





    

    





?>