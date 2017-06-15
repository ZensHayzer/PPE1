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
    $( '#menuNav' ).hide( 'slide', { direction: 'left' }, 'slow' );
    hiddenMenu = true;
  }
};

function createPopup()  {
  $('body').append('<div id="fade" class="popupBlock"></div>');
  $('#fade').css({'filter' : 'alpha(opacity=80'}).fadeIn();
  $('body').append('<div id="popup" class="popupBlock"></div>');
  $('#popup').fadeIn();
  $('body').on('click', '#fade', function()  {
    $('.popupBlock').fadeOut().remove();
  });
};

$(document).ready(function()  {
  var $pseudo = $('username'),
      $pass = $('password'),
      $submit = $('submitConnect');
});

////////////////////////

/*
$(function addUser() {
	var valid = true;
    allFields.removeClass( "ui-state-error" );

    valid = valid && checkLength( name, "username", 3, 16 );
    valid = valid && checkLength( email, "email", 6, 80 );
    valid = valid && checkLength( password, "password", 5, 16 );

    valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
    valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
    valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );

    if ( valid ) {
      $( "#users tbody" ).append( "<tr>" +
        "<td>" + name.val() + "</td>" +
        "<td>" + email.val() + "</td>" +
        "<td>" + password.val() + "</td>" +
      "</tr>" );
      dialog.dialog( "close" );
    }
    return valid;
 	}

  	dialog = $( "#dialog-form" ).dialog({
    	autoOpen: false,
    	height: 400,
    	width: 350,
   		modal: true,
    	buttons: {
      		"Create an account": addUser,
      		Cancel: function() {
        		dialog.dialog( "close" );
      		}
    	},
    	close: function() {
      		form[ 0 ].reset();
      		allFields.removeClass( "ui-state-error" );
    	}
  	});

  	form = dialog.find( "form" ).on( "submit", function( event ) {
    	event.preventDefault();
    	addUser();
  	});

  	$( "#create-user" ).button().on( "click", function() {
    	dialog.dialog( "open" );
  	});
});
*/