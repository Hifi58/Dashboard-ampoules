<?php
session_start();

$pseudo=$_POST["pseudo"];
$pass=md5($_POST["pass"]);
$valider=$_POST["valider"];
$erreur="";


if isset($valider){
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $pass = md5($_POST["pass"]);
    if(!empty($pseudo)) AND (!empty($pass)){
        $donnees = $bdd->prepare("SELECT * FROM membres WHERE pseudo = ? AND pass = ?");
        $donnees->execute(array($pseudo, $pass));
        $userexist=$donnees->rowCount();
        if($userexist == 1){
            $info = $donnees->fetch()
            $_SESSION['id'] = $info['id'];
            $_SESSION['pseudo'] = $info['pseudo'];
            $_SESSION['mail'] = $info['mail'];
            header("Location: Accueil.php?id=".$_SESSION['id']);
        }   else{
            $erreur = "Mauvais mail ou mot de passe !";
            }
        }
            else{
                $erreur = "Tous les champs doivent être complétés !";
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