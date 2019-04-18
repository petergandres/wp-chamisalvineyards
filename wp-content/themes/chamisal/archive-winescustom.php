<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * Template Name: Shop Archives
 * @package Chamisal_Custom
 * 
 */

get_header(); ?>

<!-- Main -->
<section>
        <div class="page-content-shop">

            <div class="main-jumbotron-shop">
                <h2 class="main-subtitle" id="shop-subtitle"> OUR PHILOSOPHY</h2>
                <h1 class="main-title" id="shop-title">chamisal wines</h1>
                <p class="main-subtitle-visit" id="shop-text">At Chamisal our winemaking philosophy encompasses an approach that is all about highlighting the natural characteristics of th
                e terroir in the wines. From mindful work in the vineyard to the careful handcrafting of wines, our style is about allowing each varietal to shine.</p>
            </div>

        </div>


        <!-- NavbarTrigger to fadeOut -->
        <div id="navbar-trigger" class="spacer s0"></div>

    </section>


<!-- Content1 -->
    <section>

        <!-- ImFeelingLikeSection -->

        <div class="tasting-row" id="tasting-row-row">
        <?php echo do_shortcode('[searchandfilter fields="category,post_tag"]'); ?>

                <h2 id="feeling-like-title"> I'M FEELING...</h2>
            <select name="wines" id="select3" class="dropdown">
                <option value="Chardonnay"> crispy & fruity</option>
                <option value="Merlot">merlot</option>
            </select>

        </div>
        



        <!-- Call to Action -->

        <div class="section-title-container">

                    <div id="cta_v2" class="sticky-call-to-action">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 158.62 186.5"><defs>
                            <style>.cta{fill:#fcfbf7;stroke-miterlimit:10;stroke-width:3px;stroke:url(#cta_gradient);}.cta_text{font-family: 'Brandon Grotesque'; font-weight: 600; letter-spacing: 1.9px}</style>
                            
                            <linearGradient id="cta_gradient" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#a17043">
                                    <animate attributeName="stop-color" values="#a17043; #f5cc82; #deaf71; #a17043 " dur="6s" repeatCount="indefinite"></animate>                                
                                 </stop>
                                <stop offset="50%" stop-color="#deaf71">
                                <animate attributeName="stop-color" values="#deaf71; #a17043; #f5cc82;#deaf71;  " dur="6s" repeatCount="indefinite"></animate>                                
                                </stop>
                           </linearGradient>
                                
                           <filter id="shadow" x="-30%" y="-10%" width="300%" height="300%">
                                <feDropShadow  stdDeviation="4" flood-color="#9f9f9f" flood-opacity="1" />
                            </filter>
                            </defs><title>c2a_v2</title>

                            <path filter="url(#shadow)"class="cta" d="M157.14,149.29a87.54,87.54,0,0,1-65.82,29.82h0A87.55,87.55,0,0,1,15.5,135.33h0a87.55,87.55,0,0,1,0-87.55h0A87.55,87.55,0,0,1,91.32,4h0a87.52,87.52,0,0,1,66.16,30.21"/>
                            <text x="90" y="85" text-anchor="middle" fill="#A46737" class="cta_text" id="cta_gradient" font-size="15">SHIPPING</text>
                            <text x="90" y="110" text-anchor="middle" fill="#A46737" class="cta_text"font-size="15">DETAILS</text>

                        </svg>
                    </div>
        </div>


        <!-- NavbarTrigger to fadeIn -->
        <div id="navbar-trigger-in" class="spacer s0"></div>
    </section>



<!-- Content Labels -->

    <section>


<div class="container">
    <div class="row"  id="label-col">
        <div class="col-md-3" style="padding: 20px 20px 30px 20px; border-right: 1.6px solid #d4d0c3;">
            <div class="label-title"> small lot </div>
            <div class="label-subtitle"> Our most exclusive wines showcasing unique areas of clones.</div>
        </div>
        <div class="col-md-3" style="padding:20px 20px 30px 20px; border-right: 1.6px solid #d4d0c3;">
            <div class="label-title"> califa</div>
            <div class="label-subtitle"> Meaning "prettiest one", representing the best barrels of a vintage.</div>
        </div>
        <div class="col-md-3" style="padding:20px 20px 30px 20px; border-right: 1.6px solid #d4d0c3;">
            <div class="label-title"> estate</div>
            <div class="label-subtitle"> Wines expressing the distictive "Chamisal Spice" of our Edna Valley vineyard.</div>
        </div>
        <div class="col-md-3"  style="padding:20px 20px 30px 20px;">
            <div class="label-title"> stainless</div>
            <div class="label-subtitle"> Produced without oak, allowing pure varietal characteristics to shine.</div>
        </div>
    </div>
</div>

</section>

    <div class="row">
		<?php
		if ( have_posts() ) : ?>



			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-wines', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-wines', 'none' );

		endif; ?>

		</main><!-- #main -->
    </div><!-- #primary -->
    
    </div>
	

<?php
get_footer();
