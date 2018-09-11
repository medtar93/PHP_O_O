<?php
//04-constante-static-self
    //singleton.class.php

//Design Patter : Litteralement "Modèle de conception". un design Patter c'est une solution qui a été trouvée à un problème rencontré par la communauté.

//Singleton : c'est la réponse qui a été trouvée à la question : Comment créer une classe pour laquelle il n'existe qu'un seul objet !

class Singleton {
    private static $instance = NULL;
    private function __contruct() {} //La fonction étant private, alors notre classe n'est plus instanciable.
    private function __clone() {} //La fonction étant private, il devient impossible de cloner un objet de cette classe.

    public static function getInstance() {
        //if (is_null(self::$instance)){}
        //if(self::$instance == NULL){}
        if(!self::$instance){
            self::$instance = new self;
            //self::$instance = new Singleton;
        }
    }
}

//