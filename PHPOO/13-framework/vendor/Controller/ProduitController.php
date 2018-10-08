<?php
//src/Controller/ProduitController.php

namespace Controller;

class ProduitController extends Controller{

    //www.monsite.com/produit/afficheall
    //www.monsite.com/produit/12
    //www.monsite.com/produit/categorie/p
    public function afficheall(){
    //1 :Je recupère les infos dont j'ai besoin 
    $produits = $this -> getRepository() -> getAllProduit ();
    $categorie = $this -> getRepository() -> getAllCategorie();
    //2 : j'envoie la vue correspondante 
    require __DIR__ . '/../View/boutique.php';
    }
    public function affiche($id){

    }
    public function categorie($cat){

    }   
}

    

