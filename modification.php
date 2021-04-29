<?php
require_once('connexion.php');
?>

<?php

$date_change = $_GET['date_change'];
$etage = $_GET['etage'];
$position = $_GET['position'];
$prix = $_GET['prix'];
$id = $_GET['id'];

$nb_modif=$bdd->exec("UPDATE FROM historique SET date_change = '$date_change', etage = '$etage', position = '$position', prix = '$prix' WHERE  id = '$id'");

echo $nb_modif. ' entrée modifiée';

?>
