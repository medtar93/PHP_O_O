<?php
//03-manipulation-type-argument
	//exercice3.php
	
class Vehicule
{
	private $litre; //5
	private $reservoir; // 50
	
	public function setLitre($litre){
		$this -> litre = $litre;
	}
	public function getLitre(){
		return $this -> litre;
	}
	
	public function setReservoir($res){
		$this -> reservoir = $res;
	}
	public function getReservoir(){
		return $this -> reservoir;
	}
}

class Pompe
{
	private $litre;
	
	public function setLitre($litre){
		$this -> litre = $litre;
	}
	public function getLitre(){
		return $this -> litre;
	}
	
	public function donneEssence(Vehicule $v){
		//Modifier l'objet pompe ($this)
		//Le volume de litre dans pompe doit égal à l'ancien volume moins (le reservoire de $v mois le nbre de litre dans $v)
		$this -> setLitre($this -> getLitre()-($v ->getReservoir()- $v -> getLitre()));
		// 745 = 800 - (50 - 5) 		
					
		//modifier l'objet Vehicule ($v)
		//Le volume de $v doit être egal à la capacité du réservoir de $v
		$v -> setLitre($v -> getReservoir() );
		//50 = 5 + (50 - 5)
		//50 = 50
	}
}
$clio = new Vehicule;
$clio -> setLitre(5);
echo 'Le véhicule contient ' . $clio -> getLitre() . 'L <br/>'; 

$clio -> setReservoir(50);
echo 'Le Véhicule a une capacité de ' . $clio -> getReservoir() . 'L dans le réservoir<br/>'; 
//--------

$p = new Pompe;
$p -> setLitre(800);
echo 'La pompe contient ' . $p -> getLitre() . 'L d\'essence <hr/>'; 

$p -> donneEssence($clio);
echo 'Après ravitaillement<br/>'; 
echo 'Le véhicule contient ' . $clio -> getLitre() . 'L <br/>'; 
echo 'La pompe contient ' . $p -> getLitre() . 'L d\'essence <hr/>'; 



