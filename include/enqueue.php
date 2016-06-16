<?php

/*
@package dubsteplions

==========================
	  ADMIN ENQUEUE
==========================
*/

function dblions_load_admin_scripts( $hook ) {
	if ( 'toplevel_page_dblions' != $hook ) { return; }

	wp_register_style( 'dblions_admin', get_template_directory_uri() . '/css/dblions.admin.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'dblions_admin' );

	wp_enqueue_media();

	wp_register_script( 'dblions_admin_script', get_template_directory_uri() . '/js/dblions.admin.js', array('jquery'), '1.0.0', true );
	wp_enqueue_script( 'dblions_admin_script' );
}

add_action( 'admin_enqueue_scripts', 'dblions_load_admin_scripts' );

?>