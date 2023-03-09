<?php
/**
 * Module: Maps
 *
 * @package Jafar_Theme
 */

$iframe_map = get_field( 'iframe_code' );
?>

<section class="maps" id="maps">
	<?php if ( $iframe_map ) : ?>
		<?php echo wp_kses_post( $iframe_map ); ?>
	<?php endif; ?>
</section>
