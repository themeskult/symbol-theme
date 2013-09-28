<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Symbol
 * @since Symbol 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( 'by', true, 'right' ); bloginfo( 'name' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" >


<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php
	global $theme_options; 

	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$options = get_option ( $themename );
	wp_head();
?>

<style>
article blockquote, 
article .entry-content a:hover,
article a:hover,
.wrap nav a:hover, body
{border-color: <?php echo $color ?> !important;}

article h1 a:hover { color: <?php echo $color ?> !important}

nav.pagination a:hover,
#respond #submit, ::selection
{background-color: <?php echo $color ?>;}

<?php if($color): ?>
	header.site-header h1.site-title a{background-color: <?php echo $color ?> !important;}
<?php endif; ?>

<?php if (get_header_image()): ?>
	header.site-header h1.site-title a{background-image: url(<?php echo get_header_image() ?> )  !important;}
<?php endif ?>

<?php if (get_option('header_image')): ?>
	header.site-header h1.site-title a{background-image: url(http://the-notepad.s3-website-us-east-1.amazonaws.com/header_images/<?php echo get_option('header_image') ?> )  !important;}
<?php endif ?>
</style>

</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>

	

	<header id="masthead" class="site-header" role="banner">

		<hgroup>
			<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</hgroup>



		<nav role="navigation" class="site-navigation main-navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- .site-navigation .main-navigation -->
	</header><!-- #masthead .site-header -->
	
	
<div id="page" class="snap-content">
	
	<a id="myToggleButton" class="btn btn-sidebar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

