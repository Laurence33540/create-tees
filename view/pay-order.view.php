<?php require_once("../view/_header.view.php"); ?>

    <main>

     <h1>Payer une commande</h1>

    <?php if ($orderByUser) {?>
		<p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?>
        <p>Créée le <?php echo $orderByUser['createAt']->format('y-m-d'); ?></p>
        <p>Votre commande est en statut :<?php echo $orderByUser['status']; ?></p>
        
        <form method="POST">
        <button type="submit">Payer</button>
    </form>
    
    <?php } else { ?>
         <p>vous n'avez pas de commande à payer</p>
    <?php } ?>
         
   
</main>
</body>
</html>