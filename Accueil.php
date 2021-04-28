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

            <form class="bloc3" action="insert.php" method="post">

                Date: <input class="champs" type="text" name="date" value="En chiffres" />
                Étage: <input class="champs" type="text" name="etage" value="En lettres" />
                Position: <input class="champs" type="text" name="position" value="En lettres" />
                Prix : <input class="champs" type="text" name="prix" value="Sans symboles" />
                <br/>
                <input class="submit" type="submit" />

            </form>

            </div>
        </div>
    </div>
</section>

        <?php include "footer.php" ?>

</body>
</html>