    		</div><!-- .row -->
		</div> <!-- /container -->
		<footer role="contentinfo">
			<div class="container">
				<div id="ticker-container">
			
						<div class="testimonies-title"><a href="<?php bloginfo('url'); ?>/category/testimonies">Testimonies</a></div>
						<ul id="ticker">
							<?php query_posts('cat=4'); ?> 
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<li><img src="<?php bloginfo('template_directory'); ?>/img/testimonies-divider.png" width="36" height="38" alt="Testimonies Divider"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> - <?php echo get_the_excerpt(); ?></li>
							<?php endwhile; else: ?>
								No Testimonies at this time
							<?php endif; ?>
						</ul>

				</div><!-- #ticker-container -->
			</div>
		</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-transition.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-alert.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-modal.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tab.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-popover.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-button.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-collapse.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-carousel.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap-typeahead.js"></script>

	<!-- scripts concatenated and minified via ant build script-->
	<script src="<?php bloginfo ('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo ('template_directory'); ?>/js/script.js"></script>

	<!-- Remove these before deploying to production -->
	<script src="<?php bloginfo ('template_directory'); ?>/js/hashgrid.js" type="text/javascript"></script>

<?php wp_footer(); ?>
	</body>
</html>