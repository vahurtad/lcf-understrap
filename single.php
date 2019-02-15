<?php
/**
 * The template for displaying all single posts.
 * EDIT : VANESSA HURTADO
 * 
 * @package understrap
 */

global $wp_query;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
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
?>

<div class="jumbotron" style="background: url(<?php echo $featured_image; ?>) center no-repeat; background-size: cover;"></div>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

        <div class="row">
          <div id="sidebar" class="col-sm-5">
            <? the_title('<h5>', '</h5>'); ?>
          </div>
          <div class="col-sm-7">
            <div class="entry-content">
              <?php echo $page_content;  ?>
            </div>
          </div>
        </div>
			</main><!-- #main -->


		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_template_part( 'page-templates/footer-page' ); ?>