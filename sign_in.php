<?php
session_start();

$pseudo=$_POST["pseudo"];
$pass=md5($_POST["pass"]);
$valider=$_POST["valider"];
$erreur="";

if(isset($valider)){
    include("connexion.php");
    $data->$bdd("SELECT * FROM membres WHERE pseudo=? AND pass=? LIMIT 1");
    $data->execute(array('$pseudo, $pass'));
    $table=$data->fetchall();
    if(count($table)>0){
        $_SESSION ["pseudopass"] = $table[0] ["pseudo"]." ". $table[0] ["pass"];
        $_SESSION ["autoriser"]="oui";
        header("location:Accueil.php");
      }
      else{
        $erreur="Mauvais login ou mot de passe!";
    }
 }
?>

<!DOCTYPE html>
<ht lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/ampoule.png" />
    <title>Connexion</title>
</head>

<body >

<?php include "header.php" ?>

<h1><a href="inscription.php">Créer un compte</a></h1>

<section class='inscription'>
    <div class="containersignup">
        <div class="wrappersignup">
            <div class="formulairesignup">
                <form  method="post" action="" class="bloc3">

                <input type="text" name="pseudo" placeholder="Pseudo" />

                <input type="password" name="pass" placeholder="Mot de passe" />


            <div class="boutonsaccueil">
                <input  class="submit" type="submit" name="valider" value="Se connecter"/>
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