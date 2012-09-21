<?php get_header(); ?>
<div class="container">
	<div class="row">
		<section class="hero-where">
			<div class="hero-content">
				<h1><?php the_field('page_heading'); ?></h1>
				<h1>Meetings</h1>
				<p><?php the_field('where_meetings'); ?></p>
				<a href="<?php bloginfo('url'); ?>/contact" class="btn btn-large">Get in touch for further info</a>
			</div>
		</section>
		
<div class="container">
	<div class="row">
		<section id="page">
			
				<div class="when-info">
					<?php get_template_part( 'loop', 'page' ); ?>
				</div>
				
				
		
			
			
		</section><!-- #page -->

<?php get_footer(); ?>
