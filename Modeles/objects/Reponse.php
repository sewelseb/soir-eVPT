<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 30-10-17
 * Time: 21:12
 */

class Reponse
{
    private $_id;
    private $_type;  //{promoCode, rally, Autre}
    private $_titre;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_codePromo;
    private $_rally;
    private $_codeDePayement;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->_type = $type;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->_titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->_titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->_prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getCodePromo()
    {
        return $this->_codePromo;
    }

    /**
     * @param mixed $codePromo
     */
    public function setCodePromo($codePromo)
    {
        $this->_codePromo = $codePromo;
    }

    /**
     * @return mixed
     */
    public function getRally()
    {
        return $this->_rally;
    }

    /**
     * @param mixed $rally
     */
    public function setRally($rally)
    {
        $this->_rally = $rally;
    }

    /**
     * @return mixed
     */
    public function getCodeDePayement()
    {
        return $this->_codeDePayement;
    }

    /**
     * @param mixed $codeDePayement
     */
    public function setCodeDePayement($codeDePayement)
    {
        $this->_codeDePayement = $codeDePayement;
    }




}