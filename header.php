<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * 
 * EDIT : VANESSA HURTADO
 * 
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">
<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content">
      <?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <?php if ( 'container' == $container ) : ?>
			<div class="container">
        
        <div class='row navbar-row'>
          <div id="col-sm-5-navbar" class="col-sm-5">
            <?php the_custom_logo();?>
          </div>
          <div id="col-sm-7-navbar" class="col-sm-7">
            
            <div class='navbar-menu'>
              <div class='navbar-search'>
              <form id="nav-search-form" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <input title="Search" 
                  type="text" 
                  aria-label="Search"
                  class="search-field"
                  value='Search for topics...' 
                  name="s" id="search-field"
                  onfocus="if (this.value=='Search for topics...') this.value='';"
                  title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" >
                <button type="submit" class="search-button" aria-label="search-button">
                    <i class="fa fa-search" ></i>
                </button>	
              </form>
              
            </div>
            <!-- The WordPress Menu goes here -->
            <?php wp_nav_menu(
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
              ); ?>

          </div>
        </div>
		<?php endif; ?>

	
      </div>
      
      <?php if ( 'container' == $container ) : ?>
    </div><!-- .container -->
    <?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
