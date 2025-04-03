<?php

//inclure le fichier de configuration
require_once("../config.php");
// inclure le fichier des produits
require_once('../model/product.repository.php');
require_once ('..model/order.repository.php');

//je démarre ma session pour créer un identifiant
session_start();

//si la quantité et le produit existe
if (array_key_exists("quantity", $_POST) &&
 array_key_exists("product", $_POST)
) {    
    
//je crée une commande dans un tableau avec les quantités et les produits 
    $order= [
        "quantity" => $_POST["quantity"],
        "product" => $_POST["product"]
    ];
  
    //venir créer sa zone de stockage dans le tableau.stocker commande
    $_SESSION["order"] = $order;

}

//le controller récupére le fichier view pour afficher le HTML
require_once("../view/create-order.view.php"); 

