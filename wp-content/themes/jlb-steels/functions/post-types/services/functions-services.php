<?php

/*  ==========================================================================
	Display person
	========================================================================== */

function services__display_service($displaypost){

  $person_img = get_field('person_picture', $displaypost->ID);
  $person_title = get_the_title($displaypost->ID);
  $person_role = get_field('person_role', $displaypost->ID);

	?>
	<div class="tile tile--person">
		<a class="tile__link noline" href="<?php echo get_the_permalink($displaypost->ID); ?>">
      <?php theme__display_image($person_img, "bg", "sm", "tile__img mb--em"); ?>
			<div class="tile__content">
				<h4 class="tile__name heading-reg"><?php echo $person_title; ?></h4>
        <?php if (!empty($person_role)): ?>
          <div class="tile__role heading-sml o-50"><?php echo $person_role; ?></div>
        <?php endif; ?>
			</div>
		</a><!-- /person__link -->
	</div><!-- /person -->
	<?php
} // people__display_person ()

/*  ==========================================================================
	Get posts written by person (based on acf field author_selection)
	========================================================================== */

// Currently this is not being used, but can be used by creating an ACF field on posts called "author_selection"

/*
function people__get_persons_posts($personid = "", $limit=-1, $exclude = ""){

    $persons_posts = get_posts(array(
    	'numberposts'	=> $limit,
    	'post_type'		=> 'post',
      'exclude'       => $exclude,
      'status'        => 'publish',
    	'meta_query'	=> array(
    		array(
    			'key'	  	=> 'author_selection',
    			'value'	  	=> $personid,
    			'compare' 	=> '=',
    		),
    	),
    ));
    return $persons_posts;

} */

?>
