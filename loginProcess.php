<?php
	session_start();
	include('../ConexionBDD.php');
	include('objets/Users.class.php');

	$user= new Users();
	$user->hydrateConexion($_POST['userName'], $_POST['password']);
	$reussite=$user->conexion($bdd);
	if ($reussite==1)
		{
			header('location: home.php');
		}
	else 
		{
			header('location: index.php');
		}

?>