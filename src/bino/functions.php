<?php

	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support( 'title-tag' );

	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'twentyseventeen' ),
			'social' => __( 'Social Links Menu', 'twentyseventeen' ),
		)
	);

	// Disable admin bar
	function my_function_admin_bar(){ return false; }
	add_filter( 'show_admin_bar' , 'my_function_admin_bar');

	// Load CSS and JS the right way
	function myprefix_load_css_and_js() {
	    wp_enqueue_style( 'style', get_stylesheet_uri() );
	}
	add_action( 'wp_enqueue_scripts', 'myprefix_load_css_and_js' );

	// Enable custom logo
	function bino_custom_logo_setup() {
		$defaults = array(
		'height'      => 141,
		'width'       => 52,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	);
	 	add_theme_support( 'custom-logo', $defaults );
	}
	add_action( 'after_setup_theme', 'bino_custom_logo_setup' );

	// Enable a custom menu
	function register_my_menu() {

		register_nav_menus(array(
			'header-menu' => __( 'Header Menu'),
			'post-menu' => __( 'Post Menu')
		));
	}

	add_action( 'init', 'register_my_menu' );

	// Add a class in link tag
	function add_menu_class($ulclass) {
	   return preg_replace('/<a /', '<a class="scroll"', $ulclass);
	}
	add_filter('wp_nav_menu','add_menu_class');

	// Limit the return of post text
	function custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    // Change the word of the_excerpt() function
    function new_excerpt_more( $more ) {
	    return '...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	add_filter('term_links-post_tag', function($links) {
	    return array_map('wp_strip_all_tags', $links);
	});