<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=ampoules;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$limite=10;
$compteur=0;

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
            <?php 
            
            $reponse = $bdd->query('SELECT * FROM historique ORDER BY date_change DESC');

                while ($donnees = $reponse->fetch()){
                    echo 'Dates : '.$donnees['date_change'].'<br />';
                    echo 'Étages : '.$donnees['etage'].'<br />';
                    echo 'positions : '.$donnees['position'].'<br />';
                    echo 'prix : '.$donnees['prix'].'€'.'<br /><br />';
                    if($compteur >= $limite){
                        break;
                    };
                };
           ?>
            <button class="backaccueil"><a href="accueil.php">Ajouter une ampoule</a></button>

            </div>
        </div>
    </div>
</section>

        <?php include "footer.php" ?>
<script src="main.js"></script>
</body>
</html>