<?php
require_once('connexion.php');

session_start();
require("Fonctions/hote.php");
if(!isconnected()){
   header("location: sign_in.php");
exit(); 

}

$member_id = $_SESSION['id'];

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
            $member_id = $_SESSION['id'];
            //affichage de l'historique de manière décroissante
            $reponse = $bdd->prepare('SELECT * FROM historique INNER JOIN membres ON membres.id=historique.id_membres WHERE historique.id_membres=:member_id ORDER BY historique.date_change DESC');
            $reponse->bindParam(':member_id', $member_id);
            $reponse->execute();
            ?>
            <table>
                <thead>
                    <tr>
                    <th>Dates</th>
                    <th>Étages</th>
                    <th>positions</th>
                    <th>prix</th>
                    </tr>
                </thead>
                <tbody>
            </table>

        <?php //Mise en place des variables dans le tableau pour ajouter les fonctions de suppression et de modification
                while ($donnees = $reponse->fetch()){
                    
        ?>
            <table>
                    <tr>
                        <td><?php echo $donnees['date_change'] ?></td>
                        <hr>
                        <td><?php echo $donnees['etage'] ?></td>
                        <td><?php echo $donnees['position'] ?></td>
                        <td><?php echo $donnees['prix'] ?></td>
                        <td><?php echo "<a href= formulaire_modif.php?id=" . $donnees['id_historique'] . '>Modifier</a>' ?></td>
                        <td><?php echo "<a href= supprimer.php?id=" . $donnees['id_historique'] . '>Supprimer</a>'?></td>
                        <hr>
                    </tr>
                </tbody>
              </table>
       <?php //fermeture While
    }; 

    require_once('fermeture.php');
    ?>

        </div>    
    </div>
</div>
</section>

<div class="gobtn">
<button class="backaccueil"><a href="accueil.php">Ajouter une ampoule</a></button>

</div>
<?php include 'footer.php'?>
</body>
</html>