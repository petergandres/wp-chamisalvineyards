<?php
/*
Template Name: Store Locator Template
*/

get_header();

?>


    <?php
$store_hero = get_field('store_hero');
if($store_hero): ?>
        <div id="page4">
            <!-- Main -->
            <section>
                <div class="page-content-shop-locator store-locator-page" id="trigger-homepage">

                    <div class="hero-container shop gift-page">
                        <span class="overflow-container">
                            <h2 class="overflow-inner hero-subtitle">
                                <?php echo $store_hero['subtitle'];?>
                            </h2>
                        </span>

                        <span class="overflow-container">
                            <h1 class="overflow-inner hero-title delay1">
                                <?php echo $store_hero['title'];?>
                            </h1>
                        </span>
                        <span class="overflow-container">
                            <p class="overflow-inner hero-text delay2">
                                <?php echo $store_hero['text_field'];?>
                            </p>
                        </span>

                        <div class="shop-children-container">

                            <a class="video-button shop-learn-more wines" href="<?php echo $store_hero['button_a_link'];?>">
                                <?php echo $store_hero['button_a_text'];?>
                            </a>
                            <a class="video-button shop-learn-more collections" href="<?php echo $store_hero['button_b_link'];?>">
                                <?php echo $store_hero['button_b_text'];?>
                            </a>
                        </div>

                    </div>

                </div>
                <!-- NavbarTrigger to fadeOut -->
                <div id="navbar-trigger"></div>

            </section>
            <?php endif; ?>

                <?php get_template_part('template-parts/golden-lines','id-error'); ?>                

            <!-- Content1 -->
            <section>

                <div id="trigger-call-to-action" class="cta-no-margin"></div>

                <!-- Call to Action -->
                <?php get_template_part('template-parts/modal','cta'); ?>
                <?php get_template_part('template-parts/modal','book'); ?>

                <!-- NavbarTrigger to fadeIn -->
                <div id="navbar-trigger-in" class="spacer s0"></div>
            </section>


            <?php
            $store_locator_content = get_field('store_locator_content');
            if($store_locator_content): ?>
                <section class="content1 property-locator">

                    <div id="trigger-property-locator"></div>

                    <div class="property-content">
                        <span class="overflow-container">
                            <h2 class="main-subtitle overflow-inner"> 
                                <?php echo $store_locator_content['subtitle'];?>
                            </h2>
                        </span>
                        <br>
                        <span class="overflow-container">
                            <h1 class="main-title overflow-inner delay1" id="vineyard-title">
                                <?php echo $store_locator_content['title'];?>
                            </h1>
                        </span>
                        <span class="overflow-container">

                            <p class="overflow-inner-body delay2 about-page vineyard-text">
                                <?php echo $store_locator_content['text_field'];?>
                            </p>
                        </span>

                    </div>
                </section>
            <?php endif; ?>


            <section  id="store-locator-bg">
                <div id="grappos-widget">&nbsp;</div>
                <script type="text/javascript" src="https://www.grappos.com/rwidget/js/load.js"></script>
                <script type="text/javascript">
                    // <![CDATA[
                    var grapposConfig = {};
                    grapposConfig.uid = 'BB-269250131'; // This is the Unique Identifier for this locator and product list.
                    grapposConfig.theme = ''; // "silver" "green" or "default". If left empty, color configs must be set manually.
                    grapposConfig.bkgdClr = 'transparent'; //Background Color of the Widget
                    grapposConfig.itemClr = 'white'; //Background Color for Lists and Buttons
                    grapposConfig.txtClr = '#7c7a75'; //Widget Text Color
                    grapposConfig.hoverClr = '#A36833'; //Background Color for list items and buttons on Mouse Over
                    grapposConfig.hoverTxtClr = '#ffffff'; //Text Color for buttons and list items on Mouse Over
                    grapposConfig.buttonBorders = 'true'; //	Should buttons have a border around them. Options: "true", "false"
                    grapposConfig.buttonBkgd = 'true'; //	Should buttons use the itemClr as background color Options: "true", "false"
                    grapposConfig.fontFamily = '"Source Sans Pro"'; //By default the widget uses the Web Font "Lato", We also support "Bitter" and any standard css declared font families.
                    grapposConfig.numResults = 50; //Maximum Number of Results to be displayed. Default is 50. Max is 100.
                    grapposConfig.distanceThreshold = 25; // Maximum distance a retailer is from the search location. Default is 25. Max is 100.
                    // ]]>
                </script>
            </section>





            <div id="about-trigger"></div>
            <?php
            $store_locator_cta = get_field('store_locator_cta');
            if($store_locator_cta): ?>
                <section id="footer-outro">
                    <div class="about-us">
                        <div class="about-us-content">

                            <span class="overflow-container">
                                <h2 class="main-subtitle-visit-us overflow-inner">
                                    <?php echo $store_locator_cta['subtitle'];?>
                                </h2>
                            </span>

                            <span class="overflow-container">
                                <h1 class="main-title overflow-inner delay1">
                                    <?php echo $store_locator_cta['title'];?>
                                </h1>
                            </span>

                            <!-- <a class="video-button learn-more"  href="/about" > LEARN MORE </a> -->
                            <span class="overflow-container overflow-button-center">
                                <a class="overflow-inner delay2 video-button outro-button-no-margin" href="<?php echo $store_locator_cta['button_link'];?>">
                                    <?php echo $store_locator_cta['button_text'];?>
                                </a>
                            </span>
                            <!-- Mail Trigger 5 -->
                            <div id="trigger5" class="spacer s0"></div>
                        </div>

                        <img role="presentation" alt="" src="/wp-content/uploads/2018/07/mini-shop-footer-background_v3.png" />
                    </div>

                </section>
                <?php endif; ?>




        </div>


        <?php

get_footer();