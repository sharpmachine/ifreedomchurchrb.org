<?php get_header(); ?>
<section class="page-header">
	<div class="container">
		<?php if(get_field('page_heading')): ?>
		<h1>
		<?php the_field('page_heading'); ?>
		</h1>
		<?php else: ?>
		<h1>
			<h1 class="entry-title"><?php _e( 'Not Found', 'smm' ); ?></h1>
		</h1>
		<?php endif; ?>
	</div>
</section>
<div class="container">
	<div class="row">
	<section id="page">

		<div id="post-0" class="post error404 not-found">
			<div class="entry-content">
				<h4><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'smm' ); ?></h4>
				<?php get_search_form(); ?>
				<h3>Try these links too!</h3>
				<div class="row">
					<div class="span8">
						<?php wp_list_pages("exclude=87"); ?>
					</div>
					<div class="span8">
						<?php wp_list_categories("exclude=1"); ?>
					</div>
				</div>
				
				
			</div><!-- .entry-content -->
		</div><!-- #post-0 -->

	</section><!-- #page -->
	
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

<?php get_footer(); ?>