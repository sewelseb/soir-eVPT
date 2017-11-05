<?php
require_once ('ConexionBDD.php');
require_once ('Modeles/objects/ReponseManager.php');

$reponse = new Reponse();
$reponse->setType('Autre');
$reponse->setTitre($_POST['titre']);
$reponse->setNom($_POST['nom']);
$reponse->setPrenom($_POST['prenom']);
$reponse->setEmail($_POST['mail']);
$reponse->setBirthday($_POST['birthday']);


$reponseManager = new ReponseManager();
$reponse->setId($reponseManager->save($reponse, $bdd));

$message='Merci '.$reponse->getPrenom().'. 
    Pour valider votre inscription, veuillez verser 15€ sur le compte BE68 3100 4945 5134 avec en comunication le code suivant: <strong>vpt-'.$reponse->getId().'</strong>';
include ('Vues/home.php');
