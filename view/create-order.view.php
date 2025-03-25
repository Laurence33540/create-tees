<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>Créer une commande</li>
</ul>
</nav>
</header>      
    <main>


    <!--si la clé existe dans le tableau "vous avez une commande en attente"--> 
    <?php if (array_key_exists("order", $_SESSION)) { ?>
		<p>Vous avez une commande en attente : <?php echo $_SESSION["order"]["quantity"]; ?> : <?php echo $_SESSION["order"]["product"]; ?></p>
	<?php } ?>

    <form method="POST">

        <label for="quantity">Quantity
            <input type="number" name="quantity"/>
        </label>

        <label for="product">Produit
            <select name="product">
                <option value="teeshirtbonjour">Bonjour</option>
                <option value="teeshirtbonsoir">Bonsoir</option>
                <option value="teeshirtmaman">Maman</option>
            </select>
        </label>

        <button type="submit">Créer ma commande</button>

</form>            
   
</main>
</body>
</html>