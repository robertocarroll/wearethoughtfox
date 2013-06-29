<?php
/**
 * @package wearethoughtfox
 */
?>
<?php while (have_posts()) : the_post(); ?>
<div class="wrapper">
	<div class="article">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer>	

		<?php get_template_part('templates/entry-meta'); ?>	

		<nav class="next-previous">

			<ul class="nav">
		
				<li><?php previous_post_link('Before this: %link', ' %title', TRUE); ?>
				</li>
				<li>
				<?php next_post_link('After this: %link', ' %title', TRUE); ?>
				</li>
			</ul>	

		</nav>

		<?php edit_post_link( __( 'Edit', 'wearethoughtfox' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->

	<div class="comments double-padding-above">
		<?php disqus_embed('wearethoughtfox'); ?>
	</div>		

</article><!-- #post-## -->
</div><!-- .article -->
</div><!-- .wrapper -->
<?php endwhile; ?>
