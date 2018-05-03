<?php

function connexionBase()	{
	try {
		$bdd = new PDO('mysql:host=localhost;dbname=ppe1;charset=utf8', 'root', '');
	}

	catch(Exception $e)	{
		// En cas d'erreur, on affiche un message et on arrête tout
	    die('Erreur : '.$e->getMessage());
	}
}

function affichageTab($nom, $prenom, $titre, $date)	{
	echo '
		<tr>
		<td>'.$nom.'</td>
		<td>'.$prenom.'</td>
		<td>'.$titre.'</td>
		<td>'.$date.'</td>
		</tr>';
}

function recuperationInfos()	{
	// Récupération des documents
	$req = connexionBase() -> prepare('SELECT ID_Document, ID_Auteur, Titre, Nom_Auteur, Prenom_Auteur, document.Date FROM document
     				INNER JOIN document_auteur ON document.ID_Document = document_auteur.ID_Document
      				INNER JOIN auteur ON document_auteur.ID_Auteur = auteur.ID_Auteur');

	while ($allDocs = $req -> fetch()){
		var_dump($allDocs);
	}
	
}

recuperationInfos();
/*


if (!empty($_POST["filtre"]) && !empty($_POST["typeFiltre"]))
{
	switch ($typeFiltre) {
		case 'nom':
			
			break;

		case 'prenom':
			$reqFiltrePrenom = query('SELECT prenom FROM auteur WHERE prenom LIKE %'.$_POST["filtre"].'%');
			break;

		case 'titre':
			$reqFiltreTitre = query('SELECT titre FROM documents WHERE titre LIKE %$_POST["filtre"]%');
			break;

		case 'date':
			$reqFiltreDate = query('SELECT date FROM documents WHERE date LIKE %$_POST["filtre"]%');
			break;
		
		default:
			header("Location: ../index.php?action=documents");
			break;
	}
} else {
	header("Location: ../index.php?action=documents");
}

function affichageDocs($nom, $prenom, $titre, $date)	{

	$reponse = $bdd->prepare('SELECT * FROM auteur WHERE ID_Auteur = ?');
	$recupID = $bdd->prepare('SELECT ID_Auteur FROM document_auteur WHERE ID_Document = ?');
	$livre = $bdd->query('SELECT * FROM document');

	

	while ($donneesLivre = $livre->fetch())
	{
		$recupID -> execute(array($donneesLivre['ID_Document']));
		$resultRecupID = $recupID->fetch();

		$reponse -> execute(array($resultRecupID['ID_Auteur']));
		$resultReponse = $reponse->fetch();

		$nom = 

		echo '
			<tr>
			<td>'.$nom.'</td>
			<td>'.$prenom.'</td>
			<td>'.$titre.'</td>
			<td>'.$date.'</td>
			</tr>';
	}
	
}*/

?>