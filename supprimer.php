<?php
require_once('connexion.php');
?>

<?php
// $date_change = $_POST['date_change'];
// $etage = $_POST['etage'];
// $position = $_POST['position'];
// $prix = $_POST['prix'];

$id = $_GET['id'];

$bdd->exec("DELETE FROM historique WHERE id = '$id'");

echo ("<script LANGUAGE='JavaScript'>
window.alert('Suppression effectué');
window.location.href='historique.php';
</script>");
?>

