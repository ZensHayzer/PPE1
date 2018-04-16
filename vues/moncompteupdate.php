<?php 

if(isset($_SESSION['connected'])){
	include 'php/updateMonCompte.php';
?>

<div align="center">
	<h2>Edition de mon profil</h2>

<form method="POST" action="">
<table>
<tr>
	<td>Nouveau nom</td>
	<td><input type="text" name="nouveaunom" placeholder="Modifiez votre nom" value="<?php echo $user['Nom']?>" /></td>
<tr>
	<td>Nouveau prenom</td>
	<td><input type="text" name="nouveauprenom" placeholder="Modifiez votre prenom" value="<?php echo $user['Prenom']?>"></td>
</tr>
<tr>
	<td>Nouveau mail</td>
	<td><input type="email" name="nouveaumail" placeholder="Modifiez votre mail" value=""></td>
</tr> 
<tr>
	<td>Nouveau téléphone</td>
	<td><input type="text" name="telephone" placeholder="Modifiez votre téléphone" value="<?php echo $user['Numero_Telephone']?>"></td>
</tr>
<tr>
	<td>Nouveau mot de passe</td>
	<td><input type="password" name="nouveaumdp" placeholder="Modifiez votre mot de passe"></td>
</tr>
<tr>
	<td>Confirmez mot de passe</td>
	<td><input type="password" name="nouveaumdp2" placeholder="Confirmez nouveau mot de passe"> </td>
</tr>
<tr>
	<td><input type="submit" value="Modifier" ></td>
</tr>

</table>
</form>


</div>
<?php
}
else
{
	echo "<h1 style='color:red; text-align: center; margin-top: 30%;'>MAKE YOUR DREAMS COME TRUE</h1>";
}
?>