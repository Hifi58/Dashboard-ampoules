<?php
session_start();
require_once('connexion.php');

$date_change = $_POST['date_change'];
$etage = $_POST['etage'];
$position = $_POST['position'];
$prix = $_POST['prix'];
$member_id = $_SESSION['id'];

$bdd->exec("INSERT INTO historique ( id_membres,date_change, etage, position, prix) VALUE ($member_id, '$date_change', '$etage', '$position', '$prix')");

echo $member_id;

 echo ("<script LANGUAGE='JavaScript'>
window.alert('Ajout effectué');
 window.location.href='historique.php';
 </script>");
 