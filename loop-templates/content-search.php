<?php
/**
 * Search results partial template.
 * EDIT : VANESSA HURTADO
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>



	</header><!-- .entry-header -->

	<div class="entry-summary">
    <?php 
    // https://wordpress.stackexchange.com/questions/16070/how-to-highlight-search-terms-without-plugin
    $title = get_the_title();
    $keys = implode('|', explode(' ', get_search_query()));
    $title = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $title);

    echo $title;

    $content = get_the_content();
    $keys = implode('|', explode(' ', get_search_query()));
    $content = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $content);

    echo '<p>' . $content . '</p>';

  
    ?>

   

	</div><!-- .entry-summary -->



</article><!-- #post-## -->
