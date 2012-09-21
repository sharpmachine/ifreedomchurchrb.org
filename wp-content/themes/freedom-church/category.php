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
				$category_description = category_description();
				if ( ! empty( $category_description ) )
					echo '<div class="archive-meta">' . $category_description . '</div>';

			get_template_part( 'loop', 'category' );
			?>
			<?php include('newsletter.php'); ?>
		</section><!-- #page -->

<?php get_footer(); ?>