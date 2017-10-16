<?php
	session_start();
	include('../ConexionBDD.php');
	include('objAdmin.php');

	$admin = new Admin();
	$admin->hydrateConexion($_POST['pseudo'], $_POST['motDePasse']);
	$reussite=$admin->connection($bdd);
	echo $reussite;
	if ($reussite==1)
		{
			header('location: orga.php');
		}
	else 
		{
			header('location: index.php');
		}

?>