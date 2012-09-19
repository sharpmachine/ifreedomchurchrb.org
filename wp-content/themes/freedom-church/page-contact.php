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
			<div class="row contact-details">
				<div class="span6">
					<h2 class="grayDark">Phone</h2>
					<div class="big-number"><?php the_field('contact_us_phone'); ?></div>
			
					<h2 class="grayDark">Email</h2>
					<?php while(the_repeater_field('contact_us_emails')): ?>
						<div class="contact-name"><?php the_sub_field('email_name'); ?></div>
						<a href="mailto:<?php the_sub_field('contact_us_email_address'); ?>"><?php the_sub_field('contact_us_email_address'); ?></a>
					<?php endwhile; ?>
				</div>
				<div class="span10 offset1">
					<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  the_post_thumbnail();
					} 
					?>
				</div>
			</div>
			<div class="row">
				<div class="span16 contact-form">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
			
		</section><!-- #page -->

<?php get_footer(); ?>
