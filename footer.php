<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TI-wp-foundation-theme
 */

?>

					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php ti_wp_foundation_theme_footer_links(); ?>
		    					</nav>
		    				</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
		<div class="row">
            <div class="small-12 medium-4 medium-push-4 columns">
                <?php echo do_shortcode( '[mdc_theme_switcher]' );?>
            </div>
        </div>
	</body>
</html> <!-- end page -->