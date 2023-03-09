<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jafar_Theme
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php require locate_template( 'global-modules/gm03-pageheader.php' ); ?>

	<section class="ls s-pt-60 s-pb-30 s-pt-lg-100 s-pb-lg-70 s-pt-xl-150 s-pb-xl-120">
		<div class="container">
			<div class="row">
				<div class="offset-lg-1 col-lg-10">
					<div class="row isotope-wrapper masonry-layout c-mb-30">
						<?php
						if ( have_posts() ) :

							if ( is_home() && ! is_front_page() ) :
								?>
								<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/post', 'item' );

							endwhile;
							

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						
						?>

					
					</div>
					<?php
					the_posts_pagination(
						array(
							'mid_size'  => 3,
							'prev_text' => __( '«' ),
							'next_text' => __( '»' ),
						)
					);
					?>
				</div>
			</div>
		</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
