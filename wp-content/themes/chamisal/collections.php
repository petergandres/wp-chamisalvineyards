<?php
/*
Template Name: collection Template
*/

get_header();

?>


<?php
$collection_hero = get_field('collection_hero');
if($collection_hero): ?>
    <div id="page4">
        <!-- Main -->
        <section>
            <div class="page-content-shop collection-page" id="trigger-homepage">

                <div class="hero-container shop collection-page">
                    <span class="overflow-container">
                        <h2 class="overflow-inner hero-subtitle"> 
                            <?php echo $collection_hero['subtitle'];?>
                        </h2>
                    </span>

                    <span class="overflow-container">
                        <h1 class="overflow-inner hero-title delay1">
                            <?php echo $collection_hero['title'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">
                        <p class="overflow-inner hero-text delay2"> 
                            <?php echo $collection_hero['text_field'];?>
                        </p>
                    </span>

                     <div class="shop-children-container">
                            <a class="video-button shop-learn-more wines" href="/shop/">Wines</a>
                            <a class="video-button shop-learn-more gifts" href="/shop/gifts/">Gifts</a>
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

            <!-- ImFeelingLikeSection -->

            <div class="tasting-row controls" id="tasting-row-row">

                <h2 id="feeling-like-title"> I'M FEELING...</h2>


                <select class="select-filter" id="select3">
                    <option value="all" data-filter="all">a bit of everything</option>
                    <option value="bold" data-filter=".bold">bold & spicy</option>
                    <option value="fun" data-filter=".fun">fun & flirty</option>
                    <option value="fruity" data-filter=".fruity">crisp & fruity</option>
                    <option value="cozy" data-filter=".cozy">cozy & warm</option>

                </select>

                <button class="hidden-filter all-filter" type="button" data-filter="all"></button>
                <button class="hidden-filter bold-filter" type="button" data-filter=".bold"></button>
                <button class="hidden-filter fun-filter" type="button" data-filter=".fun"></button>
                <button class="hidden-filter fruity-filter" type="button" data-filter=".fruity"></button>
                <button class="hidden-filter cozy-filter" type="button" data-filter=".cozy"></button>


            </div>



            <!-- Call to Action -->
            <?php get_template_part('template-parts/modal','cta'); ?>
            <?php get_template_part('template-parts/modal','book'); ?>

            <!-- NavbarTrigger to fadeIn -->
            <div id="navbar-trigger-in" class="spacer s0"></div>
        </section>


        <!-- Content Labels -->

<?php if (have_rows('shop_labels')):
    while( have_rows('shop_labels')): the_row();

    //vars
    $label1 = get_sub_field(label_01);
    $label2 = get_sub_field(label_02);
    $label3 = get_sub_field(label_03);
    $label4 = get_sub_field(label_04);

?>
        <section>

            <div class="label-container">
                <div class="row" id="label-col">
         

                    <div class="col-md-3 label-border">
                        <div class="label-title"> 
                            <?php echo $label1['label_title'];?>
                        </div>
                        <div class="label-subtitle">
                            <?php echo $label1['label_text'];?>
                        </div>
                    </div>

                    <div class="col-md-3 label-border">
                        <div class="label-title"> 
                            <?php echo $label2['label_title'];?>
                        </div>
                        <div class="label-subtitle"> 
                            <?php echo $label2['label_text'];?>
                        </div>
                    </div>
                    <div class="col-md-3 label-border">
                        <div class="label-title">
                            <?php echo $label3['label_title'];?>
                        </div>
                        <div class="label-subtitle"> 
                            <?php echo $label3['label_text'];?>
                        </div>
                    </div>
                    <div class="col-md-3 label-border-none">
                        <div class="label-title"> 
                            <?php echo $label4['label_title'];?>
                        </div>
                        <div class="label-subtitle"> 
                            <?php echo $label4['label_text'];?>
                        </div>
                    </div>
                </div>
            </div>

        </section>
<?php endwhile;?>
<?php endif;?>

        <section>
            <?php
          $argscollections = array(
              'post_type' => 'collections',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'order' => 'ASC',
              'orderby' => 'menu_order'
          );
          $querycollections = new WP_Query($argscollections);

          $count = 0;
        ?>
                <div class="container product-wrapper">



                        <?php if ( $querycollections->have_posts() ) : while ( $querycollections->have_posts() ) : $querycollections->the_post(); ?>

                   <?php if ($count % 2 === 0) : ?>
                   <div class="row">
                   <?php endif; ?>
                        <div class="col-md-6 ">
                            <div class="product-label-container">
                                <?php 

                                    $collection_image = get_field('collection_image');

                                if (!empty($collection_image)) : ?>

                                    <a href="<?php the_field('outbound_link') ?>">
                                        <img class="product-image" src="<?php echo $collection_image['url']; ?>" alt="<?php echo $collection_image['alt']; ?>" />
                                    </a>

                                <?php endif; ?>
                            <div class="product-details-wrapper">

                         
                                <h1 class="product-shop-title">
                                    <?php the_field('collection_name'); ?> </h1>

                                <div class="product-desc-container">
                                    <div class="product-header-container">
                                        <?php the_field('collection_set_includes'); ?>
                                    </div>
                                   
                                    <div class="product-inner-container">
                                         <?php the_field('collection_details'); ?>
                                    </div>
                                    <div class="product-footer-container">
                                        <?php the_field('collection_footer_info'); ?>
                                        <span class="price"><p>&#36;<?php the_field('collection_price'); ?></p></span>
                                    </div>
                                   
                                </div>    

                                <a class="video-button shop-learn-more"  href="<?php the_field('outbound_link') ?>">
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
                <?php if ($count % 2 != 0)  : ?>
                    </div> 
                    <!-- row -->
                <?php endif; $count = $count + 1?>    
                        <?php endwhile; endif; wp_reset_postdata();?>
                   

                </div>

        </section>



        <div id="about-trigger"></div>
<?php
$collection_cta = get_field('collection_cta');
if($collection_cta): ?>
        <section id="footer-outro">
            <div class="about-us">
                <div class="about-us-content">

                    <span class="overflow-container">
                        <h2 class="main-subtitle-visit-us overflow-inner"> 
                            <?php echo $collection_cta['subtitle'];?>
                        </h2>
                    </span>

                    <span class="overflow-container">
                        <h1 class="main-title overflow-inner delay1">
                            <?php echo $collection_cta['title'];?>
                        </h1>
                    </span>

                    <!-- <a class="video-button learn-more"  href="/about" > LEARN MORE </a> -->
                    <span class="overflow-container overflow-button-center">
                        <a class="overflow-inner delay2 video-button outro-button-no-margin" href="<?php echo $collection_cta['button_link'];?>">
                            <?php echo $collection_cta['button_text'];?>
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