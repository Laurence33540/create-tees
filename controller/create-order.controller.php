<?php

require_once("../config.php");

//je démarre ma session pour créer un identifiant
session_start();

//si la quantité et le produit existe
if (array_key_exists("quantity", $_POST) &&
 array_key_exists("product", $_POST)
) {
    
//je crée un tableau pour les quantités et les produits
    $order= [
        "quantity" => $_POST["quantity"],
        "product" => $_POST["product"]
    ];
  
    //venir créer sa zone de stockage dans le tableau 
    $_SESSION["order"] = $order;

}

//le controller récupére le fichier view
require_once("../view/create-order.view.php"); 

