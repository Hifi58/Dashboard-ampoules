<?php

    try{
    $bdd = new PDO('mysql:host=localhost;dbname=ampoules;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }

$date_change = $_POST['date_change'];
$etage = $_POST['etage'];
$position = $_POST['position'];
$prix = $_POST['prix'];

$bdd->exec("INSERT INTO historique ( date_change, etage, position, prix) VALUE ('$date_change', '$etage', '$position', '$prix')");

echo "intervention validée !";