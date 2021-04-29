<?php
require_once('connexion.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/ampoule.png" />
    <title>Document</title>
</head>
<body>
        <?php include "header.php" ?>

        <section class="envoi">
    <div class="containerenvoi">
        <div class="wrapperenvoi">
            <div class="formulaire">

            <form class="bloc3" action="modification.php" method="POST">

                <label>Date:</label> <input class="champs" type="date" name="date_change"  />
                
                <label>Étages</label><input type="number" min="0" max="11" name="etage" id="etage">
        
<br/>
                <label>Positions</label><select name="position" id="position">
                    <option value="">Sélection d'une position</option>
                    <option value="gauche">Gauche</option>
                    <option value="droite">Droite</option>
                    <option value="fond">Fond</option>
                </select>
<br/>
                <label>Prix :</label> <input class="champs" type="number" name="prix" step=".01" min="0" title="ne pas écire de symboles monétaires"  />
                <div class="boutonsaccueil">
                    <input id="snackbar" class="submit" type="submit" value="Modifier"/>
                </div>
            </form>

            </div>
        </div>
    </div>
</section>
<footer class="footerbis">
    <p class="textfooter">&#169; Tony GILLET 2021</p>
</footer>
</body>
</html>