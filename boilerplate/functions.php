<?php
	/**
	* Custom functions
	*/


	/* SVG Icons */
	function icon( $icon, $render = true ) {
		$html  = '<svg class="svg-icon" role="presentation">';
		$html .= '<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/svg/icons.svg#' . $icon . '"></use>';
		$html .= '</svg>';

		if( $render ) {
			echo $html;

		} else {
			return $html;
		}
	}
?>