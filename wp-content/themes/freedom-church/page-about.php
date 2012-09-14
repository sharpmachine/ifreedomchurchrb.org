<?php 
/*
* Template Name: About Page
*/
get_header(); ?>

		<section id="page">
			<h1><?php the_field('page_heading'); ?></h1>

			
			<ul class="nav nav-tabs" id="myTab">
			  <li class="active"><a href="#whoweare">Who We Are</a></li>
			  <li><a href="#sof">What We Believe</a></li>
			</ul>

			<div class="tab-content">
			  <div class="tab-pane active" id="whoweare">
				<h3>Head Leaders</h3>
				<?php while(the_repeater_field('head_leaders')): ?>
					<div class="leader">
						<?php the_sub_field('head_leader_name'); ?><br>
						<?php the_sub_field('head_leader_position'); ?><br>
						<?php the_sub_field('head_leader_bio'); ?>
						<img src="<?php the_sub_field('head_leader_headshot'); ?>" alt="">
					</div>
				<?php endwhile; ?>
				<h3>Associate Leaders</h3>
				<?php while(the_repeater_field('associate_leaders')): ?>
					<div class="leader">
						<?php the_sub_field('associate_leader_name'); ?><br>
						<?php the_sub_field('associate_leader_position'); ?><br>
						<?php the_sub_field('associate_leader_bio'); ?>
						<img src="<?php the_sub_field('associate_leader_headshot'); ?>" alt="">
					</div>
				<?php endwhile; ?>
			  </div>
			  <div class="tab-pane" id="sof">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
					<!-- post navigation -->
				<?php else: ?>
					<!-- no posts found -->
				<?php endif; ?>
				
				</div>
			</div>

			<script>
			
			jQuery('#myTab a').click(function (e) {
			  e.preventDefault();
			  jQuery(this).tab('show');
			})
			</script>
			
		</section><!-- #page -->

<?php get_footer(); ?>
