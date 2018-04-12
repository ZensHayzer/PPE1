var hiddenMenu = true;

$( function()
{
  $( '#menu' ).menu();
});

function hideMenu() 
{
  if (hiddenMenu == true)
  {
    $( '#menuNav' ).hide( 'drop', { direction: 'right' }, 'slow' ).fadeIn();
    hiddenMenu = false;
  } else  {
    $( '#menuNav' ).hide( 'drop', { direction: 'left' }, 'slow' );
    hiddenMenu = true;
  }
};

function createPopup()  {
  $('body').append('<div id="fade" class="popupBlock"></div>');
  $('#fade').css({'filter' : 'alpha(opacity=80'}).fadeIn();
  $('body').append('<div id="popup" class="popupBlock"></div>');
  $('#popup').append('<div><img src="images/crossExit.png" id="exitPopupCross" class="popupBlock"/><div/>');
  $('#popup').fadeIn();
  $('body').on('click', '#fade', function()  {
    $('.popupBlock').fadeOut().remove();
  });
  $('#popup').on('click', '#exitPopupCross', function()  {
    $('.popupBlock').fadeOut().remove();
  });
};
