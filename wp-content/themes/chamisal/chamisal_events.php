<?php
/**
 * The template for displaying all single posts
 * Template Name: Chamisal Events Page
 * Template Post Type: chamisal_events
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main"   role="main">

		<?php
		while ( have_posts() ) : the_post();

			the_content();
		endwhile; // End of the loop.
		?>

		<h4 class="event-schedule-time"><?php the_field('event_date'); ?></h4>
		<div class="add-details-container"><?php the_field('additional_event_details'); ?></div>
		

		<div class="social-container">
			<p>Share</p>
			<ul>
				<li class="social-share facebook"><img src="/wp-content/uploads/2018/11/facebook-tan.svg" alt="Share Page on Facebook" /></li>
				<li class="social-share twitter"><img src="/wp-content/uploads/2018/11/twitter-tan.svg" alt="Share Page on Twitter" /></li>
			</ul>

		</div>
		
		<div class="blog-nav">
			<?php
				the_post_navigation( array(
		            'prev_text'                  => __( '%title' ),
		            'next_text'                  => __( '%title' ),
		            'screen_reader_text' => ' ',
	        	) );

			?>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

	
<?php

get_footer('blog');
