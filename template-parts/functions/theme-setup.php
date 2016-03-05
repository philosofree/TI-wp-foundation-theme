<?php
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
        
        // Default thumbnail size
    	set_post_thumbnail_size(125, 125, true);
    
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
    		'default-color' => 'f8f8f8',
    		'default-image' => '',
    	) ) );
    	
    	add_post_type_support( 'page', 'excerpt'       );
        add_post_type_support( 'page', 'custom-fields' );
        
        // Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
    	if ( ! isset( $content_width ) ) {
    		$content_width = 1200; // Default Foundation width
    	}
    }
endif;