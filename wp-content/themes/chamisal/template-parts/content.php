<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Chamisal_Custom
 */

?>




	<div class="col-md-4 card-padding">
		
		<div class="card-block">

					<?php 

					$image = get_field('event_image');

					if( !empty($image) ): ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>

					<div class="card-content-container">
						<h4  class="event-schedule-time"><?php the_field('event_date'); ?></h4>
						<h1 class="main-title-schedule schedule-sm"><?php the_field('event_name'); ?></h1>
						<h2 class="event-block-text"><?php the_field('event_description'); ?></h2>



						<?php if('none' == get_field('link_type')): ?>
						
						<?php elseif('email_true' == get_field('link_type')): ?>
							<a class="video-button" id="rsvp-now-button" href="mailto:<?php the_field('email')?>"><?php the_field('email_events_button')?></a>

						<?php elseif('outbound_true' == get_field('link_type')): ?>
							<a class="video-button" id="rsvp-now-button" target="_blank" rel="noopener noreferrer" href="<?php the_field('outbound_link')?>"><?php the_field('outbound_link_button_text')?></a>
						<?php endif; ?>
					</div>


		</div>

	</div>
