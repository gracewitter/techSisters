<?php
/**
 * Template Name: Front Page
 *
 * The template for displaying the front page
 *
 * @package WordPress
 * @subpackage twentynineteen
 * @since twentynineteen 2.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container-fluid front-page">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
