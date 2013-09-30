<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Symbol
 * @since Symbol 1.0
 */
global $theme_options;
$themename = get_option( 'stylesheet' );
$themename = preg_replace("/\W/", "_", strtolower($themename) );
$theme_options = get_option ($themename);
?>

	
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				
				<?php if ($theme_options['footer_text']): ?>
					<?php echo $theme_options['footer_text'] ?>
				<?php else: ?>
					Theme by <a href="http://themeskult.com">Themes Kult</a>
				<?php endif ?>

			</div><!-- .site-info -->
		</footer><!-- #colophon .site-footer -->
	
</div><!-- #page .hfeed .site -->
<!-- .snap-content -->

<?php get_sidebar() ?>
<?php wp_footer(); ?>

</body>
</html>