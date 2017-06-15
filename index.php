<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/styleCommun.css" />
        <link rel="stylesheet" type="text/css" href="css/stylePopup.css" />
		<link rel="stylesheet" href="js/jquery-ui-1.12.1/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" type="text/css" href="css/styleIndex.css" />
        <script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
		<script src = "js/fonctions.js"></script>
        <script src = "js/popupEntity.js"></script>
		<?php include 'php/fonctions.php' ?>
        <?php include 'php/connexion.php' ?>
		<title>BookTik.com</title>
	</head>

	<body>
        <script>menu();</script>
        
        <div id="ZoneBanniere">
            <div id="banniereGauche">
                <h1 class="banniere">BookTic.com</h1>
                <button onclick="hideMenu()" id="boutonMenu" class="banniere"></button>
            </div>

            <div id="banniereDroite">
                <button onclick="" id="boutonUtilisateur" class="banniere"></button>
                <table>
                    <tr>
                        <td><a href="#" class="banniere"><h2>Nous contacter</h2></a></td>
                        <td><a href="#" class="banniere"><h2>Support</h2></a></td>
                    </tr>
                </table>  
            </div>
                  
        </div>

		
        <div id="menuNav">
            <?php menu() ?>
        </div>

        <div id="zoneArticle">
        		<div id="titreIndex">
                	<h1>Bienvenue sur BookTic</h1>
                    <h2>Bibliothèque médias</h2>
                	<p>BookTic Primi igitur omnium statuuntur Epigonus et Eusebius ob nominum gentilitatem oppressi. praediximus enim Montium sub ipso vivendi termino his vocabulis appellatos 						fabricarum culpasse tribunos ut adminicula futurae molitioni pollicitos.</p>
                    
					<img src="images/barre.png"/>
                </div>

                <div id="Actualites">
                	<h1>-News-</h1>
                	<img src="images/logo.png" alt="logo"/>
                	<p>Denique Antiochensis ordinis vertices sub uno elogio iussit occidi ideo efferatus, quod ei celebrari vilitatem intempestivam urgenti, cum inpenderet inopia, gravius rationabili responderunt; et perissent ad unum ni comes orientis tunc Honoratus fixa constantia restitisset.<br/>

Eodem tempore Serenianus ex duce, cuius ignavia populatam in Phoenice Celsen ante rettulimus, pulsatae maiestatis imperii reus iure postulatus ac lege, incertum qua potuit suffragatione absolvi, aperte convictus familiarem suum cum pileo, quo caput operiebat, incantato vetitis artibus ad templum misisse fatidicum, quaeritatum expresse an ei firmum portenderetur imperium, ut cupiebat, et cunctum.<br/>

Et eodem impetu Domitianum praecipitem per scalas itidem funibus constrinxerunt, eosque coniunctos per ampla spatia civitatis acri raptavere discursu. iamque artuum et membrorum divulsa conpage superscandentes corpora mortuorum ad ultimam truncata deformitatem velut exsaturati mox abiecerunt in flumen.<br/>

Et licet quocumque oculos flexeris feminas adfatim multas spectare cirratas, quibus, si nupsissent, per aetatem ter iam nixus poterat suppetere liberorum, ad usque taedium pedibus pavimenta tergentes iactari volucriter gyris, dum exprimunt innumera simulacra, quae finxere fabulae theatrales.<br/>

Ob haec et huius modi multa, quae cernebantur in paucis, omnibus timeri sunt coepta. et ne tot malis dissimulatis paulatimque serpentibus acervi crescerent aerumnarum, nobilitatis decreto legati mittuntur: Praetextatus ex urbi praefecto et ex vicario Venustus et ex consulari Minervius oraturi, ne delictis supplicia sint grandiora, neve senator quisquam inusitato et inlicito more tormentis exponeretur.</p>
                </div>
        </div>
	</body>
</html>
