<?php
/**
 * Global Module: Pageheader
 *
 * @package jafar_theme
 */

if ( is_home() ) {
	$pageid  = get_option( 'page_for_posts' );
} else {
	$pageid  = get_the_ID();
}
$heading = get_field( 'page_heading', $pageid );
$heading = ( ! empty( $heading ) ) ? $heading : get_the_title( $pageid );
$heading = ( ! empty( $title_override ) ) ? $title_override : $heading;
?>
<section class="page_title ds ms s-pt-120 s-pb-50 s-pt-lg-150 s-pb-lg-90 page_title s-parallax s-overlay bg-size-auto">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center text-lg-left">
			<?php if ( $heading ) : ?>
				<h1><?php echo esc_html( $heading ); ?></h1>
			<?php endif; ?>

			<div class="yoast_breadcrumb">
				<?php echo do_shortcode( '[wpseo_breadcrumb]' ); ?>
			</div>
			</div>
		</div>
	</div>
</section>
