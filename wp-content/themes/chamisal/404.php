<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Chamisal_Custom
 */

get_header(); ?>
	<div class="hide-mail"></div>
	<div id="trigger-homepage"></div>
	<div id="trigger5"></div>

	<div id="primary" class="content-area error__bg content4">
		<main id="main">

			<?php get_template_part('template-parts/golden-lines','id-error');?>


			<section class="error-404 not-found">
				<div class=" error__container">
					<!-- <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'chamisal' ); ?></h1> -->
					<h1 class="error__subtitle">page not found</h1>
					<h2 class="error__title">Wrong Turn?</h2>
					<!-- <p class="error__text"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search? Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam enim nisi, fringilla in odio sed, iaculis porta nisi. Nunc fermentum arcu eu tortor ornare commodo. ', 'chamisal' ); ?></p> -->
					<a class="video-button" href="/">GO BACK HOME</a>
					
</div><!-- .page-header -->

			<?php get_template_part('template-parts/golden-lines','id-error-left');?>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
