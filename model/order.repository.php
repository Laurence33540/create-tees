<?php

// si la commande de l'utilisateur existe afficher la commande sinon elle retourne vide
function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

 // je crée une commande avec des produits et quantités
 function createOrder($product, $quantity) {
	$order = [ 
		"product"=> $product,
		"quantity"=> $quantity 
	];

	return $order;
}

 // je sauvegarde ma commande 
 function saveOrder($order){
 	$_SESSION["order"]= $order;
}
?>