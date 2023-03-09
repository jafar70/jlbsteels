<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jafar_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">
	<section class="page_title ds ms s-pt-120 s-pb-50 s-pt-lg-150 s-pb-lg-90 page_title s-parallax s-overlay bg-size-auto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center text-lg-left">
				<h1><?php echo esc_html__( 'Case Studies', 'jafar-theme' ); ?></h1>

				<div class="yoast_breadcrumb">
					<span><span><a href="<?php echo esc_url( site_url() ); ?>">Home</a> &raquo; <span class="breadcrumb_last" aria-current="page">Case Studies</span></span></span>			</div>
				</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ls s-pt-50 s-pb-30 s-pt-lg-90 s-pb-lg-70 s-pt-xl-140 s-pb-xl-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row isotope-wrapper masonry-layout c-mb-30 c-gutter-30" data-filters=".gallery-filters">
						<?php
						$args        = array(
							'post_type'      => 'case-study',
							'post_status'    => 'publish',
							'posts_per_page' => -1,
							'order'          => 'DESC',
						);
							$results = new WP_Query( $args );
						while ( $results->have_posts() ) :
							global $post;
							$results->the_post();
							$heading     = get_the_title();
							$url         = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
							$categories  = get_the_category();
							$slugs       = wp_list_pluck( $categories, 'slug' );
							$class_names = join( ' ', $slugs );
							?>
							<div class="col-xl-4 col-sm-6 metal-repair mig-welding">
								<div class="vertical-item content-absolute item-gallery text-center ds">
									<div class="item-media">
										<img src="<?php echo esc_url( $url[0] ); ?>" alt="thumbnail image">
										<div class="media-links">
											<div class="links-wrap">
												<a class="link-zoom photoswipe-link" title="" href="<?php echo esc_url( $url[0] ); ?>" data-width="<?php echo esc_attr( $url[1] ); ?>" data-height="<?php echo esc_attr( $url[2] ); ?>" ></a>
											</div>
										</div>
									</div>
									<div class="item-content gradientdarken-background">
										<h6>
											<a href="<?php the_permalink(); ?>"><?php echo esc_html( $heading ); ?></a>
										</h6>
									</div>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</div>
					<!-- .isotope-wrapper-->
				</div>
			</div>
		</div>
	</section>

	</main><!-- #main -->

<?php
get_footer();
