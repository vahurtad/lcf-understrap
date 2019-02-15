<?php
/**
 * Template Name: Landing Chapters Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * EDIT : VANESSA HURTADO
 * @package understrap
 */

global $wp_query;
$id           = $wp_query->post->ID;
$page_content = get_post($id);
$page_content = apply_filters('the_content', $post->post_content);
$the_theme    = wp_get_theme();
get_header();


if ((have_posts())) {
    while ((have_posts())) {
        the_post();
        if (has_post_thumbnail($post->ID)) {
            $featured_image = get_the_post_thumbnail_url(get_the_id(), 'full');

        }
    }
}
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
          <?php
              $chaptersAll = array();
              $recent_posts = wp_get_recent_posts();
              foreach( $recent_posts as $recent ){
                $chaptersAll[] = $recent['ID'];
              }
              wp_reset_query();
          ?>

          <div role="grid">
            <ul role="presentation">
              <div class="row">

               <?php
                foreach( $chaptersAll as $postID) {
                  $text = apply_filters('the_excerpt', get_post_field('post_excerpt', $postID));
                  if(empty($text)) { $text = 'Test';}
                  $content = apply_filters('the_content', get_post_field('post_content', $recent["ID"]));
                  echo '<div class="col-md-6"> <div class="row"> <div class="align-self-center p-2"> <span role="gridcell">';
                  echo '<a href="'. get_permalink($postID) .'" class="btn first odd">'; 
                  echo '<div class="chapter-titles">';
                  echo '<h5>'. get_the_title($postID).'</h5>';
                  echo '<p>'. $text.'</p> </div>' .'</a>';
                  echo '</span></div></div></div>';
                }
              ?>
                <div class="col-md-6">
                  <div class="row">
                    <div class="align-self-center p-2">
                      <span role="gridcell">
                        <a href="https://loremipsum.io/" class="btn first odd">
                          <div class="chapter-titles">
                            <h5>Download</h5><p>Executive Summary</p>
                          </div>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="row">
                    <div class="align-self-center p-2">
                      <span role="gridcell">
                        <a href="https://loremipsum.io/" class="btn first odd">
                          <div class="chapter-titles">
                            <h5>Download</h5><p>Full Handbook</p>
                          </div>
                        </a>
                      </span>
                    </div>
                  </div>
                </div>
               
              </div>
            </ul>
            <a href="<?php get_site_url(); ?>/wp-login.php">Log in</a>

          </div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->