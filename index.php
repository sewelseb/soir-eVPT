<?php
/**
 * Created by PhpStorm.
 * User: sebastien
 * Date: 16-03-16
 * Time: 14:19
 */

session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);

include("ConexionBDD.php");
require_once("ObjClient.php");
include("Modeles/chargementDesPhotos.php");

$theme = "Vienne Impériale";
//$code = "alexia2016";

include("Vues/home.php");

