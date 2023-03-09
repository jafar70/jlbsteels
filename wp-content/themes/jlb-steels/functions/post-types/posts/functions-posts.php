<?php

/*  ==========================================================================
	Hide Default content editor
	========================================================================== */

add_action( 'init', function() {
	remove_post_type_support( 'post', 'editor' );
}, 99);

/*  ==========================================================================
	Display post
	========================================================================== */

function posts__display_post($displaypost){

	// Get title
	$post_title = get_field('page_heading', $displaypost->ID);
	$post_title = (!empty($post_title)) ? $post_title : $displaypost->post_title;

	// Get tile image
	$post_img = get_field('post_tile_img', $displaypost->ID);

	// Get categories
	$postcategories = get_the_category($displaypost->ID);
	$category_html = "";
	if (!empty($postcategories)):
		foreach ($postcategories as $index => $postcategory):
			$category_html .= "<a href='" . get_category_link($postcategory->term_id) . "'>";
			$category_html .= $postcategory->name;
			$category_html .= "</a>";
			if(count($postcategories) > $index + 1):
				$category_html .= ", ";
			endif;
		endforeach;
	endif;

	?>
	<article class="tile tile--post">
		<a class="tile__link noline" href="<?php echo get_the_permalink($displaypost->ID); ?>">
			<?php theme__display_image($post_img, "inline", "sm", "tile__img mb--em"); ?>
			<h3 class="tile__heading heading-reg"><?php echo $post_title; ?></h3>
		</a><!-- /tile__link -->
		<?php if(!empty($category_html)): ?>
			<div class="tile__categories text-sml hiddenlinkline o-50">
				<?php echo $category_html; ?>
			</div>
		<?php endif; ?>
	</article><!-- /post -->
	<?php
} // posts__display_post ()


/*  ==========================================================================
	Get related posts
	========================================================================== */

function posts__get_related($postlimit = 4, $postid = ""){

	$related_posts = array();
	$exclude_posts = array($postid);


	// get directly related posts (from ACF field "related posts")

	$directlyrelated = get_field('related_posts', $postid);
	//var_dump($directlyrelated);
	if(is_array($directlyrelated) && count($directlyrelated) > 0):
		foreach($directlyrelated as $index => $directlyrelated_post):
			if($directlyrelated_post->post_status == "publish"){
				array_push($related_posts, $directlyrelated_post);
				array_push($exclude_posts, $directlyrelated_post->ID);
			}
		endforeach;
	endif;

	// get categories

	if(is_single()):
		// if it's an article, use the categories the carticle does
		$postcats = get_the_category();
		$relevant_categories = array();

		foreach ($postcats as $key => $postcat) {
			$relevant_categories[] = $postcat->term_id;
		}
	endif;

	// get related posts, based on categories

	if(count($relevant_categories) > 0):

		$args = array(
			'posts_per_page'   => $postlimit - count($related_posts),
			'order'            => 'DESC',
			'orderby'          => 'date',
			'post__not_in'     => $exclude_posts,
			'category__in' 	   => $relevant_categories,
			'post_type'		   => 'post',
			'post_status'      => 'publish');

		$returnedposts = get_posts( $args );

		foreach($returnedposts as $returnedpost):
			array_push($related_posts, $returnedpost);
			array_push($exclude_posts, $returnedpost->ID);
		endforeach;

	endif;

	// just get some unrelated posts if there aren't enough posts yet

	if(count($related_posts) < $postlimit):
		$args = array(
			'posts_per_page'   => $postlimit - count($related_posts),
			'order'            => 'DESC',
			'orderby'          => 'date',
			'post__not_in'     => $exclude_posts,
			'post_type'		   => 'post',
			'post_status'      => 'publish');

		$returnedposts = get_posts( $args );

		foreach($returnedposts as $returnedpost):
			array_push($related_posts, $returnedpost);
			array_push($exclude_posts, $returnedpost->ID);
		endforeach;

	endif;

	return $related_posts;

} // posts__get_related ()


/*  ==========================================================================
	Get featured posts
	========================================================================== */

function posts__get_featured($postlimit = 4, $blogid = ""){

	$featured_posts = array();
	$exclude_posts = array();

	// get directly featured posts (from ACF field "featured posts")

	if (isset($blogid) && !empty($blogid)):
		$directlyrelated = get_field('featured_posts', $blogid);
		if(is_array($directlyrelated) && count($directlyrelated) > 0):
			foreach($directlyrelated as $index => $directlyrelated_post):
				if($directlyrelated_post->post_status == "publish"){
					array_push($featured_posts, $directlyrelated_post);
					array_push($exclude_posts, $directlyrelated_post->ID);
				}
			endforeach;
		endif;
	endif;

	// just get some unrelated posts if there aren't enough posts yet

	// if(count($featured_posts) < $postlimit):
		
	// 	$args = array(
	// 		'posts_per_page'   => $postlimit - count($featured_posts),
	// 		'order'            => 'DESC',
	// 		'orderby'          => 'date',
	// 		'post__not_in'     => $exclude_posts,
	// 		'post_type'		   => 'post',
	// 		'post_status'      => 'publish');

	// 	$returnedposts = get_posts( $args );

	// 	foreach($returnedposts as $returnedpost):
	// 		array_push($featured_posts, $returnedpost);
	// 		array_push($exclude_posts, $returnedpost->ID);
	// 	endforeach;

	// endif;

	return $featured_posts;

} // posts__get_featured ()