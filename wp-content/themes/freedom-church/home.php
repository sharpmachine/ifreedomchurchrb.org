<?php get_header(); ?>
				
				<section class="hero">
					<div class="hero-content">
						<div id="church-info">
							<h2 class="tagline"><?php bloginfo('description'); ?></h2>
							<div class="span7 service-info">
								<h2>Red Bluff, Ca</h2>
								<div class="info-title">Service Times</div>
								<div class="service-time">Mondays 7pm</div>
								<div class="related-info">Rio Street Red Bluff, CA <a href="#" class="open-map"><img src="<?php bloginfo('template_directory'); ?>/img/see-map.png" width="26" height="26" alt="See Map"></a></div>
								<div class="service-time">Thursdays 7pm</div>
								<div class="related-info">Red Bank Road, Red Bluff, CA <a href="http://maps.google.com/maps?saddr=&daddr=Rio Street, Red Bluff, Ca 96080"><img src="<?php bloginfo('template_directory'); ?>/img/get-directions.png" width="26" height="26" alt="See Map"></a></div>
								<div class="info-title">Phone</div>
								<div class="related-info">(530) 355 2284</div>
								<a href="#" class="open-info-box visting btn btn-large">Thinking of Visiting?</a>
							</div>
							<div class="span10 info-box">
								<span class="close-box"><a href="#">X</a></span>
								<div class="see-map">
									<img src="http://maps.googleapis.com/maps/api/staticmap?center=Rio Street, Red Bluff, Ca&zoom=16&size=330x200&maptype=roadmap&markers=color:red%7Ccolor:red%7Clabel:C%7CRio Street, Red Bluff, Ca&sensor=false" alt="Map" class="map">
									<a href="http://maps.google.com/maps?saddr=&daddr=Rio Street, Red Bluff, Ca 96080">Get Directions</a>
								</div>
								<div class="visiting-info">
									<p class="sudo-title">Thinking of visiting?<br>
									Here’s what you can expect.</p>
									
									<p>Visiting a church for the first time can be nerve-racking. But having an idea of what to expect can help! We meet as house church where we worship, share testimonies, have teaching and pray for each other. We love connecting with people and the intimacy small groups worshipping together creates.</p>

									<p>Our aim is to equip and activate our house churches to serve in the community, demonstrating the gospel with signs &amp; wonders to those they meet, thereby fulfilling the Ephesians 4 'equipping of the saints for the work of ministry'.</p>
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
							<h4>Youth Meets Every Thursday at 7pm</h4>
						</div>
					
					
				</section>

				<section id="page">
			
					<h3>Upcoming Events</h3>
						<?php echo do_shortcode( '[events_list]' ); ?>
					<hr>
					
						<h4><a href="<?php bloginfo('url'); ?>/category/free-thinking">Free Thinking</a></h4>
					<?php query_posts('cat=6&showposts=1'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; else: ?>
						<p>No Free Thinking posts at this time.</p>
					<?php endif; ?>
		
				</section><!-- #page -->
<?php get_footer(); ?>
