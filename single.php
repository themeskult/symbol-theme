<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Symbol
 * @since Symbol 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<header id="begin">
	    <time datetime="<?php echo date('Y-m-d'); ?>" class="center-content" id="top_time"><?php the_time('F d, Y'); ?></time>
	</header>
	
	<?php get_template_part( 'content', 'single' ); ?>


	<?php
		// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() )
			comments_template( '', true );
	?>

	<?php symbol_content_nav( 'nav-below' ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>