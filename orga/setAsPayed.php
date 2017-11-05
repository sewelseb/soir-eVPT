<?php
session_start();
include('../ConexionBDD.php');
include('objAdmin.php');
include_once('../ObjClient.php');
require_once('../Modeles/objects/ReponseManager.php');

$admin= new Admin();
$conecte=$admin->verificationConecte($bdd);
echo $conecte;
if ($conecte==1)
{
    $admin->hydrateListeObjClient($bdd);

    $reponseManager = new ReponseManager();
    $reponseManager->setAsSaved($_GET['id'], $bdd);


    header('location: orga.php');

}
else
{
header('location: index.php');
}