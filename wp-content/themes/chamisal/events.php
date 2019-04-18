<?php
/**
 * 
 *   Template Name: Event Template
 *   Template Post Type: eventscustom
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Chamisal_Custom
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
    </div><!-- #primary -->
    
    <section id="footer-outro">
            <div class="about-us">
                <div class="about-us-content">

                    <span class="overflow-container">
                        <h2 class="main-subtitle-visit-us overflow-inner"> 
                            <?php echo $club_section_02['subtitle'];?>
                        </h2>
                    </span>

                    <span class="overflow-container">
                        <h1 class="main-title overflow-inner delay1">
                            <?php echo $club_section_02['title'];?>
                        </h1>
                    </span>

                    <span class="overflow-container overflow-button-center">
                        <a class="overflow-inner delay2 video-button outro-button-no-margin" href="<?php echo $club_section_02['button_link'];?>">
                            <?php echo $club_section_02['button_text'];?>
                        </a>
                    </span>
                    <!-- Mail Trigger 5 -->
                    <div id="trigger5" class="spacer s0"></div>
                </div>

                <img data-src="/wp-content/uploads/2018/06/mini-club-background.png" alt="club-about" />
            </div>

        </section>

<?php
get_sidebar();
get_footer();
