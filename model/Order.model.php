<?php

//tableau de commande sécurisé
class order {

// information liés au produit  
public $product;

// information liés à la quantité
public $quantity;

//information lié à la date de création
public $createAt;

// information lié au paiement par exemple
public $statut;

} 


//je crée des valeurs qui auront des propriétes définies dans un tableau sécurisé 
$order = new Order();

//la valeur c'est la commande et la clé c'est le produit 
$order->product "Teeshirt Bonjour"
//la valeur c'est la commande et la clé c'est la quantité
$order->quantity = 1;
//la valeur c'est la commande et la clé c'est la création du produit
$order->createAt= new DateTime format ('14.04.2025');
//la valeur c'est la commande et la clé c'est le paiement par carte
$order->statut = "paiement par cart"