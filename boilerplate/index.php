<?php
/**
 * Main template
 */

include( 'header.php' );
?>
	<div class="container">
		<div class="content">

			<?php
				// Include a template parts
				include( 'content/slider.php' );
			?>

			<?php
				// Include an icon from the SVG Sprite (Use the SVG's ID)
				icon( 'arrow-up' );
			?>

		</div>
	</div>

<?php include( 'footer.php' ); ?>