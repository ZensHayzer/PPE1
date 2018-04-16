<?php

$bdd = new PDO('mysql:host=127.0.0.1;dbname=eni','root','');
$getid = $_SESSION['ID'];
if (isset($_SESSION['connected']))
{
	$requser = $bdd -> prepare("SELECT * FROM utilisateur WHERE Id_Utilisateur = ?");
	$requser -> execute(array($getid));
	$user = $requser -> fetch();

	if(isset($_POST['nouveaunom']) AND !empty($_POST['nouveaunom']) AND $_POST['nouveaunom'] != $user['Nom']) 
	{
		$nouveaunom = htmlspecialchars($_POST['nouveaunom']);
		$insertnom= $bdd -> prepare("UPDATE utilisateur SET Nom = ? WHERE Id_Utilisateur =?");
		$insertnom-> execute(array($nouveaunom, $getid));
	//	header('Location: profil.php?action='.);
	}
	if(isset($_POST['nouveauprenom']) AND !empty($_POST['nouveauprenom']) AND $_POST['nouveauprenom'] != $user['Prenom']) 
	{
		$nouveauprenom = htmlspecialchars($_POST['nouveauprenom']);
		$insertprenom= $bdd -> prepare("UPDATE utilisateur SET Prenom = ? WHERE Id_Utilisateur =?");
		$insertprenom-> execute(array($nouveauprenom, $getid));
	//	header('Location: profil.php?action='.);
	}
	if(isset($_POST['telephone']) AND !empty($_POST['telephone']) AND $_POST['telephone'] != $user['Numero_Telephone']) 
	{
		$nouveautelephone = htmlspecialchars($_POST['telephone']);
		$insertphone= $bdd -> prepare("UPDATE utilisateur SET Numero_Telephone = ? WHERE Id_Utilisateur =?");
		$insertphone-> execute(array($nouveautelephone, $getid));
	//	header('Location: profil.php?action='.);
	}


	if(isset($_POST['nouveaumdp']) AND !empty($_POST['nouveaumdp']) AND isset($_POST['nouveaumdp2']) AND !empty($_POST['nouveaumdp2'])) 
	{
	$mdp = /*sha1*/($_POST['nouveaumdp']);
	$mdp2 = /*sha1*/($_POST['nouveaumdp2']);

		if($mdp == $mdp2)
		{
			$insertmdp = $bdd -> prepare("UPDATE utilisateur SET Password = ? WHERE Id_Utilisateur = ?");
			$insertmdp -> execute(array($mdp, $getid));
			//header('Location: profil.php?id='.$_SESSION['id']);
		}
		else
		{
			$msg = "Les 2 mots de passe ne corresepondent pas...";
		}

	}
}


?>