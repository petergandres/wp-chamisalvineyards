<?php
/*
Template Name: General ACF Template
*/

get_header();

?>


<div id="body">
<div class="hide-mail"></div>



   <div id="primary" class="content-area">
       <main id="main" class="site-main custom-page-acf">
       <?php
            $general = get_field('general_group_1');
            if($general): ?>
                <div class="general-title">
                    <h2><?php echo $general['title'];?></h2>
                </div>

                <div class="general-body">
                    <h3><?php echo $general['subtitle'];?></h3>
                    <p><?php echo $general['text'];?></p>
                </div>

                <div class="general-image">
                    <img src="<?php echo $general['image'];?>" alt="general custom">

                </div>

        <?php endif; ?>

        <div class="wys"><?php the_field('general_custom'); ?></div>
        <div class="general-button">
            <a href="<?php echo the_field('button_link');?>"><?php echo the_field('button_text');?></a>
        </div>

       </main><!-- #main -->
   </div><!-- #primary -->
</div>





<?php

get_footer();
