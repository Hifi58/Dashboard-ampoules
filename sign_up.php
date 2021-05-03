<?php 
session_start();

$pseudo = $_POST['pseudo'];
//hachage du mot de passe
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
$passbis = $_POST['passbis'];
$mail = $_POST['mail'];
$error ="";
$valider=$_POST["valider"];

//conditions de remplissages de tous les champs et de mots de passe identique + connexion table

if(isset($valider)){
if(empty($pseudo)) $error="Veuillez remplir tous les champs";
elseif (empty($pass)) $error="Veuillez remplir tous les champs";
elseif (empty($passbis)) $error="Veuillez remplir tous les champs";
elseif (empty($mail)) $error="Veuillez remplir tous les champs";
elseif ($pass!=$passbis) $error="Les mots de passes ne sont pas identiques";
else{
    include('connexion.php');
    $data=$bdd->prepare("SELECT id FROM membres WHERE pseudo=? LIMIT 1");
    $data->execute(array($pseudo));
    $table=$data->fetchAll();
    if(count($table)>0)
        $error="Pseudo déjà utilisé";
    else{
        $insert=$bdd->prepare("INSERT INTO membres (pseudo, pass, mail) VALUES(?, ?, ?)");
        if($insert->execute(array($pseudo, $pass, $mail)))
        header("location: Accueil.php");
        }
    }
}

?>