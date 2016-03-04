<?php
/**
 * TI-wp-foundation-theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TI-wp-foundation-theme
 */

if ( ! function_exists( 'ti_wp_foundation_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ti_wp_foundation_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on TI-wp-foundation-theme, use a find and replace
	 * to change 'ti-wp-foundation-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'ti-wp-foundation-theme', get_template_directory() . '/languages' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'ti-wp-foundation-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'ti_wp_foundation_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	add_post_type_support( 'page', 'excerpt'       );
    add_post_type_support( 'page', 'custom-fields' );
}
endif;
add_action( 'after_setup_theme', 'ti_wp_foundation_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ti_wp_foundation_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ti_wp_foundation_theme_content_width', 1200 );
}
add_action( 'after_setup_theme', 'ti_wp_foundation_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ti_wp_foundation_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ti-wp-foundation-theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ti_wp_foundation_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ti_wp_foundation_theme_scripts() {
	wp_enqueue_style( 'default-stylesheet', get_stylesheet_uri() );
    
    wp_enqueue_style( 'theme-stylesheet', get_template_directory_uri() . '/css/app.css', array(), '20160304', 'all' );
    
    wp_deregister_script('jquery'); // De-Register jQuery default loaded by Wordpress
    
    wp_enqueue_script( 'whatinput', get_template_directory_uri() . '/bower_components/what-input/what-input.js', array(), '20160304', true );
    
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.js', array(), '20160304', true );
    
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation-sites/dist/foundation.js', array('jquery'), '20160304', true );
    
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery', 'foundation'), '20160304', true );
	
    wp_enqueue_script( 'comment-reply' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ti_wp_foundation_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
