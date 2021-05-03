<?php require_once('connexion.php');

$pseudo = $_POST['pseudo'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];
$date_inscri = $_POST['date_sign_in'];

$bdd->exec("INSERT INTO membres (pseudo, pass, mail, date_sign_in) VALUE('$pseudo', '$pass', '$mail', '$date_inscri')");

?>