<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 30-10-17
 * Time: 21:15
 */

require_once ('Reponse.php');

class ReponseManager
{
    public function save(Reponse $reponse, PDO $PDO)
    {
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $PDO->prepare("INSERT INTO reponse 
                  (response_type, titre, nom, prenom, email, code_promo, rally, code_de_payement) 
          VALUES (:response_type, :titre, :nom, :prenom, :email, :code_promo, :rally, :code_de_payement)");

        $type = $reponse->getType();
        $titre = $reponse->getTitre();
        $nom = $reponse->getNom();
        $prenom = $reponse->getPrenom();
        $email = $reponse->getEmail();
        $codePromo = $reponse->getCodePromo();
        $rally = $reponse->getRally();
        $codeDePayement = $reponse->getCodeDePayement();
        $stmt->execute(array(
            ':response_type' => $type,
            ':titre'=>  $titre,
            ':nom'=> $nom,
            ':prenom'=> $prenom,
            ':email'=> $email,
            ':code_promo'=> $codePromo,
            ':rally'=> $rally,
            ':code_de_payement'=> $codeDePayement
        ));
        echo "\nPDO::errorInfo():\n";
        var_dump($PDO->errorInfo());
    }
}