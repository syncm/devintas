<?php


class Zmogus {
   public $vardas;
   public $pavarde;
public $trimestas; /// ['anglu' => 10, 'matematika'=>8]

   function __construct($a, $b, $trimestas) {
    $this ->vardas = $a;
    $this ->pavarde = $b;
    $this->trimestas = $trimestas;
}

function vidurkis($k = 0)
{
    if ($this->trimestas) {
    $suma = 0;
    foreach ($this->trimestas as $balas)
    {
        $suma +=$balas;
    }
    return $suma / count($this->trimestas);
    }
    else {
        return 0;
    }
}


function naujaPavarde($p) {
    $this->pavarde= $p;
}

}





$zmones1 = [
new Zmogus('Jonas', 'Jonaitis', ['anglu' => 10, 'matematika'=>8]),
new Zmogus('Ona', 'Jonaitiffffs', ['anglu' => 7, 'matematika'=>9, 'lietuviu'=>9]),
];


$zmones1[] = new Zmogus('Petras', 'Petraitis', []);

foreach ($zmones1 as $a){
   echo $a->pavarde. ' '. $a->vidurkis() . '<br>';
}



///var_dump($zmones1[1]);

///echo $zmones1[1]->trimestas['matematika'];

echo '<br>';

$zmones1[1]->naujaPavarde('kkkkkkkhhh22');






for ($i = 0; $i <count($zmones1); $i++)
{
    echo $zmones1[$i]->pavarde. ' ' . $zmones1[$i]->vidurkis() . '<br>';
}



echo $zmones1[0]->vidurkis(10);
?>