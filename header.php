<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Just+Another+Hand&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
	  <div class="top-header">
	   <div class="container">
		 <div class="row align-items-center">
			<div class="col-lg-5 col-md-6">
				<div class="mobile-holder-logo">
				  <a href="/">
				    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
				  </a>
				</div>
			</div>
			<div class="col-lg-7 col-md-6">
			  <div class="top-header-contact">
				   <a href="tel: +2348121069256"><i class="fa fa-phone"></i>+234 812 106 9256</a>
					 <a class="top-header-contact-email" href="mailto:chinomsojohnson@gmail.com"><i class="fa fa-envelope-o"></i>chinomsojohnson@gmail.com</a>
					 <div class="mobile-menu-dropdown">
				 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					  <span>Menu</span>  <i class="fa fa-bars"></i>
				</button>
			 </div>
				</div>
			</div>
		 </div>
	   </div>
	  </div>
		<nav id="main-nav" class="navbar navbar-expand-xl navbar-dark" aria-labelledby="main-nav-label">
			<div class="container">

			 <div class="search-input-holder">
						<div class="title">Quote: </div>
						<input type="text" id="header-product-autocomplete-input" placeholder="Type your suburb here" onKeyUp="singleProductKeyUp(this)">
						<ul id="header-product-autocomplete-list">

						</ul>
			 </div>
			 <div class="mobile-menu-dropdown">
				 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					  <span>Menu</span>  <i class="fa fa-bars"></i>
				</button>
			 </div>
				<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>-->

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->


	<div id="quick-select-bin">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
            <div class="steps">
							 <div class="step one active">
							   <div class="title">
									 <div class="title-icon">
									   <i class="fa fa-arrow-circle-up"></i>
									 </div>
			             	Step 1: <strong>Suburb Selected, Bunbury</strong>
				        </div>
				        <div class="icon">
                   <i class="fa fa-check-circle"></i>
				        </div>
							 </div>
							 <div class="step two">
							    <div class="title">
									  <div class="title-icon">
									   <i class="fa fa-arrow-circle-down"></i>
									  </div>
			   	          Step 1: Suburb Selected, Bunbury
				         </div>
							 </div>
						</div>
				</div>
				<div class="offset-lg-1 col-lg-4">
				      <div class="price-info">
			           All prices below reflect the price you will pay to hire a skip bin from West Coast waste for 7 days, delivered to your door.
		          </div>
				</div>
			</div>
		</div>
	</div>