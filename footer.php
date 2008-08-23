	
	<div id="footer">
		<div id="footer-info" class="clearfix">
			<div id="footer-recententries">
				<h2>Recent Entries</h2>
				<ul>
				<?php
					global $post;
					$myposts = get_posts('numberposts=6&offset=1');
					foreach($myposts as $post) :
					setup_postdata($post);
				?>
					<li><a href="<?php the_permalink(); ?>"><?php $shorten_title = truncate($post->post_title, 26);
					echo $shorten_title; ?></a></li>
				<?php endforeach; ?>
					</ul>
				<p class="readmore"><a href="/archives/">Older entries &raquo;</a></p>
			</div>
			
			<div id="footer-links">
				<h2>Links of Interest</h2>
				<ul>
					<?php wp_list_bookmarks('title_li=&show_images=0&limit=6&categorize=0') ?>
				</ul>
				<p class="readmore"><a href="/links/">More links &raquo;</a></p>
			</div>
			
			<div id="footer-bio">
				<h2>About the Author</h2>
				<p>Malipunations is a compilation of experiences and theories, the ongoing result of the author&rsquo;s life of freedom from established ways of thinking, and an outlet for her thoughts, ideas and observations.</p>
				<p class="readmore"><a href="/experiences/">Read more &raquo;</a></p>
			</div>
		</div>
		
		<p id="rsslink"><a href="/feed/">RSS Feed</a></p>
		<p id="copyright">&copy; 2007 - Helen C. Rubin. Designed by <a href="http://superfluousbanter.org/">Dan Rubin</a>. Malipunations is powered by <a href="http://wordpress.org/" title="<?php _e('WordPress', 'sandbox'); ?>" rel="generator"><?php _e('WordPress', 'sandbox'); ?></a></p>
	</div><!-- #footer -->
	
</div><!-- #wrapper .hfeed -->

<?php wp_footer() ?>

</body>
</html>