<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 30-10-17
 * Time: 21:10
 */

    require_once ('ConexionBDD.php');
    require_once ('Modeles/objects/ReponseManager.php');

    $reponse = new Reponse();
    $reponse->setType('promoCode');
    $reponse->setTitre($_POST['titre']);
    $reponse->setNom($_POST['nom']);
    $reponse->setPrenom($_POST['prenom']);
    $reponse->setEmail($_POST['email']);
    $reponse->setCodePromo($_POST['codePromo']);

    $reponseManager = new ReponseManager();
$reponse->setId($reponseManager->save($reponse, $bdd));
$message='Merci '.$reponse->getPrenom().'. Votre réponse à bien été prise en compte';
include ('Vues/home.php');