<?php
/**
 * @package wearethoughtfox
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php get_template_part('templates/entry-meta'); ?>			
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">	

		Recent entries by <?php echo get_the_author(); ?>
		<?php echo get_related_author_posts(); ?>


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
</article><!-- #post-## -->
