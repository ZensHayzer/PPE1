<?php

if(isset($_SESSION['connected'])){
$bdd = new PDO('mysql:host=127.0.0.1;dbname=eni','root','');

$getid = $_SESSION['ID'];
$requser = $bdd -> prepare('SELECT * FROM utilisateur WHERE Id_Utilisateur = ?');
$requser -> execute(array($getid));
$userinfo = $requser -> fetch();

?>
<div align="center">
<h2>Profil de <?= $userinfo['Login']; ?></h2>
	<table >
		<tr>
			<td>Nom:</td>
			<td><?= $userinfo['Nom']; ?></td>
		</tr>
		<tr>
			<td>Prénom:</td>
			<td><?= $userinfo['Prenom']; ?>	</td>
		</tr>
		<tr>
			<td>mél:</td>
			<td></td>
		</tr>
		<tr>
			<td>Pays:</td>
			<td><?= $userinfo['Pays']; ?></td>
		</tr>
		<tr>
			<td>Téléphone:</td>
			<td><?= $userinfo['Numero_Telephone']; ?></td>
		</tr>
		<tr>
			<td>Prénom:</td>
			<td><?= $userinfo['Prenom']; ?></td>
		</tr>
		<tr>
			<td>mdp:</td>
			<td><?= $userinfo['Password']; ?></td>
		</tr>
	</table>

	<a href="index.php?action=moncompte2"><button>Modifier</button></a>
</div>

<?php
}
else
{
	echo "<h1 align='center'>Vous n'êtes pas connecté</h1>";
}
?>