<?php
/**
 * Module: Text Content and Image
 *
 * @package Jafar_Theme
 */

$shadow_heading = get_field( 'shadow_heading' );
$heading        = get_field( 'textcontent_heading' );
$leader         = get_field( 'textcontent_leader' );
$text           = get_field( 'textcontent_text' );
$button         = get_field( 'textcontent_button' );
$img            = get_field( 'textcontent_image' );
?>

<section id="about" class="ls s-pt-60 s-pb-55 s-py-lg-100 s-py-xl-150">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="images-wrap-item img-left">
					<img class="lazy" data-src="<?php echo esc_url( $img['url'] ); ?>" alt="Image">
					<?php if ( $img ) : ?>
						<img class="images-back lazy" data-src="<?php bloginfo( 'template_url' ); ?>/images/founder02.jpg" alt="<?php echo esc_attr( $img['alt'] ); ?>">
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="divider-35 divider-xl-105"></div>
				<h3 class="big special-heading">
					<?php if ( $heading ) : ?>
						<?php echo wp_kses_post( $heading ); ?>
					<?php endif; ?>

					<?php if ( $shadow_heading ) : ?>
					<span class="shadow-heading"><?php echo esc_html( $shadow_heading ); ?></span>
					<?php endif; ?>
				</h3>

				<?php if ( $leader ) : ?>
					<p class="with-line mt-20 fw-700"><?php echo esc_html( $leader ); ?></p>
				<?php endif; ?>

				<div class="divider-35 divider-xl-65"></div>
					<?php if ( $text ) : ?>
						<?php echo wp_kses_post( $text ); ?>
					<?php endif; ?>

					<?php
					if ( $button ) :
						$button_url    = $button['url'];
						$button_title  = $button['title'];
						$button_target = $button['target'] ? $button['target'] : '_self';
						?>
							<a href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>" class="btn btn-wide btn-small btn-maincolor mt-20"><?php echo esc_html( $button_title ); ?></a>
					<?php endif; ?>
			</div>
		</div>
	</div>
</section>
