<?php

echo '<h1>Fonctions</h1>';

// Déclaration : 
function bonjour($prenom){
	echo 'Bonjour ' . $prenom . ' !<br/>';
}
// Au moment de la déclaration de la fonction, $prenom n'est qu'une référence (un outils) et n'existe pas en dehors de la déclaration de la fonction. 

//Exécution : 
bonjour('Mohammed');
bonjour('Yakine');
bonjour('Marina');

$pseudo = 'Tarek';
bonjour($pseudo);