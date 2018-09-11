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
$v = new Vehicule;
$v -> setLitre(5);
echo 'Véhicule : ' . $v -> getLitre() . 'L <br>';
$v -> setReservoir(50);
echo 'Réservoire : '.$v -> getReservoir(50) . 'L <br>';
//-----
$p = new Pompe;
$p -> setLitre(800);
echo 'pompe : ' . $p -> getLitre() . 'L <hr>';

$p -> donneEssence($v);
echo ' après ravitaillement <br>';
echo 'Véhicule : ' . $v -> getLitre() . 'L <br>';
echo 'pompe : ' . $p -> getLitre() . 'L <hr>';
