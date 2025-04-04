<?php

//inclure le fichier de configuration
require_once("../config.php");
// inclure le fichier des produits
require_once('../model/product.repository.php');
// inclure la commande
require_once ('../model/order.repository.php');

//je démarre ma session pour créer un identifiant
session_start();

$message ="";

//si le produit et la quantité, je créer et je sauvegarde ma commande
if (array_key_exists("product", $_POST) &&
   array_key_exists("quantity", $_POST)){

    //j'essaie de créer la commande sauf si une erreur s'affiche
    try {
		$order = createOrder($_POST['product'], $_POST['quantity']);
		saveOrder($order);
	} catch(Exception $e) {
		$message = $e->getMessage();
	}

}

    //je récupère ma zone de stockage dans le tableau.stocker ma commande
    $orderByUser = findOrderByUser();


//le controller récupére le fichier view pour afficher le HTML
require_once('../view/create-order.view.php'); 

