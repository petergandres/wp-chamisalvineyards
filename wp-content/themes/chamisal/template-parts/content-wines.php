<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * 
 *
 * @package Chamisal_Custom
 */

?>

<div class="col-md-4 mix <?php the_field('wine_category');?>">
        <div class="wine-label-container">
            <?php 

            $wine_image = get_field('wine_image');

            if( !empty($wine_image) ): ?>

            <a href="<?php the_field('outbound_wine_link')?>">
                <img id="wine-image" src="<?php echo $wine_image['url']; ?>" alt="<?php echo $wine_image['alt']; ?>" />
            </a>

            <?php endif; ?>

            <h1 class="wine-shop-title"> <?php the_field('wine_name'); ?> </h1>
                <h3 class="wine-shop-subtitle"> <?php the_field('wine_location'); ?></h3>

                    <a class="video-button shop-learn-more"  href="<?php the_field('outbound_wine_link')?>">  <?php the_field('outbound_wine_button_text')?></a>
                    
        </div>
</div>