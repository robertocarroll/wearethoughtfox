<?php
/*
Template Name: Home Page
*/
?>

<section id="work">

    <div class="wrapper double-padding-below">

        <header class="section-title">
            <h2>Work</h2>
        </header>

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
    
        <div class="featured-work">

		  <h3 class="gamma least-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_excerpt(); ?>	

		</div><!-- /.featured-work -->

        <?php endwhile; wp_reset_query(); ?>


                    <?php
                        $watf_style_classes = array('article-one column-one','article-two column-two');
                        $watf_styles_count = count($watf_style_classes);
                        $watf_style_index = 0;
                    ?>  

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
    
        <div class="<?php echo $watf_style_classes[$watf_style_index++ % $watf_styles_count]; ?>"> 

		  <h3 class="gamma least-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_excerpt(); ?>	

		</div><!-- /.article -->

        <?php endwhile; wp_reset_query(); ?>

    <br style="clear:both;" />

    </div><!-- /.wrapper -->

</section>


<?php get_template_part('templates/lets-work'); ?> 


<section class="line double-padding-above double-padding-below" id="blog">

    <div class="wrapper">

            <header class="section-title">
                <h2>Blog</h2>
            </header>
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
    
        <div class="featured-blog">

				<h3 class="gamma least-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
                <h4 class="epsilon date margin-below-half gray"><?php the_time('j F Y'); ?></h4>
		
        </div><!-- /.featured-blog -->

<?php endwhile; wp_reset_query(); ?>


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
    'showposts' => 3

) );

?>
    <div class="more-blog">

            <?php while ( $most_recent_blog_not_sticky->have_posts() ) : $most_recent_blog_not_sticky->the_post(); ?>
    
                <div class="blog-post margin-below">

            		<h3 class="gamma least-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>	
                    <h4 class="epsilon date margin-below-half gray"><?php the_time('j F Y'); ?></h4>

            	</div><!-- /.blog-post -->

                    <?php endwhile; wp_reset_query(); ?>

        </div><!-- /.more-blog -->

    </div><!-- /.wrapper -->

</section>

<br style="clear:both;" />





