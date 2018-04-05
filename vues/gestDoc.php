<div id = "gestDoc">
	<div id = "buttonGestDoc">
		<button id = "addDoc"/>
    	<button id = "remDoc"/>
    </div>
	<table id = "gestDocTab">
    	<tr>
            <?php
            $entete = array("Auteur", "Nom", "Date", "Type", "Catégorie");
            for ($i=0; $i < sizeof($entete); $i++) { 
                echo "<td class='tdGestDoc'><p>".$entete[$i]."</p></td>";
            }
            ?>
        </tr>

        <?php
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=ppe1','root','');

            $auteur = $bdd -> prepare("SELECT * FROM auteur");
            $document = $bdd -> prepare("SELECT * FROM document");

            while ($auteur -> fetch())  {
                $nomAut = $auteur["nom"];
                $prenom = $auteur["prenom"];
            }

            while ($document -> fetch())    {
                $nomDoc = $document["titre"];
                $date = $document["date"];
            }

            for ($i=0; $i < sizeof($nomAut); $i++) { 
                echo "<tr>";
                echo "<td class='tdGestDoc>".$nomAut[$i]." ".$prenom."</td>";
                echo "";
            }

        ?>
    </table>
</div>