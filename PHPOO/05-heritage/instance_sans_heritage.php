<?php
//05-heritage
	//instance_sans_heritage.php
	
class C{}
//-------
class A
{
	public function bonjour(){
		return 'Bonjour';
	}
}
//-------
class B extends C // B n'hérite pas de A
{
	public $maVariable; // Contient un objet de la classe A
	public $pdo; // objet PDO
	
	public function __construct(){
		$this -> maVariable = new A; 
	}
	
}
//------
$b = new B;
echo $b -> maVariable -> bonjour();
//   $mavariable = new A;
//   $mavariable -> bonjour();
//   objet a -> bonjour();

/*
Commentaires : 
	- Nous avons un objet dans un objet, d'où l'utilisation de deux flèches successivement ($x -> $y -> methode())

	- L'intérêt d'avoir une instance sans héritage (récupérer un objet dans la propriété d'une classe) est de pouvoir hériter d'une classe mère d'un coté, tout en ayant la possiblité de récupérer les éléments d'une autre classe en même temps. 
*/





