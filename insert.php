<?php
try{
$bdd = new PDO('mysql:host=localhost;dbname=ampoules;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$bdd->exec("INSERT INTO historique (id, date, etage, position, prix) VALUE ('', '$_POST[date]', '$_POST[etage]', '$_POST[position]', '$_POST[prix]'");

