<?php
/*
Template Name: Schedule Template
*/

get_header();

?>

    <div id="page2">

<?php
$visit_hero = get_field('visit_hero');
if($visit_hero): ?>
        <!-- Main -->
        <section>
            <div class="page-content-visit" id="trigger-homepage">

                <div class="hero-container visit">
                    <span class="overflow-container">
                        <h2 class="overflow-inner hero-subtitle"> 
                            <?php echo $visit_hero['subtitle'];?>
                        </h2>
                    </span>
                    <span class="overflow-container">
                        <h1 class="overflow-inner hero-title delay1">
                            <?php echo $visit_hero['title'];?>
                        </h1>
                    </span>

                    <span class="overflow-container">
                        <p class="overflow-inner  hero-text delay2">
                             <?php echo $visit_hero['text_field'];?>
                            <!-- <span class="break-line unbreak"> No wine-tasting trip through the Central Coast is complete </span>
                            <span class="break-line unbreak">without a visit to Chamisal Vineyards, just 10 minutes from</span>
                            <span class="break-line unbreak">downtown San Luis Obispo. Stunning views, friendly staff, and</span>
                            <span class="break-line unbreak">award-winning wines await you.</span> -->
                        </p>
                    </span>

                </div>

            </div>
<?php endif; ?>

            <section>
                <div id="navbar-trigger"></div>
                <div id="trigger-call-to-action" class="cta-no-margin"></div>
                <div id="trigger-boxes"></div>
            </section>


        </section>

<?php
$visit_schedule = get_field('visit_schedule');

if($visit_schedule): ?>
        <!-- Content1 -->
        <section>
            <!-- TastingRoomHours -->
            <div class="tasting-row-1">
                <span class="overflow-container">
                    <h3 class="overflow-inner" id="tasting-room-title"> tasting room hours</h3>
                </span>
                <span class="overflow-container">
                    <h4 class="tasting-room-time overflow-inner delay1"> 
                        <?php echo $visit_schedule['visit_time'];?>
                    </h4>
                </span>
                <span class="overflow-container">
                    <h4 class="tasting-room-phone overflow-inner delay1">
                        <a href="tel:<?php echo $visit_schedule['visit_phone'];?>">
                            <?php echo $visit_schedule['visit_phone'];?>
                        </a>
                    </h4>
                </span>
                <?php if($visit_schedule['additional_closures']=='yes'): ?>
                    <span class="overflow-container">
                        <h5 class="closures-link overflow-inner delay1">
                            <a href="#closures">
         
                                <?php echo $visit_schedule['additional_closures_group']['closures_link'];?>
                            </a>
                        </h5>
                    </span>
                <?php endif; ?>
            </div>

            <!-- <li><a class="footer-link" id="footer-line-top" href="tel:1-805-541-9463"> 866.806.9463 </a></li> -->


            <!-- Call to action -->
            <div class="section-title-container">
                <?php get_template_part('template-parts/modal','cta'); ?>
            </div>
            <?php get_template_part('template-parts/modal','book'); ?>

        </section>

<?php endif; ?>

        <!-- Content2 -->
        <section>
            <!-- Wine Tasting Mobile-->
            <div class="visit-us-content-schedule-mobile ">
                <h2 class="main-subtitle-visit-us" id="animate1"> EXPERIENCE CHAMISAL</h2>
                <h1 class="main-title" id="visit-us-title" id="animate2">wine tasting</h1>
                <p id="wine-tasting-text">Chamisal Vineyards specializes in sustainably produced Chardonnay and Pinot Noir from vineyard sites stretching
                    along the Central Coast from Monterey County to Santa Barbara County.</p>
                <a class="video-button" id="discover" href="/visit">
                    CONTACT US</a>
            </div>

            <!-- Visit Trigger 1 -->
            <div id="trigger6"></div>
            <!-- GoldenLines -->
            <?php get_template_part('template-parts/golden-lines','id-visit');?>

            
            <!-- TastingRoomLinesBackground -->
            <div class="background-lines-5"></div>

        </section>


        <!-- Content3 -->
        <section class="content3">
            <!-- SquareBoxes -->
            <div class="square-container">
                <div class="square-box-1">
                    <!-- <h3 class="square-boxes-subtitle"> 01</h3> -->
                    <h2 id="square-boxes-title"> chamisal
                        <br> flight</h2>
                    <!-- <div id="square-boxes-line-1"></div> -->

                </div>
                <div class="square-box-2">
                    <!-- <h3 class="square-boxes-subtitle"> 02</h3> -->
                    <h2 id="square-boxes-title-2"> estate
                        <br> patio experience</h2>
                    <!-- <div id="square-boxes-line-2"></div> -->


                </div>
                <div class="square-box-3">
                    <!-- <h3 class="square-boxes-subtitle"> 03</h3> -->
                    <h2 id="square-boxes-title-3"> private tasting
                        <br> & tour</h2>
                    <!-- <div id="square-boxes-line-3"></div> -->

                </div>
            </div>


            <!-- EstatePatioFlight Trigger -->
            <div id="trigger7"></div>
