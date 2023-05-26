<?php

    /*
    include "film.php"; // ako ne postoji film, samo ignorisi
    include_once "film.php"; // isto kao include, ali ako je ovaj fajl vec ukljucen, onda ga ne ukljucuj ponovo
    require "film.php"; // ako ne postoji fajl prijavljuje gresku
    require_once "film.php"; // isto kao require, ali ako je ovaj fajl vec ukljucen, onda ga ne ukljucuj ponovo
    */

    require_once "film.php";
    require_once "NemiFilm.php";

    $f1 = new Film("Lord of the Rings", "Piter Jackson", 2001, [7, 5.8, 8.7, 10]);
    $f1->stampaj();

    $f2 = new Film("Kill Bill", "Quentin Tarantino", 2003, [10, 9.5, 9.8, 7.5]);
    $f2->stampaj();

    $f3 = new Film("Titanic", "James Cameron", 1999, [7.6, 5.8]);
    $f3->stampaj();

    $filmovi = [$f1, $f2, $f3];

    foreach($filmovi as $film){
        $film->stampaj();
    }

    function prosecnaOcena($films){
        $zbir = 0;
        foreach($films as $f){
            $zbir += $f->prosek();
        }
        $n = count($films);
        return ($n > 0) ? ($zbir / $n) : 0;
    }

    $prosecna = prosecnaOcena($filmovi);
    echo "<p>Prosecna ocena svih filmova jednaka je: $prosecna</p>";

    function vekFilmova($films, $vek){
        foreach($films as $f){
            if(ceil($f->getGodinaIzdanja() / 100) == $vek){
                $f->stampaj();
            }
        }
    }

    echo "<hr>";
    echo "<p>Filmovi koji su izasli u 21. veku:</p>";
    vekFilmova($filmovi, 21);
    echo "<hr>";

    echo "<p>Filmovi koji su izasli u 20. veku:</p>";
    vekFilmova($filmovi, 20);
    echo "<hr>";

    /**Napraviti funkciju osrednjiFilm kojoj se prosleđuje niz filmova a ona vraća film koji je najbliži prosečnoj oceni svih filmova. */

    function osrednjiFilm($films){
        $prosek = prosecnaOcena($films);
        $najblizaVrednost = abs($films[0]->prosek() - $prosek);
        $najbliziFilm = $films[0];
        foreach($films as $f){
            if(abs($f->prosek() - $prosek) < $najblizaVrednost){
                $najblizaVrednost = abs($f->prosek() - $prosek);
                $najbliziFilm = $f;
            }
        }
        return $najbliziFilm;
    }

    echo "<hr>";
    $osf = osrednjiFilm($filmovi);
    echo "<p>Film najblizi prosecnoj oceni svih filmova: </p>";
    $osf->stampaj();

    // osrednjiFilm($filmovi)->stampaj();

    echo "<hr>";

    /**Napraviti funkciju najboljeOcenjeni kojoj se prosleđuje niz filmova, a ona vraća najbolje ocenjeni film. */

    function najboljeOcenjeni($films){
        $max = 0;
        foreach($films as $f){
            if($f->prosek() > $max){
                $max = $f->prosek();
                $najFilm = $f;
            }
        }
        return $najFilm;
    }

    echo "<p>Najbolje ocenjeni film je: </p>";
    najboljeOcenjeni($filmovi)->stampaj();

    /**Napraviti funkciju najmanjaOcenaNajboljeg kojoj se prosleđuje niz filmova a ona određuje najbolji film i ispisuje njegovu najslabiju ocenu. */
    echo "<hr>";
    function najmanjaOcenaNajboljeg($films){
        $najFilm = najboljeOcenjeni($films);
        $min = 11;
        foreach($najFilm->getOcene() as $o){
            if($o < $min){
                $min = $o;
            }
        }
        echo "<p>Najmanja ocena najboljeg filma je: $o</p>";
    }

    najmanjaOcenaNajboljeg($filmovi);
    echo "<hr>";

    /**Napisati funkciju najmanjaOcena kojoj se prosleđuje niz filmova, a koja vraća koja je najmanja ocena koju je bilo koji film dobio. */

    function najmanjaOcena($films){
        $ocenePrvogFIlma = $films[0]->getOcene();
        $minOcena = $ocenePrvogFIlma[0];
        foreach($films as $f){
            foreach($f->getOcene() as $ocena){
                if($ocena < $minOcena){
                    $minOcena = $ocena;
                }
            }
        }
        return $minOcena;
    }

    echo "<p>Najmanja ocena koju je bilo koji film dobio je: " . najmanjaOcena($filmovi) . "</p>";

    /**Napisati funkciju najcescaOcena kojoj se prosleđuje niz ocena, a ona vraća ocenu koju su filmovi najčešće dobijali.  */

    function najcescaOcena($films){
        $niz = [];
        foreach($films as $f){
            foreach($f->getOcene() as $o){
                $ocena = "$o";
                $postojiOcena = false;
                foreach($niz as $key => $value){
                    if($ocena == $key){
                        $postojiOcena = true;
                        $niz[$ocena]++;
                    }
                }
                if($postojiOcena == false){
                    $niz[$ocena] = 1;
                }
            }
        }
        $max = 0;
        foreach($niz as $key => $value){
            if($value > $max){
                $max = $value;
                $najcesca = $key;
            }
        }
        return $najcesca;
    }
    echo "<hr>";
    echo "Filmovi su najcesce dobijali ocenu: " . najcescaOcena($filmovi) . "!";

    /**Napraviti funkciju iznadOcene kojoj se prosleđuje ocena i niz filmova, a ona vraća niz onih filmova koji su bolje ocenjeni od prosleđene ocene. */

    function iznadOcene($ocena, $films){
        $niz = [];
        foreach($films as $f){
            if($f->prosek() > $ocena){
                $niz[] = $f;
            }
        }
        return $niz;
    }
    echo "<hr>";
    $ocena = 7;
    echo "<p>Filmovi koji su bolje ocenjeni od $ocena su: </p>";
    foreach(iznadOcene($ocena, $filmovi) as $o){
        $o->stampaj();
    }

    /**Napisati funkciju iznadOceneNoviji kojoj se prosleđuje ocena i niz filmova  a koja treba da na ekranu da ispiše sve podatke o najnovijem filmu koji zadovoljava prosleđenu ocenu */

    function iznadOceneNoviji($broj, $niz){
        $najnovijiDatum = $niz[0]->getGodinaIzdanja();
        foreach($niz as $object){
            if($object->getGodinaIzdanja() > $najnovijiDatum){
                $najnovijiDatum = $object->getGodinaIzdanja();
            }
        }
        foreach($niz as $object){
            if($object->prosek() >= $broj && $object->getGodinaIzdanja() == $najnovijiDatum){
                $object->stampaj();
            }
        }
    }
    $ocena = 7;
    echo "<hr>";
    echo "Najnoviji film koji zadovoljava ocenu $ocena: </p>";
    iznadOceneNoviji($ocena, $filmovi);
    








?>