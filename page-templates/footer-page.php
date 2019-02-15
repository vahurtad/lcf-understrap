<?php
/**
 * Template Name: Footer Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * EDIT : VANESSA HURTADO
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

  <!--          our footer info and copyright-->
<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

    <div class="row">

      <div class="col-md-12">

        <footer class="site-footer" id="colophon">

          <div class="footer-links">

            <h5>THE LEADERSHIP CONFERENCE ON CIVIL HUMAN RIGHTS</h5>
            <h6>1620 L Street NW. Suite 1100. Washington. DC 20026 | Phone (202) 466-3311</h6>
            <!-- Privacy and Security Policy: https://civilrights.org/privacy-policy/
                Terms & Conditions: https://civilrights.org/terms-conditions/
                Disclaimer: https://civilrights.org/about-us/disclaimer/
                Contact Us: https://civilrights.org/contact-us/
                Home: https://civilrights.org/
            -->
            <h6>
              <a href="https://civilrights.org/privacy-policy/">Privacy and Security Policy</a> | 
              <a href=" https://civilrights.org/terms-conditions/">Terms & Conditions</a> | 
              <a href="https://civilrights.org/about-us/disclaimer/">Disclaimer</a> | 
              <a href="https://civilrights.org/contact-us/">Contact Us</a> | 
              <a href="https://civilrights.org/">Home</a>
            </h6>
            <h6>The Policing Campaign is a project lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </h6>

            <h6>© 2018 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h6>

          </div><!-- .site-info -->

        </footer><!-- #colophon -->

      </div><!--col end -->

    </div><!-- .row end -->

  </div><!-- #content -->

  <?php wp_footer(); ?>

</div><!-- #full-width-page-wrapper -->
