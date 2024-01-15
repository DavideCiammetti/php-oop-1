<?php

class Movie {
    public $nome;
    public $genere ;
    public $durata;

    function __construct(array $genere){
        $this->genere = $genere;
    }

    public function setDurata($durata){
        if($durata >= 180){
            echo 'il film è impegnativo dura '. $durata;
        }else{
            echo 'durata:'."\t".$durata;
        }
    }
}
// primo film
echo 'primo film'.'<br>';
$movieOne = new Movie(['fantasy', 'adventure']);

echo $movieOne->nome = 'film:'."\t".'lord of the rings'.'<br>';
var_dump($movieOne->genere);
echo $movieOne->setDurata(180);

echo '<br>';
echo '<br>';
// secondo film
echo 'secondo film'.'<br>';
$movieTwo = new Movie(['sci-fi', 'action']);

echo $movieTwo->nome = 'film:'."\t".'back to the future'.'<br>';
var_dump($movieTwo->genere);
echo $movieTwo->setDurata(120);

?>
