<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<!-- Row for main content area -->
<div class="row">
<div class="catpage">
	<div class="small-12 large-12 columns" id="content" role="main">

	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="cat_title">You are now browsing <?php the_title(); ?></h1>
				<!-- <?php reverie_entry_meta(); ?> -->
				<hr class="linebreak">
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<!-- <?php comments_template(); ?> -->
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>	
</div>
<?php get_footer(); ?>
