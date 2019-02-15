<?php
/**
 * Template Name: Landing Page
 *
 * Dual column page template. The left side image is the post's featured image.
 * Uses Bootstrap's 4 flexbox utilities.
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
?>

<?php /* echo $featured_image; */ ?>
<div class="jumbotron" style="background: url(<?php echo $featured_image; ?>) center no-repeat; background-size: cover;">
  <div class="jumbotron-text" id="content">
    <h3>21st Century</h3>
    <h1>Police Reform</h1>
  </div>
</div>

<div class="container-fluid">
  <div class="wrapper" id="wrapper-hero">   
    <div class="container landing-content" >
      <?php 
      echo $page_content; ?>
    </div>

    <?php get_template_part( 'page-templates/landing-chapters-page' ); ?>

  </div>
</div>

<?php get_template_part( 'page-templates/footer-page' ); ?>

</body>

</html>