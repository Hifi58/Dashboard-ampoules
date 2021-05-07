<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
session_start();
require_once('connexion.php');

$date_change = $_POST['date_change'];
$etage = $_POST['etage'];
$position = $_POST['position'];
$prix = $_POST['prix'];
$id = $_POST['id_historique'];


$sql = "UPDATE historique SET  date_change = '$date_change', etage = '$etage', position = '$position', prix = '$prix' WHERE  id_historique = $id";
$rs = $bdd->prepare($sql);
$rs->execute();


echo $id;
 echo ("<script LANGUAGE='JavaScript'>
 window.alert('Modification effectué');
 window.location.href='historique.php';
</script>");


