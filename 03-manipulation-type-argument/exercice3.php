<?php
// 03-manipulation-type-argument
    //exercice3.php

class Vehicule {
    private $litre;
    private $reservoire;

    public function setLitre ($litre){
       $this -> litre = $litre;
    }
    public function getLitre (){
        return $this -> litre;
    }
    public function setReservoir ($res){
         $this -> reservoir = $res;
    }
    public function getReservoir (){
        return $this -> reservoir;
   }
}
class Pompe {
    private $litre;
   
    public function setLitre($litre){
        $this -> litre = $litre;
    }
    public function getLitre(){
        return $this -> litre ;
    }
    public function donneEssence(Vehicule $v) {
        $this -> setLitre($this -> getLitre() - ($v -> getReservoir() - $v -> getLitre()));
        $v -> setLitre($v -> getReservoir());
    }
}
$polo = new Vehicule;
$polo -> setLitre(5);
echo 'Véhicule : ' . $polo -> getLitre() . 'L <br>';
$polo -> setReservoir(50);
echo 'Réservoire : '.$polo -> getReservoir(50) . 'L <br>';
//-----
$p = new Pompe;
$p -> setLitre(800);
echo 'pompe : ' . $p -> getLitre() . 'L <hr>';

$p -> donneEssence($polo);
echo ' après ravitaillement <br>';
echo 'Véhicule : ' . $polo -> getLitre() . 'L <br>';
echo 'pompe : ' . $p -> getLitre() . 'L <hr>';
