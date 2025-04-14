<?php
 
require_once('../config.php');

require_once('../model/order.repository.php');

session_start();

// commande de l'utilisateur
$orderByUser = findOrderByUser();

//savoir si l'utilisateur à cliquer sur payer en passant par Form et sauvegarder commande utilisateur.
if ($_SERVER['REQUEST_METHOD'] === "POST") {

if ($orderByUser['status'] === 'CART') {
$orderByUser['status']= "canceled"
saveOrder= ($orderByUser);
}else {
    $message = "la commande est déjà payée. Vous ne pouvez plus l'annuler";
}
}

<?php if (orderByUser) { ?>
    $message = (essaie de payer la commande annulée),
}<?php else{
    return (ne pas annulée la commande si elle est payée),
} ?>

require_once('../view/cancel.view.php');  