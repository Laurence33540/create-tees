<?php

// si la commande de l'utilisateur existe afficher la commande sinon on fait rien
function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

 // je crée une commande avec des produits et quantités
 function createOrder($_product'), ('$_quantity'); 
 $order ={ product=>$product
	       quantity=$quantity}
		   return $order;

 // je sauvegarde ma commande 
 function saveOrder($order);
 $session["order"]=$order;

?>