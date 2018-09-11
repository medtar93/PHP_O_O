<?php
// 02-getter-setter-constructeur-this
    //Etudiant.class.php

class Etudiant {

    private $prenom;

    public function __construct($prenom){
        $this -> setPrenom($prenom);

    }
    public function setPrenom($prenom){
        $this -> prenom = $prenom;
    }
    public function getPrenom() {
        return $this -> prenom;
    }
}

//----
$etudiant = new Etudiant ('Tarek');
echo 'Prénom : ' . $etudiant -> getPrenom();

/* 
Commentaires :
    -la méthode magique __construct() s'exécute automatiquement au moment de l'instenciation.
    - Il n'est pas obligatoire de la déclarer. En théorie on ne la déclare que si on en a besoin.
    
    - Elle prend en argument les informations déclarées dans la parenthèse au moment instanciation ($etudiant = new Etudiant('Tarek'))


*/