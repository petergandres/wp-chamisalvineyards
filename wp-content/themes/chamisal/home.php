<?php
/*
Template Name: Home Template
*/

get_header();

?>



<?php
$hero = get_field('hero');
if($hero): ?>

    <div id="page1">
        <!-- Main -->
        <section>
            <div class="page-content" id="trigger-homepage">

                <div class="homepage-container">
                    <span class="overflow-container">
                        <h2  class="overflow-inner main-subtitle hero-subtitle"> 
                            <?php echo $hero['subtitle'];?>
                        </h2>
                    </span>
                    <span class="overflow-container">
                        <h1  class="overflow-inner hero-title">
                            <?php echo $hero['title'];?>
                        </h1>
                    </span>
                </div>
                

                <video id="home-video" autoplay muted>
                    <source src="<?php echo $hero['video'];?>" type="video/mp4">
                </video>

                <div class="wrapper-scroll">
                    <div class="bottom">
                        <p  role="presentation" aria-hidden="true" class="scroll-text-2">SCROLL</p>
                        <hr id="line">
                    </div>
                </div>
                <div class="mask"></div>

            </div>
        </section>

<?php endif; ?>



<?php
$home_section_01 = get_field('section_01');
if($home_section_01): ?>
        <section class="interior-max-width">
            <?php get_template_part('template-parts/golden-lines','id-1');?>

            <!-- Content1 -->
            <section class="content2">

                <div class="triggers">
                    <div id="trigger0"></div>
                    <!-- Visit Trigger 1 -->
                    <div id="trigger1"></div>
                    <!-- NavbarTrigger to fadeIn -->
                    <div id="navbar-trigger-in"></div>
                    <!-- Trigger Images -->
                    <div id="trigger-home-1"></div>
                    <!-- Call to Action Trigger 1-->
                    <div id="trigger-call-to-action"></div>
                </div>

                <div class="promise-content">
                    <span class="overflow-container">
                        <h2  class="main-subtitle-visit-us overflow-inner">
                            <?php echo $home_section_01['subtitle'];?>
                        </h2>
                    </span>
                    <span class="overflow-container">
                        <h1   class="main-title overflow-inner vineyard-title">
                            <?php echo $home_section_01['title'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">
                        <p  class="overflow-inner" id="vineyard-text-promise">
                            <?php echo $home_section_01['text_field'];?>
                        </p>
                    </span>
                </div>
            </section>
<?php endif; ?>

    <section class="content2">
        <?php get_template_part('template-parts/modal','cta'); ?>
        <?php get_template_part('template-parts/modal','book'); ?>
    </section>

<?php
$home_section_02 = get_field('section_02');
if($home_section_02): ?>
            <section class="bs-container fullscreen images-left ">
                <!-- VisitUsLinesBackground -->
                <div class="background-lines"></div>

                <div class="row">
                    <div class="col-md-3 img-col ">
                        <div class="image-1 img-mask float-left">
                        <img src="<?php echo $home_section_02['image_left'];?>" data-speed="1" class=" test" alt="home-1">

                            <!-- <img data-src="/wp-content/uploads/2018/06/home_content1_image2.png" data-speed="1" class=" test" alt="home-1"> -->
                            <!-- <div class="overlay-img"></div> -->
                        </div>
                    </div>
                    <div class="col-md-3 img-col">
                        <div class=" image-2  img-mask float-right parallax-margin-top">
                            <img src="<?php echo $home_section_02['image_right'];?>" data-speed="1" class=" test" alt="home-2">
                            <!-- <div class="overlay-img"></div> -->

                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1  visit-us-content">
                        <span class="overflow-container">
                            <h2  class="main-subtitle-visit-us overflow-inner">
                                <?php echo $home_section_02['subtitle'];?>
                            </h2>
                        </span>
                        <span class="overflow-container">
                            <h1  class="main-title overflow-inner">
                                <?php echo $home_section_02['title'];?>
                            </h1>
                        </span>
                        <span class="overflow-container">
                            <p  class="overflow-inner visit-us-text">
                                <?php echo $home_section_02['text_field'];?>
                            </p>
                        </span>
                        <span class="overflow-container overflow-button">
                            <a class="video-button overflow-inner" href="<?php echo $home_section_02['button_link']?>">
                                <?php echo $home_section_02['button_text'];?>
                            </a>
                        </span>
                    </div>
                </div>

            </section>
<?php endif; ?>
<?php
$home_section_03 = get_field('section_03');
if($home_section_03): ?>

            <section class="bs-container fullscreen images-right content1">
                <!-- ChamisalWinesSection -->
                <div >

                    <!-- Visit Trigger 3 -->
                    <div id="trigger3"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="chamisal-content" style="opacity: 1;">
                                <span class="overflow-container ">
                                    <h2  class="main-subtitle-visit-us overflow-inner"> 
                                        <?php echo $home_section_03['subtitle'];?>
                                    </h2>
                                </span>

                                <span class="overflow-container ">
                                    <h1  class="main-title overflow-inner chamisal-wines-text" style="visibility: inherit; opacity: 1;">
                                        <?php echo $home_section_03['title'];?>
                                    </h1>
                                </span>
                                <span class="overflow-container ">
                                    <p  class="overflow-inner visit-us-text">
                                        <?php echo $home_section_03['text_field'];?>
                                    </p>
                                </span>
                                <span class="overflow-container overflow-button ">
                                    <a class="video-button overflow-inner" href="<?php echo $home_section_03['button_link'];?>" style="visibility: inherit; opacity: 1;">
                                        <?php echo $home_section_03['button_text'];?>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3 img-col ">
                            <div class="image-3 img-mask-2 parallax-margin-left float-right" style="transform: matrix(1, 0, 0, 1, 0, -100);">
                                <img src="<?php echo $home_section_03['image_left'];?>" data-speed="1" class="test" alt="home-3">
                                <!-- <div class="overlay-img-2"></div> -->
                            </div>
                        </div>
                        <div class="col-md-3 img-col ">
                            <div class=" image-4  img-mask-2 parallax-margin-top float-left" style="transform: matrix(1, 0, 0, 1, 0, -100);">
                                <img src="<?php echo $home_section_03['image_right'];?>" data-speed="1" class="test" alt="home-4">
                                <!-- <div class="overlay-img-2"></div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php endif; ?>

<?php
$home_section_04 = get_field('section_04');
if($home_section_04): ?>
            <!-- Content2 -->
            <section class="bs-container fullscreen content1">

                <!-- VineyardSection -->
                <div class="vineyard-section row">

                    <!-- Visit Trigger 2 -->
                    <div id="trigger2"></div>

                    <div class="vineyard-content col-md-12">
                        <span class="overflow-container">
                            <h2  class="main-subtitle-visit-us overflow-inner">
                                <?php echo $home_section_04['subtitle'];?>
                            </h2>
                        </span>
                        <span class="overflow-container">
                            <h1  class="main-title overflow-inner vineyard-title">
                                <?php echo $home_section_04['title'];?>
                            </h1>
                        </span>
                        <span class="overflow-container">
                            <p  class="overflow-inner vineyard-text"> 
                                <?php echo $home_section_04['text_field'];?>
                            </p>
                        </span>
                        <span class="overflow-container overflow-button-center">
                            <a class="overflow-inner video-button" href="<?php echo $home_section_04['button_link'];?>">
                                <?php echo $home_section_04['button_text'];?>
                            </a>
                        </span>
                    </div>
                </div>
            </section>
            <!-- Content2 -->
<?php endif; ?>
        </section>
        <!-- interior max-width -->
        <!-- End of call-to-action button -->
        <!-- <p  id="section1footer"></p> -->
        <!-- VineyardBackgroundSection -->
        <div class="vineyard-background-content">
            <img src="/wp-content/uploads/2018/06/home-content3.png" alt="edna valley vineyards" srcset="">
            <!-- <div class="vineyard-bottom-image"></div> -->
        </div>

        <!-- VisitUsLinesBackground2 -->
        <div class="background-lines-2"></div>

        <!-- GoldenLines -->
    
        <?php get_template_part('template-parts/golden-lines','id-4');?>

<?php
$home_section_05 = get_field('section_05');
if($home_section_05): ?>

        <section class="interior-max-width">
            <!-- Content3 -->
            <section>
                <!-- Visit Trigger 4 -->
                <div id="trigger4"></div>

                <!-- ChamisalClubLinesBackground -->
                <!-- <div class="background-lines-3"></div> -->

                <!-- ChamisalClubSection -->
                <div class="chamisal-club row">

                    <div class="chamisal-club-content col-md-12">
                        <span class="overflow-container">
                            <h2  class="main-subtitle-visit-us overflow-inner">
                                <?php echo $home_section_05['subtitle'];?>
                            </h2>
                        </span>
                        <span class="overflow-container">
                            <h1  class="main-title overflow-inner" id="chamisal-club-title">
                                <?php echo $home_section_05['title'];?>
                            </h1>
                        </span>
                        <span class="overflow-container">
                            <p  class="overflow-inner mobile-home-club vineyard-text">
                                <?php echo $home_section_05['text_field'];?>
                            </p>
                        </span>

                    </div>
                </div>
            </section>
   

            <!-- Content4 - ChamisalClubSlider -->

            <section class="bs-container fullscreen">

                <div class="chamisal-club-slider-flex-container">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="slider_section">
                                <span class="helper">
                                </span>    
                                <img class="slider_img" id="home_premier" src="<?php echo $home_section_05['slider_image_01'];?>" alt="slider1" srcset="">

                                <img class="slider_img" id="home_rare" src="<?php echo $home_section_05['slider_image_02'];?>" alt="slider2" srcset="">
                                <img class="slider_img" id="home_classic" src="<?php echo $home_section_05['slider_image_03'];?>" alt="slider3" srcset="">
                            </div>

                        </div>
                        <!-- slider-wrapper -->

                        <div class="col-md-4 col-md-offset-1">
                            <div class="slider-text">
                                <div class="slider-mouse-wrapper">
                                    <!-- <img class='line-sliders-1' src='/wp-content/uploads/2018/04/line.png'> -->
                                    <div class="slider-section-0" id="premier" value="/club">
                                        <p  class="slider-title-0"> PREMIER</p>
                                        <p  class="slider-subtitle"> Chamisal fans rejoice: Our Premier Club offers FULL
                                            <span class="break-line unbreak"></span> customization of our top tier wines for each shipment.</p>
                                        <a class="details-0 premier-slider" value="/club"> SEE DETAILS</a>
                                    </div>
                                </div>
                                <hr class="hr-slider">
                                <!-- <img class='line-sliders-2' src='/wp-content/uploads/2018/04/line.png'> -->
                                <div class="slider-section-1 " id="rare" value="/club">
                                    <p  class="slider-title-1"> RARE RELEASE</p>
                                    <p  class="slider-subtitle"> Members of our Rare Release Club will receive our Estate and
                                        <span class="break-line unbreak"></span> Califa tiers in addition to exclusive, small-lot bottlings.</p>
                                    <a class="details-1 rare-slider" value="/club"> SEE DETAILS</a>
                                </div>
                                <hr class="hr-slider">
                                <!-- <img class='line-sliders-3' src='/wp-content/uploads/2018/04/line.png'> -->
                                <div class="slider-section-2" id="classic" value="/club">
                                    <p  class="slider-title-2"> CLASSIC</p>
                                    <p  class="slider-subtitle"> The Classic Club showcases our complete line-up of Estate-tier
                                        <span class="break-line unbreak"></span>wines, as well as other unique releases.</p>
                                    <a class="details-2 classic-slider" value="/club"> SEE DETAILS</a>
                                </div>
                                <hr class="hr-slider">

                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
                <!-- chamisal-club-slider-flex-container  -->
                <!-- End of call-to-action button -->
            </section>


        </section>
        <!-- interior max-width -->
<?php endif; ?>

<?php
$home_section_06 = get_field('section_06');
if($home_section_06): ?>

        <!-- Content 5 - AboutSection -->
        <div id="about-trigger"></div>
        <section id="footer-outro">
            <div class="about-us">
                <div class="about-us-content home-footer col-md-12">

                    <span class="overflow-container">
                        <h2  class="main-subtitle-visit-us overflow-inner"> 
                            <?php echo $home_section_06['subtitle'];?>
                        </h2>
                    </span>
                    <span class="overflow-container">
                        <h1  class="main-title overflow-inner">
                            <?php echo $home_section_06['title'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">
                        <p  class="overflow-inner mobile-home-club vineyard-text"> 
                            <?php echo $home_section_06['text_field'];?>
                        </p>
                    </span>
                    <!-- <a class="video-button learn-more"  href="/about" > LEARN MORE </a> -->
                    <span class="overflow-container overflow-button-center">
                        <a class="overflow-inner video-button" href="<?php echo $home_section_06['button_link'];?>">
                            <?php echo $home_section_06['button_text'];?>
                        </a>
                    </span>
                    <!-- Mail Trigger 5 -->
                    <div id="trigger5" class="spacer s0"></div>
                </div>

                <img src="/wp-content/uploads/2018/08/home_footer.png" alt="home-about" />
            </div>

        </section>
    </div>

<?php endif; ?>




    <?php

get_footer();