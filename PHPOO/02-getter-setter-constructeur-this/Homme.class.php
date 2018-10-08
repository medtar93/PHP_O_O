<?php
//02-getter-setter-constructeur-this
	//Homme.class.php
	
class Homme
{
	private $prenom; //Yakine
	private $nom; 
	
	public function setPrenom($argument){
		if(is_string($argument)){
			if(strlen($argument) > 5 && strlen($argument) < 30){
				$this -> prenom = $argument;
			}
		}
	}
	
	public function getPrenom(){
		return $this -> prenom; 
	}
	
	public function setNom($nom){
		$this -> nom = $nom;
	}
	
	public function getNom(){
		return $this -> nom; 
	}
	
	
}
//------
$homme = new Homme; 
//$homme -> prenom = 'Yakine'; // Erreur : Impossible d'accéder à un élément private depuis l'extérieur de la classe; 

$homme -> setPrenom('Yakine');
echo 'Bonjour ' . $homme -> getPrenom() . '! <br/>'; 

$homme -> setNom('HAMIDA');
echo 'Nom : ' . $homme -> getNom();

/*
Commentaires : 
	- Pourquoi faire des getters et des setters ? 
	Le PHP est un langage qui ne type pas ses variables... IL faut donc constament vérifier l'intégrité des données. 
	Mettre une propriété en visibilité private, et donc passer par les accesseurs (getter/setter), permet de vérifier à un seul endroit (une seule fois) les données. 
	C'EST UNE BONNE CONTRAINTE !! 
	Tout dev' qui voudra affecter une valeur devra passer par le setter. 
	
	$this : représent l'OBJET en cours de manipulation. 
	
	Getter : Accéder !
	Setter : Affecter
	
	Nous aurons autant de getter et de setter que de propriétés PRIVATE. 
*/








