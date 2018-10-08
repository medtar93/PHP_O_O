<?php

//06-surcharge-abstarction -finalisation-interface-trait
    //abstraction.php

abstract class Joueur{
    public function incription() {
        return $this -> etreMajeur();
    }
    abstract public function etreMajeur();
}
//-------
class JoueurFr extends Joueur{
    public function etreMajeur(){
        return 18;
    }
}
$joueur = new Joueur
//-------
class JoueurUs extends Joueur{
    public function etreMajeur(){
        return 21;
    }
}
$joueurFr = new JoueurFr;
echo $joueurFr -> inscription() . '<hr>'; //retourne 18

$joueurUs = new JoueurUS; 
echo $joueurUs -> incription(); // retourne 21

/* 
Commentaires :
    - Une classe abstraite ne peut être instanciée 
    - Les methodes abstraites n'ont pas de contenu (pas de corps)
    - Pour déclarer une méthode abstraite, il soit OBLIGATOIREMENT être dans une classe Abstraite.
    - Une classe abstraite peut contenir des methodes normales.
    - Lorsqu'on hérite d'une classe abstraite on doit OBLIGATOIREMENT redéfinir les méthodes de abstraites 


*/