<?php

class Movie {
    public $nome;
    public $durata;
    public $genere;
    public $AnnoDiUscita;
    
    //metodi set()

    // metodo array generi
    public function setGeneri($genere){
       return implode(',', $genere);
    }

    // metodo per gestione anno di uscita
    public function setAnnoUscita($AnnoDiUscita){
        if($AnnoDiUscita > 2022){
           return 'film molto recente anno di uscita:'."\t".$AnnoDiUscita;
        }else if($AnnoDiUscita < 1960){
           return 'film bianco e nero uscito nel:'."\t".$AnnoDiUscita;
        }else{
            return 'film uscito nel:'."\t".$AnnoDiUscita;
        }
    }

    // metodo per gestione durata film 
    public function setDurata($durata){
        if($durata >= 180){
           return 'il film è impegnativo dura '. $durata;
        }else{
           return 'durata:'."\t".$durata;
        }
    }

}
// primo film
'primo film'.'<br>';
$movieOne = new Movie();

$movieOne->setDurata(180);
$movieOne->setAnnoUscita(2000);
$movieOne->setGeneri(['fantasy','action']);

// secondo film
$movieTwo = new Movie();

$movieTwo->setDurata(120);
$movieTwo->setAnnoUscita(1985);
$movieTwo->setGeneri(['action','sci-fi']);
?>
