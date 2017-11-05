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
    private $_listeReponse;

    /**
     * @return mixed
     */
    public function getListeReponse()
    {
        return $this->_listeReponse;
    }

    /**
     * @param mixed $listeReponse
     */
    public function setListeReponse($listeReponse)
    {
        $this->_listeReponse = $listeReponse;
    }



    public function save(Reponse $reponse, PDO $PDO)
    {
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $PDO->prepare("INSERT INTO reponse 
                  (response_type, titre, nom, prenom, email, code_promo, rally, code_de_payement, birthday) 
          VALUES (:response_type, :titre, :nom, :prenom, :email, :code_promo, :rally, :code_de_payement, :birthday)");

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
            ':code_de_payement'=> $codeDePayement,
            ':birthday' =>$reponse->getBirthday()
        ));
//        echo "\nPDO::errorInfo():\n";
//        var_dump($PDO->errorInfo());

        return $PDO->lastInsertId();
    }



    public function getAll(PDO $PDO)
    {

        $i=0;
        $liste = array();
        $reqListeClients=$PDO->query('SELECT * FROM reponse ORDER BY id');
        while ($clientBdd=$reqListeClients->fetch())
            {
                $reponse= new Reponse();
//                    $client->hydratePlusId($clientBdd['id'], $clientBdd['titre'], $clientBdd['nom'], $clientBdd['prenom'], $clientBdd['presence_soiree'], $clientBdd['message'],$clientBdd['mail']);
                $reponse->setId($clientBdd['id']);
                $reponse->setType($clientBdd['response_type']);
                $reponse->setTitre($clientBdd['titre']);
                $reponse->setPrenom($clientBdd['prenom']);
                $reponse->setNom($clientBdd['nom']);
                $reponse->setEmail($clientBdd['email']);
                $reponse->setRally($clientBdd['rally']);
                $reponse->setCodePromo($clientBdd['code_promo']);
                $reponse->setBirthday($clientBdd['birthday']);
                $reponse->setPayed($clientBdd['payed']);




                $liste[$i]=$reponse;
                echo 'truc';

                $i++;
            }
        $this->setListeReponse($liste);
    }

    public function setAsSaved($id, PDO $PDO)
    {
        $PDO->exec('UPDATE reponse
            SET payed=\'true\'
            WHERE id='.$id.'  ');
        echo "\nPDO::errorInfo():\n";
        var_dump($PDO->errorInfo());
    }
}