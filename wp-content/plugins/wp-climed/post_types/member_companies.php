<?php 
if ( ! function_exists('climed_register_member_companies') ) {

// Register Custom Post Type
function climed_register_member_companies() {

	$labels = array(
		'name'                => _x( 'Member Companies', 'Post Type General Name', 'climed' ),
		'singular_name'       => _x( 'Member Company', 'Post Type Singular Name', 'climed' ),
		'menu_name'           => __( 'Member Companies', 'climed' ),
		'parent_item_colon'   => __( 'Parent Member Company:', 'climed' ),
		'all_items'           => __( 'All Member Companys', 'climed' ),
		'view_item'           => __( 'View Member Company Info.', 'climed' ),
		'add_new_item'        => __( 'Add New Member Company', 'climed' ),
		'add_new'             => __( 'Add New', 'climed' ),
		'edit_item'           => __( 'Edit Member Company', 'climed' ),
		'update_item'         => __( 'Update Member Company', 'climed' ),
		'search_items'        => __( 'Search Costumers', 'climed' ),
		'not_found'           => __( 'Not found', 'climed' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'climed' ),
	);

	$rewrite = array(
		'slug'                => 'member_companies',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'label'               => __( 'Member Companies', 'climed' ),
		'description'         => __( 'All members companies accepted', 'climed' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_icon' 		  => 'dashicons-admin-home',
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'rewrite'             => $rewrite,
		'capability_type'     => 'post',
	);

	register_post_type( 'cm_member_companies', $args );

}

// Hook into the 'init' action
add_action( 'init', 'climed_register_member_companies', 0 );
}?>