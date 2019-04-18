<?php
/*
Template Name: Corporate Gift Template
*/

get_header();

?>


    <?php
$gift_hero_corporate = get_field('gift_hero_corporate');
if($gift_hero_corporate): ?>
        <div id="page4">
            <!-- Main -->
            <section>
                <div class="page-content-shop corporate-gift-page" id="trigger-homepage">

                    <div class="hero-container shop gift-page">
                        <span class="overflow-container">
                            <h2 class="overflow-inner hero-subtitle">
                                <?php echo $gift_hero_corporate['subtitle'];?>
                            </h2>
                        </span>

                        <span class="overflow-container">
                            <h1 class="overflow-inner hero-title delay1">
                                <?php echo $gift_hero_corporate['title'];?>
                            </h1>
                        </span>
                        <span class="overflow-container">
                            <p class="overflow-inner hero-text delay2">
                                <?php echo $gift_hero_corporate['text_field'];?>
                            </p>
                        </span>

                        <div class="shop-children-container">

                            <a class="video-button shop-learn-more wines" href="<?php echo $gift_hero_corporate['button_a_link'];?>">
                                <?php echo $gift_hero_corporate['button_a_text'];?>
                            </a>
                            <a class="video-button shop-learn-more collections" href="<?php echo $gift_hero_corporate['button_b_link'];?>">
                                <?php echo $gift_hero_corporate['button_b_text'];?>
                            </a>
                        </div>

                    </div>

                </div>
                <!-- NavbarTrigger to fadeOut -->
                <div id="navbar-trigger"></div>

            </section>
            <?php endif; ?>


            <!-- Content1 -->
            <section>

                <div id="trigger-call-to-action" class="cta-no-margin"></div>

                <!-- Call to Action -->
                <?php get_template_part('template-parts/modal','cta'); ?>
                <?php get_template_part('template-parts/modal','book'); ?>

                <!-- NavbarTrigger to fadeIn -->
                <div id="navbar-trigger-in" class="spacer s0"></div>
            </section>


            <section>

                <?php
          $argsGifts = array(
              'post_type' => 'gifts',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'order' => 'ASC',
              'orderby' => 'menu_order',
              'key' => 'corporate_gift',
              'compare' => '=',
              'value' => '1'
          );
          $queryGifts = new WP_Query($argsGifts);
          $count = 0;
        ?>
                    <div class="container product-wrapper">

                        <?php if ( $queryGifts->have_posts() ) : while ( $queryGifts->have_posts() ) : $queryGifts->the_post(); ?>
                        <?php if ($count % 2 === 0) : ?>
                        <div class="row">
                            <?php endif; ?>
                            <!-- Check if selected -->
                            <?php if( get_field('corporate_gift') ): ?>

                            <div class="col-md-6 ">
                                <div class="product-label-container">
                                    <?php 

                                    $gift_image = get_field('gift_image');

                                if (!empty($gift_image)) : ?>

                                    <a href="<?php the_field('outbound_link') ?>">
                                        <img class="product-image" src="<?php echo $gift_image['url']; ?>" alt="<?php echo $gift_image['alt']; ?>" />
                                    </a>

                                    <?php endif; ?>
                                    <div class="product-details-wrapper">


                                        <h1 class="product-shop-title">
                                            <?php the_field('gift_name'); ?> </h1>

                                        <div class="product-desc-container">
                                            <div class="product-header-container">
                                                <?php the_field('gift_set_includes'); ?>
                                            </div>

                                            <div class="product-inner-container">
                                                <?php the_field('gift_details'); ?>
                                            </div>
                                            <div class="product-footer-container">
                                                <?php the_field('gift_footer_info'); ?>
                                                <span class="price">
                                                    <p>&#36;
                                                        <?php the_field('gift_price'); ?>
                                                    </p>
                                                </span>
                                            </div>

                                        </div>

                                        <a class="video-button shop-learn-more" href="<?php the_field('outbound_link') ?>">
                                            <?php the_field('outbound_button_text') ?>
                                        </a>

                                        <div class="delivery-container">
                                            <img role="presentation" src="/wp-content/uploads/2018/11/truck.svg">
                                            <p>Ground Shipping Included</p>
                                        </div>

                                    </div>
                                    <!-- product desc -->

                                </div>
                            </div>

                            <?php endif; ?>

                            <?php if ($count % 2 != 0)  : ?>
                        </div>
                        <!-- row -->
                        <?php endif; $count = $count + 1?>
                        <?php endwhile; endif; wp_reset_postdata();?>



                    </div>

            </section>



            <div id="about-trigger"></div>
            <?php
$gift_cta_corporate = get_field('gift_cta_corporate');
if($gift_cta_corporate): ?>
                <section id="footer-outro">
                    <div class="about-us">
                        <div class="about-us-content">

                            <span class="overflow-container">
                                <h2 class="main-subtitle-visit-us overflow-inner">
                                    <?php echo $gift_cta_corporate['subtitle'];?>
                                </h2>
                            </span>

                            <span class="overflow-container">
                                <h1 class="main-title overflow-inner delay1">
                                    <?php echo $gift_cta_corporate['title'];?>
                                </h1>
                            </span>

                            <!-- <a class="video-button learn-more"  href="/about" > LEARN MORE </a> -->
                            <span class="overflow-container overflow-button-center">
                                <a class="overflow-inner delay2 video-button outro-button-no-margin" href="<?php echo $gift_cta_corporate['button_link'];?>">
                                    <?php echo $gift_cta_corporate['button_text'];?>
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