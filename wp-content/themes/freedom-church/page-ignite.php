<?php get_header(); ?>

<div class="container">
	<div class="row">
		<section class="hero-ignite">
			<div class="hero-content">
				<div class="row">
					<div class="span11 offset5">
						<img src="<?php bloginfo('template_directory'); ?>/img/ignite-logo.png" width="230" height="92" alt="Ignite Logo">
						<h4 class="promote"><?php the_field('ignite_meeting_time'); ?></h4>
						<div class="row">
							<div class="span10 offset1 ignite-copy">
								<div class="span9 offset1">
									<?php get_template_part( 'loop', 'page' ); ?>
								</div>
							</div>
							<div class="span10 offset1 ignite-icons-wrapper">
								<div class="ignite-icons">
									<img src="<?php bloginfo('template_directory'); ?>/img/ignite-icon1.png" width="215" height="61" alt="Ignite Icon1">
									<a href="#" rel="tooltip" data-placement="right" title="We love because He first loved us. 
									We are loved to be love."></a>
								</div>
								<div class="ignite-icons">
									<img src="<?php bloginfo('template_directory'); ?>/img/ignite-icon2.png" width="168" height="61" alt="Ignite Icon1">
									<a href="#" rel="tooltip" data-placement="right" title="We focus on igniting the hearts of youth and young adults with the supernatural love of God."></a>
								</div>
								<div class="ignite-icons">
									<img src="<?php bloginfo('template_directory'); ?>/img/ignite-icon3.png" width="201" height="61" alt="Ignite Icon1">
									<a href="#" rel="tooltip" data-placement="right" title="Come join us as we grow and discover who Christ is. In us and through us."></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<a href="#" rel="tooltip" data-placement="right" title="We love because He first loved us. 
					We are loved to be love."></a>
					<div class="span12 offset5 ignite-connect-wrapper">
						<div class="ignite-connect span7">
							<img src="<?php bloginfo('template_directory'); ?>/img/ignite-contact.png" width="37" height="37" alt="Ignite Contact">
							<div class="deets">Contact Us</div>
							<div class="deets-link">
								<a href="mailto:<?php the_field('ignite_email'); ?>"><?php the_field('ignite_email'); ?></a>
							</div>
						</div>
						<div class="ignite-connect span4">
							<img src="<?php bloginfo('template_directory'); ?>/img/ignite-facebook.png" width="37" height="37" alt="Ignite Contact">
							<div class="deets">Facebook Page</div>
							<div class="deets-link">
								<a href="<?php the_field('ignite_facebook'); ?>">Ignite Red Bluff</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
<?php get_footer(); ?>
