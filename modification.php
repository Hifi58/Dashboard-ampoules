<?php
require_once('connexion.php');
?>

<?php
$date_change = $_POST['date_change'];
$etage = $_POST['etage'];
$position = $_POST['position'];
$prix = $_POST['prix'];

$sql="UPDATE 'historique' SET 'date_change'=:date_change, 'etage'=:etage, 'position'=:position, 'prix'=:prix WHERE 'id'=:id;";