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
    <title>Historique</title>
</head>
<body>

        <?php include "header.php" ?>

<section class="historique">
    <div class="containerhisto">
        <div class="wrapperhisto">
            <div class="formulairehisto">
            <?php 
            //affichage de l'historique de manière décroissante
            $reponse = $bdd->query('SELECT * FROM historique ORDER BY date_change DESC');
            ?>
            <table>
            <thead>
                <th>Dates</th>
                <th>Étages</th>
                <th>positions</th>
                <th>prix</th>
            </thead>
    <tbody>
        <?php //Mise en place des variables dans le tableau pour ajouter les fonctions de suppression et de modification
                while ($donnees = $reponse->fetch()){
                    
        ?>
            <tr>
                <td><?php echo $donnees['date_change'] ?></td>
                <td><?php echo $donnees['etage'] ?></td>
                <td><?php echo $donnees['position'] ?></td>
                <td><?php echo $donnees['prix'] ?></td>
                <td><?php echo "<a href= formulaire_modif.php>Modifier</a>" ?></td>
                <td><?php echo "<a href= supprimer.php?id=" . $donnees['id'] . '>Supprimer</a>' ?></td>
            </tr>

            
       <?php //fermeture While
    }; 

    require_once('fermeture.php');
    ?>


            <button class="backaccueil"><a href="accueil.php">Ajouter une ampoule</a></button>

            </div>
        </div>
    </div>
</section>

       
<script src="main.js"></script>
</body>
</html>