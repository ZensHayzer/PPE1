<?php

echo '<form method="POST" action="php/moteurRecherche.php">
		<input type="search" name="filtre">
		<label for="typeFiltre">Choisir un type de filtre : </label>
		<select name="typeFiltre">
			<option value="nom">Nom</option>
			<option value="prenom">Prénom</option>
			<option value="titre">Titre</option>
			<option value="date">Date</option>
		</select>
		<input type="submit">
	  </form>';

echo '<div >';
echo '<table id="gestDocTab">';
echo '  	<tr>
        	<td><p>Nom </p></td>
        	<td><p>Prénom</p></td>
            <td><p>Titre</p></td>
            <td><p>Date</p></td>            
        </tr>';
		


echo '</table>';
echo '</div>';

?>