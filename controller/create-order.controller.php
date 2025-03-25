<?php

require_once("../config.php");

$message="";

//si la quantité et le produit existe
if (array_key_exists("quantity", $_POST) &&
 array_key_exists("product", $_POST)
) {

    $quantity= $_POST["quantity"];
    $product=$_POST["product"]; 

    //quantité et produit du consommateur
    $message= "Votre commande contient : " .  $quantity . " " . $product;
}

//le controller récupére le fichier view
require_once("../view/create-order.view.php"); 