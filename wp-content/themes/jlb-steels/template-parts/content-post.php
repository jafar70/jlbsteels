<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Jafar_Theme
 */

?>

<section class="ls s-py-60 s-py-lg-100 c-gutter-70">
	<div class="container">
		<div class="row">
			<main class="offset-lg-1 col-lg-10">
				<article class="vertical-item post single-post type-post status-publish format-standard has-post-thumbnail" id="post-<?php the_ID(); ?>">
					<div class="item-content">
						<div class="entry-content">
							<?php
								the_content();
							?>
						</div>
						<!-- .entry-content -->
					</div>
					<!-- .item-content -->
				</article>
			</main>
		</div>
	</div>
</section>
