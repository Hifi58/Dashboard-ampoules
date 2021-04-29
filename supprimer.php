<?php
require_once('connexion.php');
?>

<?php
$date_change = $_POST['date_change'];
$etage = $_POST['etage'];
$position = $_POST['position'];
$prix = $_POST['prix'];

$id = $_POST['id']

$bdd->exec("DELETE FROM 'historique' WHERE 'id'=:id;");

echo "Suppression terminée";
