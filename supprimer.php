<?php
session_start();
require_once('connexion.php');
?>

<?php


$id = $_GET[id_historique];
$member_id = $_SESSION['id'];

$delete=$bdd->prepare("DELETE historique FROM historique INNER JOIN membres ON historique.id_membres = membres.id WHERE historique.id_historique=:id");
$delete->bindParam(':id', $id);
$delete->execute();



 echo ("<script LANGUAGE='JavaScript'>
 window.alert('Suppression effectué');
 window.location.href='historique.php';
 </script>");
?>
