<?php get_header() ?>

	<div id="content">
		
		<div id="posts">
<?php the_post(); ?>
			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php my_prev_post_link('%link', '&laquo; %title',false,'','25','') ?></div>
				<div class="nav-next"><?php my_next_post_link('%link', '%title &raquo;',false,'','25','') ?></div>
			</div>

			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class(); ?>">
				<h1><?php the_title(); ?><?php edit_post_link(__('Edit this post &raquo;', 'sandbox'),' <span class="edit-link">- ','</span>') ?></h1>
				<div class="meta">
					<p class="date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'sandbox'), the_date('', '', '', false), get_the_time()) ?></abbr></p>
					<p class="numberofcomments"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></p>					
				</div>
				<div class="post-content">
<?php the_content(''.__('Read More <span class="meta-nav">&raquo;</span>', 'sandbox').''); ?>

<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
				</div>
				<? /*
				<div class="entry-meta">
					<?php printf(__('This entry was written by %1$s, posted on <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr>, filed under %6$s%7$s. Bookmark the <a href="%8$s" title="Permalink to %9$s" rel="bookmark">permalink</a>. Follow any comments here with the <a href="%10$s" title="Comments RSS to %9$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'sandbox'),
						'<span class="author vcard"><a class="url fn n" href="'.get_author_link(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'sandbox'), $authordata->display_name) . '">'.get_the_author().'</a></span>',
						get_the_time('Y-m-d'),
						get_the_time('H:i:sO'),
						the_date('', '', '', false),
						get_the_time(),
						get_the_category_list(', '),
						get_the_tag_list(" __(and tagged) ", ', ', ''),
						get_permalink(),
						wp_specialchars(get_the_title(), 'double'),
						comments_rss() ) ?>

<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Comments and trackbacks open ?>
				<?php printf(__('<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox'), get_trackback_url()) ?>
<?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) : // Only trackbacks open ?>
				<?php printf(__('Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox'), get_trackback_url()) ?>
<?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Only comments open ?>
				<?php printf(__('Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'sandbox')) ?>
<?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) : // Comments and trackbacks closed ?>
				<?php _e('Both comments and trackbacks are currently closed.') ?>
<?php endif; ?>

				</div>
				*/ ?>
			</div><!-- .post -->

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php my_prev_post_link('%link', '&laquo; %title',false,'','25','') ?></div>
				<div class="nav-next"><?php my_next_post_link('%link', '%title &raquo;',false,'','25','') ?></div>
			</div>

<?php comments_template(); ?>

		</div><!-- #posts -->
	
	</div><!-- #content -->

<?php get_footer() ?>
