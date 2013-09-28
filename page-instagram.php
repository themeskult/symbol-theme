<?php
/**
 * Template Name: Instagram
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

		<!-- http://instagram.com/developer/authentication/ -->

		<div class="instagram-list center-content">
			<?php
				// Supply a user id and an access token
				$userid = get_option('instagram_user_id');
				$accessToken = get_option('instagram_access_token');

				// Gets our data
				function fetchData($url){
				     $ch = curl_init();
				     curl_setopt($ch, CURLOPT_URL, $url);
				     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
				     $result = curl_exec($ch);
				     curl_close($ch); 
				     return $result;
				}

				// Pulls and parses data.
				$result = fetchData("https://api.instagram.com/v1/users/".$userid."/media/recent/?access_token=" . $accessToken);
				$result = json_decode($result);
			?>


			<?php foreach ($result->data as $post): ?>
				<!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->
				<a class="insta-pic" target="_blank"  href="<?php echo $post->link ?>"><img src="<?php echo $post->images->low_resolution->url ?>" /></a>
			<?php endforeach ?>
		</div>

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_footer(); ?>