<?php 
if ( ! function_exists('climed_register_medical_examination') ) {

// Register Custom Post Type
function climed_register_medical_examination() {

	$labels = array(
		'name'                => _x( 'Medical Examinations', 'Post Type General Name', 'climed' ),
		'singular_name'       => _x( 'Medical Examination', 'Post Type Singular Name', 'climed' ),
		'menu_name'           => __( 'Examinations', 'climed' ),
		'parent_item_colon'   => __( 'Parent Examination:', 'climed' ),
		'all_items'           => __( 'All Medical Examinations', 'climed' ),
		'view_item'           => __( 'View Examination Info.', 'climed' ),
		'add_new_item'        => __( 'Add New Examination', 'climed' ),
		'add_new'             => __( 'Add New', 'climed' ),
		'edit_item'           => __( 'Edit Examination', 'climed' ),
		'update_item'         => __( 'Update Examination', 'climed' ),
		'search_items'        => __( 'Search Medical Examinations', 'climed' ),
		'not_found'           => __( 'Not found', 'climed' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'climed' ),
	);
	$rewrite = array(
		'slug'                => 'medical_examinations',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'               => __( 'climed_medical_examination', 'climed' ),
		'description'         => __( 'The list of medical examination offered', 'climed' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon' 		  => 'dashicons-category',
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);
	
	register_post_type( 'medical_examination', $args );

}

// Hook into the 'init' action
add_action( 'init', 'climed_register_medical_examination', 0 );

}?>