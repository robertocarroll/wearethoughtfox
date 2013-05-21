<?php
/*
Template Name: Home Page

*/
?>

WORK STICKY
<?php
// Get IDs of sticky posts
$sticky = get_option('sticky_posts');
// first loop to display only my single, 
// MOST RECENT sticky post
$most_recent_sticky_post = new WP_Query( array( 
    // Only sticky posts
    'post__in' => $sticky, 
    // Treat them as sticky posts
    'ignore_sticky_posts' => 0, 
    // Only from work category
    'category_name'=> work,
    // Order by ID
    'orderby' => ID, 
    // Get only the one most recent
    'showposts' => 1

) );
while ( $most_recent_sticky_post->have_posts() ) : $most_recent_sticky_post->the_post(); ?>
    
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h2 class="zeta date margin-below-half gray"><?php the_time('j F Y'); ?></h3>

				<h1 class="gamma bold big-line"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>	

		</div>

<?php endwhile; wp_reset_query(); ?>

WORK NON STICKY
<?php
// Get IDs of sticky posts
$sticky = get_option('sticky_posts');
// first loop to display only my single, 
// MOST RECENT sticky post
$most_recent_work_not_sticky = new WP_Query( array( 
    // Only sticky posts
    'post__not_in' => $sticky, 
    // Treat them as sticky posts
    'ignore_sticky_posts' => 0, 
    // Only from work category
    'category_name'=> work,
    // Order by ID
    'orderby' => ID, 
    // Get only the one most recent
    'showposts' => 4

) );
while ( $most_recent_work_not_sticky->have_posts() ) : $most_recent_work_not_sticky->the_post(); ?>
    
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h2 class="zeta date margin-below-half gray"><?php the_time('j F Y'); ?></h3>

				<h1 class="gamma bold big-line"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>	

		</div>

<?php endwhile; wp_reset_query(); ?>



BLOG STICKY
<?php
// Get IDs of sticky posts
$sticky = get_option('sticky_posts');
// first loop to display only my single, 
// MOST RECENT sticky post
$most_recent_sticky_post_blog = new WP_Query( array( 
    // Only sticky posts
    'post__in' => $sticky, 
    // Treat them as sticky posts
    'ignore_sticky_posts' => 0, 
    // Only from work category
    'category_name'=> blog,
    // Order by ID
    'orderby' => ID, 
    // Get only the one most recent
    'showposts' => 1

) );
while ( $most_recent_sticky_post_blog->have_posts() ) : $most_recent_sticky_post_blog->the_post(); ?>
    
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h2 class="zeta date margin-below-half gray"><?php the_time('j F Y'); ?></h3>

				<h1 class="gamma bold big-line"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>	

		</div>

<?php endwhile; wp_reset_query(); ?>

BLOG NON STICKY
<?php
// Get IDs of sticky posts
$sticky = get_option('sticky_posts');
// first loop to display only my single, 
// MOST RECENT sticky post
$most_recent_blog_not_sticky = new WP_Query( array( 
    // Only sticky posts
    'post__not_in' => $sticky, 
    // Treat them as sticky posts
    'ignore_sticky_posts' => 0, 
    // Only from work category
    'category_name'=> blog,
    // Order by ID
    'orderby' => ID, 
    // Get only the one most recent
    'showposts' => 4

) );
while ( $most_recent_blog_not_sticky->have_posts() ) : $most_recent_blog_not_sticky->the_post(); ?>
    
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<h2 class="zeta date margin-below-half gray"><?php the_time('j F Y'); ?></h3>

				<h1 class="gamma bold big-line"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>	

		</div>

<?php endwhile; wp_reset_query(); ?>







