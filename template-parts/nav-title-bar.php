<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>

<div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title"><?php _e( 'Menu', 'ti-wp-foundation-theme' ); ?></div>
</div>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left show-for-<?php echo $breakpoint ?>">
		<ul class="menu">
			<li>
    		    <a href="<?php echo site_url(); ?>">
			        <img id="site-logo" 
        				src="<?php echo get_template_directory_uri(); ?>/img/logo/tunapanda-header-logo.png"
        				alt="Tunapanda Logo"
        				height="80"
        				width="113" />
		        </a>
    		</li>
		</ul>
	</div>
	<div class="top-bar-right">
		<?php ti_wp_foundation_theme_top_nav(); ?>
	</div>
</div>