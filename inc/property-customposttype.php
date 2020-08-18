<?php


function post_type_property() {

	register_post_type('property',
		array(
		'labels' => array(
				'name' 					=> __( 'Property' ),
				'singular_name' 		=> __( 'Property' ),
				'add_new' 				=> __( 'Add New' ),
				'add_new_item' 			=> __( 'Add New Property' ),
				'edit' 					=> __( 'Edit' ),
				'edit_item' 			=> __( 'Edit Property' ),
				'new_item' 				=> __( 'New Property' ),
				'view' 					=> __( 'View Property' ),
				'view_item' 			=> __( 'View Property' ),
				'search_items' 			=> __( 'Search Properties' ),
				'not_found' 			=> __( 'No Propertys found' ),
				'not_found_in_trash' 	=> __( 'No Properties found in Trash' ),
				'parent' 				=> __( 'Parent Property' ),
			),
	  'public' 							=> true,
	  'show_ui' 						=> true,
			'exclude_from_search' 		=> true,
			'hierarchical' 				=> true,
			'has_archive' 				=> true,
			'supports' 					=> array( 'title', 'editor', 'thumbnail' ),
			'query_var' 				=> true
			)
	  );
	}
	add_action('init', 'post_type_property');
	
	add_action( 'init', 'create_property_taxonomies', 0 );
	
	function create_property_taxonomies(){

	  $labels = array(
		'name'							=> _x( 'Cities', 'taxonomy general name' ),
		'singular_name' 				=> _x( 'City', 'taxonomy singular name' ),
		'search_items' 					=>  __( 'Search Cities' ),
		'popular_items' 				=> __( 'Popular Cities' ),
		'all_items' 					=> __( 'All Cities' ),
		'parent_item' 					=> __( 'Parent City' ),
		'parent_item_colon' 			=> __( 'Parent City:' ),
		'edit_item' 					=> __( 'Edit City' ),
		'update_item' 					=> __( 'Update City' ),
		'add_new_item' 					=> __( 'Add New City' ),
		'new_item_name' 				=> __( 'New Recording Name' ),
	  );
	  register_taxonomy('cities',array('property'), array(
		'hierarchical' 					=> true,
		'labels' 						=> $labels,
		'show_ui' 						=> true,
		'query_var' 					=> true,
		'rewrite' 						=> array(
			'slug' 						=> 'cities'
		  )
	  )
	
	);
	}