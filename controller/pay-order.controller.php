<?php

session_start();

require_once('../model/order.repository.php');

// commande de l'utilisateur
$orderByUser = findOrderByUser();

//savoir si l'utilisateur à cliquer sur payer en passant par Form et sauvegarder commande utilisateur.
if ($_SERVER['REQUEST_METHOD'] === "POST") {
$orderByUser['status']= "paid"
saveOrder= ($orderByUser);
}

require_once('../view/pay-order.view.php');