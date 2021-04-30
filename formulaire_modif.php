<?php
//connection BDD

require_once('connexion.php');

$id = $_GET['id'];

 
//affichage de l'historique de manière décroissante
$reponse = $bdd->query("SELECT * FROM historique WHERE id='$id'");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/ampoule.png" />
    <title>Modification</title>
</head>
<body>
        <?php include "header.php" ?>

<!--Début formulaire de visualisation-->
<section class="envoi">
    <div class="containerenvoi">
        <div class="wrapperenvoi">
            <div class="formulaire">
                <table>
                <thead>
                    <th>Dates</th>
                    <th>Étages</th>
                    <th>positions</th>
                    <th>prix</th>
                </thead>
                <tbody>

<?php 

//Mise en place des variables dans le tableau pour ajouter la fonction de modification

                     while ($donnees = $reponse->fetch()){
 ?>  

                    <tr>
                        <td><?php echo $donnees['date_change']; ?></td>
                        <td><?php echo $donnees['etage']; ?></td>
                        <td><?php echo $donnees['position']; ?></td>
                        <td><?php echo $donnees['prix']; ?></td>
                    </tr>


<?php

//fermeture boucle WHILE

    };

?>



      
<!--Fin formulaire de visualisation-->

            <h1>Attention vous allez effectuer une modification !</h1>


<!--Formulaire de modification-->


            <form class="bloc3" action="modification.php" method="POST">

                <label>Date:</label> <input class="champs" type="date" name="date_change"  />
                
                <label>Étages</label><input type="number" min="0" max="11" name="etage" />
        
<br/>
                <label>Positions</label><select name="position">
                    <option value="">Sélection d'une position</option>
                    <option value="gauche">Gauche</option>
                    <option value="droite">Droite</option>
                    <option value="fond">Fond</option>
                </select>
<br/>
                <input type="hidden" name="id" step="any" min="0" value="<?php echo $id ?>">

                <label>Prix :</label> <input class="champs" type="number" name="prix" step=".01" min="0" title="ne pas écire de symboles monétaires"  />
                <div class="boutonsaccueil">

                    <input  class="submit" type="submit" value="Modifier"/>

                </div>
            </form>

<!--Fin du formulaire-->

            </div>
        </div>
    </div>
</section>
</body>
</html>