<meta charset="utf-8" />

<?php


function menu()	{
	
	$menuTab = array("Accueil", "Documents", "Mon compte");
	
	// Première partie du menu
	echo ('<ul id = "menu">');
	for ($i = 0; $i < 3; $i++)	{
		echo ('<li><div id="'.$menuTab[$i].'" onclick="getId(\''.$menuTab[$i].'\')">'. $menuTab[$i] .'</div></li>');
	};
}

?>


