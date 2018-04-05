<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=ppe1;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM auteur');
$livre = $bdd->prepare('SELECT * FROM document WHERE idauteur = ?');

echo '<div >';
echo '<table id="gestDocTab">';
echo '  	<tr>
        	<td><p>Nom </p></td>
        	<td><p>Prénom</p></td>
            <td><p>Titre</p></td>
            <td><p>Date</p></td>            
        </tr>';
		
while ($donnees = $reponse->fetch())
{
		$livre -> execute(array($donnees['id']));
		$donneesLivre = $livre -> fetch();
		
        echo '<tr>';
		echo '<td>'.$donnees['nom'].'</td>';
		echo '<td>'.$donnees['prenom'].'</td>';
		echo '<td>'.$donneesLivre['titre'].'</td>';
		echo '<td>'.$donneesLivre['date'].'</td>';
		echo '</tr>';
}

echo '</table>';
echo '</div>';
$reponse->closeCursor(); // Termine le traitement de la requête

?>