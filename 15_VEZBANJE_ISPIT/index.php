<?php

    //Zadatak 2.

    $letovi = array("Madrid" => 90, "Lisabon" => 75, "Pariz" => 129, "Beograd" => 129, "Moskva" => 88, "Bec" => 111, "Ljubljana" => 67, "Rim" => 102, "Barselona" => 99, "Liverpul" => 77);

    function maxBrojPutnika($arr) {
        $max = 0;
        foreach($arr as $destinacija => $brojPutnika) {
            if($brojPutnika > $max) {
                $max = $brojPutnika;
            }
        }
        return $max;
    }   

    echo "Maksimalan broj putnika na nekom od letova je: " . maxBrojPutnika($letovi);
    
    //Zadatak 3.
    echo "<hr>";
    function brojMax($arr) {
        $x = 0;
        $max = [];
        foreach($arr as $destinacija => $brojPutnika) {
            if($brojPutnika > $x) {
                $x = $brojPutnika;
                $max = [$brojPutnika];
            }
            elseif($brojPutnika == $x) {
                $max[] = $brojPutnika;
            }
        }
        return count($max);
    }   

    echo "Broj letova na kojima je leteo maksimalan broj putnika je: " . brojMax($letovi);

    //Zadatak 4.
    echo "<hr>";
    function prosek($arr) {
        $sum = 0;
        foreach($arr as $destinacija => $brojPutnika) {
            $sum += $brojPutnika;
        }
        $arsr = $sum / count($arr);
        $arsr = round($arsr);
        return $arsr;
    }

    echo "Prosecan broj putnika po letu je: " . prosek($letovi); 

    //Zadatak 5.
    echo "<hr>";
    function isplativ($arr, $x) {
        
        $br = 0;
        foreach($arr as $destinacija => $brojPutnika) {
            if($brojPutnika >= $x) {
                $br++;
            }
        }
        if($br > (floor(count($arr)/2))) {
            return true;
        }
        else {
            return false;
        }
    }

    $granica = 89;
    echo "Dan je bio isplativ za granicu 89: " . (isplativ($letovi, $granica)?"JESTE":"NIJE");

    // Zadatak 6.
    echo "<hr>";
    function alarmantan($arr, $x) {
        
        $br = 0;
        foreach($arr as $destinacija => $brojPutnika) {
            if($brojPutnika < $x) {
                $br++;
            }
        }
        if($br > 0) {
            return true;
        }
        else {
            return false;
        }
    }

    $granica = 67;
    echo "Dan je bio alarmantan za granicu 67: " . (alarmantan($letovi, $granica)?"JESTE":"NIJE");

    //Zadatak 7.
    echo "<hr>";
    function dobreDestinacije($arr) {
        $sum = 0;
        foreach($arr as $destinacija => $brojPutnika) {
            $sum += $brojPutnika;
        }
        $arsr = $sum / count($arr);
        foreach($arr as $destinacija => $brojPutnika) {
            if($brojPutnika > $arsr) {
                echo $destinacija . " ";
            }
        }
    }

    dobreDestinacije($letovi);


    //Zadatak 8.
    echo "<hr>";
    $letovi1 = [
        array("dest" => "Madrid", "country" => "Spanija", "time" => "18:24"),
        array("dest" => "Berlin", "country" => "Nemacka", "time" => "11:59"),
        array("dest" => "Beograd", "country" => "Srbija", "time" => "03:57"),
        array("dest" => "Rim", "country" => "Italija", "time" => "22:12"),
        array("dest" => "London", "country" => "Engleska", "time" => "10:45"),
        array("dest" => "Tokio", "country" => "Japan", "time" => "20:22"),
        array("dest" => "Berlin", "country" => "Nemacka", "time" => "17:12"),
        array("dest" => "Beograd", "country" => "Srbija", "time" => "00:02"),
        array("dest" => "Melburn", "country" => "Australija", "time" => "02:48"),
        array("dest" => "Kairo", "country" => "Egipat", "time" => "04:55")
    ];
   

    //Zadatak 9.
    
    function brojLetovaZaZemlju($letovi, $zemlja) {
        $br = 0;
        for($i = 0; $i < count($letovi); $i++) {
            $niz[] = $letovi[$i]["country"];
        }
        foreach($niz as $country) {
            if($country === $zemlja) {
                $br++;
            }
        }
        return $br;
    }

    $zemlja = "Srbija";
    echo brojLetovaZaZemlju($letovi1, $zemlja);

    // Zadatak 10.
    echo "<hr>";
    function visePrePodne($letovi) {
        $prePodne = 0;
        $poslePodne = 0;
        for($i = 0; $i < count($letovi); $i++) {
            $time = strtotime($letovi[$i]["time"]);
            $niz[] = $time; 
        }
        foreach($niz as $value) {
            if($value < strtotime('noon')) {
                $prePodne++;
            }
            else {
                $poslePodne++;
            }
        }
        if ($prePodne > $poslePodne) {
            return true;
        }
        else {
            return false;
        }
    }

    echo "Vise letova je bilo prepodne: " . (visePrePodne($letovi1)?"JESTE":"NIJE");

    // Zadatak 11.
    echo "<hr>";
    function ispisLetovaDoSada($letovi) {
        date_default_timezone_set('Europe/Belgrade');
        $trenutnoVreme = time();
        for($i = 0; $i < count($letovi); $i++) {
            if(strtotime($letovi[$i]["time"]) < $trenutnoVreme){
                echo $letovi[$i]["dest"] . "-" . $letovi[$i]["country"] . "; ";
            } 
        }
    }

    ispisLetovaDoSada($letovi1);

    // Zadatak 12.
    echo "<hr>";
    function rizicniLetovi($letovi, $crvenaZona) {
        for ($i=0; $i < count($letovi); $i++) {
            for($j=0; $j < count($crvenaZona); $j++) {
                if($letovi[$i]['country'] === $crvenaZona[$j]) {
                    echo "<p style=color:red>" . $letovi[$i]['dest'] . " " . $letovi[$i]['country'] . " " . $letovi[$i]['time'] . "</p>";
                }
            }
        }   
    }
    $crvenaZona = ['Srbija', 'Nemacka', 'Egipat'];
    rizicniLetovi($letovi1, $crvenaZona);

    // Zadatak 13.
    /* Neka destinacija je tražena ukoliko postoji više letova u toku dana za tu destinaciju. Napisati funkciju trazeneDestinacije($letovi) kojoj se prosleđuje niz letova, a koja ispisuje sve tražene destinacije (ukoliko postoje). */
    echo "<hr>";
    function trazeneDestinacije($letovi) {
        // $polasci = array ("Paris" => 1, "Madrid" => 2, "Barselona" => 1);
        $polasci = [];
        foreach($letovi as $let) {
            $destinacija = $let['dest'];
            $postojiLet = false;
            foreach($polasci as $d => $br) {
                if($d == $destinacija) {
                    $postojiLet = true;
                    $polasci[$destinacija]++;
                }
            }
            if($postojiLet == false) {
                $polasci[$destinacija] = 1;
            }
        }

        foreach($polasci as $d => $br) {
            if($br > 1) {
                echo "<p>$d je trazena destinacija</p>";
            }
        }
    }

    trazeneDestinacije($letovi1);

    // Zadatak 13. dodatni nacin
    echo "<hr>";

    function trazeneDestinacije1($letovi)
    {
        $polasci = [];
        foreach ($letovi as $let)
        {
            if(!isset($polasci[$let["dest"]])){
                $polasci[$let["dest"]] = 0;
            }
            $polasci[$let["dest"]]++;
        }
        var_dump($polasci);
        foreach ($polasci as $d => $br)
        {
            if ($br > 1)
            {
                echo "<p>$d je trazena destinacija</p>";
            }
        }
    }

    trazeneDestinacije1($letovi1);
        
    // Zadatak 14.
    /* Napisati funkciju prosecanBrojLetovaZaZemlju($letovi) kojoj se prosleđuje niz letova, a koja vraća prosečan broj letova ka nekoj zemlji. */
    echo "<hr>";

    function prosecanBrojLetovaZaZemlju($letovi) {
        $polasci = [];
        foreach($letovi as $let) {
            $destinacija = $let['country'];
            $postojiZemlja = false;
                foreach($polasci as $d => $br) {
                    if($d == $destinacija) {
                        $postojiZemlja = true;
                        $polasci[$destinacija]++;
                    }
                }
            if($postojiZemlja == false){
                $polasci[$destinacija] = 1;
            }
        }

        var_dump($polasci);
        $sum = 0;
        foreach($polasci as $d => $br) {
            $sum += $br;
        }

        return $prosecanBrojLetova = $sum / count($polasci);


    }

    echo prosecanBrojLetovaZaZemlju($letovi1);

    
    
    
    // Zadatak 15.
    echo "<hr>";
    $dan = array(
        "datum" => "2023/05/16",
        "kisa" => true,
        "sunce" => true,
        "oblacno" => false,
        "temperature" => array(25, 27, 33, 27, 32, 29, 26, 33)
    );

    function prosecnaTemp($dan) {
        $temperature = $dan["temperature"];
        $sum = 0;
        foreach($temperature as $temp) {
            $sum+=$temp;
        }
        $prosek = $sum / count($temperature);
        return $prosek;
    }

    echo "Prosecna temperatura za dan " . $dan["datum"] . " je: " . prosecnaTemp($dan);
    
    // Zadatak 16.
    echo "<hr>";
    
    function natProsecnaTemp($dan) {
        $prosek = prosecnaTemp($dan);
        $broj = 0;
        $temperature = $dan["temperature"];
        foreach($temperature as $temp) {
            if($temp > $prosek) {
                $broj++;
            }
        }
        return $broj;
    }

    echo "Broj merenja sa natprosecnom temperaturom za dan " . $dan["datum"] . " jednak je: " . natProsecnaTemp($dan);

    // Zadatak 17.
    /* Napisati funkciju brojMaxMerenja($dan) kojoj se prosleđuje dan, a koja prebrojava i vraća koliko merenja je bilo sa maksimalnom temperaturom. */
    echo "<hr>";

    function brojMaxMerenja($dan) {
        $temperatura = $dan['temperature'];
        $max = -100;
        foreach($temperatura as $temp){
            if($temp > $max){
                $max = $temp;
                $niz = [$max];
            }
            elseif($temp == $max){
                $niz[] = $max;
            }
        }
        return count($niz);
    }

    echo "Merenja sa maksimalnom temperaturom u toku dana bilo je: " . brojMaxMerenja($dan);


    // Zadatak 18.
    echo "<hr>";

    function brojMerenjaIzmedju($dan, $min, $max) {
        $temperature = $dan["temperature"];
        $broj = 0;
        foreach($temperature as $temp) {
            if($temp > $min && $temp < $max) {
                $broj++;
            }
        }
        return $broj;
    }

    $v1 = 7;
    $v2 = 15;
    echo "Broj merenja na dan " . $dan["datum"] . " izmedju vrednosti $v1 i $v2 jednak je: " . brojMerenjaIzmedju($dan, $v1, $v2);

    // Zadatak 19.
    /* Napisati funkciju natprosecnoTopao($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je u većini dana temperatura bila iznad proseka. U suprotnom vraća false. */
    echo "<hr>";

    function natprosecnoTopao($dan){
        $prosek = prosecnaTemp($dan);
        $temperatura = $dan['temperature'];
        $br=0;
        foreach($temperatura as $temp){
            if($temp > $prosek){
                $br++;
            }
        }
        if($br > count($temperatura)/2){
            return true;
        }else {
            return false;
        }
    }
    
    echo "Temperatura u vecini dana bila je iznad proseka: " . (natprosecnoTopao($dan)?"JESTE":"NIJE");


    //Zadatak 20.
    /*Za dan se smatra da je leden ukoliko nijedna temperatura izmerena tog dana nije iznosila iznad 0 stepeni. Napisati funkciju leden($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio leden, u suprotnom vraća false. */
    echo "<hr>";

    function leden($dan){
        $temperatura = $dan['temperature'];
        foreach($temperatura as $temp){
            if($temp > 0){
                return false;
            }
        }
        return true;
    }

    echo "Dan je bio leden: " . (leden($dan)?"JESTE":"NIJE");

    //Zadatak 21.
    /* Za dan se smatra da je tropski ukoliko nijedna temperatura izmerena tog dana nije iznosila ispod 24 stepena. Napisati funkciju tropski($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio tropski, u suprotnom vraća false. */
    echo "<hr>";

    function tropski($dan){
        $temperatura = $dan['temperature'];
        foreach($temperatura as $temp){
            if($temp < 24){
                return false;
            }
        }
        return true;
    }

    echo "Dan je bio tropski: " . (tropski($dan)?"JESTE":"NIJE");

    //Zadatak 22.
    /* Dan je nepovoljan ako je razlika između neka dva uzastopna merenja veća od 8 stepeni. Napisati funkciju nepovoljan($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio nepovoljan, u suprotnom vraća false. */
    echo "<hr>";

    function nepovoljan($dan){
        $temperatura = $dan['temperature'];
        for($i=0; $i < count($temperatura)-1; $i++){
            if(abs($temperatura[$i] - $temperatura[$i+1]) > 8){
                return true;
            }
        }
        return false;
    }

    echo "Dan je bio nepovoljan: " . (nepovoljan($dan)?"JESTE":"NIJE");

    //Zadatak 23.
    /* Za dan se kaže da je neuobičajen ako je bilo kiše i ispod -5 stepeni, ili bilo oblačno i iznad 25 stepeni, ili je bilo i kišovito i oblačno i sunčano. Napisati funkciju neuobicajen($dan) kojoj se prosleđuje dan, a koja vraća true ukoliko je dan bio neuobičajen, u suprotnom vraća false. */
    echo "<hr>";
    $dan = array(
        "datum" => "2023/05/16",
        "kisa" => true,
        "sunce" => true,
        "oblacno" => false,
        "temperature" => array(-7, 20, 23, 17, 12, 19, 16, 23)
    );

    function neuobicajen($dan){
        $temperatura = $dan['temperature'];
        if($dan['kisa'] && $dan['sunce'] && $dan['oblacno']){
            return true;
        }
        foreach($temperatura as $temp){
            if($temp < -5 && $dan['kisa'] || $temp > 25 && $dan['oblacno']){
                return true;
            }
        }
        return false;
    }

    echo "Dan je bio neuobicajen: " . (neuobicajen($dan)?"JESTE":"NIJE");

    //Zadatak 24.
    /** Kreirati niz $blogovi, pri čemu je svaki element tog niza jedan asocijativni niz. Svaki od tih asocijativnih niza mora od ključeva da ima “title” (naslov), “likes” (broj lajkova), kao i “dislikes” (broj dislajkova). */
    echo "<hr>";
    echo "<hr>";

    $blogovi = [
        ['title' => 'Naslov1jabuka', 'likes' => 27, 'dislikes' => 4],
        ['title' => 'Naslov2!', 'likes' => 30, 'dislikes' => 2],
        ['title' => 'Naslov3', 'likes' => 14, 'dislikes' => 24],
        ['title' => 'Naslov4!', 'likes' => 49, 'dislikes' => 25],
        ['title' => 'Naslov5jabuka', 'likes' => 32, 'dislikes' => 20],
        ['title' => 'Naslov6', 'likes' => 29, 'dislikes' => 35]
    ];

    // Zadatak 25.
    /**Napisati funkciju kojoj se prosleđuje $blogovi, a ona vraća ukupan broj lajkova. */
    echo "<hr>";

    function brojLajkova($blogovi){
        $sum = 0;
        foreach($blogovi as $posts){
            $sum += $posts['likes'];
        }
        return $sum;
    }

    echo "Ukupan broj lajkova na svim postovima je: " . brojLajkova($blogovi);

    //Zadatak 25. drugi nacin
    echo "<hr>";
    function brojLajkova1($blogovi){
        $sum = 0;
        for($i=0; $i<count($blogovi); $i++){
            $sum += $blogovi[$i['likes']];
        }
        return $sum;
    }

    echo "Ukupan broj lajkova na svim postovima je: " . brojLajkova($blogovi);

    //Zadatak 26.
    /**Napisati funkciju kojoj se prosleđuje $blogovi, a ona vraća prosečan broj lajkova. */
    echo "<hr>";

    function prosecanBrojLajkova($blogovi){
        $sum = brojLajkova($blogovi);
        return $prosek = round($sum / count($blogovi), 2);
    }

    echo "Prosecan broj lajkova je: " . prosecanBrojLajkova($blogovi);

    //Zadatak 27.
    /**Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje sve one naslove blogova koji imaju više lajkova nego dislajkova. */
    echo "<hr>";

    function viseLajkova($blogovi){
        foreach($blogovi as $posts){
            if($posts['likes'] < $posts['dislikes']){
                echo $posts['title'] . " ";
            }
        }
    }

    viseLajkova($blogovi);

    //Zadatak 28.
    /**Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje sve one naslove blogova koji imaju najmanje duplo više lajkova nego dislajkova. */
    echo "<hr>";

    function duploViseLajkova($blogovi){
        foreach($blogovi as $posts){
            if($posts['likes']/2 >= $posts['dislikes']){
                echo $posts['title'] . " ";
            }
        }
    }

    duploViseLajkova($blogovi);

    //Zadatak 29.
    /**Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje sve one naslove blogova koji se završavaju uzvičnikom. */
    echo "<hr>";

    function uzvicnik($blogovi){
        echo "Ovo su naslovi postova koji se zavrsavaju uzvicnikom: ";
        foreach($blogovi as $posts){
            if(strpos($posts['title'], '!') !== false){
                echo $posts['title'] . "; ";
            }
        }
    }

    uzvicnik($blogovi);

    //Zadatak 30.
    /**Napisati funkciju kojoj se prosleđuje $blogovi kao i $granica, a ona vraća broj blogova čiji je broj lajkova veći od granice. */
    echo "<hr>";

    function brojBlogovaVeciOdGranice($blogovi, $granica){
        $br=0;
        foreach($blogovi as $posts){
            if($posts['likes'] > $granica){
                $br++;
            }
        }
        return $br;
    }

    $granica = 24;
    echo brojBlogovaVeciOdGranice($blogovi, $granica);

    //Zadatak 31.
    /**Napisati funkciju kojoj se prosleđuje $blogovi kao i $rec, a ona vraća prosečan broj lajkova za one blogove koji u naslovu sadrže prosleđenu reč. */
    echo "<hr>";

    function naslovSadrziProsledjenuRec($blogovi, $rec){
        $sum = 0;
        $br = 0;
        foreach($blogovi as $posts){
            if(strpos(strtolower($posts['title']), strtolower($rec)) !== false){
                $sum += $posts['likes'];
                $br++;
            }
        }
        return $prosek = $sum / $br;
    }

    $rec = 'Jabuka';
    echo "Prosecan broj lajkova za postove koji sadrze $rec je: " . naslovSadrziProsledjenuRec($blogovi, $rec);

    //Zadatak 32.
    /**Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje blogove koji imaju iznadprosečan broj lakova. */
    echo "<hr>";

    function iznadProsecanBrojLajkova($blogovi){
        $prosek = prosecanBrojLajkova($blogovi);
        echo "Ovo su postovi sa iznadprosecnim(prosek:$prosek) brojem lajkova: ";
        foreach($blogovi as $posts){
            if($posts['likes'] > $prosek){
                echo $posts['title'] . ", broj lajkova: " . $posts['likes'] . "; ";
            }
        }
    }

    iznadProsecanBrojLajkova($blogovi);

    //Zadatak 33.
    /**Napisati funkciju kojoj se prosleđuje $blogovi, a ona ispisuje blogove koji imaju ispodprosečan broj dislakova. */
    echo "<hr>";

    function ispodProsecanBrojLajkova($blogovi){
        $prosek = prosecanBrojLajkova($blogovi);
        echo "Ovo su postovi sa ispodprosecnim(prosek:$prosek) brojem lajkova: ";
        foreach($blogovi as $posts){
            if($posts['likes'] < $prosek){
                echo $posts['title'] . ", broj lajkova: " . $posts['likes'] . "; ";
            }
        }
    }
    
    ispodProsecanBrojLajkova($blogovi);

?>