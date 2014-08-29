	</div><!-- Row End -->
</div><!-- Container End -->

<div class="full-width footer-widget">
	<div class="cunyfancynav">
		<div class="row">
		
			<?php dynamic_sidebar("Footer"); ?>
		
		</div>
	</div>
</div>

<footer class="full-width" role="contentinfo">
	<div class="row">
		<!--
<div class="large-12 columns">
			<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list')); ?>
		</div>
-->
	</div>
	
	<div class="row">
	<div class="mycunycopyright">
			<div class="large-12 columns">
			
				<h5>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Made with Love by','Group 2'); ?> <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Group 2 (The Super Group).</a></h5>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>