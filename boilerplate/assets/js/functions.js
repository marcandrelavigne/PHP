jQuery(document).ready(function($) {

	// Language Switcher
	var lang = $('html').attr('lang');

    if( lang == 'en' ) {
	 	$('.language').append($('<a href="?lang=fr">Français</a>'));
	} else {
		$('.language').append($('<a href="?lang=en">English</a>'));
	}

});