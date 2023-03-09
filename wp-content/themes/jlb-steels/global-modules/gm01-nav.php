<?php
/**
 * Global Module: Header
 *
 * @package jafar_theme
 */

$main_nav            = get_field( 'main_navigation', 'options' );
$phone               = get_field( 'phone', 'options' );
$email               = get_field( 'email', 'options' );
$address             = get_field( 'address', 'options' );
$footer_social_links = get_field( 'footer_social_links', 'options' );
$fb_link             = ( isset( $footer_social_links['facebook'] ) ) ? $footer_social_links['facebook'] : false;
$tw_link             = ( isset( $footer_social_links['twitter'] ) ) ? $footer_social_links['twitter'] : false;
$inst_link           = ( isset( $footer_social_links['instagram'] ) ) ? $footer_social_links['instagram'] : false;
$lin_link            = ( isset( $footer_social_links['linkedin'] ) ) ? $footer_social_links['linkedin'] : false;

?>
<div class="header_absolute <?php echo ( is_front_page() ) ? 'home_header' : ''; ?> ds ms">
	<!--topline section-->
	<section class="page_topline with-cart s-pt-10 s-pb-3 s-py-xl-0 topline-overflow-visible ds <?php echo ( ! is_front_page() ) ? 'ms s-parallax s-overlay bg-size-auto' : ''; ?>">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-md-6 text-md-left text-center">
					<ul class="top-includes border-divided">
						<li>
							<i class="color-main ico ico-map-marker fs-14 mr-2"></i>
							<?php echo esc_html( $address ); ?>
						</li>
						<li class="d-block d-xl-inline-block meta-email">
							<a href="mailto:<?php echo esc_html( $email ); ?>">
								<i class="color-main ico ico-envelope-alt fs-14 mr-2"></i>
								<?php echo esc_html( $email ); ?>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-6 text-md-right text-center">
					<ul class="top-includes border-divided">
						<li class="d-block d-xl-inline-block">
							<div class="meta-phone">
								<a href="tel:<?php echo esc_html( str_replace( ' ', '', $phone ) ); ?>">
									<i class="ico ico-phone color-main fs-14 pr-2"></i>
									<?php echo esc_html( $phone ); ?>
								</a>
							</div>
						</li>

						<li>
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
						</li>

					</ul>

				</div>
			</div>
		</div>
	</section>
	<!--eof topline-->

	<!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
	<header class="page_header main_header s-py-md-0 ds justify-nav-end s-bordertop">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-5 col-11">
					<a href="<?php echo esc_url( home_url() ); ?>" class="logo">
						<img src="<?php bloginfo( 'template_url' ); ?>/images/logo.png" alt="JLB Steels Logo">
						<img class="ukca-logo" src="<?php bloginfo( 'template_url' ); ?>/images/ukca-logo-white.png" alt="UKCA Logo">
					</a>
				</div>
				<div class="col-lg-9 col-md-7 col-1">
					<div class="nav-wrap">

						<!-- main nav start -->
						<nav class="top-nav">
							<ul class="nav sf-menu">
								<?php
								foreach ( $main_nav as $sitenav_item ) :
									$top_level_link     = ( isset( $sitenav_item['link'] ) ) ? $sitenav_item['link'] : false;
									$current_page_class = ( theme__sitenav_check_current( $top_level_link, $pageid ) ) ? 'active' : '';
									if ( ! empty( $top_level_link ) ) :
										?>
										<li class="sitenav__item <?php echo esc_attr( $current_page_class ); ?>">
											<?php theme__display_button( $top_level_link, 'sitenav__link ' . $current_page_class ); ?>
										</li>
										<?php
									endif;
									?>
								<?php endforeach; ?>
							</ul>
							<?php
							wp_nav_menu(
								array(
									'menu'       => 'menu-1',
									'container'  => 'ul',
									'menu_class' => 'nav sf-menu',
								)
							);
							?>


						</nav>
						<!-- eof main nav -->

					</div>
				</div>
			</div>
		</div>
		<!-- header toggler -->
		<span class="toggle_menu"><span></span></span>

	</header>

	<?php if ( ! is_front_page() && ! is_404() ) : ?>
		<?php include locate_template( 'parts/shared/pageheader/pageheader.php' ); ?>
	<?php endif; ?>
</div>
