      <li>
      	<div class="inner">
	      	<div class="view">
	      		<div class="my_img">
	      			<?php the_post_thumbnail('group2-home'); ?>
	      		</div>
	      		
	      		<div class="mask">
	            	<!-- This gets the title but limits the amount of characters -->
	            	<h2>
	            		<a href="<?php the_permalink(); ?>"> <?php if (strlen($post->post_title) > 39) {
							echo substr(the_title($before = '', $after = '', FALSE), 0, 39) . '...'; } else {
								the_title();
								} ?>
						</a>
	            	</h2>
	            <p><?php the_excerpt(); ?></p>
	             <!-- <a href="<?php the_permalink(); ?>" class="info">Read More</a> -->
	      		</div>
	      	</div>
      	</div>
      </li>