<?php 

$tabMenu = array("Accueil", "Documents", "Mon compte");
$tabAction = array("accueil", "documents", "moncompte");

// Première partie du menu
echo ('<ul id ="menu">');
for ($i = 0; $i < 3; $i++)	{
    echo ('<li><a href="index.php?action='.$tabAction[$i].'">'.$tabMenu[$i].'</a></li>');
};

echo ('</ul>'); 
?>
