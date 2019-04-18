<?php
/*
Template Name: Historic Template
*/

get_header();

?>
<?php
$vineyard_hero = get_field('vineyard_hero');
if($vineyard_hero): ?>
    <div id="page3">

        <!-- Main -->
        <section>
            <div class="page-content-historic" id="trigger-homepage">

                <div class="hero-container historic">
                    <span class="overflow-container">
                        <h2 class="overflow-inner hero-subtitle">
                         <?php echo $vineyard_hero['subtitle'];?>
                        </h2>
                    </span>
                    <span class="overflow-container">
                        <h1 class="overflow-inner hero-title delay1">
                            <?php echo $vineyard_hero['title'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">
                        <p class="overflow-inner hero-text delay2"> 
                            <?php echo $vineyard_hero['text_field'];?>
                        </p>
                    </span>

                </div>


            </div>

        </section>
<?php endif; ?>

        <!-- Content1 -->
        <section>
            <!-- GoldenLines -->
            <?php get_template_part('template-parts/golden-lines','id-2');?>
        </section>



        <div class="background-lines"></div>

        <section class="interior-max-width">
            <!-- Content2 -->
            <section class="content1">
                <!-- OurPropertySection -->
                <div class="wine-club-historic">

                    <!-- Visit Trigger 2 -->
                    <div id="trigger2"></div>
                    <div id="trigger-call-to-action"></div>

<?php
$vineyard_section_01 = get_field('vineyard_section_01');
if($vineyard_section_01): ?>

                    <div class="historic-content">
                        <span class="overflow-container">
                            <h2 class="main-subtitle-visit-us overflow-inner">
                                <?php echo $vineyard_section_01['subtitle'];?>
                            </h2>
                        </span>
                        <span class="overflow-container">
                            <h1 class="main-title overflow-inner delay1" id="vineyard-title">
                                <?php echo $vineyard_section_01['title'];?>
                            </h1>
                        </span>
                        <span class="overflow-container">
                            <p class="overflow-inner-body delay2 vineyard-page vineyard-text">
                                <?php echo $vineyard_section_01['text_field'];?>
                            </p>
                        </span>
                    </div>
                </div>
<?php endif; ?>


                <!-- Call to Action -->
                <div class="section-title-container">
                    <?php get_template_part('template-parts/modal','cta'); ?>
                </div>
                <?php get_template_part('template-parts/modal','book'); ?>


            </section>

            <!-- Background Grey faded lines -->
            <!-- <div class="historic-lines-background"> -->
            <!-- </section> -->


            <!-- Content3 - Map-->
            <section>

                <!-- Map -->
                <div class="map">

                    <div class="map-background">
                        <div class="map-tooltips">
                            <?php get_template_part('template-parts/map','triggers'); ?>
                        </div>

                        <!-- <p class="modal-trigger"> POMMARD</p> -->
                        <div class="modal-content-1">
                            <?php get_template_part('template-parts/map','modals'); ?>
                        </div>
                        <!-- Map hover -->
                    </div>

                </div>

                <!-- Trigger to open Modal -->
                <!-- <a href="https://github.com/dolce/iziModal" class="trigger">Modal</a> -->
                <!-- <div id="trigger-modal"></div> -->
            </section>


            <div class="background-lines">
            <div id="trigger1"></div>

            </div>


<?php
$vineyard_section_02 = get_field('vineyard_section_02');
if($vineyard_section_02): ?>
            <section class="bs-container fullscreen images-left vineyard-diverse-soil">


                <div class="row">
                    <div class="col-md-3 img-col ">
                        <div class="image-1 img-mask float-left ">
                            <img src="<?php echo $vineyard_section_02['image_left'];?>" alt="soils" data-speed="1" class=" test">
                            <!-- <div class="overlay-img"></div> -->
                        </div>
                    </div>
                    <div class="col-md-3 img-col">
                        <div class=" image-2  img-mask float-right parallax-margin-top">
                            <img src="<?php echo $vineyard_section_02['image_right'];?>" alt="fences" data-speed="1" class=" test">
                            <!-- <div class="overlay-img"></div> -->
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1  diverse-soil-content">
                        <span class="overflow-container">
                            <h2 class="main-subtitle-visit-us overflow-inner" id="animate1">
                                <?php echo $vineyard_section_02['subtitle'];?>
                            </h2>
                        </span>
                        <span class="overflow-container">
                            <h1 class="main-title overflow-inner delay1">
                                <?php echo $vineyard_section_02['title'];?>
                            </h1>
                        </span>

                        <span class="overflow-container">
                            <p class="overflow-inner-body delay2 visit-us-text">
                                <?php echo $vineyard_section_02['text_field'];?>
                            </p>
                        </span>
                    </div>
                </div>


            </section>
<?php endif; ?>

<?php
$vineyard_quote = get_field('vineyard_quote');
if($vineyard_quote): ?>
            <!-- Content5 - Quote -->
            <section class="content1">
                <div id="trigger-quote"></div>
                <!-- QuoteSection -->
                <div class="historic-quote">
                    <span class="overflow-container">
                        <div id="aspas" class="overflow-inner">
                            <svg id="aspas-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 45.4 31.39">
                                <path class="aspas-svg" d="M12.75,19.76c3.5,1.75,5.26,3,5.26,6.06,0,3.34-3,5.57-6.54,5.57C5.74,31.39,0,26.77,0,18.17,0,8,8.45.8,20.72,0c1,0,.63,3,.16,3-10.2.48-14,5.73-14,9.4C6.85,15.46,8.45,17.53,12.75,19.76Zm24.22,0c3.19,1.59,5.26,3,5.26,6.06,0,3.34-3.19,5.57-6.69,5.57-5.74,0-11.48-4.62-11.48-13.22C24.06,8,32.51.8,44.78,0c1,0,.64,3,.16,3-10.2.48-14,5.73-14,9.4C30.92,15.46,32.67,17.53,37,19.76Z"/>
                            </svg>
                        </div>
                    </span>
                    <span class="overflow-container">
                        <h1 id="historic-quote-text" class="overflow-inner"> 
                            <?php echo $vineyard_quote['quote'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">
                        <h3 id="historic-quote-subtitle" class="overflow-inner delay1">
                            <?php echo $vineyard_quote['sub_quote'];?>
                        </h3>
                    </span>
                </div>

            </section>
<?php endif; ?>
            <div id="trigger-edna"></div>
            <div class="background-lines"></div>
<?php
$vineyard_section_03 = get_field('vineyard_section_03');
if($vineyard_section_03): ?>
            <section class="bs-container fullscreen images-right">

                <div class="content2">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="edna-valley-content" style="opacity: 1;">
                                <span class="overflow-container ">
                                    <h2 class="main-subtitle-visit-us overflow-inner" id="animate1"> 
                                        <?php echo $vineyard_section_03['subtitle'];?> 
                                    </h2>
                                </span>

                                <span class="overflow-container ">
                                    <h1 class="main-title overflow-inner delay1 chamisal-wines-text" style="visibility: inherit; opacity: 1;">
                                        <?php echo $vineyard_section_03['title'];?>
                                    </h1>
                                </span>
                                <span class="overflow-container ">
                                    <p class="overflow-inner-body delay2 visit-us-text">
                                        <?php echo $vineyard_section_03['text_field'];?>            
                                     </p>
                                </span>
                                <!-- <span class="overflow-container overflow-button "> <a class="video-button overflow-inner delay2" href="/shop" style="visibility: inherit; opacity: 1;"> DISCOVER</a> </span>  -->
                            </div>
                        </div>
                        <div class="col-md-6 img-col edna-image">
                            <div class="image-5 img-mask-3 parallax-margin-left-2 float-right" >
                                <img src="<?php echo $vineyard_section_03['image_top'];?>" alt="edna-valley" data-speed="1" class=" test">
                                <!-- <div class="overlay-img-2"></div> -->
                            </div>

                            <div class=" image-6  img-mask-3 float-left parallax-margin-right edna-right" >
                                <img src="<?php echo $vineyard_section_03['image_bottom'];?>" alt="edna-hills" data-speed="1" class=" test" />
                                <!-- <div class="overlay-img-2"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php endif; ?>


            <div id="trigger-topography"></div>
            <div class="background-lines"></div>


            <!-- Content7 -->
<?php
$vineyard_section_04 = get_field('vineyard_section_04');
if($vineyard_section_04): ?>
            <section class="content2">

                <div class="row">
                    <div class="col-md-7">
                        <div class="image-7 img-mask-4">
                            <img src="<?php echo $vineyard_section_04['image'];?>" alt="topography">
                            <!-- <div class="overlay-img-3"></div> -->
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="topography-content" style="opacity: 1;">
                            <span class="overflow-container ">
                                <h2 class="main-subtitle-visit-us overflow-inner" id="animate1">  
                                    <?php echo $vineyard_section_04['subtitle'];?>
                                </h2>
                            </span>

                            <span class="overflow-container ">
                                <h1 class="main-title overflow-inner delay1 chamisal-wines-text" style="visibility: inherit; opacity: 1;">
                                    <?php echo $vineyard_section_04['title'];?>
                                </h1>
                            </span>
                            <span class="overflow-container ">
                                <p class="overflow-inner-body delay2 visit-us-text">
                                    <?php echo $vineyard_section_04['text_field'];?>
                                </p>
                            </span>

                        </div>
                    </div>

                </div>
                <!--  row -->
            </section>
<?php endif; ?>


            <div id="trigger-sustain"></div>

<?php
$vineyard_section_05 = get_field('vineyard_section_05');
if($vineyard_section_05): ?>
            <section class="bs-container fullscreen images-right">

                <div class="content2">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="sustain-content" style="opacity: 1;">
                                <span class="overflow-container ">
                                    <h2 class="main-subtitle-visit-us overflow-inner" id="animate1">
                                        <?php echo $vineyard_section_05['subtitle'];?>
                                    </h2>
                                </span>

                                <span class="overflow-container ">
                                    <h1 class="main-title overflow-inner delay1 chamisal-wines-text" style="visibility: inherit; opacity: 1;">
                                        <?php echo $vineyard_section_05['title'];?>
                                    </h1>
                                </span>
                                <span class="overflow-container ">
                                    <p class="overflow-inner-body delay2 visit-us-text"> 
                                        <?php echo $vineyard_section_05['text_field'];?>
                                    </p>
                                </span>


                                <span class="overflow-container overflow-button ">
                                    <a class="video-button overflow-inner delay2" href="<?php echo $vineyard_section_05['button_link'];?>" target="_blank">
                                        <?php echo $vineyard_section_05['button_text'];?>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6 img-col edna-image">
                            <div class="image-8 img-mask-5 parallax-margin-left-2 float-right">

                                <img src="<?php echo $vineyard_section_05['image_top'];?>" alt="edna-valley" data-speed="1" class=" test">

                                <!-- <div class="overlay-img-2"></div> -->
                            </div>

                            <div class=" image-9  img-mask-5 float-left parallax-margin-right edna-right">
                              
                                <img src="<?php echo $vineyard_section_05['image_bottom'];?>" alt="edna-hills" data-speed="1" class=" test" />

                                <!-- <div class="overlay-img-2"></div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div id="about-trigger"></div>
            </section>
<?php endif; ?>
<?php
$vineyard_section_06 = get_field('vineyard_section_06');
if($vineyard_section_06): ?>
        </section>
        <!-- max-width -->
        <!-- Content8 -->
        <section id="footer-outro">
            <div class="background-lines"></div>
            <div class="about-us historic">
                <div class="about-us-content historic">

                    <span class="overflow-container">
                        <h2 class="main-subtitle-visit-us overflow-inner"> 
                            <?php echo $vineyard_section_06['subtitle'];?>
                        </h2>
                    </span>

                    <span class="overflow-container">
                        <h1 class="main-title overflow-inner delay1">
                            <?php echo $vineyard_section_06['title'];?>
                        </h1>
                    </span>
                    <span class="overflow-container overflow-button-center">
                        <a class="overflow-inner delay2 video-button" href="<?php echo $vineyard_section_06['button_link'];?>" style="visibility: inherit; opacity: 1;"> 
                            <?php echo $vineyard_section_06['button_text'];?> 
                        </a>
                    </span>
                    <!-- Mail Trigger 5 -->
                    <div id="trigger5" class="spacer s0"></div>
                </div>

                <img src="/wp-content/uploads/2018/06/mini-vineyard-background.png" alt="historic-about" />
            </div>

        </section>
<?php endif; ?>

    </div>

    <?php

get_footer();