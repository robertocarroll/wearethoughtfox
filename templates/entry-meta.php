<ul class="post-info">	
	<li><?php echo __('By', 'watf'); ?> <?php echo get_the_author(); ?></li>,
	<li><time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo get_the_date('j F Y'); ?></time></li>
</ul>
			
<?php the_tags('See also: <ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>

	
