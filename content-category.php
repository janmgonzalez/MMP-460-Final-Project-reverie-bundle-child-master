	<li>
				<h3 class="catlist">
					<a href="<?php the_permalink(); ?>"><?php if (strlen($post->post_title) > 38) {
							echo substr(the_title($before = '', $after = '', FALSE), 0, 42) . '...'; } else {
								the_title();
								} ?>
					</a>
				</h3>
				<p><?php the_excerpt(); ?></p>
				<!-- <hr class="linebreak"> -->
				<h4 class="catauthor"> Post by <?php the_author_posts_link(); ?></h4>
	
	</li>
