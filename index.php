<?php

	session_start();

	date_default_timezone_set('UTC');
	setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');

	//Test d'authentification de l'utilisateur
	if(!empty($_SESSION['CONNECT']) && $_SESSION['CONNECT'] == 1){
		//Redirection de l'utilisateur authentifi√© vers l'accueil
		//include_once('controllers/Users.php');
		include_once('controllers/Admin.php');
		//include_once('controllers/Authentication.php');
	}
	else{
		//Redirection de l'utilisateur non authentifi√© vers la page d'authentification
		$_SESSION = array();
		 include_once('controllers/Authentication.php');
		//include_once('controllers/Admin.php');
	}

?>
