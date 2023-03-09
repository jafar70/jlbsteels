<?php
/**
 * Global Module: Pageheader Home
 *
 * @package Jafar_Theme
 */

$pageid            = get_the_ID();
$front_page_slider = get_field( 'front_page_slider', $pageid );
?>

<!-- Home Banner --->
<section class="page_slider ds text-center">
	<div class="flexslider" data-nav="false" data-dots="true">
		<ul class="slides">
			<?php
			foreach ( $front_page_slider as $front_page_slide ) :
				$background_type           = $front_page_slide['background_type'];
				$background_image          = $front_page_slide['background_image'];
				$background_video          = $front_page_slide['background_video'];
				$fallback_background_image = $front_page_slide['fallback_background_image'];
				$shadow_word               = $front_page_slide['shadow_word'];
				$logo                      = $front_page_slide['logo'];
				$heading                   = $front_page_slide['heading'];
				$leader                    = $front_page_slide['leader'];
				?>
				<li class="cover-image">
					<span class="flexslider-overlay"></span>
					<?php if ( 'image' === $background_type ) : ?>
					<img src="<?php echo esc_url( $background_image['url'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" />
					<?php else : ?>
						<img src="<?php echo esc_url( $fallback_background_image['url'] ); ?>" alt="<?php echo esc_attr( $fallback_background_image['alt'] ); ?>"  />
						<video loop="" muted="" id="myVideo">
							<source src="<?php echo esc_url( $background_video['url'] ); ?>" data-src="<?php echo esc_url( $background_video['url'] ); ?>" type="video/mp4">
						</video>
					<?php endif; ?>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="intro_layers_wrapper">
									<div class="intro_layers">
										<div class="divider-70"></div>
										<div class="intro_layer" data-animation="fadeInDown">
											<div class="d-inline-block">

												<?php if ( $shadow_word ) : ?>
													<h2 class="intro_shadow_word">
														<?php echo esc_html( $shadow_word ); ?>
													</h2>
												<?php endif; ?>

												<div class="flex flex-wrap intro_logos mb-10">
													<?php if ( $logo ) : ?>
														<img class="lazy" data-src="<?php echo esc_url( $logo['url'] ); ?>" alt="JLB Steels Logo">
													<?php endif; ?>
												</div>

												<?php if ( $heading ) : ?>
													<h2 class="intro_featured_word">
														<?php echo wp_kses_post( $heading ); ?>
													</h2>
												<?php endif; ?>
											</div>
										</div>

										<?php if ( $leader ) : ?>
											<div class="intro_layer" data-animation="fadeInDown">
												<p class="intro_after_featured_word"><?php echo wp_kses_post( $leader ); ?></p>
											</div>
										<?php endif; ?>

										<div class="intro_layer scroll-link intro-arrow animate" data-animation="floating">
											<a href="#steps"><i class="ico ico-arrow-down color-main fs-30"></i></a>
										</div>

									</div> <!-- eof .intro_layers -->
								</div> <!-- eof .intro_layers_wrapper -->
							</div> <!-- eof .col-* -->
						</div><!-- eof .row -->
					</div><!-- eof .container -->
				</li>
			<?php endforeach; ?>
		</ul>
	</div> <!-- eof flexslider -->
</section>
<!-- End of Home Banner --->
