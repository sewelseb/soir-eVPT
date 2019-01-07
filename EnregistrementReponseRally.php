<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 30-10-17
 * Time: 21:49
 */

require_once ('ConexionBDD.php');
require_once ('Modeles/objects/ReponseManager.php');
require_once ('Modeles/objects/EmailClient.php');

$reponse = new Reponse();
$reponse->setType('rally');
$reponse->setTitre($_POST['titre']);
$reponse->setNom($_POST['nom']);
$reponse->setPrenom($_POST['prenom']);
$reponse->setEmail($_POST['mail']);
$reponse->setRally($_POST['rally']);
$reponse->setPresence($_POST['presence']);

$reponseManager = new ReponseManager();
$reponse->setId($reponseManager->save($reponse, $bdd));

$textMessage = 'Bonjour '.$reponse->getPrenom().',

                Nous accusons bonne réception de votre réponse. Si celle-ci est positive, nous serons ravis de vous voir le 16 février 2019.
                
                Votre nom sera noté sur une liste à l\'entrée, il n\'y a pas de ticket à présenter.
                
                Pour toute question, n\'hésitez pas à nous contacter par mail à l\'adresse suivante: inscriptions@vpt.be 
                
                En attendant, n\'hésitez pas à nous suivre sur Instagram, sur le compte SOIREEVPT ( https://www.instagram.com/soireevpt/ )
                
                Bien à vous,
                
                L\'équipe organisatrice de la soirée Vacances Pour Tous
                
                Event Facebook: https://www.facebook.com/events/2340446512649714/
                ';

try {
    $emailSender = new EmailClient();
    $emailSender->sendMail($reponse->getEmail(), 'Confirmation de votre inscription à la soirée VPT', $textMessage);
}catch (Exception $e) {
    $message = "Le mail de confirmation n'a pas pu être envoyé <br/>";
}


$message='Merci '.$reponse->getPrenom().'. Votre réponse a bien été prise en compte';

include ('Vues/home.php');
