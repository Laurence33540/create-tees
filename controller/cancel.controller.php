<?php
 
require_once('../config.php');
require_once('../model/order.repository.php');

session_start();

// commande de l'utilisateur
$orderByUser = findOrderByUser();

$message ="";

//savoir si l'utilisateur à cliquer sur payer en passant par Form et sauvegarder commande utilisateur.
if ($_SERVER['REQUEST_METHOD'] === "POST") {

if ($orderByUser['status'] === 'CART') {
$orderByUser['status']= "canceled"
saveOrder= ($orderByUser);
}else {
    $message = "la commande est déjà payée. Vous ne pouvez plus l'annuler";
}
}


require_once('../view/cancel.view.php');  