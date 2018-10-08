<?php
//02-getter-setter-constructeur-this
	//Etudiant.class.php
	
//Consignes : Au regard de la classe ci-dessous, veuillez affecter une valeur à prenom en n'intervenant QUE à l'interieur de la classe !! 

class Etudiant
{
	private $prenom;
	
	public function __construct($prenom){
		//$this -> prenom = $prenom;
		$this -> setPrenom($prenom);
	}
	
	public function setPrenom($prenom){
		$this -> prenom = $prenom;
	}
	public function getPrenom(){
		return $this -> prenom; 
	}
}
//-----
$etudiant = new Etudiant('Yakine');
echo 'Prénom : ' . $etudiant -> getPrenom();

/*
Commentaires : 
	- La méthode magique __construct() s'éxécute automatiquement au moment de l'instanciation. 
	- Il n'est pas obligatoire de la déclarer. En théorie on ne la déclare que si on en a besoin. 

	- Elle prend en argument les informations déclarées dans la parenthèse au moment de l'instanciation ($etudiant = new Etudiant('Yakine'))

*/





