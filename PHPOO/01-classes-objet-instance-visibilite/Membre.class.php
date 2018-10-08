<?php
//01-classes-objet-instance-visibilite
	// Membre.class.php
	
class Membre{
	
	public $id_membre;// Variable
	public $pseudo; // Propriété
	public $mdp;
	public $prenom;
	public $civilite;
	public $nom;
	public $email;
	public $adresse;
	public $code_postal;
	public $ville = NULL;
	public $statut = 0;
	
	public function inscription(){
	
		
	} // Fonction
	
	public function connexion(){} // Méthode
	public function deconnexion(){}
	public function suppression(){}
	public function profil(){}
	public function modifierProfil(){}
	public function inscriptionNl(){}
	public function deinscriptionNl(){}
	public function parrainer(){}
	public function mdpRecup(){}
	public function validerEmail(){}
}


