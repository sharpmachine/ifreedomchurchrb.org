<?php get_header(); ?>
<section class="page-header">
	<div class="container">
		<?php if(get_field('page_heading')): ?>
		<h1>
		<?php the_field('page_heading'); ?>
		</h1>
		<?php else: ?>
		<h1>
			<?php the_category(' '); ?>
		</h1>
		<?php endif; ?>
	</div>
</section>
<div class="container">
	<div class="row">
		<section id="page">
			<?php
			/* Run the loop to output the post.
			 * If you want to overload this in a child theme then include a file
			 * called loop-single.php and that will be used instead.
			 */
			get_template_part( 'loop', 'single' );
			?>

		</section><!-- #page -->

<?php get_footer(); ?>
