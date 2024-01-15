<?php

class Movie {
    public $nome;
    public $genere ;
    public $durata;

    function __construct($genere){
        $this->genere = 'genere:'."\t".$genere;
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
$movieOne = new Movie('fantasy');

echo $movieOne->nome = 'film:'."\t".'lord of the rings'.'<br>';
echo $movieOne->genere.'<br>';
echo $movieOne->setDurata(180);

echo '<br>';
echo '<br>';
// secondo film
echo 'secondo film'.'<br>';
$movieTwo = new Movie('sci-fi');

echo $movieTwo->nome = 'film:'."\t".'back to the future'.'<br>';
echo $movieTwo->genere.'<br>';
echo $movieTwo->setDurata(120);

?>
