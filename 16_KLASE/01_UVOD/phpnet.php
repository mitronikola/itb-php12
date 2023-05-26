
<?php
class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

$a1 = new SimpleClass;
$a1->var = 123;
$a1->displayVar();


            $racun = "123-123123123-12";
            $deloviRacuna = explode($racun, "-");
            var_dump($deloviRacuna);
            sprintf("%013d", $deloviRacuna[1]);
            $racun = implode("-", $deloviRacuna);





?>
