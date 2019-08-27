<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		
		<div class="entry-meta">
			<p>
				Published on:
				<?php the_date(); ?> by <?php the_author(); ?>
			</p>
			
		</div><!-- .entry-meta -->
	</header>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<p>
			Posted in <?php the_category(); ?>
		</p>
		<p>
			<?php the_tags(); ?>
		</p>
	</footer><!-- .entry-footer -->

	

</article><!-- #post-${ID} -->
