<?php get_header(); ?>

		<div class="container">
			<div class="row">
				<section class="hero-home">
					<div class="hero-content">
						<div id="church-info">
							<h2 class="tagline"><?php bloginfo('description'); ?></h2>
							<div class="span7 service-info">
								<h2>Red Bluff, Ca</h2>
								<div class="info-title">Meeting Times</div>
								
								<?php while(the_repeater_field('meeting_time','option')): ?>
									<div class="sub-title"><?php the_sub_field('meeting_day'); ?> <?php the_sub_field('meeting_start_time'); ?></div>
									<div class="related-info"><?php the_sub_field('meeting_address'); ?></div>
									<a href="#" class="see-map-icon" data-box="<?php the_sub_field('meeting_address'); ?>"></a>
									<a href="http://maps.google.com/maps?saddr=&daddr=<?php the_sub_field('meeting_address'); ?>" class="get-directions-icon" style="display:none; " data-box="<?php the_sub_field('meeting_address'); ?>"></a>
								<?php endwhile; ?>	
								
								<div class="info-title clearfix">Phone</div>
								<div class="related-info"><?php the_field('phone_number', 'option'); ?></div>
									
								<a href="#" class="open-info-box visting btn btn-large"><?php the_field('info_box_button_label', 'option'); ?></a>
							</div>
							
							
							<?php while(the_repeater_field('meeting_time','option')): ?>
							<div class="span10 info-box" data-box="<?php the_sub_field('meeting_address'); ?>">
								<div class="info-box-content">
									<span class="close-box"><a href="#">X</a></span>
									<div class="see-map">
										<img src="http://maps.googleapis.com/maps/api/staticmap?center=<?php the_sub_field('meeting_address'); ?>&zoom=16&size=330x200&maptype=roadmap&markers=color:red%7Ccolor:red%7Clabel:C%7C<?php the_sub_field('meeting_address'); ?>&sensor=false" alt="Map" class="map">
										<a href="http://maps.google.com/maps?saddr=&daddr=<?php the_sub_field('meeting_address'); ?>">Get Directions</a>
									</div><!-- .see-map -->
								</div>
							</div>
							<?php endwhile; ?>

							<div class="span10 info-box" id="visiting_box">
								<div class="info-box-content">
									<span class="close-box"><a href="#">X</a></span>
									<div class="visiting-info">
										<p class="sudo-title"><?php the_field('info_box_title', 'option'); ?></p>
									
										<?php the_field('info_box_content', 'option'); ?>
									</div>
								</div>
							</div>
							
						</div>
					</div><!-- .hero-content -->
						<div id="news-feed">
							<div id="news-feed-content">
								<h4><a href="<?php bloginfo('url'); ?>/category/news-feed">News Feed</a></h4>
							<?php query_posts('cat=5&showposts=1'); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<span><?php the_title(); ?></span>
								<?php the_excerpt(); ?>
							<?php endwhile; else: ?>
								<p>No announcements at this time.</p>
							<?php endif; ?>
							</div>
						</div>
						<div id="promote">
							<a href="<?php bloginfo('url'); ?>/ignite"><img src="<?php bloginfo('template_directory'); ?>/img/ignite-logo.png" width="230" height="92" alt="Ignite Logo"></a>
							<h4 class="promote">Youth Meets Every Thursday at 7pm</h4>
						</div>
					
					
				</section>
				<div id="events-anchor"></div>
				<section id="page">
					
			
					<h4>Upcoming Events</h4>
				
						<?php echo do_shortcode( '[events_list]' ); ?>
					
					<hr>
					<article id="free-thinking" class="span16">
						<h4><a href="<?php bloginfo('url'); ?>/category/free-thinking"><span>Free Thinking</span></a></h4>
						<div id="ft-content">
					<?php query_posts('cat=6&showposts=1'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; else: ?>
						<p>No Free Thinking posts at this time.</p>
					<?php endif; ?>
						</div>
					</article>
						
		
				</section><!-- #page -->

<?php get_footer(); ?>
