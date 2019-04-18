<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 
 
* Template Name: Events Archives
 * @package Chamisal_Custom
 */

get_header(); ?>


<!-- Main -->
<section>

		<div class="page-content-events" id="trigger-homepage">

			<div class="hero-container">
				<span class="overflow-container"> 
					<h2 class="overflow-inner"  id="hero-subtitle">our social calendar</h2>
				</span>
				<br>
				<span class="overflow-container" >
					<h1 class="overflow-inner delay1" id="hero-title">winery events</h1>
				</span>
				<span class="overflow-container" >
					<p class="overflow-inner delay2" id="hero-text"> With a perfect trifecta of gorgeous scenery, weather, and wine. Chamisal </p>
				</span>
				<span class="overflow-container" >
					<p class="overflow-inner delay2" id="hero-text"> Vineyards is a spetacular place for events year-round. Join us for summer</p>
				</span>
				<span class="overflow-container" >
					<p class="overflow-inner delay2" id="hero-text"> Lobsterfest, harvest lunches, holiday soirees, or your own private celebration.</p>
				</span>

			</div>


		</div>

		<!-- GoldenLines -->
		<svg class=events-golden-line data-name="Layer 1"id=golden-lines1 viewBox="0 0 642.89 544.86"xmlns=http://www.w3.org/2000/svg><defs><style>.golden-lines1{fill:none;stroke:"url('#logo-gradient')";stroke-linecap:round;stroke-linejoin:round;stroke-width:3px}</style><linearGradient id=logo-gradient><stop offset=0% stop-color=#a17043><animate attributeName=stop-color dur=6s repeatCount=indefinite values="#a17043; #f5cc82; #deaf71; #a17043"></animate></stop><stop offset=80% stop-color=#deaf71></stop></linearGradient></defs><title>golden-lines1</title><path class=golden-lines1 d=M764.35,362.6c-18.9,2.3-37.84-2.65-56.24-7.55l-15-4c-10.54-2.8-21.4-5.77-30-12.52-7.51-5.91-12.66-14.28-17.21-22.69-6.43-11.88-12.55-15.32-16.68-28.18C626,277.62,613,271.26,606.62,267c-8.72-5.82-12.63-11.43-17.24-20.84s-3.65-21.88,3.83-29.22c12.35-12.08,8.46-16.32,12.59-30.35,8.6-29.26,56.25-40.12,83.11-25.67 stroke="url('#logo-gradient')"/><path class=golden-lines1 d=M688.56,104c-18.22-1.75-36.57-3.49-54.77-1.62s-36.45,7.64-50.48,19.39c-19.5,16.33-28.51,41.85-44.54,61.6-14,17.25-33.15,29.83-46.65,47.46a97.94,97.94,0,0,0-16.62,33.4c-3.88,14.06-4.1,30.48,5.1,41.81,10.46,12.89,29,14.9,45.49,16.58,34.43,3.49,69.5,10.09,98.94,28.28,5.86,3.62,11.48,7.69,17.7,10.68s13.12,4.9,19.89,6.73q44.29,11.94,88.83,22.92 stroke="url('#logo-gradient')"/><path class=golden-lines1 d=M657,70.16l-61,17.32c-9.48,2.69-19,5.4-28,9.65-34.22,16.27-55.26,52.4-84,77.73-13.48,11.86-28.81,21.45-41.24,34.52-9.84,10.34-17.61,22.61-26.66,33.72a173.91,173.91,0,0,1-66,50c-13.86,5.94-28.6,10.06-41.16,18.58s-22.93,23-21.67,38.59c.3,3.77,1.34,7.62,3.71,10.48,3.42,4.13,8.92,5.52,14.07,6.4,17.5,3,35.34,2.72,53.06,2.45l50.51-.77c10.92-.17,21.91-.34,32.62-2.59,9.91-2.08,19.51-5.92,29.58-6.82,14.62-1.3,29,3.66,43.58,5.44,15.31,1.87,30.95.23,46.08,3.32,20.41,4.18,38.3,16.6,57.71,24.41,17.16,6.9,35.43,10.15,53.56,13.36l60.51,10.71 stroke="url('#logo-gradient')"/><path class=golden-lines1 d=M642.89,503C614.58,507.1,590.7,483.86,565,471.3c-41.84-20.45-93.14-12.15-134.06,10.07-17.3,9.39-33.36,21.12-51.44,28.9-33,14.23-70.16,14.31-106.12,14.16-30.49-.12-63-.85-88.24-18-35.24-24-47.19-74.28-85-94-16.68-8.67-36.26-10.06-53.48-17.6S13.78,369.06,19.6,351.18c3.17-9.74,11.8-16.52,20-22.68l101.18-76.19c20.4-15.36,25.94-30.85,49.3-41.18C257.4,181.36,344.28,195.39,397.91,145c18.65-17.54,45.71-40.93,62.29-60.43,42.92-50.47,114.29-70.31,180.19-63.44 stroke="url('#logo-gradient')"/><path class=golden-lines1 d=M714.32,451.68c-15-15.33-38.77-21.36-59.24-15-5.67,1.75-11.2,4.38-17.13,4.53-13,.32-22.84-10.87-33.63-18.1-20.09-13.45-45.9-13.73-70.08-13.54l-55.71.43c-11.24.08-22.61.18-33.51,2.94-29.21,7.38-50.11,14.61-73.56,33.54-15.55,12.56-32.87,14.19-51.28,21.95-18.23,7.69-40,12.58-57.15,2.8-8.59-4.88-23.64-12.84-30-20.36-18.13-21.26-25.63-44.87-41.61-67.77S137.9,336.69,141.72,309c4.46-32.38,51-59.13,79.77-74.61s61.57-21.53,93.73-27.37l36.86-6.7c14.13-2.56,28.65-5.28,40.77-13,20.23-12.86,30.95-37.85,52.29-48.76,7.91-4.05,16.88-5.91,24.4-10.65,17.35-11,23.09-34.62,40.09-46.13,7.47-5.06,16.45-7.29,24.77-10.8,9.89-4.18,18.9-10.23,28.79-14.42C587.5,46.29,615,48,641.32,49.82 stroke="url('#logo-gradient')"/></svg>
		<div id="trigger-call-to-action"></div>

	</section>


