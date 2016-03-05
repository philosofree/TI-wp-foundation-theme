<?php
/**
 * TI-wp-foundation-theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TI-wp-foundation-theme
 */

// Theme setup options
require_once( get_template_directory() . '/template-parts/functions/theme-setup.php' ); 

// WP Head and other cleanup functions
require_once( get_template_directory() . '/template-parts/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once( get_template_directory() . '/template-parts/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once( get_template_directory() . '/template-parts/functions/menu.php'); 
 
// Register sidebars/widget areas
require_once( get_template_directory() . '/template-parts/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once( get_template_directory() . '/template-parts/functions/comments.php');


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
