<?php
require_once('connexion.php');
?>

<?php


$id = $_GET['id'];

$bdd->exec("DELETE FROM historique WHERE id = '$id'");

echo ("<script LANGUAGE='JavaScript'>
window.alert('Suppression effectué');
window.location.href='historique.php';
</script>");
?>

