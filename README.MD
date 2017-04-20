# SVG Icons
Use the SVGs in a SVG sprite by calling the function + the SVG ID (ex.: <?php svgicon( 'arrow-up' ); ?>)
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
