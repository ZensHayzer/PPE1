<div id="ZoneBanniere">
    <div id="banniereGauche">
    	<table>
        	<tr>
            	<td><a href="index.php?action=accueil" class="banniere"><h1>BookTic.com</h1></a></td>
                <td><button onclick="hideMenu()" id="boutonMenu" class="banniere"></button></td>
            </tr>
        </table> 
    </div>

    <div id="banniereDroite">
        <?php include 'vues/banniereDroite.php' ?>  
    </div>     
</div>

<div id="menuNav">
    <?php include 'vues/menu.php' ?>
</div>

<div id="supportArticle">
    <div id="zoneArticle">
        <?php include 'controleur/controler.php' ?>
    </div>
</div>