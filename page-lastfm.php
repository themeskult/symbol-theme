<?php
/**
 * Template Name: Last.fm
 */

get_header(); ?>

<div>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>
<?php 
$username = $options['lastfm_username'];
$scrobbler_url = "http://ws.audioscrobbler.com/2.0/user/" . $username . "/recenttracks";
 
if ($scrobbler_xml = file_get_contents($scrobbler_url)):
    $scrobbler_data = simplexml_load_string($scrobbler_xml); 
?>

<div class="center-content">
    <ul class="last-fm-tracks ">
    	<?php foreach ($scrobbler_data->track as $track): ?>
        	<li>
        		<span class="track-date">
        			<?php if ($track->date): ?>
    	    			Played on <?php echo $track->date ?>
    	    		<?php else: ?>
    	    			<i>Playing now...</i>
        			<?php endif ?>
        		</span>
        		<span class="track-album">
        			<?php if (!empty($track->image[2])): ?>
        				<img class="cover" src="<?php echo $track->image[2] ?>" />
        			<?php else: ?>
        				<i class="cover">No Image</i>
        			<?php endif ?>
        		</span>
        		<div class="track">
        			<span class="track-name"><?php echo $track->name ?></span>
        			<span class="space">–</span>
    	    		<span class="track-artist"><?php echo $track->artist ?></span>
        		</div>

        	</li>
    	<?php endforeach ?>    
    </ul>

</div>
        
<?php endif; ?>
</div>
<?php get_footer() ?>