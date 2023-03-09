<?php
/**
 * Global Module: Footer
 *
 * @package jafar_theme
 */

$footer_cta = get_field( 'footer_cta', 'options' );
$footer_nav = get_field( 'footer_navigation', 'options' );

$footer_social_links = get_field( 'footer_social_links', 'options' );
$fb_link             = ( isset( $footer_social_links['facebook'] ) ) ? $footer_social_links['facebook'] : false;
$tw_link             = ( isset( $footer_social_links['twitter'] ) ) ? $footer_social_links['twitter'] : false;
$inst_link           = ( isset( $footer_social_links['instagram'] ) ) ? $footer_social_links['instagram'] : false;
$lin_link            = ( isset( $footer_social_links['linkedin'] ) ) ? $footer_social_links['linkedin'] : false;

$phone   = get_field( 'phone', 'options' );
$email   = get_field( 'email', 'options' );
$address = get_field( 'address', 'options' );
?>
<footer class="page_footer text-md-left page_footer ds ms s-pt-60 s-pb-10 s-pt-lg-100 s-pb-lg-45 s-pt-xl-150 s-pb-xl-100 c-gutter-60">
	<div class="container">
		<div class="row">

			<div class="col-lg-4 text-md-center text-lg-left animate" data-animation="fadeInUp">

				<div class="widget widget_bloginfo">
					<div class="flex flex-wrap widget_bloginfo__logos">
						<a href="<?php echo esc_url( home_url() ); ?>" class="logo">
							<img class="lazy" data-src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="JLB Steels Logo">
						</a>

						<img class="lazy ukca-logo" data-src="<?php bloginfo( 'template_url' ); ?>/images/ukca-logo-white.png" alt="UKCA Logo">
					</div>
					

					<p>
						Established since 2020, JLB Steels is the leading structural steel supplier and fabrication specialist in the UK. We provide services such as Steel Fabrication, Steel Erection Services, Free Site Surveys, 3D CAD Design and much more.  
					</p>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 animate" data-animation="fadeInUp">
				<div class="widget widget_working_hours">
					<h3><span class="color-main">Contact</span> Us</h3>
					<ul class="list-bordered">

						<li>
								<div class="icon-inline">
									<i class="ico ico-map-marker color-main"></i>
									<p><?php echo esc_html( $address ); ?> </p>
								</div>
						</li>

						<li>
							<a href="tel:<?php echo esc_html( str_replace( ' ', '', $phone ) ); ?>">
								<div class="icon-inline">
									<i class="ico ico-phone color-main"></i>
									<p><?php echo esc_html( $phone ); ?></p>
								</div>
							</a>
						</li>

						<li>
							<a href="mailto:<?php echo esc_html( $email ); ?>">
								<div class="icon-inline">
									<i class="ico ico-envelope-alt color-main"></i>
									<p><?php echo esc_html( $email ); ?></p>
								</div>
							</a>
						</li>

					</ul>
				</div>
			</div>

			<div class="col-md-6 col-lg-4 animate" data-animation="fadeInUp">
				<div class="widget widget_mailchimp">

					<h3 class="widget-title"><span class="color-main">Follow</span> Us</h3>

					<p>
						Stay updated with our latest news on social media.
					</p>

					<span class="social-icons">
						<?php if ( $fb_link ) : ?>
						<a href="<?php echo esc_url( $fb_link ); ?>" class="fa fa-facebook" title="facebook"></a>
						<?php endif; ?>

						<?php if ( $tw_link ) : ?>
						<a href="<?php echo esc_url( $tw_link ); ?>" class="fa fa-twitter" title="twitter"></a>
						<?php endif; ?>

						<?php if ( $inst_link ) : ?>
							<a href="<?php echo esc_url( $inst_link ); ?>" class="fa fa-instagram" title="instagram"></a>
						<?php endif; ?>

						<?php if ( $lin_link ) : ?>
							<a href="<?php echo esc_url( $lin_link ); ?>" class="fa fa-linkedin" title="instagram"></a>
						<?php endif; ?>
					</span>

				</div>
			</div>

		</div>
	</div>
</footer>

<section class="page_copyright ls s-py-20">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-12 text-center">
				<p>&copy; Copyright JLB Steels</p>
			</div>
		</div>
	</div>
</section>
