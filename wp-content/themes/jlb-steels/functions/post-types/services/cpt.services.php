<?php

/*  ==========================================================================
	Create post type
	========================================================================== */

$singular_name = "Service";
$collective_name = "Services";
$post_type_name = str_replace(' ', '-', strtolower($singular_name)); //try to keep the cpt singular. e.g. job, person, case-study
$slug = str_replace(' ', '-', strtolower($collective_name));

register_post_type($post_type_name,
  array(
      'labels' => array(
          'name' => _x($collective_name, 'post type general name'),
          'singular_name' => _x($singular_name, 'post type singular name'),
          'add_new' => _x('Add New '.$singular_name, 'book'),
          'add_new_item' => __('Add New '.$singular_name),
          'edit_item' => __('Edit '.$singular_name),
          'new_item' => __('Add New '.$collective_name),
          'all_items' => __('View '.$collective_name),
          'view_item' => __('View '.$collective_name),
          'search_items' => __('Search '.$collective_name),
          'not_found' =>  __('No '.$collective_name.' found'),
          'not_found_in_trash' => __('No '.$collective_name.' found in Trash'),
          'parent_item_colon' => '',
          'menu_name' => $collective_name
      ),
      'public' => true,
      'query_var' => true,
      'rewrite' =>array(
          'slug' => $slug,
          'with_front' => false
      ),
      'capability_type' => 'post',
      'has_archive' => false,
      'hierarchical' => false,
      'menu_position' => null,
      'menu_icon' => 'dashicons-pressthis',
      'supports' => array('title', 'page-attributes')
  )
);

/* ==========================================================================
 Creating taxonomy
 ========================================================================== */

 /* 
 // This can be un-commented if you need to create a taxonomy
 add_action( 'init', function () use ($post_type_name) {

    $taxonomy_singular_name = "Team";
    $taxonomy_collective_name = "Teams";
    $taxonomy_name = str_replace(' ', '-', strtolower($taxonomy_singular_name)); //try to keep the cpt singular. e.g. job, person, case-study
 
    // Teams
    register_taxonomy($taxonomy_name, $post_type_name, array(
        'hierarchical' => true,
        'show_admin_column' => false,
        'labels' => array(
            'name' => _x( $taxonomy_collective_name, 'taxonomy general name' ),
            'singular_name' => _x( $taxonomy_singular_name, 'taxonomy singular name' ),
            'search_items' => __( 'Search '.$taxonomy_collective_name ),
            'all_items' => __( 'All '.$taxonomy_collective_name ),
            'parent_item' => __( 'Parent Team' ),
            'parent_item_colon' => __( 'Parent Location:' ),
            'edit_item' => __( 'Edit '.$taxonomy_singular_name ),
            'update_item' => __( 'Update '.$taxonomy_singular_name ),
            'add_new_item' => __( 'Add New '.$taxonomy_singular_name ),
            'new_item_name' => __( 'New '.$taxonomy_singular_name ),
            'menu_name' => __( $taxonomy_collective_name )
        ),
        'rewrite' => array(
            'slug' => $taxonomy_name, // Controls the base slug that will display before each term
            'with_front' => false, // Don't display the category base before "/locations/"
            'hierarchical' => false // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));
    
}, 0 );
*/

flush_rewrite_rules();
