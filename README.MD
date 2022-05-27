# PHP Boilerplate & Snippets 

⚠ This repo is deprecated. It was used for quick PHP references on my old day job, but technology have moved on since (and so have I!) and you should not use this code per se. Please be aware that it might add vulnerabilities to your codebase, since this repo's code haven't been updated for 5+ years from now. For reference only. Thanks!


# Snippets

## SVG Icons
Use the SVGs in a SVG sprite by calling the function + the SVG ID (ex.: svgicon( 'arrow-up' ); )
```php
function svgicon( $icon, $render = true ) {
	$html  = '<svg class="svg-icon" role="presentation">';
	$html .= '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/svg/icons.svg#' . $icon . '"></use>';
	$html .= '</svg>';

	if( $render ) {
		echo $html;

	} else {
		return $html;
	}
}
```
