<?php 
/*
	Template Name: Blog
*/
get_header(); ?>
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

					<?php get_template_part( 'loop', 'page' ); ?>
					<?php rewind_posts(); ?>
					<?php get_template_part( 'loop', 'blog' ); ?>	
		
				</section><!-- #page -->

<?php get_footer(); ?>
