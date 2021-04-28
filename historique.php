<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=ampoules;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ampoules</title>
</head>
<body>

        <?php include "header.php" ?>

<section class="historique">
    <div class="containerhisto">
        <div class="wrapperhisto">
            <div class="formulairehisto">

            <button><a href="accueil.php">Ajouter une ampoule</a></button>

            </div>
        </div>
    </div>
</section>

        <?php include "footer.php" ?>
<script src="main.js"></script>
</body>
</html>