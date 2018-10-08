<?php

//06-surcharge-abstarction -finalisation-interface-trait
    //finalisation.php

final class Application {
    public function run() {
        return 'L\'application se lance';
    }
}

class Extension extends Application {} // ERREUR : On nenpas hérité d'une classe final

//-------------------

class Appplication2 {
    final public function run2() {
        return 'L\'application se lance';
    }
}
class Extension2 extends Application2{
    //public function run2(){} ERREUR : On ne peut pas redéfinir ou surcharger une méthode final
}

/* 
Commentaires :
    - Une classe finale ne peut pas être héritée
    - Une classe finale peut être instanciée
    - Par définition une classe finale ne contient que des méthodes finales ... puisqu'on ne peut pas en heriter
    
    - Une méthode finale ne peut être surchargée ou redéfinie
    - Une méthode finale peut être présente dans une classe normale
*/