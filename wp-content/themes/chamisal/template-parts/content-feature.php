
			<div class="col-md-12 card-padding">

			
				<div class="card-block">

					<?php $feature_image = get_field('feature_image');
					if( !empty($feature_image)): ?>
					<img src="<?php echo $feature_image['url']?>" alt="<?php echo $feature_image['alt']?>" />
					<?php endif; ?>

					<?php $feature_date = get_field('feature_date', false, false);
					$feature_date = new DateTime($feature_date); ?>

					<h4 class="event-schedule-time"><?php echo $feature_date->format('j M Y');?></h4>
					<h1 class="main-title-schedule schedule-sm"><?php the_field('feature_title');?></h1>
					<h2 class="event-block-text"><?php the_field('feature_description');?></h2>
					<a class="video-button" id="rsvp-now-button">  SOLD OUT! </a>  

				</div>

			</div>
	