<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
	<header>
		<h2 class="catlist"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<h4 class="catauthor"><?php reverie_entry_meta(); ?></h4>
	</header>
	<div class="entry-content">
		<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a></figure> <?php the_excerpt(); ?>
	</div>
</article>
