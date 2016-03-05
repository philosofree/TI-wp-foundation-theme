<?php
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
	register_sidebar(array(
		'id'            => 'offcanvas',
		'name'          => __('Offcanvas', 'ti-wp-foundation-theme'),
		'description'   => __('The offcanvas sidebar.', 'ti-wp-foundation-theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
	) );
}
?>