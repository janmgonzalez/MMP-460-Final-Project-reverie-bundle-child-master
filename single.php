<?php get_header(); ?>

 <!-- single post -->
  	<div class="row">
  		<div class="gsinglepost">
  		
		  	<div class="single-post panel large-12 columns">
		  		
		  		<?php /* Start loop */ ?>
		  		
		  			<?php while (have_posts()) : the_post(); ?>
		  			
		  			<?php 
					
						if ( '' != get_the_post_thumbnail() ) :
						    ?>
						    <div class="large-4 medium-4 columns">
					  			<?php the_post_thumbnail('fd-med'); ?>
					  		</div>
						    <?php
						else :
						    // don't show featuerd image area
						endif;
					?>
		  			
		  			<?php 
					
						if ( '' != get_the_post_thumbnail() ) {
						    ?>
						    <div class="large-8 medium-8 columns">
						    <?php
						} else {
						     ?>
						    <div class="large-9 medium-9 medium-centered columns">
						    <?php
						}
					
						?>
			  		
			  		
			  		
			  			<h4 class="singlePostHeader"><?php the_title(); ?></h4>
			  		<p>
			  			<?php the_content(); ?>
			  		</p>
	
					
			  		<?php comments_template(); ?>
	
					<?php endwhile; // End the loop ?>
	
			  		
	
			  		<div class="entry-author panel">
				  		<div class="row">
					  		<div class="large-3 columns">
						  		<?php echo get_avatar( get_the_author_meta('user_email'), 95 ); ?>
						  	</div>
						  	<div class="large-9 columns">
							  	<h4><?php the_author_posts_link(); ?></h4>
							  	<p class="cover-description"><?php the_author_meta('description'); ?></p>
							</div>
						</div>
					</div>
					</div>
		  		
		  	
	
		  	</div>
  		</div><!-- end of gsinglepost -->
	</div> <!-- end row -->







<?php get_footer(); ?>