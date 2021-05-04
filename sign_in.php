<?php
echo $_SERVER['REQUEST_METHOD'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //connexion BDD
    include('connexion.php');
    //  Récupération de l'utilisateur et de son pass hashé
    $data = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = ? LIMIT 1');
    $data->execute(array($_POST['pseudo']));
    $result = $data->fetchAll();
  
    if (!$result){
      echo 'Kimino';}
    else{
      // Comparaison du pass envoyé via le formulaire avec la base
      $ok_password = password_verify($_POST['pass'], $result['pass']);
      if ($ok_password) {
          session_start();
          $_SESSION['id'] = $result['id'];
          $_SESSION['pseudo'] = $_POST['pseudo'];
          echo 'Vous êtes connecté !';
      }
      else {
          echo 'Genichi';
      }
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
          
                <input  class="submit" type="submit" name="valider" value="Se connecter"/>
           

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