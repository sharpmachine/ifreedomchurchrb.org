<?php 
/*
* Template Name: About Page
*/
get_header(); ?>

		<section id="page">

			<?php get_template_part( 'loop', 'page' ); ?>
			
			<ul class="nav nav-tabs" id="myTab">
			  <li class="active"><a href="#home">Home</a></li>
			  <li><a href="#profile">Profile</a></li>
			  <li><a href="#messages">Messages</a></li>
			  <li><a href="#settings">Settings</a></li>
			</ul>

			<div class="tab-content">
			  <div class="tab-pane active" id="home">...</div>
			  <div class="tab-pane" id="profile">HEllo</div>
			  <div class="tab-pane" id="messages">...</div>
			  <div class="tab-pane" id="settings">...</div>
			</div>

			<script>
			
			jQuery('#myTab a').click(function (e) {
			  e.preventDefault();
			  jQuery(this).tab('show');
			})
			</script>
			
		</section><!-- #page -->

<?php get_footer(); ?>
