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
			<div class="row">
			<?php while(the_repeater_field('add_friend')): ?>
				<div class="friends span8">
					<a href="<?php the_sub_field('friend_website_url'); ?>"><img src="<?php the_sub_field('friend_logo_or_photo'); ?>" alt="<?php the_sub_field('friend_name'); ?>"></a>
					<h3 class="black"><?php the_sub_field('friend_name'); ?></h3>
					<a href="<?php the_sub_field('friend_website_url'); ?>"><?php the_sub_field('friend_website_url'); ?></a>
				</div>
			<?php endwhile; ?>
			</div>
		</section><!-- #page -->

<?php get_footer(); ?>
