// Contenu de la popup de connexion

$(document).ready(function()  {
  $('#boutonUtilisateur').on('click', function()  {
    createPopup();
    $('#popup').css('width', '30%');
    $('#popup').css('height', '50%');
    $('#popup').css('top', '15%');
    $('#popup').css('left', '30%');
    $('#popup').html('<h1 id="titleConnect" class="popupConnect">Connexion utilisateur</h1>');
    $('#popup').html('<form id="formConnect">');
    $('#popup').html('<table>');
    $('#popup').html('<tr>');
    $('#popup').html('<td><input type="texte" id="username" class="popupConnect" placeholder="Identifiant" /></td>');
    $('#popup').html('</tr>');
    $('#popup').html('<tr>');
    $('#popup').html('<td><input type="password" id="password" class="popupConnect" placeholder="Mot de passe" /></td>');
    $('#popup').html('</tr>');
    $('#popup').html('<tr>');
    $('#popup').html('<td><input type="submit" id="submitConnect" class="popupConnect" value=" " title="Connexion" /></td>');
    $('#popup').html('</tr>');
    $('#popup').html('<tr>');
    $('#popup').html('<td><button href="#" id="registerLink">S\'inscrire</button></td>');
    $('#popup').html('</tr>');
    $('#popup').html('<table>');
    $('#popup').html('<div id="resultConnect"></div>');
    $('#popup').html('</form>');
  });
});

// Contenu de la popup d'inscription

$(document).ready(function()    {
    $('#registerLink').on('click', function()   {
        window.alert('kikou');
        $('.popupConnect').fadeOut().remove();
    });
});