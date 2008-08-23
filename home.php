<?php
	get_header();
	query_posts('posts_per_page=1'); //returns only the front page
?>


	<div id="content">

		<div id="posts">
<?php while ( have_posts() ) : the_post() ?>
			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h1><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'sandbox'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a><?php edit_post_link(__('Edit this post &raquo;', 'sandbox'),' <span class="edit-link">- ','</span>') ?></h1>
				<div class="meta">
					<p class="date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'sandbox'), the_date('', '', '', false), get_the_time()) ?></abbr></p>
					<p class="numberofcomments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></p>					
				</div>
				<div class="excerpt"><?php the_excerpt(); ?></div>
				<p class="readmore"><a href="<?php the_permalink() ?>">Continue reading &raquo;</a></p>
			</div><!-- .post -->		
<?php comments_template() ?>
<?php endwhile ?>
		</div><!-- #posts -->

	</div><!-- #content -->

<?php get_footer() ?>