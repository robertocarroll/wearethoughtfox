<ul class="post-info nav double-margin-above">	
	<li><?php echo __('By', 'watf'); ?> <?php echo get_the_author(); ?></li>,
	<li><time class="date" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo get_the_date('j F Y'); ?></time></li>
</ul>
			
<?php the_tags('<span class="inline">See also:&nbsp;</span> <ul class="entry-tags nav"><li>','</li>, <li>','</li></ul>'); ?>

	
