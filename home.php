<?php 
  /*
  * Template Name: Home
  */
 ?>
  		 
  	<?php get_header(); ?>
<div id="featuredwpic">		
<div class="row">
		<div class="fpostgl">
		<ul class="large-12 large-centered columns small-block-grid-1 medium-block-grid-2 large-block-grid-3">
			
			<?php 
			  //create arguments array for custom loop
			  $args = array(
			  	'category_name' => 'featured'
			  );

			  //create a custom loop
			  $featured = new WP_Query($args);
			  ?>


			<?php 
				//run the wordpress loop 
					if ($featured->have_posts()) : 
						while ($featured->have_posts()) : $featured->the_post(); 
							//the_content('Read the rest of this entry »');
							get_template_part('content','home'); //look for a file named content.php 
				
						endwhile; 
					else : 
			?>
				
			<?php endif; ?>
		</ul>
		</div>
</div>
</div>	
<div class="row">	
<div class="fpostgl">
		<div class="featlist">
			<ul class="large-12 large-centered columns small-block-grid-1 medium-block-grid-2 large-block-grid-3">
			<?php
			global $post;
			$args = array(
				'posts_per_page' => 9,
				'offset' => 1,
				'category_name' => 'announcements'
			);
			$the_query = new WP_Query( $args );
			// The Loop
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
				?>
					<li> 
					<h4><a href="<?php the_permalink(); ?>"><?php if (strlen($post->post_title) > 4200) {
							echo substr(the_title($before = '', $after = '', FALSE), 0, 42) . '...'; } else {
								the_title();
								} ?>
						</a>
					</h4>
					<p><?php the_excerpt(); ?></p>
					<hr class="mainline">
				</li>
				<?php
				}
			} else {
					// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
			
			<?php/*
$args = array( 'posts_per_page' => 9, 'offset'=> 1, 'category' => 1 );
			$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : 
			  setup_postdata( $post ); */?>
				<!--
<li> 
					<h4>
						<a href="<?php the_permalink(); ?>"> <?php if (strlen($post->post_title) > 42) {
							echo substr(the_title($before = '', $after = '', FALSE), 0, 42) . '...'; } else {
								the_title();
								} ?>
						</a>
					</h4>
					<p><?php the_excerpt(); ?></p>
					<hr class="linebreak">
				</li>
-->
				
			<?php /*
			endforeach;
			wp_reset_postdata(); 
			
			*/ ?>

	</ul>
			</div> <!-- end of feature list -->
		</div> <!-- end posts -->
</div>


		<?php get_footer(); ?>
		







