<div class="col-xl-4 col-md-6">
	<a href="<?php the_permalink(); ?>" class="flex flex-column text-center vertical-item content-padding post type-post status-publish format-standard has-post-thumbnail hero-bg box-shadow">
		<div class="item-media post-thumbnail">
			<?php
				$image_id  = get_post_thumbnail_id( $post->ID );
				$img_url   = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );
				$image_alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
			?>
			<img class="lazy" data-src="<?php echo esc_url( $img_url[0] ); ?>" alt="<?php echo esc_html( $image_alt ); ?>">
		</div><!-- .post-thumbnail -->
		<div class="item-content">
			<header class="entry-header">
				<h6 class="entry-title">
					<?php the_title(); ?>
				</h6>
				<div class="entry-meta">
					<span class="">
						<span>
							<span class="screen-reader-text">Posted on</span>
								<i class="color-main fs-14 fa fa-calendar"></i>
								<time class="entry-date published updated"><?php echo get_the_date( 'j F Y' ); ?></time>
						</span>
					</span>
				</div>
				<!-- .entry-meta -->
			</header>
			<!-- .entry-header -->
			<div class="entry-content">
				<p><?php echo wp_kses_post( wp_trim_words( wp_trim_excerpt(), 20, '...' ) ); ?></p>
				<span class="read-more btn-small btn btn-maincolor">Read More</span>
			</div><!-- .entry-content -->
		</div><!-- .item-content -->
	</a><!-- #post-## -->
</div>
