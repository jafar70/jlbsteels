<?php
/**
 * Module: Case Studies
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
						$results->the_post();
						$heading     = get_the_title();
						$url         = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
						$categories  = get_the_category();
						$slugs       = wp_list_pluck( $categories, 'slug' );
						$class_names = join( ' ', $slugs );
						?>
						<div class="col-xl-4 col-sm-6 metal-repair mig-welding">
							<div class="vertical-item content-absolute item-gallery text-center ds">
								<div class="item-media">
									<img src="<?php echo esc_url( $url ); ?>" alt="thumbnail image">
									<div class="media-links">
										<div class="links-wrap">
											<a class="link-zoom photoswipe-link" title="" href="<?php echo esc_url( $url ); ?>"></a>
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
