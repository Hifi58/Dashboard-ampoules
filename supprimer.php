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

echo ("<script type='text/javascript'>
 
<!--
if(confirm('Je vais vous dire sur quel bouton vous allez appuyer')) /* si on clique sur ok */
{
alert('Vous avez cliqué sur ok !'); /* on affiche une alerte */
}
else
{
alert('Vous avez cliqué sur annuler !');/* sinon on en affiche une autre */
}
 
//-->
</script>");
?>

