<?php
/*
Template Name: Home Page

*/
?>

<?php // **Loop 1** get the first sticky only 

			$sticky = get_option( 'sticky_posts' );

			$featured_work_args = array(
					'posts_per_page' => 1,
					'category_name'=> work,
			        'post__in' => $sticky, 
			        'ignore_sticky_posts' => 1,
			        'orderby' => date
			);

			$featured_work_query = new WP_Query($featured_work_args);

				while ( $featured_work_query->have_posts() ) : $featured_work_query->the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h2 class="zeta date margin-below-half gray"><?php the_time('j F Y'); ?></h3>

				<h1 class="gamma bold big-line"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>	

		</div>

	<?php endwhile; wp_reset_postdata(); ?>


<?php //**Loop 2** exclude the sticky from the Loop 1

				$work_args = array(
						'category_name'=> work,
				        'posts_per_page' => 4,
				        'ignore_sticky_posts' => 1,
				        'post__not_in'  => get_option( 'sticky_posts' )

				);

					$work_query = new WP_Query($work_args);

				while ( $work_query->have_posts() ) : $work_query->the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<h2 class="zeta date margin-below-half gray"><?php the_time('j F Y'); ?></h3>

					<h1 class="gamma bold big-line"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>	

			</div>

		<?php endwhile; wp_reset_postdata(); ?>