<!-- Content1 -->
<section class="content2">


			<div id="trigger-events"></div>

			<div class="events-content">
                    <span class="overflow-container">
                        <h2 class="main-subtitle overflow-inner"> stay in the know</h2>
                    </span>
                    <br>
                    <span class="overflow-container">
                        <h1 class="main-title overflow-inner delay1" id="vineyard-title">upcoming events</h1>
                    </span>
                    <span class="overflow-container">
                        <p class="overflow-inner delay2"id="vineyard-text">Tickets for most events are available to the public. For more information and</p>
                    </span>
                    
                    <span class="overflow-container">
                        <p class="overflow-inner delay2"id="vineyard-text">pricing, or to book a reservation, please call the tasting room at 805-541-9463</p>
                    </span>
                    <span class="overflow-container">
                        <p class="overflow-inner delay2"id="vineyard-text">or email events@chamisalvineyards.com</p>
                    </span>
                     
			</div>
			<div class=section-title-container><div class=sticky-call-to-action id=cta_v2><svg data-name="Layer 1"id=Layer_1 viewBox="0 0 158.62 186.5"xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink><defs><style>.cta{fill:#fcfbf7;stroke-miterlimit:10;stroke-width:3px;stroke:url(#cta_gradient)}.cta_text{font-family:'Brandon Grotesque';font-weight:600;letter-spacing:1.9px}</style><linearGradient gradientUnits=userSpaceOnUse id=cta_gradient><stop offset=0% stop-color=#a17043><animate attributeName=stop-color dur=6s repeatCount=indefinite values="#a17043; #f5cc82; #deaf71; #a17043 "></animate></stop><stop offset=50% stop-color=#deaf71><animate attributeName=stop-color dur=6s repeatCount=indefinite values="#deaf71; #a17043; #f5cc82;#deaf71;  "></animate></stop></linearGradient><filter height=300% id=shadow width=300% x=-30% y=-10%><feDropShadow flood-color=#9f9f9f flood-opacity=1 stdDeviation=4 /></filter></defs><title>c2a_v2</title><path class=cta d=M157.14,149.29a87.54,87.54,0,0,1-65.82,29.82h0A87.55,87.55,0,0,1,15.5,135.33h0a87.55,87.55,0,0,1,0-87.55h0A87.55,87.55,0,0,1,91.32,4h0a87.52,87.52,0,0,1,66.16,30.21 filter=url(#shadow) /><text class=cta_text fill=#A46737 font-size=15 text-anchor=middle x=90 y=75 id=cta_gradient>JOIN OUR</text><text class=cta_text fill=#A46737 font-size=15 text-anchor=middle x=90 y=100>MAILING</text><text class=cta_text fill=#A46737 font-size=15 text-anchor=middle x=90 y=125>LIST</text></svg></div></div>


</section>


<section class="content2">


		<div class="row">
				<?php
				$argsWine = array(
					'post_types' => 'eventfeature',
					'post_status' => 'publish',
					'posts_per_page' => -1
				);
				$queryWine = new WP_Query($argsWine);
				?>

				<?php if ( $queryWine->have_posts() ) : ?>
				<?php
				echo '<pre>'; print_r(get_field('post_objects'));
				echo '</pre>'
				?>
						<?php while ( $queryWine->have_posts() ) : $queryWine->the_post();
						get_template_part( 'template-parts/content-feature', get_post_format() );
						endwhile;
						the_posts_navigation();
						else :
						get_template_part( 'template-parts/content-feature', 'none' );endif; ?>


						</div>

</section>

<section >

		<div class="row">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', get_post_format() );
		endwhile;
		the_posts_navigation();
		else :
		get_template_part( 'template-parts/content', 'none' );endif; ?>
	</div>

</section>





	<section>
		<!-- GoldenLines -->
		<svg class=events-golden-line data-name="Layer 1"id=golden-lines1 viewBox="0 0 642.89 544.86"xmlns=http://www.w3.org/2000/svg><defs><style>.golden-lines1{fill:none;stroke:"url('#logo-gradient')";stroke-linecap:round;stroke-linejoin:round;stroke-width:3px}</style><linearGradient id=logo-gradient x1=50% x2=50% y1=0% y2=100%><stop offset=0% stop-color=#a17043><animate attributeName=stop-color dur=4s repeatCount=indefinite values="#a17043; #deaf71; #f5cc82; #deaf71; #a17043"></animate></stop><stop offset=100% stop-color=#a17043><animate attributeName=stop-color dur=4s repeatCount=indefinite values="#a17043; #deaf71; #f5cc82; #deaf71; #a17043"></animate></stop></linearGradient></defs><title>golden-lines1</title><path class=golden-lines1 d=M764.35,362.6c-18.9,2.3-37.84-2.65-56.24-7.55l-15-4c-10.54-2.8-21.4-5.77-30-12.52-7.51-5.91-12.66-14.28-17.21-22.69-6.43-11.88-12.55-15.32-16.68-28.18C626,277.62,613,271.26,606.62,267c-8.72-5.82-12.63-11.43-17.24-20.84s-3.65-21.88,3.83-29.22c12.35-12.08,8.46-16.32,12.59-30.35,8.6-29.26,56.25-40.12,83.11-25.67 stroke="url('#logo-gradient')"/><path class=golden-lines1 d=M688.56,104c-18.22-1.75-36.57-3.49-54.77-1.62s-36.45,7.64-50.48,19.39c-19.5,16.33-28.51,41.85-44.54,61.6-14,17.25-33.15,29.83-46.65,47.46a97.94,97.94,0,0,0-16.62,33.4c-3.88,14.06-4.1,30.48,5.1,41.81,10.46,12.89,29,14.9,45.49,16.58,34.43,3.49,69.5,10.09,98.94,28.28,5.86,3.62,11.48,7.69,17.7,10.68s13.12,4.9,19.89,6.73q44.29,11.94,88.83,22.92 stroke="url('#logo-gradient')"/><path class=golden-lines1 d=M657,70.16l-61,17.32c-9.48,2.69-19,5.4-28,9.65-34.22,16.27-55.26,52.4-84,77.73-13.48,11.86-28.81,21.45-41.24,34.52-9.84,10.34-17.61,22.61-26.66,33.72a173.91,173.91,0,0,1-66,50c-13.86,5.94-28.6,10.06-41.16,18.58s-22.93,23-21.67,38.59c.3,3.77,1.34,7.62,3.71,10.48,3.42,4.13,8.92,5.52,14.07,6.4,17.5,3,35.34,2.72,53.06,2.45l50.51-.77c10.92-.17,21.91-.34,32.62-2.59,9.91-2.08,19.51-5.92,29.58-6.82,14.62-1.3,29,3.66,43.58,5.44,15.31,1.87,30.95.23,46.08,3.32,20.41,4.18,38.3,16.6,57.71,24.41,17.16,6.9,35.43,10.15,53.56,13.36l60.51,10.71 stroke="url('#logo-gradient')"/><path class=golden-lines1 d=M642.89,503C614.58,507.1,590.7,483.86,565,471.3c-41.84-20.45-93.14-12.15-134.06,10.07-17.3,9.39-33.36,21.12-51.44,28.9-33,14.23-70.16,14.31-106.12,14.16-30.49-.12-63-.85-88.24-18-35.24-24-47.19-74.28-85-94-16.68-8.67-36.26-10.06-53.48-17.6S13.78,369.06,19.6,351.18c3.17-9.74,11.8-16.52,20-22.68l101.18-76.19c20.4-15.36,25.94-30.85,49.3-41.18C257.4,181.36,344.28,195.39,397.91,145c18.65-17.54,45.71-40.93,62.29-60.43,42.92-50.47,114.29-70.31,180.19-63.44 stroke="url('#logo-gradient')"/><path class=golden-lines1 d=M714.32,451.68c-15-15.33-38.77-21.36-59.24-15-5.67,1.75-11.2,4.38-17.13,4.53-13,.32-22.84-10.87-33.63-18.1-20.09-13.45-45.9-13.73-70.08-13.54l-55.71.43c-11.24.08-22.61.18-33.51,2.94-29.21,7.38-50.11,14.61-73.56,33.54-15.55,12.56-32.87,14.19-51.28,21.95-18.23,7.69-40,12.58-57.15,2.8-8.59-4.88-23.64-12.84-30-20.36-18.13-21.26-25.63-44.87-41.61-67.77S137.9,336.69,141.72,309c4.46-32.38,51-59.13,79.77-74.61s61.57-21.53,93.73-27.37l36.86-6.7c14.13-2.56,28.65-5.28,40.77-13,20.23-12.86,30.95-37.85,52.29-48.76,7.91-4.05,16.88-5.91,24.4-10.65,17.35-11,23.09-34.62,40.09-46.13,7.47-5.06,16.45-7.29,24.77-10.8,9.89-4.18,18.9-10.23,28.79-14.42C587.5,46.29,615,48,641.32,49.82 stroke="url('#logo-gradient')"/></svg>
	</section>

<!-- Content3 -->

<section class="content2">
    <div id="about-trigger"></div>

    <p id="section1footer"></p>

         <!-- AboutSection -->
         <div class="about-us-schedule-visit-events">
            <div class="about-us-content">
                <span class="overflow-container">
                    <h2 class="main-subtitle overflow-inner"> let's celebrate</h2>
                </span>
                <br>
                <span class="overflow-container">
                     <h1 class="main-title overflow-inner delay1" >private events</h1>
				</span>
				<span class="overflow-container">
					<p class="overflow-inner delay2" id="visit-us-text"> Chamisal Vineyard's scenic patio is an ideal place to gather with friends</p>
				</span>
				<span class="overflow-container">
					<p class="overflow-inner delay2" id="visit-us-text"> and family. The next time you are searching for a setting to celebrate the</p>
				</span>
				<span class="overflow-container">
					<p class="overflow-inner delay2" id="visit-us-text"> big or little things in life, contact us and we'll help create an </p>
				</span>
				<span class="overflow-container">
					<p class="overflow-inner delay2" id="visit-us-text"> unforgettable event. Contact us at <strong> 805.541.9463 </strong> or email</p>
				</span>
				</span>
				<span class="overflow-container">
					<p class="overflow-inner delay2" id="visit-us-text"> <strong>events@chamisalvineyards.com</strong></p>
				</span>
                <span class="overflow-container overflow-button-center">
                    <a class="overflow-inner delay2 video-button" href="/learn-more"> LEARN MORE </a>
                </span>
        
            <!-- Mail Trigger 5 -->
            <div id="trigger5" ></div>

            </div>
        </div>


</section>




</div>


<?php
get_footer();