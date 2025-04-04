<?php require_once("../view/_header.view.php"); ?>

    <main>

    <p><?php echo $message; ?></p>

    <?php if ($orderByUser) {?>
		<p>Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?>
        <p>Créée le <?php echo $orderByUser['createAt']->format('y-m-d'); ?></p>
        <p>Votre commande est en statut :<?php echo $orderByUser['status']; ?></p>
		<?php } ?>


    <form method="POST">

        <label for="quantity">Quantity
            <input type="number" name="quantity"/> 
        </label>

        <label for="product">Product
            <select name="product">
                <?php foreach ($products as $product) { ?>
                <option value="<?php echo $product; ?>"><?php echo $product; ?><?php echo $product; ?></option>
                <?php } ?>
            </select>
        </label>

        <button type="submit">Créer ma commande</button>

</form>            
   
</main>
</body>
</html>