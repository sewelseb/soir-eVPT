<?php
require_once ('ConexionBDD.php');
require_once ('Modeles/objects/ReponseManager.php');
require_once ('Modeles/objects/EmailClient.php');

$reponse = new Reponse();
$reponse->setType('Autre');
$reponse->setTitre($_POST['titre']);
$reponse->setNom($_POST['nom']);
$reponse->setPrenom($_POST['prenom']);
$reponse->setEmail($_POST['mail']);
$reponse->setBirthday($_POST['birthday']);


$reponseManager = new ReponseManager();

$reponse->setId($reponseManager->save($reponse, $bdd));

$textMessage = 'Bonjour '.$reponse->getPrenom().',

                Pour valider votre inscription, veuillez verser 17€ sur le compte n° BE68 3100 4945 5134 avec en comunication le code suivant: vpt-'.$reponse->getId().' .

                Nous serons ravis de vous voir le 16 février 2019.
                
                Votre nom sera noté sur une liste à l\'entrée, il n\'y a pas de ticket à présenter.
                
                Pour toute question, n\'hésitez pas à nous contacter par mail à l\'adresse suivante: inscriptions@vpt.be 
                
                En attendant, n\'hésitez pas à nous suivre sur Instagram, sur le compte SOIREEVPT ( https://www.instagram.com/soireevpt/ )
                
                Bien à vous,
                
                L\'équipe organisatrice de la soirée Vacances Pour Tous
                ';
$message = "";

try {
    $emailSender = new EmailClient();
    $emailSender->sendMail($reponse->getEmail(), 'Confirmaion de votre inscription à la soirée VPT', $textMessage);
}catch (Exception $e) {
    $message = "Le mail de confirmation n'a pas pu être envoyé <br/>";
}

$message.= 'Merci '.$reponse->getPrenom().'.
    Pour valider votre inscription, veuillez verser 17€ sur le compte BE68 3100 4945 5134 avec en comunication le code suivant: <strong>vpt-'.$reponse->getId().'</strong>';

include ('Vues/home.php');
