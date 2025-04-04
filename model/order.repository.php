<?php

// si la commande de l'utilisateur existe afficher la commande sinon elle retourne vide
function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

 // si la commande est inferieure à 0 ou superieur à 3, j'interdit de crée la commande en renvoyant une exception
 function createOrder($product, $quantity) {
	if ($quantity < 0 ){
		throw new Exception ("Interdiction de mettre une quantité < 0"); 
	}  else if ($quantity > 3) {
		throw new Exception ("Interdiction de mettre une quantité > 3");
	} else { 
		$order = [ 
		"product"=> $product, 
		"quantity"=> $quantity,
		"createAt"=> new Datetime(),
		"status" => "cart" //on rajoute un status 
		];

		return $order;
	}
 }

 // je sauvegarde ma commande 
 function saveOrder($order){
 	$_SESSION["order"]= $order;
}
?> 