<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TI-wp-foundation-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/tunapanda.ico" />
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57-precomposed.png" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72-precomposed.png" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114-precomposed.png" />
<meta name="application-name" content="Tunapanda Institute"/>
<meta name="msapplication-TileColor" content="#ffffff"/> 
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/icons/ms-icon-144x144.png"/>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link show-for-sr" href="#content"><?php esc_html_e( 'Skip to content', 'ti-wp-foundation-theme' ); ?></a>

	<header id="header" class="site-header" role="banner">
		<a href="<?php echo site_url(); ?>">
			<img id="site-logo" 
				src="<?php echo get_template_directory_uri(); ?>/img/logo/tunapanda-header-logo.png"
				alt="Tunapanda Logo"
				height="80"
				width="113" />
		</a>
		
        <?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<span class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></span>
			<?php
			endif; 
        ?>
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
