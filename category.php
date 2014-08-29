<?php get_header(); ?>
<!-- Row for main content area -->
<div class="row">
	<div class="catpage">
	<p class="cat_title"><?php single_cat_title('You are now browsing '); ?>.</p>
	<!-- <hr class="mainline"> -->
	<hr class="linebreak">
		<div class="large-12 columns">		
		<?php if ( have_posts() ) : ?>
			<ul class="small-block-grid-2 medium-block-grid-3">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'category'); ?>
			<?php endwhile; ?>
			</ul>
			
			
		<?php endif; // end have_posts() check ?>
		<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
<?php } ?>
		
	
		</div>
	</div>
</div>
		
<?php get_footer(); ?>