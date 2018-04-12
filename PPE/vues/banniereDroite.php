<?php
if(!isset($_SESSION["connected"])) {
	echo '<table>';
	echo '<tr>';
	echo '<td><button onclick="" id="boutonUtilisateur" class="banniere"></button></td>';
	echo '<td><a href="index.php?action=mentions" class="banniere"><h2>Mentions légales</h2></a></td>';
	echo '</tr>';
    echo '</table>';
}	

else	{
	echo '<form method="POST" action="php/traitementDeconnexion.php">';
	echo '<table>';
	echo '<tr>';
	echo '<td>'.$_SESSION['nom'].' '.$_SESSION['prenom'].'</td>';
	echo '<td><button onclick="" id="boutonConnnected" class="banniere"></button></td>';
	echo '<td><a href="index.php?action=mentions" class="banniere"><h2>Mentions légales</h2></a></td>';
	echo '</tr>';
    echo '</table>';
    echo '</form>';
}
?>
