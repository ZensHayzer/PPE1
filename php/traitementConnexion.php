<?php

/* Création du lien vers la base */

$bdd = new PDO('mysql:host=127.0.0.1;dbname=ppe1','root','');

/* Déclaration des variables */

$identifiant = htmlspecialchars($_POST['username']);
$password = sha1($_POST['password']);

/* préparation de requête */

$reqVerifCompte = $bdd -> prepare("SELECT * FROM utilisateur WHERE Login = ? AND Password = ?");

/* Début de la vérification */

if (!empty($identifiant) AND !empty($password))	{
	$reqVerifCompte -> execute(array($identifiant,$password));
	$existingAccount = $reqVerifCompte -> fetch();

	if ($existingAccount != False)	{
		session_start();
		$_SESSION["ID"] = $existingAccount["ID_Utilisateur"];
		$_SESSION["nom"] = $existingAccount["Nom"];
		$_SESSION["prenom"] = $existingAccount["Prenom"];
		$_SESSION["pays"] = $existingAccount["Pays"];
		$_SESSION["numTel"] = $existingAccount["Numero_Telephone"];
		$_SESSION["username"] = $existingAccount["Login"];
		$_SESSION["numSecu"] = $existingAccount["Numero_Secu"];
		$_SESSION["numLieu"] = $existingAccount["ID_Lieu"];
		$_SESSION["connected"] = True;
		header("Location: ../index.php?action=accueil");
	} else {
		echo"fail to connect";
	}

} else {
	echo "c'est vide !";
}

?>



