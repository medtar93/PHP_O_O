<?php
//04-constante-static-self
    //Maison.class.php

class Maison {
    public $couleur ='blanc';//Appartient à l'objet 

    public static $espaceTerrain ='500m²'; //Appartient à la classe
    
    private $nbPorte = 10; //Appartient à l'objet 
    private static $nbPiece = 7; // Appartient à la classe
    const HAUTEUR = '10';


    public function getNbPorte() {
        return $this -> nbPorte;
    }
    public static function getNbPiece() {
        return self::$nbPiece
    }
}
//-------
echo 'Terrain : ' . Maison::$espaceTerrain .'<br>';// OK, Je fais appel à un élément de la classe via le nom de la classe.
echo 'Pièce : ' .  Maison::getNbPiece() .'<br>';
echo 'Hauteur : ' .  Maison::getNbPiece() .'<br>';


$maison = new Maison;
echo 'Couleur : ' . $maison -> couleur . '<br>'; /* 
ERREUR à ne pas faire.

// OK, j'accède à un élément public à l'extérieur de la classe
//echo 'Terrain : ' . $maison -> espaceTerrain .'<br>';
//echo 'Porte : ' . $maison -> nbPorte .'<br>'; */
echo 'Portes : ' . $maison -> getNbPorte() . '<br>';


/* 
 */