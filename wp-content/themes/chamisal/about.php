<?php
/*
Template Name: About Template
*/

get_header();

?>
<?php
$about_hero = get_field('about_hero');
if($about_hero): ?>
    <div id="page6">

        <!-- Main -->
        <section>
            <div class="page-content-about" id="trigger-homepage">

                <div class="hero-container about">
                    <span class="overflow-container">
                        <h2 class="overflow-inner hero-subtitle">
                            <?php echo $about_hero['subtitle'];?>
                        </h2>
                    </span>
                    <span class="overflow-container">
                        <h1 class="overflow-inner hero-title delay1">
                            <?php echo $about_hero['title'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">
                        <p class="overflow-inner hero-text delay2"> 
                            <?php echo $about_hero['text_field'];?>
                        </p>
                    </span>
                </div>
            </div>

        </section>
<?php endif; ?>
        <!-- GoldenLines -->
        <?php get_template_part('template-parts/golden-lines','id-5'); ?>

        

        <section class="interior-max-width">
            <!-- Content1 -->
            <section class="content2" style="display:none;">

                <div class="premiere-background-lines">

                    <!-- Visit Trigger 2 -->
                    <div id="trigger2"></div>
                    <div class="historic-content">
                        <span class="overflow-container">
                            <h2 class="main-subtitle overflow-inner"> subtitle here</h2>
                        </span>
                        <br>
                        <span class="overflow-container">
                            <h1 class="main-title overflow-inner delay1" id="vineyard-title">video intro</h1>
                        </span>
                        <span class="overflow-container">
                            <p class="overflow-inner delay2 vineyard-text">As farmers and stewards of the land, we're constantly striving to find its highest and best use.
                                Our unique soil types and proximity to the ocean have convinced us that it's Chardonnay.
                                At Chamisal, we're commited to growing truly world-class Chardonnay and showcasing each vineyard's
                                unique characteristics.</p>
                        </span>
                    </div>

                    <!-- VideoSection -->
                    <section>
                        <img id="video" data-src="/wp-content/uploads/2018/04/video-1.png" alt="video" srcset="">
                    </section>
                    <!-- End of lines bg -->
                </div>

            </section>

            <section>

                <!-- Call to Action Trigger 1-->
                <div id="trigger-call-to-action"></div>
                <?php get_template_part('template-parts/modal','cta'); ?>
                <?php get_template_part('template-parts/modal','book'); ?>
            </section>


            <div id="trigger-team"></div>

<?php
$about_section_01 = get_field('about_section_01');
if($about_section_01): ?>

            <section class="bs-container fullscreen images-left our-team-container">

                <!-- VisitUsLinesBackground -->
                <div class="background-lines"></div>

                <div class="row">
                    <div class="col-md-3 img-col ">
                        <div class="image-1 img-mask float-left ">
                            <img src="<?php echo $about_section_01['image_left'];?>" alt="valley" data-speed="1" class=" test">
                            <!-- <div class="overlay-img"></div> -->
                        </div>
                    </div>
                    <div class="col-md-3 img-col">
                        <div class=" image-2  img-mask float-right parallax-margin-top">
                            <img src="<?php echo $about_section_01['image_right'];?>" alt="woman-valley" data-speed="1" class=" test">
                            <!-- <div class="overlay-img"></div> -->

                        </div>
                    </div>
                    
                    <div id="trigger1"></div>

                    <div class="col-md-5 col-md-offset-1  our-team-content">
                        <span class="overflow-container">
                            <h2 class="main-subtitle-visit-us overflow-inner">
                                <?php echo $about_section_01['subtitle'];?>
                            </h2>
                        </span>

                        <span class="overflow-container">

                            <h1 class="main-title overflow-inner delay1">
                                <?php echo $about_section_01['title'];?>
                            </h1>

                        </span>

                        <span class="overflow-container">
                            <p class="overflow-inner-body delay2 visit-us-text">
                                <?php echo $about_section_01['text_field'];?>
                            </p>
                        </span>

                        <!-- <span class="overflow-container overflow-button"> <a class="video-button overflow-inner delay2" href="/visit"> DISCOVER</a> </span> -->
                    </div>
                </div>
<?php endif;?>
            </section>

<?php
$about_quote = get_field('about_quote');
if($about_quote): ?>
            <!-- Content5 - Quote -->
            <section class=" historic-quote-container">
                <div id="trigger-quote"></div>

                <div class="historic-quote">
                    <span class="overflow-container">
                        <div id="aspas" class="overflow-inner">
                            <svg id="aspas-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.4 31.39">
                                <path class="aspas-svg" d="M12.75,19.76c3.5,1.75,5.26,3,5.26,6.06,0,3.34-3,5.57-6.54,5.57C5.74,31.39,0,26.77,0,18.17,0,8,8.45.8,20.72,0c1,0,.63,3,.16,3-10.2.48-14,5.73-14,9.4C6.85,15.46,8.45,17.53,12.75,19.76Zm24.22,0c3.19,1.59,5.26,3,5.26,6.06,0,3.34-3.19,5.57-6.69,5.57-5.74,0-11.48-4.62-11.48-13.22C24.06,8,32.51.8,44.78,0c1,0,.64,3,.16,3-10.2.48-14,5.73-14,9.4C30.92,15.46,32.67,17.53,37,19.76Z"/>
                            </svg>
                        </div>
                    </span>
                    <br>
                    <span class="overflow-container">
                        <h1 id="historic-quote-text" class="overflow-inner">
                            <?php echo $about_quote['quote'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">
                        <h3 id="historic-quote-subtitle" class="overflow-inner delay1"> 
                            <?php echo $about_quote['sub_quote'];?>
                        </h3>
                    </span>
                </div>

            </section>
<?php endif; ?>
<?php
$about_section_02 = get_field('about_section_02');
if($about_section_02): ?>
            <section>

                <div id="trigger-property"></div>


                <div class="property-content">
                    <span class="overflow-container">
                        <h2 class="main-subtitle overflow-inner"> 
                            <?php echo $about_section_02['subtitle'];?>
                        </h2>
                    </span>
                    <br>
                    <span class="overflow-container">
                        <h1 class="main-title overflow-inner delay1" id="vineyard-title">
                            <?php echo $about_section_02['title'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">

                        <p class="overflow-inner-body delay2 about-page vineyard-text">
                            <?php echo $about_section_02['text_field'];?>
                        </p>
                    </span>

                </div>
            </section>
<?php endif; ?>
            <section>
                <!-- GoldenLines -->
                <?php get_template_part('template-parts/golden-lines','id-about'); ?>
            </section>

            <div id="trigger-edna"></div>
            <div class="background-lines"></div>

<?php
$about_section_03 = get_field('about_section_03');
if($about_section_03): ?>
            <section class="bs-container fullscreen images-right">

                <div class="content2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="edna-valley-content" style="opacity: 1;">
                                <span class="overflow-container ">
                                    <h2 class="main-subtitle-visit-us overflow-inner" id="animate1"> 
                                        <?php echo $about_section_03['subtitle'];?>
                                    </h2>
                                </span>

                                <span class="overflow-container ">
                                    <h1 class="main-title overflow-inner delay1 chamisal-wines-text" style="visibility: inherit; opacity: 1;">
                                        <?php echo $about_section_03['title'];?>
                                    </h1>
                                </span>
                                <span class="overflow-container ">
                                    <p class="overflow-inner-body delay2 visit-us-text"> 
                                        <?php echo $about_section_03['text_field'];?>
                                    </p>
                                </span>


                                <!-- <span class="overflow-container overflow-button "> <a class="video-button overflow-inner delay2" href="/shop" style="visibility: inherit; opacity: 1;"> DISCOVER</a> </span>  -->
                            </div>
                        </div>
                        <div class="col-md-6 img-col edna-image">
                            <div class="image-3 img-mask-3 parallax-margin-left-2 float-right">
                                <img src="<?php echo $about_section_03['image_top'];?>" alt="edna-valley" data-speed="1" class=" test">
                                <!-- <div class="overlay-img-2"></div> -->
                            </div>

                            <div class=" image-4  img-mask-3 float-left parallax-margin-right edna-right">
                                <img src="<?php echo $about_section_03['image_bottom'];?>" alt="vines" data-speed="1" class=" test" />
                                <!-- <div class="overlay-img-2"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php endif;?>
        </section>
        <!-- fullpage width -->



        <!-- Content5 -->
        <section class="content2">
            <div id="about-trigger"></div>

<?php
$about_section_04 = get_field('about_section_04');
if($about_section_04): ?>
            <section id="footer-outro">
                <div class="about-us">
                    <div class="about-us-content">

                        <span class="overflow-container">
                            <h2 class="main-subtitle-visit-us overflow-inner"> 
                                <?php echo $about_section_04['subtitle'];?>
                            </h2>
                        </span>

                        <span class="overflow-container">
                            <h1 class="main-title overflow-inner delay1">
                                <?php echo $about_section_04['title'];?>
                            </h1>
                        </span>

                        <!-- <a class="video-button learn-more"  href="/about" > LEARN MORE </a> -->
                        <span class="overflow-container overflow-button-center">
                            <a class="overflow-inner delay2 video-button outro-button-no-margin" href="<?php echo $about_section_04['button_link'];?>"> 
                                <?php echo $about_section_04['button_text'];?> 
                            </a>
                        </span>
                        <!-- Mail Trigger 5 -->
                        <div id="trigger5" class="spacer s0"></div>
                    </div>

                    <img src="/wp-content/uploads/2018/06/mini-about-background.png" alt="about-about" />
                </div>

            </section>
<?php endif; ?>
        </section>

    </div>

    <?php

get_footer();