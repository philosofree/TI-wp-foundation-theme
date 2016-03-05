<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu" id="logo-container">
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
	<div class="top-bar-right show-for-medium">
		<?php ti_wp_foundation_theme_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'ti-wp-foundation-theme' ); ?></a></li>
		</ul>
	</div>
</div>