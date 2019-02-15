<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * EDIT : VANESSA HURTADO
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$container = get_theme_mod( 'understrap_container_type' );
?>



<section class="no-results not-found">

  <header class="page-header">

    <h1 class="page-title">
      <?php esc_html_e( 'Nothing Found', 'understrap' ); ?>
    </h1>

  </header><!-- .page-header -->

  <div class="page-content">

    <p>
      <?php 
      esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'understrap' ); 
      ?>
    </p>


  </div><!-- .page-content -->

</section><!-- section -->

			