<?php

session_start();

require_once('../model/order.repository.php');

// commande de l'utilisateur
$orderByUser = findOrderByUser();

//savoir si l'utilisateur à cliquer sur payer en passant par Form et sauvegarder commande utilisateur.
if ($_SERVER['REQUEST_METHOD'] === "POST") {
$orderByUser['status']= "Shipped"
saveOrder= ($orderByUser);
}
 //j'essaie de créer la commande sauf si une erreur s'affiche
 try {
    $order = createOrder($_POST['product'], $_POST['quantity']);
    saveOrder($order);
} catch(Exception $e) {
    $message = $e->getMessage();
}


require_once('../view/pay-order.view.php');