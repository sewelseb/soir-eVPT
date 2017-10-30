<?php
require_once ('ConexionBDD.php');
require_once ('Modeles/objects/ReponseManager.php');

$reponse = new Reponse();
$reponse->setType('Autre');
$reponse->setTitre($_POST['titre']);
$reponse->setNom($_POST['nom']);
$reponse->setPrenom($_POST['prenom']);
$reponse->setEmail($_POST['mail']);


$reponseManager = new ReponseManager();
$reponseManager->save($reponse, $bdd);