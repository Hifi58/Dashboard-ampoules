<?php
session_start();
require_once('connexion.php');
?>

<?php

$date_change = $_POST['date_change'];
$etage = $_POST['etage'];
$position = $_POST['position'];
$prix = $_POST['prix'];
$id = $_POST['id_historique'];
$member_id = $_post['id_membres'];

$bdd->exec("UPDATE historique SET  date_change = '$date_change', etage = '$etage', position = '$position', id_membres = '$member_id', prix = '$prix' WHERE  id_historique = '$id'");

 echo ("<script LANGUAGE='JavaScript'>
 window.alert('Modification effectué');
 window.location.href='historique.php';
</script>");

?>
