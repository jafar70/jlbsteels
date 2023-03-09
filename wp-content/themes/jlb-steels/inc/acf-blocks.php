<?php
/**
 * ACF Gutenberg Block Registration & Functions.
 *
 * @package Jafar_Theme
 */

/**
 * Register ACF Block Category.
 *
 * @param array  $categories our block categories.
 * @param object $post our post object.
 */
function block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug'  => 'jlb-blocks',
				'title' => __( 'JLB Blocks', 'jafar-theme' ),
			),
		)
	);
}
add_filter( 'block_categories', 'block_category', 10, 2 );

/**
 * Register ACF Blocks.
 */
function register_acf_block_types() {
	acf_register_block_type(
		array(
			'name'            => 'call-to-action',
			'title'           => __( 'Call to Action' ),
			'description'     => __( 'Call to Action block.' ),
			'render_template' => 'modules/m01-cta.php',
			'category'        => 'jlb-blocks',
			'icon'            => 'align-center',
			'keywords'        => array( 'call', 'to', 'action', 'cta' ),
			'supports'        => array(
				'mode'     => false,
				'align'    => false,
				'multiple' => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'form',
			'title'           => __( 'Form' ),
			'description'     => __( 'Form block.' ),
			'render_template' => 'modules/m02-form.php',
			'category'        => 'jlb-blocks',
			'icon'            => 'align-center',
			'keywords'        => array( 'form' ),
			'supports'        => array(
				'mode'     => false,
				'align'    => false,
				'multiple' => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'map',
			'title'           => __( 'Map' ),
			'description'     => __( 'Map block.' ),
			'render_template' => 'modules/m03-map.php',
			'category'        => 'jlb-blocks',
			'icon'            => 'align-center',
			'keywords'        => array( 'Map' ),
			'supports'        => array(
				'mode'     => false,
				'align'    => false,
				'multiple' => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'request-quote',
			'title'           => __( 'Request a Quote' ),
			'description'     => __( 'Request a Quote block.' ),
			'render_template' => 'modules/m04-request-quote.php',
			'category'        => 'jlb-blocks',
			'icon'            => 'align-center',
			'keywords'        => array( 'request', 'a', 'quote' ),
			'supports'        => array(
				'mode'     => false,
				'align'    => false,
				'multiple' => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'services',
			'title'           => __( 'Services' ),
			'description'     => __( 'Services block.' ),
			'render_template' => 'modules/m05-services.php',
			'category'        => 'jlb-blocks',
			'icon'            => 'align-center',
			'keywords'        => array( 'services' ),
			'supports'        => array(
				'mode'     => false,
				'align'    => false,
				'multiple' => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'steps',
			'title'           => __( 'Steps' ),
			'description'     => __( 'Steps block.' ),
			'render_template' => 'modules/m06-steps.php',
			'category'        => 'jlb-blocks',
			'icon'            => 'align-center',
			'keywords'        => array( 'steps' ),
			'supports'        => array(
				'mode'     => false,
				'align'    => false,
				'multiple' => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'team',
			'title'           => __( 'Team' ),
			'description'     => __( 'Team block.' ),
			'render_template' => 'modules/m07-team.php',
			'category'        => 'jlb-blocks',
			'icon'            => 'align-center',
			'keywords'        => array( 'team' ),
			'supports'        => array(
				'mode'     => false,
				'align'    => false,
				'multiple' => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'text-content-and-image',
			'title'           => __( 'Text Content and Image' ),
			'description'     => __( 'Text Content and Image block.' ),
			'render_template' => 'modules/m08-textcontent-image.php',
			'category'        => 'jlb-blocks',
			'icon'            => 'align-center',
			'keywords'        => array( 'text', 'content', 'and', 'image' ),
			'supports'        => array(
				'mode'     => false,
				'align'    => false,
				'multiple' => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'case-studies-listing',
			'title'           => __( 'Case Studies Listing' ),
			'description'     => __( 'Case Studies Listing block.' ),
			'render_template' => 'modules/m09-case-studies.php',
			'category'        => 'jlb-blocks',
			'icon'            => 'book',
			'keywords'        => array( 'case', 'studies', 'listing' ),
			'supports'        => array(
				'mode'     => false,
				'align'    => false,
				'multiple' => false,
			),
		)
	);
}

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'register_acf_block_types' );
}

/**
 * Allowed theme block types.
 */
// function allowed_block_types() {
// return array(
// 'core/image',
// 'core/group',
// 'core/table',
// 'core/paragraph',
// 'core/quote',
// 'core/heading',
// 'core/list',
// );
// }
// add_filter( 'allowed_block_types', 'allowed_block_types' );
