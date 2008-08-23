<?php get_header() ?>

<div id="content">
	
	<div id="posts">
<?php the_post() ?>
			<div id="post-<?php the_ID(); ?>" class="<?php sandbox_post_class() ?>">
				<h1><?php the_title(); ?><?php edit_post_link(__('Edit this page &raquo;', 'sandbox'),' <span class="edit-link">- ','</span>') ?></h1>
				<div class="post-content">
<?php the_content() ?>

<?php wp_link_pages("\t\t\t\t\t<div class='page-link'>".__('Pages: ', 'sandbox'), "</div>\n", 'number'); ?>
				</div>
			</div><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>

	</div><!-- #posts -->

</div><!-- #content -->

<?php get_footer() ?>