<?php get_header(); ?>
<section class="page-header">
	<div class="container">
		<h1>Upcoming Events</h1>
	</div>
</section>
<div class="container">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<img src="<?php the_field('big_photo'); ?>" width="845" height="185" alt="Event Image" class="single-event-image">
			<?php the_content() ?>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>
