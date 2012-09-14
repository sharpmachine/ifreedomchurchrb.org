<?php get_header(); ?>

		<section id="page">
			<h1><?php the_field('page_heading'); ?></h1>

			<?php while(the_repeater_field('add_friend')): ?>
				<div class="leader">
					<?php the_sub_field('friend_name'); ?><br>
					<img src="<?php the_sub_field('friend_logo_or_photo'); ?>" alt="<?php the_sub_field('friend_name'); ?>"><br>
					<a href="<?php the_sub_field('friend_website_url'); ?>"><?php the_sub_field('friend_website_url'); ?></a>
				</div>
			<?php endwhile; ?>
			
		</section><!-- #page -->

<?php get_footer(); ?>
