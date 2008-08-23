<?php get_header() ?>

	<div id="content">

		<div id="posts">
<?php while ( have_posts() ) : the_post() ?>
			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h1><a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'sandbox'), wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a></h1>
				<div class="meta">
					<p class="date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'sandbox'), the_date('', '', '', false), get_the_time()) ?></abbr></p>
					<p class="numberofcomments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></p>					
				</div>
				<p class="excerpt">I&rsquo;m using the English version of the word &lsquo;gardens&rsquo;. An English garden doesn’t just mean a vegetable patch – it&rsquo;s the whole thing, flowers, shrubs, trees and all.</p>
				<p class="readmore"><a href="">Continue reading &raquo;</a></p>

	<?php the_excerpt(''.__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox').''); ?>

	<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
			</div><!-- .post -->
		</div><!-- #posts -->
		
<?php comments_template() ?>
<?php endwhile ?>

	</div><!-- #content -->

<?php get_sidebar() ?>
<?php get_footer() ?>