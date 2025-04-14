<?php

require_once('../config.php');
require_once('../model/order.repository.php')

session_start();

$orderByUser= findOrderByUser();

 $message = "";

//savoir si l'utilisateur à cliquer sur Shipped en passant par Form et sauvegarder commande utilisateur.
if ($_SERVER['REQUEST_METHOD'] === "POST") {
$orderByUser['status']= "SHIPPED"
saveOrder= ($orderByUser);

$message ="demande d'expédition confirmée";

}else {
	$message = "";
}

require_once('../view/ShipOrder.view.php');