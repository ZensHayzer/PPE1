<?php
function menu()	{
	
	$menuTab = array("Documents", "Livres", "Textes", "Audio", "Musique", "Bruitages", "Répliques cultes", "Vidéos", "Films", "Documentaires", "Séries", "Images", "Paysages", "Memes", "Art");
	
	// Première partie du menu
	echo ('<ul id = "menu">');
	for ($i = 0; $menuTab[$i] != "Audio"; $i++)	{
		echo ('<li><div>'. $menuTab[$i] .'</div></li>');
	};
	
	// Menu Audio
	echo ('<li><div>'. $menuTab[$i] .'</div>');
	$i++;
	echo ('</ul>');
	echo ('</li>');
	
	// Menu Vidéo
	echo ('<li><div>'. $menuTab[$i] .'</div>');
	$i++;
	echo ('</ul>');
	echo ('</li>');
	
	// Menu Images
	echo ('<li><div>'. $menuTab[$i] .'</div>');
	$i++;
	echo ('</ul>');
	echo ('</li>');
	echo ('</ul>');
}

?>
