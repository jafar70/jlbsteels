<?php
/**
 * Module: Team
 *
 * @package Jafar_Theme
 */

$shadow_heading = get_field( 'shadow_heading_team' );
$heading        = get_field( 'heading_team' );
$subheading     = get_field( 'subheading_team' );
$team_members   = get_field( 'team_members' );
?>

<section class="ls s-pt-60 s-pb-30 s-pt-lg-100 s-pb-lg-70 s-pt-xl-150 s-pb-xl-120 c-mb-30 c-gutter-30">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<?php if ( $shadow_heading || $heading ) : ?>
				<h3 class="big special-heading">
					<?php if ( $shadow_heading ) : ?>
						<span class="shadow-heading"><?php echo esc_html( $shadow_heading ); ?></span>
					<?php endif; ?>

					<?php if ( $heading ) : ?>
						<?php echo wp_kses_post( $heading ); ?>
					<?php endif; ?>
				</h3>
				<?php endif; ?>

				<?php if ( $subheading ) : ?>
					<p class="special-heading subheading with-line"><?php echo esc_html( $heading ); ?></p>
				<?php endif; ?>
			</div>

			<?php if ( $team_members ) : ?>
				<?php
				foreach ( $team_members as $team_member ) :
					$person_name     = get_the_title( $team_member->ID );
					$person_job_role = get_field( 'person_role', $team_member->ID );
					$person_picture  = get_field( 'person_picture', $team_member->ID );
					?>
				<div class="col-lg-4 col-md-6">
					<div class="team-member vertical-item content-padding text-center">
					<?php if ( $person_picture ) : ?>
							<div class="item-media">
								<img class="lazy" data-src="<?php echo esc_url( $person_picture['url'] ); ?>" alt="<?php echo esc_attr( $person_picture['alt'] ); ?>">
							</div>
						<?php endif; ?>

						<div class="item-content ls ms">
						<?php if ( $person_name ) : ?>
								<h4 class="team-name">
									<?php echo esc_html( $person_name ); ?>
								</h4>
							<?php endif; ?>

						<?php if ( $person_job_role ) : ?>
								<p class="team-position subheading mb-20">
									<?php echo esc_html( $person_job_role ); ?>
								</p>
							<?php endif; ?>
						</div>
					</div>
				</div><!-- .col-* -->
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</section>
