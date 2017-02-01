<?php
		/**
		* Template name: About
		 */
/**
 * The template for displaying the About page
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

<section class="about-page">
		<div class="site-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><span>Accelerate</span> is a strategy and marketing agency<br> located in the heart of NYC. Our goal is to build<br> businesses by making our clients visible and<br> making their customers smile.</h2>
				<?php the_content(); ?>
		
		</div><!-- .container -->
	<?php endwhile; // end of the loop. ?>
</section><!-- .about-page -->


<section class="middle">
	<div class="title">
		<h3 class="middle-title">Our Services</h3>
		<p class="middle-paragraph">We take pride in our clients and the content we create for them.</p> <br> 
		<p>Here’s a brief overview of our offered services.</p>
</div>
</section>

<section class="service-posts">
	<div class="site-content">
			<?php query_posts('posts_per_page=5&post_type=services'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content ();  
					$service = get_field('service');
					$description = get_field('description');
					$image_1 = get_field('image_1'); 
					$size = "medium";?>

		<?php if ($wp_query->current_post % 2 == 0): ?>
			<div class="services">	
				<div class="icon">
					<figure>
						<?php echo wp_get_attachment_image( $image_1, $size ); ?> 
					</figure>
				</div>
				<div class="description">
                	<h2><?php echo $service; ?></h2>
                    <p><?php echo $description; ?></p>          
            	</div>
        	</div>
    	<?php else: ?>
        	<div class="services-odd">
                <div class="description">
                    <h2><?php echo $service; ?></h2>
                    <p><?php echo $description; ?></p>
                </div>
                <div class="icon">
                    <figure>
                        <?php echo wp_get_attachment_image($image_1, $size); ?>
                    </figure>
                </div>
         	 </div>
		
			<?php endif; ?>
			<?php endwhile; // end of the loop. ?>
			<div class="contact-button">
				<h2>Interested in working with us?</h2>
				<h3>Contact Us</h3>
			</div>
	</div><!-- #content -->
</section>
<?php get_footer(); ?>




