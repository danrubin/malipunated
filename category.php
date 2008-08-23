<?php get_header() ?>
	
<div id="content">
	
	<div id="posts">

		<div id="nav-above" class="navigation">
			<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?></div>
			<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
		</div>

		<h1 class="page-title"><?php _e('Category Archives:', 'sandbox') ?> <span><?php echo single_cat_title(); ?></span></h1>
			<? /* <div class="archive-meta"><?php if ( !(''== category_description()) ) : echo apply_filters('archive_meta', category_description()); endif; ?></div> */ ?>

<?php while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class(); ?>">
				<h2><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'sandbox'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<div class="meta">
					<p class="date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'sandbox'), the_date('', '', '', false), get_the_time()) ?></abbr></p>
					<p class="numberofcomments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></p>					
				</div>
				<div class="excerpt"><?php the_excerpt(); ?></div>
				<p class="readmore"><a href="">Continue reading &raquo;</a></p>						
			</div><!-- .post -->

<?php endwhile; ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('<span class="meta-nav">&laquo;</span> Older posts', 'sandbox')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox')) ?></div>
			</div>

			</div><!-- #posts -->

		</div><!-- #content -->

<?php get_footer() ?>