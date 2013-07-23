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

				<?php echo '<div class="work-slideshow double-padding-below">' ?>

					<?php echo get_new_royalslider($royal_slideshow); ?>

				<?php echo '</div>' ?>

				<?php } ?>	

		</header><!-- .entry-header -->	

		<div class="article-text">	

		<div class="gamma narrow"><?php the_excerpt(); ?></div>

		<div class="entry-meta">
			<time class="updated" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date('Y'); ?></time>
	
			<?php $type = get_the_term_list( get_the_ID(), 'type') ?>	

				<?php if ( $type ) { ?>	
			<?php

			echo '<ul class="nav project-type">';
				echo get_the_term_list( $post->ID, 'type', '<li>', '</li><li>', '</li>' );
			echo '</ul>';
		}
			?>

		</div><!-- .entry-meta -->
	
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

			<div class="related-blogposts padding-below">
			
				<?php $work_query = new WP_Query( $work_posts ); ?>
				
				<?php /* Start the Loop */ ?>
				
				<?php if( $work_query->have_posts() ) : ?>
				
				<h2 class="blog-posts-title">Blog posts about <span class="blue"><?php the_title(); ?></span></h2> 
				
				<?php while ( $work_query->have_posts() ) : $work_query->the_post(); ?>
		
					 <div class="blog-post margin-below">

            		<h3 class="epsilon least-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
                    <h4 class="zeta date margin-below-half gray"><?php the_time('j F Y'); ?></h4>

            	</div><!-- /.blog-post -->
				
				<?php endwhile; ?>
				
				<?php endif; ?>	
				
				<?php /* Reset query */ wp_reset_postdata(); ?>

			</div>	



		<nav class="next-previous line">

			<ul class="nav margin-above-half">
		
				<li class="previous"><?php previous_post_link('%link', 'PREVIOUS WORK', TRUE); ?></li>
				<li class="next"><?php next_post_link('%link', 'NEXT WORK', TRUE); ?></li>
			</ul>	

		</nav>

	</div><!-- .article-text -->

		<?php edit_post_link( __( 'Edit', 'wearethoughtfox' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->

</div><!-- .article -->
</div><!-- .wrapper -->
<?php endwhile; ?>
