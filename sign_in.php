<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //connexion bdd
    include('connexion.php');
    //  Récupération de l'utilisateur et de son pass hashé
    $data = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = ? LIMIT 1');
    $data->execute(array($_POST['pseudo']));
    $result = $data->fetch();
  
    if (!$result){
      echo 'Mauvais identifiant ou mot de passe !';}
    else{
      // Comparaison du pass envoyé via le formulaire avec la base
      if (password_verify($_POST['pass'], $result['pass'])){
          session_start();
          $_SESSION['connected'] = 1;
          $_SESSION['id'] = $result['id'];
          $_SESSION['pseudo'] = $_POST['pseudo'];
          header("location: Accueil.php");
      }
      else {
          echo 'Mauvais identifiant ou mot de passe !';
        
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

<header>
    <div class='container'>
        <div class='wrapper'>
            <div class='bloc1'><img src="images/ampouleicon.png" alt="ampoule" class="icone">
            </div>
            <div class='bloc2'><p class="citation"><q>On ne jette pas une ampoule quand elle éclaire encore. </q> <br/><br/> Patrice Leconte</p></div>
        </div>
    </div>
</header>

<h1><a href="index.php" title="Si ce n'est pas déjà fait">Créer un compte</a></h1>

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
