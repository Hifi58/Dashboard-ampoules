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
    <title>Dashboard</title>
</head>
<body>

        <?php include "header.php" ?>

<section class="envoi">
    <div class="containerenvoi">
        <div class="wrapperenvoi">
            <div class="formulaire">

            <form class="bloc3" action="insert.php" method="POST">

                <label>Date:</label> <input class="champs" type="date" name="date_change"  />
                
                <label>Étages</label><select name="etage" id="etage">
                    <option value="">Sélection d'un étage</option>
                    <option value="rdc">Rez-de-chaussée</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select>
<br/>
                <label>Positions</label><select name="position" id="position">
                    <option value="">Sélection d'une position</option>
                    <option value="gauche">Gauche</option>
                    <option value="droite">Droite</option>
                    <option value="fond">Fond</option>
                </select>
<br/>
                <label>Prix :</label> <input class="champs" type="number" name="prix" step=".01"  />
                <div class="boutonsaccueil">
                    <input id="snackbar" class="submit" type="submit" />
                </div>
            </form>

            </div>
        </div>
    </div>
</section>
<aside>
    <div class="gobtn">
        <button class="gohisto"><a href="historique.php">Consulter l'historique</a></button>
    </div>
</aside>
<footer class="footerbis">
    <p class="textfooter">&#169; Tony GILLET 2021</p>
</footer>
<script src="main.js"></script>
</body>
</html>