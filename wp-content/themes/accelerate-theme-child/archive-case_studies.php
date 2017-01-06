<?php
/**
 * The template for displaying the case studies archive
 *
 * This is the template that displays all pages by default.
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
	<div id="content" role="main">
	<?php query_posts('posts_per_page=3&post_type=case_studies&order=ASC'); ?>
	<?php while ( have_posts() ) : the_post();
			$image_1 = get_field('image_1');
			$size = "small";
			$services = get_field('services'); 
	?>

		<article class="archive-case-study">
			<aside class="archive-case-study-sidebar">
				<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
				<h5><?php echo $services; ?></h5>

				<?php the_excerpt(); ?>
	
				<h6><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></h6>
			</aside>

			<div class="archive-case-study-images">
					<?php if ($image_1) { 
						echo wp_get_attachment_image( $image_1, $size ); 
					} ?>
			</div>
		</article>
	<?php endwhile; // end of the loop. ?>

	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>