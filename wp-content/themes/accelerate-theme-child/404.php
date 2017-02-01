<?php
/**
 * The template for displaying the infamou 404 page
 *
 * This is the template that displays the 404 page by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main" class="contact-page">
			<div class="error404">
				<h2>Lost and alone on some forgotten highway?</h2>
				<img class="lost-pic" src="<?php echo get_stylesheet_directory_uri(); ?>/img/lost.jpg"/>
				<div class="james">
				<a href="http://www.localhost:8888/accelerate/"> Take Me Home, James...</a>
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>