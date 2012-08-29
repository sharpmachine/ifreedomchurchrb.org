<?php 
/*
	Template Name: Blog
*/
get_header(); ?>

				<section id="page">

					<?php get_template_part( 'loop', 'page' ); ?>
					<?php rewind_posts(); ?>
					<?php get_template_part( 'loop', 'blog' ); ?>	
		
				</section><!-- #page -->

<?php get_footer(); ?>
