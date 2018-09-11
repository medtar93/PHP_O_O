<?php
//02-getter-setter-constructeur-this
    //Homme.class.php

// Consigne : Au regard de la classe ci-dessous, veuillez affecter des valeurs à $pseudo et $email et les afficher dans la page.

class Membre {
    private $pseudo;
    private $email;
    
    public function setPseudo($pseudo) {
        if(is_string($pseudo)) {
            if(strlen($pseudo) > 5 && strlen($pseudo) <30
            ){
                $this -> pseudo = $pseudo;
            }
        }           
    }
    public function getPseudo() {
        return $this -> pseudo;
    }



    public function setEmail($email) {
         $this -> email = $email;          
    }
    public function getEmail() {
        return $this -> email;
    }
}

$m = new Membre;

$m -> setPseudo('Yakine');
$m -> setEmail('yakine.hamida@evogue.fr');

echo 'Pseudo :' . $m -> getPseudo() . '</br>';
echo 'Email :' . $m -> getEmail() . '</hr>';