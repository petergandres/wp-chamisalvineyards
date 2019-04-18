<?php
/*
Template Name: Shop Template
*/

get_header();

?>


<?php
$shop_hero = get_field('shop_hero');
if($shop_hero): ?>
    <div id="page4">
        <!-- Main -->
        <section>
            <div class="page-content-shop" id="trigger-homepage">

                <div class="hero-container shop">
                    <span class="overflow-container">
                        <h2 class="overflow-inner hero-subtitle"> 
                            <?php echo $shop_hero['subtitle'];?>
                        </h2>
                    </span>

                    <span class="overflow-container">
                        <h1 class="overflow-inner hero-title delay1">
                            <?php echo $shop_hero['title'];?>
                        </h1>
                    </span>
                    <span class="overflow-container">
                        <p class="overflow-inner hero-text delay2"> 
                            <?php echo $shop_hero['text_field'];?>
                        </p>
                    </span>

                    <div class="shop-children-container">
                            <a class="video-button shop-learn-more gifts" href="/shop/gifts/">Gifts</a>
                            <a class="video-button shop-learn-more collections" href="/shop/collections/">Collections</a>
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

                <?php
                $category_label = get_field('wine_category_label'); ?>

                <!-- Replace this section to be custom field -->
                <select class="select-filter" id="select3">
                    <option value="all" data-filter="all">a bit of everything</option>
                    <option value="bold" data-filter=".bold"><?php echo $category_label['filter_a'];?></option>
                    <option value="fun" data-filter=".fun"><?php echo $category_label['filter_b'];?></option>
                    <option value="fruity" data-filter=".fruity"><?php echo $category_label['filter_c'];?></option>
                    <option value="cozy" data-filter=".cozy"><?php echo $category_label['filter_d'];?></option>

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
          $argsWine = array(
              'post_type' => 'wines',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'order' => 'ASC',
              'orderby' => 'menu_order'
          );
          $queryWine = new WP_Query($argsWine);

     
        ?>
                <div class="wine-container container">

                    <div class="row">


                        <?php if ( $queryWine->have_posts() ) : while ( $queryWine->have_posts() ) : $queryWine->the_post(); ?>

                        
                        <!-- <div class="col-md-4 mix <?php the_field('wine_category'); ?>"> -->
                        <div class="col-md-4 mix <?php 

                        $category = '';
                        $value = get_field('wine_category');
                        if($value) {
                            $category = implode(' ', (array)$value);
                        } 
                        echo $category;
                        ?>">

                  
                            <div class="wine-label-container">
                                <?php 

                                    $wine_image = get_field('wine_image');

                                    if (!empty($wine_image)) : ?>

                                <a href="<?php the_field('outbound_wine_link') ?>">
                                    <img id="wine-image" src="<?php echo $wine_image['url']; ?>" alt="<?php echo $wine_image['alt']; ?>" />
                                </a>

                                <?php endif; ?>

                                <h2 class="wine-shop-title">
                                    <?php the_field('wine_name'); ?> </h2>
                                <h3 class="wine-shop-subtitle">
                                    <?php the_field('wine_location'); ?>
                                </h3>

                                <a class="video-button shop-learn-more"  href="<?php the_field('outbound_wine_link') ?>">
                                    <?php the_field('outbound_wine_button_text') ?>
                                </a>

                            </div>
                        </div>


                        <?php endwhile; endif; wp_reset_postdata();?>
                    </div>

                </div>

        </section>



        <div id="about-trigger"></div>
<?php
$shop_join_club = get_field('shop_join_club');
if($shop_join_club): ?>
        <section id="footer-outro">
            <div class="about-us">
                <div class="about-us-content">

                    <span class="overflow-container">
                        <h2 class="main-subtitle-visit-us overflow-inner"> 
                            <?php echo $shop_join_club['subtitle'];?>
                        </h2>
                    </span>

                    <span class="overflow-container">
                        <h1 class="main-title overflow-inner delay1">
                            <?php echo $shop_join_club['title'];?>
                        </h1>
                    </span>

                    <!-- <a class="video-button learn-more"  href="/about" > LEARN MORE </a> -->
                    <span class="overflow-container overflow-button-center">
                        <a class="overflow-inner delay2 video-button outro-button-no-margin" href="<?php echo $shop_join_club['button_link'];?>">
                            <?php echo $shop_join_club['button_text'];?>
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