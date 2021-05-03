<?php require_once('connexion.php'); ?>

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

    <h1>Pour continuer sur le site veuillez vous inscrire</h1>

    <section class='inscription'>
        <div class="containersignup">
            <div class="wrappersignup">
                <div class="formulairesignup">
                    <form action="sign_up.php" method="POST" class="bloc3">
                    
                     <label>Pseudo</label> <input class="champs" type="text" name="pseudo"  />
                
                     <label>Mot de passe</label><input type="password" name="pass" >

                     <label>Confirmation de mot de passe</label><input type="password" name="pass" >

                     <label>E-mail</label><input type="email" name="mail" >

                        <div class="boutonsaccueil">
                            <input id="snackbar" class="submit" type="submit" />
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