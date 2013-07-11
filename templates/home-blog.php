<section id="blog">

    <div class="wrapper">

<?php
    $watf_style_classes = array('first-blog-post','second-blog-post');
    $watf_styles_count = count($watf_style_classes);
    $watf_style_index = 0;
?>  


<?php
// Get IDs of sticky posts
$sticky = get_option('sticky_posts');
// first loop to display  
// MOST RECENT two sticky posts
rsort( $sticky );

$sticky = array_slice( $sticky, 0, 3);

$most_recent_sticky_post_blog = new WP_Query( array( 
    // Only sticky posts
    'post__in' => $sticky, 
    // Treat them as sticky posts
    'ignore_sticky_posts' => 1, 
    // Only from work category
    'category_name'=> blog,

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
           if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('blog-button') ) : ?>
          <?php endif;
          // Custom widget Area End
          ?>  

    </div><!-- /.wrapper -->

</section>