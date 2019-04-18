<?php
/*
Template Name: Club Template
*/

get_header();

?>
<?php
$club_hero = get_field('club_hero');
if($club_hero): ?>
    <div id="page5">
        <!-- Main -->
        <section>
            <div class="page-content-club" id="trigger-homepage">


                <div class="hero-container club">
                    <span class="overflow-container">
                        <h2 class="overflow-inner hero-subtitle">
                            <?php echo $club_hero['subtitle'];?>
                        </h2>
                    </span>

                    <span class="overflow-container">
                        <h1 class="overflow-inner hero-title delay1">
                            <?php echo $club_hero['title'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">
                        <p class="overflow-inner hero-text delay2">
                            <?php echo $club_hero['text_field'];?>
                        </p>
                    </span>

                </div>

                <!-- GoldenLines -->
                <?php get_template_part('template-parts/golden-lines','id-3'); ?>                
<?php endif; ?>

            </div>

            <!-- Call to Action Trigger 1-->
            <div id="trigger-call-to-action"></div>
            <div id="trigger-member"></div>



        </section>
        <div class="background-lines"></div>



        <!-- Content1 -->
        <section class="content3">

            <!-- Call to Action -->
            <div class="section-title-container">
                <?php get_template_part('template-parts/modal','cta'); ?>
            </div>
            <?php get_template_part('template-parts/modal','book'); ?>


        </section>
        <div id="trigger2"></div>

<?php
$club_section_01 = get_field('club_section_01');
if($club_section_01): ?>
        <!-- ChamisalClubSection -->

        <div class="vineyard-content">
            <span class="overflow-container">
                <h2 class="main-subtitle overflow-inner"> 
                    <?php echo $club_section_01['subtitle'];?>
                </h2>
            </span>
            <br>
            <span class="overflow-container">
                <h1 class="main-title overflow-inner delay1" id="chamisal-club-title">
                    <?php echo $club_section_01['title'];?>
                </h1>
            </span>
            <span class="overflow-container">
                <p class="overflow-inner-body delay2 vineyard-text">
                    <?php echo $club_section_01['text_field'];?>
                </p>
            </span>

        </div>
<?php endif; ?>
        </section>

        <div id="trigger-boxes-club"></div>
        <!-- Content2 -->
        <section class="content2">
            <!-- SquareBoxes -->
            <div class="square-container" id="square-boxes-mobile-club">
                <div aria-label="Click to read about Premier Club" class="square-box-1" id="club-box-1">
                    <!-- <h3 class="square-boxes-subtitle"> 01</h3> -->
                    <h2 id="square-boxes-title"> premier club</h2>
                    <!-- <div id="square-boxes-hover-text-1"> CLUB MEMBER ONLY ACCESS </div> -->
                    <!-- <div id="square-boxes-line-1"></div> -->

                </div>
                <div aria-label="Click to read about Rare Release Club" class="square-box-2" id="club-box-2">
                    <!-- <h3 class="square-boxes-subtitle"> 02</h3> -->
                    <h2 id="square-boxes-title-2"> rare release club</h2>
                    <!-- <div id="square-boxes-hover-text-2"> CLUB MEMBER ONLY ACCESS </div> -->
                    <!-- <div id="square-boxes-line-2"></div> -->


                </div>
                <div aria-label="Click to read about Classic Club" class="square-box-3" id="club-box-3">
                    <!-- <h3 class="square-boxes-subtitle"> 03</h3> -->
                    <h2 id="square-boxes-title-3"> classic club </h2>
                    <!-- <div id="square-boxes-hover-text-3"> CLUB MEMBER ONLY ACCESS </div> -->
                    <!-- <div id="square-boxes-line-3"></div> -->

                </div>
            </div>

        </section>


        <div id="trigger-premiere-text"></div>


        <!-- Content3 -->
        <section>


            <div class="premiere-background-lines">
                <!-- Premier Club BENEFITS -->




                <div class="premiere-club iddle premiere">

                    <div class="club-mobile-container">

                        <div class="flex-container space-between slideshowArrow__container club__mobile">
                            <img class="slideshowArrowClub arrowClub arrowLeftClub" src="/wp-content/uploads/2018/06/visit-slideshow-arrow-left.png">
                            <img class="slideshowArrowClub arrowClub arrowRightClub " src="/wp-content/uploads/2018/06/visit-slideshow-arrow-right.png">
                        </div>
                        <span class="overflow-container   premier-title-mobile-club margin-top-mobile">
                            <h1 class="premiere-club-benefits-title overflow-inner"> rare release club </h1>
                        </span>



                    </div>


                    <span class="overflow-container">
                        <h3 class="premiere-club-subtitle overflow-inner delay1"> 4 SHIPMENTS PER YEAR WITH 12 BOTTLES PER SHIPMENT </h3>
                    </span>

                    <span class="overflow-container ">
                        <a class="video-button overflow-inner delay2 club-button" id="join-now-button" href="https://shop.chamisalvineyards.com/clubs/Rare-Releases-Club">
                        JOIN NOW </a>
                    </span>

                    <span class="overflow-container">
                        <div class="premiere-text-section  delay2">
                            <h2 class="premiere-section-title">
                                <strong> OVERVIEW: </strong>
                            </h2>
                            <p class="premiere-section-text overview"> The Rare Release Club features selections from our entire portfolio, including vineyard-designate
                                and small-lot offerings. Members enjoy shipments of small-lot selections and the full range
                                of Edna Valley and vineyard-designate wines, as well as the following benefits: </p>

                            <h2 class="premiere-section-title">
                                <strong>BENEFITS INCLUDE: </strong>
                            </h2>
                            <ul class="premiere-section-text premiere-line-height benefits">
                                <li> • Acess to limited-production wines, library and large-format wines</li>
                                <li> • 50% discount on shipping of all Chamisal orders</li>
                                <li> • 20% savings on wine</li>
                                <li> • Annual birthday special offer of 35% discount (not valid on club shipments)</li>
                                <li> • Rare Release member pricing for winery events</li>
                                <li> • Complimentary inviation for member and guest to quarterly Pick-up Parties and annual Loyalist
                                    Party</li>
                                <li> • Priority access to out Estate Patio</li>
                                <li> • Complimentary tasting at our sister properties in California: Pine Ridge Vineyards, Napa,
                                    and Seghesio Family Vineyards, Healdsburg; in Oregon, Archery Summit, Willamette Valley;
                                    and in Washington, Seven Hills Winey, Walla Walla. Double Canyon, Horse Heaven Hills,
                                    can be tasted at the Estates Wine Room in Seattle.</li>
                                <li> • Shipments for all club tiers go out in March, May, September and November</li>
                            </ul>

                        </div>
                    </span>


                </div>

                <!-- End of premiere bg lines -->
            </div>
        </section>

        <div id="about-trigger"></div>


<?php
$club_section_02 = get_field('club_section_02');
if($club_section_02): ?>
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
<?php endif; ?>



    </div>

    <?php

get_footer();