<?php require_once('connexion.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="images/ampoule.png" />
    <title>Inscription</title>
</head>
<body>

<header>
    <div class='container'>
        <div class='wrapper'>
            <div class='bloc1'><img src="images/ampouleicon.png" alt="ampoule" class="icone">
            </div>
            <div class='bloc2'><p class="citation"><q>On ne jette pas une ampoule quand elle éclaire encore. </q> <br/><br/> Patrice Leconte</p></div>
        </div>
    </div>
</header>

    <h1>Pour continuer sur le site veuillez vous inscrire</h1>

    <section class='inscription'>
        <div class="containersignup">
            <div class="wrappersignup">
                <div class="formulairesignup">
                    <form action="sign_up.php" method="POST" class="bloc3">

                      <input class="champs" type="text" name="pseudo" placeholder="Votre pseudo"  />
                <br/>
                      <input type="password" name="pass" placeholder="Votre mot de passe" />

                      <input type="password" name="passbis" placeholder="Répétez votre mot de passe" />

                      <input type="email" name="mail" placeholder="Votre adresse mail" />

                        <div class="boutonsaccueil">
                            <input  class="submit" type="submit" name="valider" value="Inscription"/>
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