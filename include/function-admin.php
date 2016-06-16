<?php

/*
@package dubsteplions

==========================
		ADMIN PAGE
==========================
*/

function dblions_add_admin_page() {
	// generate admin page
	add_menu_page( 'Dubstep Lions Theme Options', 'Dubstep Lions', 'manage_options', 
		'dblions', 'dblions_create_page', 'dashicons-dashboard', 62 );

	// generate admin subpage
	add_submenu_page( 'dblions', 'Dubstep Lions Theme Options', 'Settings', 'manage_options', 
		'dblions', 'dblions_create_page' );

	add_submenu_page( 'dblions', 'Dubstep Lions Sidebar Options', 'Sidebar', 'manage_options', 
		'dblions_sidebar', 'dblions_sidebar_page' );

	add_submenu_page( 'dblions', 'Dubstep Lions Social Options', 'Social Media', 'manage_options', 
		'dblions_social', 'dblions_social_page' );
}

function dblions_create_page() {
	require_once( get_template_directory() . '/include/templates/admin.php' );
}

function dblions_sidebar_page() {
	require_once( get_template_directory() . '/include/templates/admin-sidebar.php' );
}

function dblions_social_page() {
	require_once( get_template_directory() . '/include/templates/admin-social.php' );
}

add_action( 'admin_menu', 'dblions_add_admin_page' );

// enable settings
add_action( 'admin_init', 'dblions_settings' );

/*======================================
		ADD SETTINGS
======================================*/

function dblions_settings() {
	register_setting( 'dblions-settings-group', 'footer_text' );
	register_setting( 'dblions-settings-group', 'desc_img' );

	register_setting( 'dblions-sidebar-group', 'sidebar_embed' );

	register_setting( 'dblions-social-group', 'facebook_link' );
	register_setting( 'dblions-social-group', 'twitter_link' );
	register_setting( 'dblions-social-group', 'instagram_link' );
	register_setting( 'dblions-social-group', 'tumblr_link' );
	register_setting( 'dblions-social-group', 'gplus_link' );

	add_settings_section( 'dblions-general-options', 'General Options', 
		'dblions_general_options', 'dblions' );
	add_settings_section( 'dblions-img-options', 'Image Options', 
		'dblions_img_options', 'dblions' );
	add_settings_section( 'dblions-sidebar-options', 'Sidebar Options', 
		'dblions_sidebar_options', 'dblions_sidebar' );
	add_settings_section( 'dblions-social-options', 'Social Media Options', 
		'dblions_social_options', 'dblions_social' );

	add_settings_field( 'footer-text', 'Footer Text', 'dblions_footer_text', 'dblions', 'dblions-general-options' );
	add_settings_field( 'desc-img', 'Description Background Image', 'dblions_desc_img', 'dblions', 'dblions-img-options' );

	add_settings_field( 'sidebar-embed', 'Sidebar Embed', 'dblions_sidebar_embed', 'dblions_sidebar', 'dblions-sidebar-options' );

	add_settings_field( 'facebook-link', 'Facebook Link', 'dblions_fb_link', 'dblions_social', 'dblions-social-options' );
	add_settings_field( 'twitter-link', 'Twitter Link', 'dblions_tw_link', 'dblions_social', 'dblions-social-options' );
	add_settings_field( 'instagram-link', 'Instagram Link', 'dblions_ig_link', 'dblions_social', 'dblions-social-options' );
	add_settings_field( 'tumblr-link', 'Tumblr Link', 'dblions_tumblr_link', 'dblions_social', 'dblions-social-options' );
	add_settings_field( 'gplus-link', 'Google+ Link', 'dblions_gplus_link', 'dblions_social', 'dblions-social-options' );
}

/*======================================
		SETTING SECTIONS
======================================*/

function dblions_general_options() {
	echo 'Edit general features';
}

function dblions_img_options() {
	echo 'Select images for themes';
}

function dblions_social_options() {
	echo 'Change your Social Media info';
}

function dblions_sidebar_options() {
	echo 'Edit the look of the Sidebar';
}

/*======================================
		   GENERAL FIELDS
======================================*/

function dblions_footer_text() {
	$footertxt = esc_attr( get_option( 'footer_text' ) );
	create_input_field( array(
			'footer_text', 'text', 
			$footertxt, 'Footer Text'
		) );
}

/*======================================
			IMAGE FIELDS
======================================*/

function dblions_desc_img() {
	$img = esc_attr( get_option( 'desc_img' ) );
	create_input_field( array(
			'upload-btn', '', 'button', 'Upload Picture', 
			'', 'button button-secondary'
		) );
	create_input_field( array(
			'desc-img', 'desc_img', 
			'hidden', $img, '', ''
		) );
}

/*======================================
			SIDEBAR FIELDS
======================================*/

function dblions_sidebar_embed() {
	$embed = esc_attr( get_option( 'sidebar_embed' ) );
	create_input_field( array(
			'sidebar_embed', 'text', 
			$embed, 'Sidebar Embed'
		) );
}

/*======================================
		SOCIAL MEDIA FIELDS
======================================*/

function dblions_fb_link() {
	$fblink = esc_attr( get_option( 'facebook_link' ) );
	create_input_field( array(
			'facebook_link', 'text', 
			$fblink, 'Facebook Link'
		) );
}

function dblions_tw_link() {
	$twlink = esc_attr( get_option( 'twitter_link' ) );
	create_input_field( array(
			'twitter_link', 'text', 
			$twlink, 'Twitter Link'
		) );
}

function dblions_ig_link() {
	$iglink = esc_attr( get_option( 'instagram_link' ) );
	create_input_field( array(
			'instagram_link', 'text', 
			$iglink, 'Instagram Link'
		) );
}

function dblions_tumblr_link() {
	$tumblrlink = esc_attr( get_option( 'tumblr_link' ) );
	create_input_field( array(
			'tumblr_link', 'text', 
			$tumblrlink, 'Tumblr Link'
		) );
}

function dblions_gplus_link() {
	$gpluslink = esc_attr( get_option( 'gplus_link' ) );
	create_input_field( array(
			'gplus_link', 'text', 
			$gpluslink, 'Google+ Link'
		) );
}

/*======================================
		HELPER FUNCTIONS
======================================*/

function create_input_field( $args ) {
	if( count($args) > 4 ) {
		echo '<input id="' . $args[0] . '" name="'. $args[1] .'" type="'. $args[2] .'" value="'. $args[3] .'" 
			placeholder="'. $args[4] .'" class="' . $args[5] . '" />';
		return;
	}

	echo '<input name="'. $args[0] .'" type="'. $args[1] .'" value="'. $args[2] .'" 
			placeholder="'. $args[3] .'" />';
}

function create_textarea_field( $text ) {
	echo '<textarea rows="5" cols="50">' . $text . '</textarea>';
}

function add_description( $text ) {
	echo '<p class="description>' . $text . '</p>';
}

function sanitize_input( $text ) {
	$sanitized = sanitize_text_field( $text );
	return output;
}

?>