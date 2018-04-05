<h1 class="banniere">Gestionnaire de Documents</h1>
<br/>

<div id = "gestDoc">
	<div id = "buttonGestDoc">
		<button id = "addDoc"/>
    	<button id = "remDoc"/>
    </div>

	<table id = "gestDocTab">
    	<tr>
            <?php
            $entete = array("Auteur", "Nom", "Date", "Type");
            for ($i=0; $i < sizeof($entete); $i++) { 
                echo "<td><p>".$entete[$i]."</p></td>";
            }
            ?>
        </tr>

        <?php
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=ppe1','root','');
            
            $document = $bdd -> prepare("SELECT * FROM document");
            $auteur = $bdd -> prepare("SELECT * FROM auteur WHERE id=?");
            $support = $bdd -> prepare("SELECT * FROM support WHERE id=?");

            $document -> execute();

            print_r($document["idauteur"]);

            for ($i=0; $i < 5; $i++) { 
                $auteur -> execute($document["idauteur"]);
                $support -> execute(array($document["idsupport"]));
                $auteurRes = $auteur -> fetch();
                $supportRes = $auteur -> fetch();

                echo "<tr>";
                echo "<td>".$auteurRes["nom"]." ".$auteurRes["prenom"];
            }
            
            $support -> execute();

            $result = $auteur->fetch();

            while ($resulta = $auteur->fetch())  {
                $nom = array($resulta["nom"]);
                $prenom = array($resulta["prenom"]);
            }

            while ($resultd = $auteur->fetch())  {
                $titre = array($resultd["titre"]);
                $date = array($resultd["date"]);
            }           

            while ($results = $auteur->fetch())  {
                $type = array($results["type"]);
            }




        ?>
    </table>
    
</div>