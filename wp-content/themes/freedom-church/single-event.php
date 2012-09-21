<?php get_header(); ?>
<section class="page-header">
	<div class="container">
		<h1>Upcoming Events</h1>
	</div>
</section>
<div class="container">
	<div class="row">
		<section id="page">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<?php the_title() ?>
				<?php the_content() ?>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>
		</section><!-- #page -->

<?php get_footer(); ?>
