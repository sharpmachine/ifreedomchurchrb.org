<?php 
/*
* Template Name: About Page
*/
get_header(); ?>

	<section class="page-header">
		<div class="container"><h1><?php the_field('page_heading'); ?></h1></div>
	</section>
	<div class="tabbys">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab">
				<li class="active"><a href="#whoweare">Who We Are</a></li>
				<li><a href="#sof">What We Believe</a></li>
			</ul>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
		<section id="page">

			<div class="tab-content">
			  <div class="tab-pane active" id="whoweare">
			
				<?php while(the_repeater_field('head_leaders')): ?>
					<h3><?php the_sub_field('head_leader_name'); ?></h3>
					<h3 class="black"><?php the_sub_field('head_leader_position'); ?></h3>
					<div class="leader">
						<img src="<?php the_sub_field('head_leader_headshot'); ?>" alt="">
						<div class="bio"><?php the_sub_field('head_leader_bio'); ?></div>
						<div class="clearfix"></div>
					</div>
				<?php endwhile; ?>
				<h3 class="gray big-bottom">Associate Leaders</h3>
					<?php while(the_repeater_field('associate_leaders')): ?>
					<h3><?php the_sub_field('associate_leader_name'); ?></h3>
					<h3 class="black"><?php the_sub_field('associate_leader_position'); ?></h3>
					<div class="leader">
						<img src="<?php the_sub_field('associate_leader_headshot'); ?>" alt="">
						<div class="bio"><?php the_sub_field('associate_leader_bio'); ?></div>
						<div class="clearfix"></div>
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
