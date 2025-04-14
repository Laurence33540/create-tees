<?php

session_start();

require_once('../model/order.repository.php');

// commande de l'utilisateur
$orderByUser = findOrderByUser();

//savoir si l'utilisateur à cliquer sur payer en passant par Form et sauvegarder commande utilisateur.
if ($_SERVER['REQUEST_METHOD'] === "POST") {

if ($orderByUser['status'] === 'CART') {    
$orderByUser['status']= "paid"
saveOrder= ($orderByUser);
}else {
    $message = "la commande est déjà annulée. Vous ne pouvez plus la payer";
}
// je resauve la commande payée de l'utilisateur en session (elle remplace l'ancienne en CART)
saveOrder($orderByUser);
}

require_once('../view/pay-order.view.php');