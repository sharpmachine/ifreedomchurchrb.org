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
				
				<?php the_title() ?>
				<?php the_content() ?>
			<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>
		</section><!-- #page -->

<?php get_footer(); ?>
