<?php
/**
 * Module: Form
 *
 * @package Jafar_Theme
 */

$form_title          = get_field( 'form_heading' );
$form_id             = get_field( 'form_id' );
$contact_info_title  = get_field( 'contact_info_title' );
$opening_hours_title = get_field( 'opening_hours_title' );
$opening_hours       = get_field( 'opening_hours' );
$phone               = get_field( 'phone', 'options' );
$email               = get_field( 'email', 'options' );
$address             = get_field( 'address', 'options' );
?>

<section class="ls s-pt-60 s-pb-40 s-py-lg-100 s-py-xl-150 c-gutter-60">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 animate" data-animation="fadeInLeft">
				<?php if ( $form_title ) : ?>
				<div class="row">
					<div class="col-sm-12">
						<h4 class="special-heading mb-15 mb-lg-30"><?php echo esc_html( $form_title ); ?></h4>
						<div class="divider-0"></div>
					</div>
				</div>
				<?php endif; ?>

				<?php if ( $form_id ) : ?>
					<?php echo do_shortcode( $form_id ); ?>
				<?php endif; ?>
				<div class="divider-60 d-lg-none"></div>
			</div>
			<!--.col-* -->

			<div class="col-lg-4 animate contact-info" data-animation="fadeInRight">

				<?php if ( $contact_info_title ) : ?>
					<h4 class="special-heading mb-30"><?php echo esc_html( $contact_info_title ); ?></h4>
				<?php endif; ?>

				<?php if ( $address ) : ?>
					<p class="icon-inline mb-15">
						<span class="icon-styled color-main">
							<i class="fa fa-map-marker"></i>
						</span>
						<span><?php echo esc_html( $address ); ?></span>
					</p>
				<?php endif; ?>

				<?php if ( $phone ) : ?>
					<p class="icon-inline mb-15">
						<span class="icon-styled color-main">
							<i class="fa fa-phone"></i>
						</span>
						<span><a href="tel:<?php echo esc_html( str_replace( ' ', '', $phone ) ); ?>"><?php echo esc_html( $phone ); ?></a></span>
					</p>
				<?php endif; ?>

				<?php if ( $email ) : ?>
					<p class="icon-inline">
						<span class="icon-styled color-main">
							<i class="fa fa-pencil"></i>
						</span>
						<span><a href="mailto:<?php echo esc_html( $email ); ?>"><?php echo esc_html( $email ); ?></a></span>
					</p>
				<?php endif; ?>

				<?php if ( $opening_hours_title ) : ?>
					<h4 class="mt-50 mb-25"><?php echo esc_html( $opening_hours_title ); ?></h4>
				<?php endif; ?>

				<?php if ( $opening_hours ) : ?>
					<div class="row c-mb-15 c-gutter-30">
						<?php
						foreach ( $opening_hours as $opening_hour ) :
							$days       = $opening_hour['days'];
							$time_slots = $opening_hour['time_slots'];
							?>
							<?php if ( $days ) : ?>
								<div class="col-6">
									<span class="icon-styled color-main pr-2">
										<i class="fa fa-clock"></i>
									</span>
									<strong><?php echo esc_html( $days ); ?></strong>
								</div>
							<?php endif; ?>

							<?php if ( $time_slots ) : ?>
								<div class="col-6">
									<?php echo esc_html( $time_slots ); ?>
								</div>
							<?php endif; ?>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>

			</div>
			<!--.col-* -->
		</div>
	</div>
</section>
