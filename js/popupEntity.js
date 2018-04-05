// Contenu de la popup de connexion

$(document).ready(function()  {
  $('#boutonUtilisateur').on('click', function()  {
    createPopup();
    $('#popup').append('<h1 id="titleConnect" class="popupConnect">Connexion utilisateur</h1>');
	$('#popup').append('<div id="formConnect">');
    $('#popup').append('<form method="POST" action="php/connexion.php">');
    $('#popup').append('<input type="texte" id="username" class="popupConnect" placeholder="Identifiant" /></br>');
    $('#popup').append('<input type="password" id="password" class="popupConnect" placeholder="Mot de passe" /></br>');
    $('#popup').append('<input type="submit" id="submitConnect" class="popupConnect" value=" " title="Connexion" /></br>');
    $('#popup').append('</form>');
	$('#popup').append('</div>');
  });
});

$(document).ready(function()  {
  $('#addDoc').on('click', function()  {
    createPopup();
    $('#popup').append('<h1 id="titleConnect" class="popupConnect">Ajout de documents</h1>');
	$('#popup').append('<div id="formAdd">');
    $('#popup').append('<form>');
    $('#popup').append('<input type="texte" id="addAuteur" class="popupAdd" placeholder="Auteur" /></br>');
    $('#popup').append('<input type="texte" id="addNom" class="popupAdd" placeholder="Nom de l\'oeuvre" /></br>');
    $('#popup').append('<input type="texte" id="addDate" class="popupAdd" placeholder="Date de parution" /></br>');
	$('#popup').append('<input type="texte" id="addType" class="popupAdd" placeholder="Type" /></br>');
	$('#popup').append('<input type="texte" id="addCategorie" class="popupAdd" placeholder="Catégorie" /></br>');
	$('#popup').append('<input type="button" id="submitAdd" class="popupAdd" value=" " title="" /></br>');
    $('#popup').append('</form>');
	$('#popup').append('</div>');
  });
});

$(document).ready(function()  {
  $('#remDoc').on('click', function()  {
    createPopup();
    $('#popup').append('<h1 id="titleConnect" class="popupConnect">Retrait de documents</h1>');
	$('#popup').append('<p>Êtes vous sûr de vouloir supprimer cette entrée ?</p>');
	$('#popup').append('<div id="formRem">');
    $('#popup').append('<ul>');
	$('#popup').append('<li id="remList">');
	$('#popup').append('<button id="remOui" type="button" value="Oui">');
	$('#popup').append('<button id="remNon" type="button" value="Non">');
	$('#popup').append('</li>');
	$('#popup').append('</ul>');
	$('#popup').append('</div>');
  });
});