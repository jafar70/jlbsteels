<?php
/**
 * Module: Services
 *
 * @package Jafar_Theme
 */

$shadow_text  = get_field( 'shadow_text_services' );
$heading_text = get_field( 'heading_text_services' );
$services     = get_field( 'services_items' );
$bg_img       = get_field( 'background_image_services' );
?>

<?php if ( $services ) : ?>
<section id="services" class="ds bs s-pt-60 s-pb-30 s-pt-lg-100 s-pb-lg-70 s-pt-xl-150 s-pb-xl-110 s-overlay s-parallax c-mb-10 c-gutter-60 item-steps service-bg lazy" data-bg="<?php echo esc_url( $bg_img['url'] ); ?>">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h3 class="big special-heading">
					<?php if ( $shadow_text ) : ?>
					<span class="shadow-heading"><?php echo esc_html( $shadow_text ); ?></span>
					<?php endif; ?>

					<?php if ( $heading_text ) : ?>
						<?php echo wp_kses_post( $heading_text ); ?>
					<?php endif; ?>
				</h3>
				<div class="divider-35 divider-lg-70"></div>
				<!-- <p class="special-heading subheading with-line">stilbro Metal Fabrication</p> -->
			</div>
			<div class="divider-20 divider-lg-30"></div>

			<?php
			foreach ( $services as $service ) :
				$permalink = get_permalink( $service->ID );
				$heading   = get_the_title( $service->ID );
				$leader    = get_field( 'page_heading_leader', $service->ID );
				?>
			<div class="col-12 col-md-6 col-lg-6">
				<div class="vertical-item service-padding text-center">
					<div class="item-content">
						<h4 class="service-title step-part">
							<!-- <a href="<?php echo esc_url( $permalink ); ?>"> -->
								<?php echo esc_html( $heading ); ?>
							<!-- </a> -->
						</h4>
						<?php if ( $leader ) : ?>
							<p>
								<?php echo esc_html( $leader ); ?>
							</p>
						<?php endif; ?>
					</div>
				</div>
			</div><!-- .col-* -->
			<?php endforeach; ?>
		</div><!-- .row* -->
	</div>
</section>
<?php endif; ?>
