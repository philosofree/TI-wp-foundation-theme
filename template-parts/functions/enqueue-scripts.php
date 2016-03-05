<?php
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
?>