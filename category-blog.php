<?php if ( have_posts() ) : ?>

	<div class="wrapper">
		<div class="blog-list">	

	<?php while ( have_posts() ) : the_post(); ?>

				<article <?php post_class() ?>>

						<h1 class="entry-title-blog" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

						<div class="entry">
							<?php the_content(); ?>
						</div>

				</article>

			<?php endwhile; ?>

	<div class="navigation line">
		<div class="next-posts"><?php next_posts_link( '&laquo; Older Entries' ) ?></div>
		<div class="prev-posts"><?php previous_posts_link( 'Newer Entries &raquo;' ) ?></div>
	</div>

	</div><!-- .article -->
</div><!-- .wrapper -->		

<?php endif; ?>		

