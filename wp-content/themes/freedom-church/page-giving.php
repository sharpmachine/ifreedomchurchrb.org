<?php get_header(); ?>
<section class="page-header">
	<div class="container">
		<?php if(get_field('page_heading')): ?>
		<h1>
		<?php the_field('page_heading'); ?>
		</h1>
		<?php else: ?>
		<h1>
			<?php the_title(); ?>
		</h1>
		<?php endif; ?>
	</div>
</section>
<div class="container">
	<div class="row">

		<section id="page">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="span8"><?php the_content(); ?></div>
					<div class="span8 offset1"><?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  the_post_thumbnail();
					} 
					?></div>
			<?php endwhile; endif; ?>
			</div>
			
			<div id="one-time-donations">
				<?php while(the_repeater_field('one-time_donation_buttons')): ?>
					<a href="<?php the_sub_field('one_time_paypal_url'); ?>" class="btn btn-large"><?php the_sub_field('one_time_button_label'); ?></a>
				<?php endwhile; ?>
				</div><!-- #one-time-donations -->
				<div class="row">
					<div class="feature-box">
						<div class="span9"><img src="<?php the_field('mission_partners_logo_or_photo'); ?>" alt="<?php the_field('mission_partners'); ?>"></div>
						<div class="span7 feature-box-info">
							<h3 class="black">Mission Partners</h3>
							<?php the_field('mission_partners'); ?>
						</div>
					</div>
				</div>
			
			
			<div id="monthly-parnter" class="row">
				<div class="span4"><h3 class="black">Monthly Partner</h3></div>
				<div class="span12">
					<?php while(the_repeater_field('monthly_partner')): ?>
						<a href="<?php the_sub_field('monthly_partner_paypal_url'); ?>" class="btn btn-large"><?php the_sub_field('monthly_partner_button_label'); ?></a>
					<?php endwhile; ?>
				</div>
			</div>
			
			<img title="Card Logos" src="<?php bloginfo('template_directory'); ?>/img/cards.png" alt="Card Logos" width="144" height="21" /> <span class="paypal-notice">All payments are process by</span> <img title="Paypal Logo" src="<?php bloginfo('template_directory'); ?>/img/paypal.png" alt="Paypal Logo" width="74" height="21" />
			
		</section><!-- #page -->

<?php get_footer(); ?>
