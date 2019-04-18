<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chamisal_Custom
 */

?>

	</main><!-- #content -->

	<footer id="colophon" class="site-footer">

		<?php get_template_part('template-parts/case-study','social-footer'); ?>


	</footer><!-- #colophon -->


	<div id="ageGate" class="">
	<div id="overlay-content" class="age-gate-content animated animatedFadeInUp fadeInUp">
		<div class="border"></div>
			<img class="agegate-logo" src="/wp-content/uploads/2018/06/agegate_logo.png" alt="agegate logo">
			<p><span class="small-text">We have to ask,</span><br> <span class="over-21-question">are you of age?</span></p>
			<div class="button-wrapper">
				<a id="over21" class="button agegate">Yes, Enter The Shop</a>
				<a id="under21" class="button agegate">No, I am Not</a>
			</div>
			
		
	</div>

		
	</div> <!-- age Gate -->




</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
