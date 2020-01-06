<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			
		
<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>


				<p class="copy">
        Copyright 2019 Tech Sisters
        </p>

</div>
	</footer><!-- #colophon --> 

</div><!-- #page -->

<?php wp_footer(); ?>



</body>

</html>
