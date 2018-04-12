<div id="titreIndex">
	<img src="images/logo.png" alt="logo"/>
	<h1>Bienvenue sur BookTic</h1>
    <h2>Bibliothèque médias</h2>
    <p>BookTic est un site de gestion et d'emprunt de document</p>
                    
	<img src="images/barre.png"/>
</div>

<?php

if (!isset($_SESSION["connected"]))	{
	echo '<div id="Actualites">';
	echo '<h1>Connexion</h1>';
	echo '<div id="formConnect">';
	echo '<form method="POST" action="php/traitementConnexion.php">';
	echo '<input type="texte" name="username" id="accueilUsername" class="globalChampConnectAccueil" placeholder="Identifiant" /></br>';
	echo '<input type="password" name="password" id="accueilPassword" class="globalChampConnectAccueil" placeholder="Mot de passe" /></br>';
	echo '<input type="submit" id="submitConnect" class="accueilConnect" value=" " title="Connexion" /></br>';
	echo '</form>';
	echo '</div>';
	echo '</div>';
}

?>
