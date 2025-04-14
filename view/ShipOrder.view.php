<?php require_once("../view/_header.view.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        
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