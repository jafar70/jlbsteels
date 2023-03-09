<?php
/**
 * Module: Request a Quote
 *
 * @package Jafar_Theme
 */

$shadow_text     = get_field( 'shadow_text_request_quote' );
$heading_text    = get_field( 'heading_text_request_quote' );
$subheading_text = get_field( 'subheading_text_request_quote' );
$bg_img          = get_field( 'background_image_request_quote' );
$form_id         = get_field( 'form_request_quote' );
?>

<section id="contact" class="ls ms s-py-60 s-py-lg-100 s-py-xl-150 c-gutter-50">
	<div class="container">
		<div class="cover-image s-cover-left small-cover">
			<?php if ( $bg_img ) : ?>
				<img src="<?php echo esc_url( $bg_img['url'] ); ?>" alt="<?php echo esc_attr( $bg_img['alt'] ); ?>">
			<?php endif; ?>
			<div class="divider-40 divider-lg-0"></div>
		</div>
		<div class="row">
			<div class="col-5">
			</div>
			<div class="col-lg-7 animate" data-animation="fadeInRight">
				<?php if ( $shadow_text || $heading_text ) : ?>
				<h3 class="big special-heading">
					<?php if ( $heading_text ) : ?>
						<?php echo wp_kses_post( $heading_text ); ?>
					<?php endif; ?>

					<?php if ( $shadow_text ) : ?>
						<span class="shadow-heading"><?php echo esc_html( $shadow_text ); ?></span>
					<?php endif; ?>
				</h3>
				<?php endif; ?>

				<?php if ( $subheading_text ) : ?>
					<p class="special-heading subheading with-line"><?php echo esc_html( $subheading_text ); ?></p>
				<?php endif; ?>

				<div class="divider-40 divider-lg-70"></div>

				<?php if ( $form_id ) : ?>
					<?php echo do_shortcode( $form_id ); ?>
				<?php endif; ?>
			</div>
			<!--.col-* -->
		</div>

	</div>
</section>
