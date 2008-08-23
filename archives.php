<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header() ?>
	
<div id="content">
	
	<div id="posts">
<?php the_post() ?>
			<div id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h1><?php the_title() ?><?php edit_post_link(__('Edit this page &raquo;', 'sandbox'),' <span class="edit-link">- ','</span>') ?></h1>
				<div class="post-content">
<?php the_content() ?>

					<ul id="archives-page" class="xoxo">
						<li id="category-archives" class="content-column">
							<h2><?php _e('Archives by Category', 'sandbox') ?></h2>
							<ul>
								<?php wp_list_cats('sort_column=name&optioncount=1&feed=RSS') ?> 
							</ul>
						</li>
						<li id="monthly-archives" class="content-column">
							<h2><?php _e('Archives by Month', 'sandbox') ?></h2>
							<ul>
								<?php wp_get_archives('type=monthly&show_post_count=1') ?>
							</ul>
						</li>
					</ul>

				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key/value of "comments" to enable comments on pages! ?>

	</div><!-- #posts -->

</div><!-- #content -->

<?php get_footer() ?>