<?php
/**
 * Module: Steps
 *
 * @package Jafar_Theme
 */

$steps = get_field( 'steps' );
?>

<?php if ( ! empty( $steps ) ) : ?>
	<section id="steps" class="s-pt-85 s-pb-0 s-pt-lg-95 s-pb-lg-65 item-steps steps2 c-gutter-100 container-px-80 overflow-visible c-mb-55 c-mb-lg-0">
	<div class="container ds ms">
		<div class="row">
			<?php
			foreach ( $steps as $step ) :
				$heading = $step['heading_step'];
				$leader  = $step['leader_step'];
				?>
			<div class="col-12 col-lg-4 step animate" data-animation="fadeInDown">
				<?php if ( $heading ) : ?>
					<p class="step-title step-part color-main">
						<?php echo esc_html( $heading ); ?>
					</p>
				<?php endif; ?>

				<?php if ( $leader ) : ?>
					<p>
						<?php echo esc_html( $leader ); ?>
					</p>
				<?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>
