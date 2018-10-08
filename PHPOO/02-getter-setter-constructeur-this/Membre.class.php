<?php
//02-getter-setter-constructeur-this
	//Membre.class.php

// Consignes : Au regard de la classe ci-dessous, veuillez affecter des valeurs à $pseudo et $email et les afficher dans la page. 
	
class Membre
{
	private $pseudo;
	private $email;
	
	//Getter setter de Pseudo
	public function setPseudo($pseudo){
		if(is_string($pseudo)){
			$this -> pseudo = $pseudo;
		}
	}
	
	public function getPseudo(){
		return $this -> pseudo;
	}
	
	//Getter setter de Email
	public function setEmail($email){
		if(FILTER_VAR($email, FILTER_VALIDATE_EMAIL)){
			$this -> email = $email;
		}
	}
	
	public function getEmail(){
		return $this -> email; 
	}
}
$m = new Membre; 

$m -> setPseudo('Yakine');
$m -> setEmail('yakine.hamida@evogue.fr');

echo 'Pseudo : ' . $m -> getPseudo() . '<br/>';
echo 'Email : ' . $m -> getEmail() . '<hr/>'; 

