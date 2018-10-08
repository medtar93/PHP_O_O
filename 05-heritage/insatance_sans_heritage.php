<?php
//05-heritage
    //instance_sans_heritage.php

class C {}
//----------
class A {
    public function bonjour(){
        return 'Bonjour';
    }
}
//--------
class B extends C { // B n'hérite pas de A 
    public $maVariable;

    public function __construct(){
        $this -> maVariable = new A;
    }
}
//------
$b = new B; 
echo $b -> maVariable -> bonjour();
//  $maVariable = new A;
//  $maVariable -> bonjour();
//  objet a -> bonjour();

/* 
Commentaires :
    -Nous avons un objet dans un objet, d'où l'utilisation de deux flèches successivement ($x->$y->methode())

    -L'intérêt d'avoir une instence sans héritage (récuperer un objet dans la propriété d'une classe) est de pourvoir hériter d'une classe mère d'un côté, tout en ayant la possibilité de recupérer les éléments d'une autre classe en même temps.
*/