<?php
	include("ConexionBDD.php");
	include("ObjClient.php");
	session_start();

	$client=new Client();
	if (isset($_POST["titre"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["presence"]) && isset($_POST["message"]) && isset($_POST["mail"]))
		{
			$titre=$_POST["titre"];
			$nom=$_POST["nom"];
			$prenom=$_POST["prenom"];
			$presence=$_POST["presence"];
			$message=$_POST["message"];
			$mail=$_POST["mail"];
			echo ($mail);
			$client->hydrate($titre, $nom, $prenom, $presence, $message, $mail);
			$client->enregistrementDansBdd($bdd);
			$_SESSION['connexionSuccessful']=true;
			header('location: index.php');
		}
	else 
		{
			echo ("il manque des trucs");
		}
		

?>