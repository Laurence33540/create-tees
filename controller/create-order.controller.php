<?php

require_once("../config.php");

$message="";

//si la quantité et le produit existe
if array-keys-exists("quantity", $_post)&&
if array-keys-exists("product", $_POST); 

$quantity= $-POST[quantity];
$product=$_POST[product]; 

//quantité et produit que veut le consommateur
$message= "Votre commande contient : " .  $quantity . " " . $product;

//le controller récupére le fichier view
require_once(../view/create-order.view.php); 