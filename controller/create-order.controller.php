<?php

//inclure le fichier de configuration
require_once("../config.php");
// inclure le fichier des produits
require_once('../model/product.repository.php');
// inclure la commande
require_once ('../model/order.repository.php');

//je démarre ma session pour créer un identifiant
session_start();

//si le produit et la quantité, je créer et je sauvegarde ma commande
if (array_key_exists("product", $_POST) &&
   array_key_exists("quantity", $_POST)){

  
    
   // je crée ma commande et je la sauvegarde avec produits et quantités
    $order= createOrder($_POST['product'], $_POST['quantity']);
    saveOrder($order);
}


    //venir créer sa zone de stockage dans le tableau.stocker ma commande
    $orderByUser = findOrderByUser();


//le controller récupére le fichier view pour afficher le HTML
require_once('../view/create-order.view.php'); 

