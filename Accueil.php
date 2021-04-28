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

<section class="envoi">
    <div class="containerenvoi">
        <div class="wrapperenvoi">
            <div class="formulaire">

            <form class="bloc3" action="insert.php" method="POST">

                <label>Date:</label> <input class="champs" type="date" name="date_change"  />
                <label>Étage:</label> <input class="champs" type="number" name="etage"  />
                <label>Position:</label> <input class="champs" type="text" name="position"  />
                <label>Prix :</label> <input class="champs" type="number" name="prix"  step=".01"/>
                <br/>
                <input id="snackbar" class="submit" type="submit" />
                <br/>
                <button><a href="historique.php">Consulter l'historique</a></button>

            </form>

            </div>
        </div>
    </div>
</section>

        <?php include "footer.php" ?>
<script src="main.js"></script>
</body>
</html>