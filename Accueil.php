<?php

session_start();
require("Fonctions/hote.php");
if(!isconnected()){
   header("location: sign_in.php");
exit(); 
}

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
<h1>Veuillez remplir tous les champs</h1>
<section class="envoi">
    <div class="containerenvoi">
        <div class="wrapperenvoi">
            <div class="formulaire">

            <form class="bloc3" action="insert.php" method="POST">

                <input class="champs" type="date" name="date_change"  />
                
                <input type="number" min="0" max="11" name="etage" id="etage" placeholder="Étages">
        

                <select name="position" id="position">
                    <option value="">Sélection d'une position</option>
                    <option value="gauche">Gauche</option>
                    <option value="droite">Droite</option>
                    <option value="fond">Fond</option>
                </select>
<br/>
                <input type="hidden" name="id_membre">
                <input class="champs" type="number" name="prix" step=".01" min="0" title="ne pas écire de symboles monétaires" placeholder="Prix"  />
                <div class="boutonsaccueil">
                    <input  class="submit" type="submit" />
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
</body>
</html>