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

		<?php
				$royal_slideshow = get_post_meta($post->ID, 'slideshow', true);
				if ($royal_slideshow)
				
				{
				
			?>

				<?php echo '<div class="exhibition-slideshow">' ?>

					<?php echo get_new_royalslider($royal_slideshow); ?>

				<?php echo '</div>' ?>

				<?php } ?>

		<div class="gamma"><?php the_excerpt(); ?></div>

		<div class="entry-meta">
			<time class="updated" datetime="<?php echo get_the_time('c'); ?>" pubdate><?php echo get_the_date('Y'); ?></time>
	
			<?php $type = get_the_term_list( get_the_ID(), 'type') ?>	

				<?php if ( $type ) { ?>	
			<?php

			echo '<ul class="nav">';
				echo get_the_term_list( $post->ID, 'type', '<li>', '</li><li>', '</li>' );
			echo '</ul>';
		}
			?>

		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->



	<footer>	

		<!-- Related posts - category blog and tagged with the project slug  -->

		<?php global $post;
			$work_posts = array(
				'nopaging' => 'true',
				'category_name'=> 'blog',
				'tag' => $post->post_name
			);
			?>

			<div class="related-artwork">
			
				<?php $work_query = new WP_Query( $work_posts ); ?>
				
				<?php /* Start the Loop */ ?>
				
				<?php if( $work_query->have_posts() ) : ?>
				
				<h2 class="related-title">Blog posts about <?php the_title(); ?> </h2> 
		
				<div id="sort">
				
				<?php while ( $work_query->have_posts() ) : $work_query->the_post(); ?>
		
					<h2 class="zeta date margin-below-half gray"><?php the_time('j F Y'); ?></h3>

					<h1 class="gamma bold big-line"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>	
				
				<?php endwhile; ?>
				
				</div>
				
				<?php endif; ?>	
				
				<?php /* Reset query */ wp_reset_postdata(); ?>

			</div>	



		<nav class="next-previous">

			<ul class="nav">
		
				<li class="previous"><?php previous_post_link('%link', 'PREVIOUS WORK', TRUE); ?></li>
				<li class="next"><?php next_post_link('%link', 'NEXT WORK', TRUE); ?></li>
			</ul>	

		</nav>



		<?php edit_post_link( __( 'Edit', 'wearethoughtfox' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->

</div><!-- .article -->
</div><!-- .wrapper -->
<?php endwhile; ?>
