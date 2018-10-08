<?php

add_action( 'init', 'user_profile_init' );
/**
 * Register a user post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function user_profile_init() {
	$labels = array(
		'name'               => _x( 'Users', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'User Profile', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'User Profile', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'User Profile', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'user', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New User', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New User', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit User', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View User', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Users', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Users', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Users:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No users found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No users found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title','custom-fields','author',)
	);

	register_post_type( 'user_profile', $args );
}