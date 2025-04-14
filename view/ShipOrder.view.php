<?php require_once("../view/partial/_header.view.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>

    <h1>Expedier ma commande</h1>

    <p><?php echo $message; ?></p> 
        
        <form method="POST">

        <button type="submit">Expedier cette commande</button>
        
</form>

</main>   

</body>
</html>