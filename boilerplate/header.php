<?php
	$lang = 'fr_CA';
	$site_lang = 'fr';
	if ( isset( $_GET['lang'] ) && $_GET['lang'] == 'en' ) {
	    $lang = 'en_CA';
	    $site_lang = 'en';
	}

	putenv( 'LANG=' . $lang );
	setlocale( LC_ALL, $lang );

	$domain = 'boilerplate';
	bindtextdomain( $domain, 'languages' );
	bind_textdomain_codeset( $domain, 'UTF-8' );
	textdomain( $domain );

	global $curr_page;
	$curr_page = 1;

	$bg_class = '';
	for ( $i = 2; $i < ( $curr_page + 1 ); $i++ ) {
	    $bg_class .= ' section' . $i;
	}

?>

<?php
	// Functions
	include( 'functions.php' );
?>

<!doctype html>
<html lang="<?php echo $site_lang; ?>">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
		<meta name="theme-color" content="#dd1a32" />
		<meta name="robots" content="noindex,follow"/>
		<title><?php echo _( 'Title here' ); ?></title>

		<!-- Favicon -->
		<!-- http://www.favicomatic.com -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/img/favicon/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/favicon/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/favicon/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/img/favicon/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/img/favicon/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/img/favicon/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="/assets/img/favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="/assets/img/favicon/favicon-16x16.png" sizes="16x16" />
		<meta name="application-name" content="&nbsp;"/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="/assets/img/favicon/mstile-144x144.png" />

		<!-- Open graph -->
		<meta property="og:locale" content="fr_FR" />
	    <meta property="og:type" content="website" />
	    <meta property="og:description" content="<?php echo _( 'Description here' ); ?>" />
	    <meta property="og:site_name" content="<?php echo _( 'Site name here' ); ?>" />
	    <meta property="og:title" content="<?php echo _( 'Title here' ); ?>" />
	    <meta property="article:publisher" content="" />
	    <meta property="fb:admins" content="" />
	    <meta property="og:image" content="<?php echo _( 'Image URL here' ); ?>">

		<!-- Inline Styles -->
		<style>
	        <?php
	            $inline_css_path = 'assets/css/inline.min.css';
	            $inline_css = file_get_contents( $inline_css_path );
	            $inline_css = str_replace( '../fonts', '/assets/fonts', $inline_css );
	            $inline_css = str_replace( '../../assets/img', '/assets/img', $inline_css );
	            echo $inline_css;
	        ?>
	    </style>

	    <!-- Main Stylesheet -->
	    <script id="loadcss">
	        (function(w){
	            "use strict";w.loadCSS=function(e,t,n){var l,o=w.document.createElement("link");if(t)l=t;else if(w.document.querySelectorAll){var r=w.document.querySelectorAll("style,link[rel=stylesheet],script");l=r[r.length-1]}else l=w.document.getElementsByTagName("script")[0];var s=w.document.styleSheets;return o.rel="stylesheet",o.href=e,o.media="only x",l.parentNode.insertBefore(o,t?l:l.nextSibling),o.onloadcssdefined=function(e){for(var t,n=0;n<s.length;n++)s[n].href&&s[n].href===o.href&&(t=!0);t?e():setTimeout(function(){o.onloadcssdefined(e)})},o.onloadcssdefined(function(){o.media=n||"all"}),o};
	            loadCSS( '/assets/css/style.min.css', document.getElementById( 'loadcss' ) );
	        }(this));
	    </script>
	</head>
	<body>
		<header>
			<div class="container">
				<!-- Language Switcher -->
				<span class="language"></span>
			</div>
		</header>