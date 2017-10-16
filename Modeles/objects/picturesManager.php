<?php

/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 16-03-16
 * Time: 13:49
 */

require_once ("pictures.php");

class picturesManager
{
    private $_pictureList;

    /**
     * @return array
     */
    public function getPictureList()
    {
        return $this->_pictureList;
    }

    /**
     * @param array $pictureList
     */
    public function setPictureList($pictureList)
    {
        $this->_pictureList = $pictureList;
    }



    public function __construct()
    {
        $this->setPictureList(scandir("./Vues/Photos"));
    }
}