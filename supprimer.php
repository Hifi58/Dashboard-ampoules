<?php
session_start();
require_once('connexion.php');
?>

<?php


$id = $_GET['id'];
$member_id = $_SESSION['id'];

$bdd->exec("DELETE FROM historique WHERE id = '$id' ");

echo ("<script LANGUAGE='JavaScript'>
window.alert('Suppression effectué');
window.location.href='historique.php';
</script>");
?>

