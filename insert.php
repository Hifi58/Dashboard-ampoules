<?php
require_once('connexion.php');

$date_change = $_POST['date_change'];
$etage = $_POST['etage'];
$position = $_POST['position'];
$prix = $_POST['prix'];

$bdd->exec("INSERT INTO historique ( date_change, etage, position, prix) VALUE ('$date_change', '$etage', '$position', '$prix')");

echo "intervention validée !";