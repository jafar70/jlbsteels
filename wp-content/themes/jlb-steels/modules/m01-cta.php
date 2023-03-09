<?php
/**
 * Module: Call to Action
 *
 * @package Jafar_Theme
 */

// Get CTA.
$shadow_heading_cta = get_field( 'shadow_heading_cta' );
$heading_cta        = get_field( 'heading_cta' );
$subheading_cta     = get_field( 'subheading_cta' );
$text_cta           = get_field( 'text_content' );
$link_cta           = get_field( 'link_cta' );
?>

<section id="call-to-action" class="ls ms s-py-60 s-pb-lg-95 s-pt-lg-100 c-gutter-40 call-to-action s-overlay s-parallax bg-size-auto">
	<div class="container">
		<div class="row justify-content-center align-items-center">
			<div class="col-12 col-lg-8 text-center">
				<h3 class="big special-heading">
					<?php if ( $shadow_heading_cta ) : ?>
						<span class="shadow-heading"><?php echo esc_html( $shadow_heading_cta ); ?></span>
					<?php endif; ?>

					<?php if ( $heading_cta ) : ?>
						<?php echo wp_kses_post( $heading_cta ); ?>
					<?php endif; ?>
				</h3>
				<?php if ( $subheading_cta ) : ?>
				<p class="special-heading subheading with-line"><?php echo esc_html( $subheading_cta ); ?></p>
				<?php endif; ?>
			</div>
			<div class="divider-25 divider-lg-45"></div>
			<div class="col-12 col-lg-6 text-center text-lg-left">
				<p>
					<?php if ( $text_cta ) : ?>
						<?php echo esc_html( $text_cta ); ?>
					<?php endif; ?>
				</p>
			</div>
			<div class="col-12 col-lg-2 text-center text-lg-left">
				<div class="divider-25 divider-lg-0"></div>
				<?php
				if ( $link_cta ) :
					$button_url    = $link_cta['url'];
					$button_title  = $link_cta['title'];
					$button_target = $link_cta['target'] ? $link_cta['target'] : '_self';
					?>
							<a href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>" class="btn btn-wide btn-small btn-maincolor"><?php echo esc_html( $button_title ); ?></a>
					<?php endif; ?>
			</div>
		</div>
	</div>
</section>
