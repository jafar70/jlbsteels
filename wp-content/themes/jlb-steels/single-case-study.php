<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Jafar_Theme
 */

get_header();

$images            = get_field( 'case_studies_gallery' );
$case_studies_text = get_field( 'case_studies_text' );
$current_page      = get_permalink( get_the_ID() );
$twitter_link      = 'https://twitter.com/intent/tweet?url=' . rawurlencode( $current_page );
$linkedin_link     = 'https://www.linkedin.com/shareArticle?mini=true&url=' . rawurlencode( $current_page ) . '&title=&summary=&source=';
$facebook_link     = 'https://www.facebook.com/sharer/sharer.php?u=' . rawurlencode( $current_page );
?>
	<main id="primary" class="site-main">
		<?php require locate_template( 'global-modules/gm03-pageheader.php' ); ?>

		<section class="ls s-py-60 s-py-lg-100 s-py-xl-150">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 offset-lg-1">

							<div class="vertical-item content-padding hero-bg gallery-single text-center">
								<div class="item-media">
									<?php
									if ( $images ) :
										?>
										<div class="owl-carousel" data-margin="0" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1" data-dots="false" data-nav="true" data-loop="true" data-autoplay="true">
											<?php foreach ( $images as $image ) : ?>
												<a href="<?php echo esc_url( $image['url'] ); ?>" class="photoswipe-link">
													<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
												</a>
											<?php endforeach; ?>
										</div>
									<?php endif; ?>
								</div>
								<div class="item-content">
									<h5 class="mb-2x0">
										<?php the_title(); ?>
									</h5>

									<?php if ( $case_studies_text ) : ?>
										<?php echo wp_kses_post( $case_studies_text ); ?>
									<?php endif; ?>
								</div>
							</div>
							<div class="share_buttons social_part">
								<a href="<?php echo esc_url( $facebook_link ); ?>" class="color-bg-icon fa fa-facebook" target="_blank"></a>
								<a href="<?php echo esc_url( $twitter_link ); ?>" class="color-bg-icon fa fa-twitter" target="_blank"></a>
								<a href="<?php echo esc_url( $linkedin_link ); ?>" class="color-bg-icon fa fa-linkedin" target="_blank"></a>
							</div>
						</div>
					</div>
				</div>
			</section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
