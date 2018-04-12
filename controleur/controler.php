<?php
	if(!isset($_GET['action'])) {
		$_GET['action'] = 'accueil';
	}
	
	switch ($_GET['action'])	{
		case 'accueil':
			include 'vues/accueil.php';
			break;
		
		case 'documents':
			include 'vues/documents.php';
			break;

		case 'moncompte':
			include 'vues/moncompte.php';
			break;

		case 'mentions':
			include 'vues/mentions.php';
			break;
			
		default:
			include 'vues/accueil.php';
			break;
	}


?>