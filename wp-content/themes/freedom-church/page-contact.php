<?php get_header(); ?>

		<section id="page">
			<h1><?php the_field('page_heading'); ?></h1>
			
			<h3>Phone</h3>
			<?php the_field('contact_us_phone'); ?><br>
			
			<h3>Email</h3>
			<?php while(the_repeater_field('contact_us_emails')): ?>
				<?php the_sub_field('email_name'); ?>
				<a href="mailto:<?php the_sub_field('contact_us_email_address'); ?>"><?php the_sub_field('contact_us_email_address'); ?></a>
			<?php endwhile; ?>
			
			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			  the_post_thumbnail();
			} 
			?><br>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>
			
		</section><!-- #page -->

<?php get_footer(); ?>
