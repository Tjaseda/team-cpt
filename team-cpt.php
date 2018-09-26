<?php
/*
Plugin Name: Team CPT
Plugin URI: https://github.com/Tjaseda/team-cpt
Description: Simple plugin to register a Team custom post type
Author: Tjasa Dobrilovic
Version: 1.0
Author URI: https://github.com/Tjaseda
*/

function teamcpt_register_team_post_type() {

	$labels = array(
		'name'               => 'Team',
		'singular_name'      => 'Team Member',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Team Member',
		'edit_item'          => 'Edit Team Member',
		'new_item'           => 'New Team Member',
		'all_items'          => 'All Team Members',
		'view_item'          => 'View Team Member',
		'search_items'       => 'Search Team Members',
		'not_found'          => 'No team members found',
		'not_found_in_trash' => 'No team members found in Trash',
		'parent_item_colon'  => '',
		'menu_name'          => 'Team'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
    'exclude_from_search'=> false,
		'publicly_queryable' => false,
    'menu_icon'          => 'dashicons-universal-access',
		'supports'           => array( 'title', 'editor', 'thumbnail' )
	);

	register_post_type( 'team', $args );

}
add_action( 'init', 'teamcpt_register_team_post_type' );

?>
