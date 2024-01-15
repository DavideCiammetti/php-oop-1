<?php

class Movie {
    public $nome;
    public $durata;
    public $genere;
    public $AnnoDiUscita;

    function __construct(array $genere){
        $this->genere = $genere;
    }
    // set
    public function setAnnoUscita($AnnoDiUscita){
        if($AnnoDiUscita > 2022){
           echo 'film molto recente anno di uscita:'."\t".$AnnoDiUscita;
        }else if($AnnoDiUscita < 1960){
           echo 'film bianco e nero uscito nel:'."\t".$AnnoDiUscita;
        }else{
            echo 'film uscito nel:'."\t".$AnnoDiUscita;
        }
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
'primo film'.'<br>';
$movieOne = new Movie(['action', 'sci-fi']);

$movieOne->nome = 'film:'."\t".'lord of the rings'.'<br>';
$movieOne->setDurata(180);
'<br>';
var_dump($movieOne->genere);
'<br>';
$movieOne->setAnnoUscita(2000);
// foreach ($variable as $key => $value) {
//     # code...
// }
'<br>';
'<br>';
// secondo film
'secondo film'.'<br>';
$movieTwo = new Movie(['action', 'sci-fi']);

$movieTwo->nome = 'film:'."\t".'back to the future'.'<br>';
$movieTwo->setDurata(120);
'<br>';
var_dump($movieTwo->genere);
'<br>';
$movieTwo->setAnnoUscita(1985);
?>
