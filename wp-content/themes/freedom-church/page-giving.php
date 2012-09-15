<?php get_header(); ?>

		<section id="page">
			<h1><?php the_field('page_heading'); ?></h1>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail();
				} 
				?><br>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>
			
			<div id="one-time-donations">
				<?php while(the_repeater_field('one-time_donation_buttons')): ?>
					<a href="<?php the_sub_field('one_time_paypal_url'); ?>" class="btn"><?php the_sub_field('one_time_button_label'); ?></a>
				<?php endwhile; ?>
				<div class="feature-box">
					<img src="<?php the_field('mission_partners_logo_or_photo'); ?>" alt="">
					<h3>Mission Partners</h3>
					<?php the_field('mission_partners'); ?>
				</div>
			</div><!-- #one-time-donations -->
			
			<div id="monthly-parnter">
				<h3>Monthly Partner</h3>
				<?php while(the_repeater_field('monthly_partner')): ?>
					<a href="<?php the_sub_field('monthly_partner_paypal_url'); ?>" class="btn"><?php the_sub_field('monthly_partner_button_label'); ?></a>
				<?php endwhile; ?>
			</div>
			
			<a href="http://greaterworkshealing.com/wp-content/uploads/2011/06/cards.png"><img class="alignleft size-full wp-image-230 feature-box-img" title="Card Logos" src="http://greaterworkshealing.com/wp-content/uploads/2011/06/cards.png" alt="Card Logos" width="144" height="21" /></a>All payments are process by Paypal<img class="alignleft size-full wp-image-235 feature-box-img" title="Paypal Logo" src="http://greaterworkshealing.com/wp-content/uploads/2011/06/paypal.png" alt="Paypal Logo" width="74" height="21" />
			
		</section><!-- #page -->

<?php get_footer(); ?>
