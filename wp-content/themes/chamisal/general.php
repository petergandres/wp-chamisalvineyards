<?php
/*
Template Name: General Template
*/

get_header();

?>


<div id="body">
<div class="hide-mail"></div>


   <div id="primary" class="content-area">
       <main id="main" class="site-main custom-page">

            <?php
            dynamic_sidebar( 'custom-widget' );
            ?>
       </main><!-- #main -->
   </div><!-- #primary -->
</div>






<?php

get_footer();
