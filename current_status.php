<?php


	header('Content-Type: application/json');
	session_start();

	$json['status'] = $_SESSION['status'];
	$json['logedUser'] = $_SESSION['logedUser'];

	$jsonEncode = json_encode($json);

	echo $jsonEncode;

?>