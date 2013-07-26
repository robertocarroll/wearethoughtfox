<section id="blog">

    <div class="wrapper">

<?php
    $watf_style_classes = array('first-blog-post','second-blog-post');
    $watf_styles_count = count($watf_style_classes);
    $watf_style_index = 0;
?>  


<?php

/* Get all sticky posts */
$sticky = get_option( 'sticky_posts' );

/* Sort the stickies with the newest ones at the top */
rsort( $sticky );

/* Get the 5 newest stickies (change 5 for a different number) */
$sticky = array_slice( $sticky, 0, 10 );

$most_recent_sticky_post_blog = new WP_Query( array( 
    // Only sticky posts
    'posts_per_page' => 2,
    'category_name' => 'blog',
    'post__in' => $sticky    
) );

while ( $most_recent_sticky_post_blog->have_posts() ) : $most_recent_sticky_post_blog->the_post(); ?>
    
        <div class="<?php echo $watf_style_classes[$watf_style_index++ % $watf_styles_count]; ?>"> 

            <?php
                if ( has_post_thumbnail() ){ ?>

                    <?php $thumbID = get_post_thumbnail_id($post->ID); ?>
                    <?php the_post_thumbnail('blog-thumb'); ?>
            
            <?php } ?>

                <h4 class="blog-date"><?php the_time('j F Y'); ?></h4>
				<h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
                <div class="blog-summary"><?php the_excerpt(); ?></div>
		
        </div><!-- /.featured-blog -->

        <?php endwhile; wp_reset_query(); ?>

        <?php 
           // Custom widget Area Start
           if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-middle') ) : ?>
          <?php endif;
          // Custom widget Area End
          ?> 

        <?php 
           // Custom widget Area Start
           if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-button') ) : ?>
          <?php endif;
          // Custom widget Area End
          ?>  

    </div><!-- /.wrapper -->

</section>