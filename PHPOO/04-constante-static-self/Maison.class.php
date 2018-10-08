<?php
//04-constante-static-self
	//Maison.class.php
	
	
class Maison
{
	public $couleur = 'blanc'; //Appartient à l'objet
	public static $espaceTerrain = '500m2'; //Appartient à la classe
	private $nbPorte = 10; //Appartient l'objet
	private static $nbPiece = 7; //Appartient à la classe
	const HAUTEUR = '10m'; //Appartient à la classe
	
	public function getNbPorte(){
		return $this -> nbPorte;
	}
	
	public static function getNbPiece(){
		//return  Maison::$nbPiece; 
		return  self::$nbPiece; 
	}
	
}
//------
echo 'Terrain : ' . Maison::$espaceTerrain . '<br/>'; // OK, Je fait appel à un élément de la classe via le nom de la classe.  
//echo 'Piece : ' . Maison::$nbPiece . '<br/>'; //ERREUR : Private
echo 'Piece : ' . Maison::getNbPiece() . '<br/>'; //OK
echo 'Hauteur : ' . Maison::HAUTEUR . '<br/>'; //OK 

$maison = new Maison;
echo 'Couleur : ' . $maison -> couleur . '<br/>'; //OK, J'accède à un élément public à l'extérieur de la classe
//echo 'Terrain : ' . $maison -> espaceTerrain . '<br/>'; 
//echo 'Porte : ' . $maison -> nbPorte . '<br/>; // Erreur accessible uniquement dans la classe (getter)
echo 'Portes : ' . $maison -> getNbPorte() . '<br/>'; // OK, j'accède à un élément private en dehors de la classe grâce à son getter. 


/*
Commentaires : 

	Opérateurs : 
	- $objet ->   : Element d'un objet à l'extérieur de la classe
	- $this ->    : Element d'un objet à l'intérieur de la classe
	- Class::     : Element d'une classe (static, const) à l'extérieur de la classe
	- self::      : Element d'une classe (static, const) à l'intérieur de la classe
	
	2 questions à se poser : 
		- Est-ce static ? 
			- Oui : 
				- Suis-je à l'intérieur de la classe ?
					---> oui : self::
					---> non : Class::
			
			- Non : 
				- Suis-je à l'intérieur de la classe ?
					---> oui : $this ->
					---> non : $objet ->

	
	Static signifie qu'un élément (propriété ou méthode) appartient à la Classe. On y accède donc avec Class:: ou self::. Un élément static peut être modifié, mais le sera de manière durable. 
	
	const signifie qu'un élément (propriété) appartient à la classe, mais ne peut pas être modifié.	
*/