<?php
$visit_boxes_images = get_field('visit_boxes');
if($visit_boxes_images): ?>
            <div class="container">
                <div class="row">

                    <div class="col-md-6 no-padding">

                        <div class="flex-container space-between slideshowArrow__container ">
                            <img class="slideshowArrow arrowLeft" data-src="/wp-content/uploads/2018/06/visit-slideshow-arrow-left.png" alt="left-arrow">
                            <img class="slideshowArrow arrowRight " data-src="/wp-content/uploads/2018/06/visit-slideshow-arrow-right.png" alt="right-arrow">
                        </div>

                        <div class="img-mask visit-mobile-img box visit-img chamisal-1 chamisal_mobile">
                            <img src="<?php echo $visit_boxes_images['image_chamisal'];?>" alt="ranch" class="schedule-image-chamisal">
                            <!-- <div class="overlay-img"></div> -->
                        </div>

                        <div class="img-mask visit-mobile-img box visit-img estate estate_mobile">
                            <img src="<?php echo $visit_boxes_images['image_estate'];?>" alt="ranch" class="schedule-image-estate">
                            <!-- <div class="overlay-img"></div> -->
                        </div>

                        <div class="img-mask visit-mobile-img box visit-img private private_mobile">
                            <img src="<?php echo $visit_boxes_images['image_private'];?>" alt="ranch" class="schedule-image-private">
                            <!-- <div class="overlay-img"></div> -->
                        </div>



                    </div>
                    <div class="col-md-6">

                        <div class="visit-us-content-schedule-page chamisal-flight">

                            <span class="overflow-container">
                                <h1 class="visit-title-sliders overflow-inner">chamisal flight</h1>
                            </span>
                            <span class="overflow-container">
                                <h2 class="visit-subtitle-sliders overflow-inner"> 10AM - 5PM DAILY</h2>
                            </span>
                            <br>
                            <span class="overflow-container overflow-button">
                                <a class="book-now-button overflow-inner" type="button" data-micromodal-trigger="modal-1"> BOOK NOW</a>
                            </span>
                            <br>
                            <br>
                            <span class="overflow-container">
                                <p class="overflow-inner" id="estate-patio-text">
                                    The Chamisal Flight is our most popular tasting option. You’ll sample five wines, including current releases of our exceptional
                                    Chardonnay and Pinot Noir, from the comfort of our intimate indoor tasting room or our
                                    Garden Patio every day of the week. Alternatively, the Chamisal Flight may also be experienced
                                    on our Estate Patio Monday thru Friday only. This space is best suited for groups of
                                    six or fewer. For larger groups, please email
                                    <bold id="estate-patio-text-bold">
                                        <a id="email-hover" href="mailto:tastingroom@chamisalvineyards.com?subject=Mail from Our Site">tastingroom@chamisalvineyards.com </a>
                                    </bold> or call
                                    <bold id="estate-patio-text-bold">
                                        <a href="tel:1-805-541-9463">805-541-9463.</a>
                                    </bold>
                                    <br>$20 per guest (fee waived with two-bottle wine purchase from the flight), complimentary
                                    for club members.
                                </p>
                            </span>

                        </div>

                    </div>
                </div>
            </div>
        </section>
 <?php endif; ?>

        <?php get_template_part('template-parts/modal','book'); ?>


        <section>
            <!-- End of call-to-action button -->
            <p id="section1footer"></p>
            <div class="background-lines"></div>

        </section>

  

           <?php if($visit_schedule['additional_closures']=='yes'): ?>
                    <section id="closures">
                        <?php echo $visit_schedule['additional_closures_group']['closures'];?>
                    </section>                          
            <?php endif; ?>

        <!-- Content 5 - AboutSection -->
        <div id="about-trigger"></div>
        <section id="footer-outro">
            <div class="about-us visit">
                <div class="about-us-content visit">

                    <span class="overflow-container">
                        <h2 class="main-subtitle-visit-us overflow-inner"> GET SOCIAL WITH US</h2>
                    </span>

                    <span class="overflow-container">
                        <h1 class="main-title overflow-inner delay1">events</h1>
                    </span>

                    <!-- <a class="video-button learn-more"  href="/about" > LEARN MORE </a> -->
                    <span class="overflow-container overflow-button-center">
                        <a class="overflow-inner delay2 video-button outro-button-no-margin" href="/events" style="visibility: inherit; opacity: 1;">
                        LEARN MORE </a>
                    </span>
                    <!-- Mail Trigger 5 -->
                    <div id="trigger5" class="spacer s0"></div>
                </div>

                <img data-src="/wp-content/uploads/2018/06/mini-visit-background.png" alt="visit-about" />
            </div>

        </section>


    </div>



    <?php

get_footer();