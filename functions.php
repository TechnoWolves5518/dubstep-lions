<?php

require get_template_directory() . '/include/function-admin.php';
require get_template_directory() . '/include/enqueue.php';

function dblions_script_enqueue() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 
		array(), '3.3.6', 'all' );
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', 
		array(), '3.3.6', 'all' );
	wp_enqueue_style('style', get_stylesheet_uri());
	/*wp_enqueue_style( 'mediastyle', get_template_directory_uri() . '/css/media.css', 
		array(), '1.0.0', 'all' );*/

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', 
		array(), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'dblions_script_enqueue' );

/*======================================
		ACTIVATE MENUS
======================================*/
	
function dblions_theme_setup() {
	add_theme_support( 'menus' );
	register_nav_menu( 'primary', 'Header Navigation' );
	register_nav_menu( 'about', 'About Page Navigation' );
	register_nav_menu( 'sponsors', 'Sponsors Page Navigation' );
	register_nav_menu( 'media', 'Media Page Navigation' );
	register_nav_menu( 'resources', 'Resources Page Navigation' );
}

add_action( 'init', 'dblions_theme_setup' );

/*======================================
		THEME CUSTOMIZER
======================================*/

function dblions_theme_customizer( $wp_customize ) {
	//adding section in wordpress customizer   
	$wp_customize->add_section('footer_settings_section', array(
		'title' => 'Footer Text Section'
	));

	//adding setting for footer text area
	$wp_customize->add_setting('text_setting', array(
		'default' => 'Default Text For Footer Section',
	));

	$wp_customize->add_control('text_setting', array(
		'label'   => 'Footer Text Here',
		'section' => 'footer_settings_section',
		'type'    => 'textarea',
	));
}

add_action( 'customize_register', 'dblions_theme_customizer' );

/*======================================
		THEME SUPPORT FUNCTIONS
======================================*/

add_theme_support( 'custom-background' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'aside', 'image', 'video' ) );
add_theme_support( 'title-tag' );

/*======================================
		SIDEBAR FUNCTIONS
======================================*/

function dblions_widget_setup() {
	register_sidebar( array(
			'name' => 'Primary Sidebar',
			'id' => 'primary-sidebar',
			'class' => 'custom',
			'description' => 'Primary Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '</h1 class="widget-title">',
			'after_title' => '</h1>'
		) 
	);
}

add_action( 'widgets_init', 'dblions_widget_setup' );

?>