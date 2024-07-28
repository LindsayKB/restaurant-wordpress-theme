<?php
/**
 * Theme: Flat Bootstrap
 * 
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package flat-bootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale = 1.0,maximum-scale=1.0" /> 
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
	
require_once("copper-blues-methods.php");
	
$locationName = getLocation();
	
$websiteUrl = get_home_url() . "/" . $locationName;
	
?>
<div id="page" class="hfeed site">

	<?php do_action( 'before' ); ?>
	
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
			<div class="col-md-3 logo-parent">
				<a href="<?php echo $websiteUrl ?>">
		 			<img src="/wp-content/uploads/2024/07/cb-logo-transparent-bg.png">
				</a>
	 		</div>
	 		<div class="col-md-6 nav-parent">
		 	<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">Navbar</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars" aria-hidden="true"></i>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<?php wp_nav_menu( 
				   array( 
						'theme_location' => $locationName . '-menu', 
						'menu_id' => 'primary-menu', 
						'container_class'=> 'ms-auto ', 
						'menu_class'=>'navbar-nav' 
					) 
				); ?> 
			  </div>
			</nav><!-- #site-navigation -->
	 </div>
	 <div class="col-md-3 social-parent">
		 <?php dynamic_sidebar( $locationName . '-social-media' ); ?>
	 </div>
	</div>
	<div class="row mobile-social-icons">
		<div class="col-md-12">
			<?php dynamic_sidebar( $locationName . '-social-media' ); ?>
		</div>	
	</div>
		</div>

	</header><!-- #masthead -->

	<?php // Set up the content area (but don't put it in a container) ?>	
	<div id="content" class="site-content">
