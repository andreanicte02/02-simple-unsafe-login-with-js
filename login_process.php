<?php 
	
	session_start();
	header('Content-Type: application/json');
	$userName = $_POST["user"];
	$userPass = $_POST["pass"];


	if(strcmp($userName, "root")==!0 || strcmp($userPass, "123")==!0  ){

		
		$_SESSION['status'] = false;
		$_SESSION['logedUser'] = 'unlogged user ';		
		header('HTTP/1.1 401 Credenciales incorrectas');

		

		exit;
	}

	$_SESSION['status'] = true;
	$_SESSION['logedUser'] = $userName;		

	header('HTTP/1.1 204 OK');

	
	exit;

 ?>