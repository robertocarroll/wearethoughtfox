<section id="work">

    <div class="wrapper">

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

         <?php
                $royal_slideshow = get_post_meta($post->ID, 'slideshow', true);
                if ($royal_slideshow)
                {
                
            ?>

                <?php echo '<div class="featured-work-image">' ?>

                    <?php echo get_new_royalslider($royal_slideshow); ?>

                <?php echo '</div>' ?>

                <?php } 

                else {

                ?>                    
                        <?php
                                if ( has_post_thumbnail() ){ ?>

                                <div class="featured-work-image">

                                    <?php $thumbID = get_post_thumbnail_id($post->ID); ?>
                                    <?php the_post_thumbnail('featured-work'); ?>

                                </div>    
            
                         <?php } ?>                               

                  <?php  }       ?>       

    
            

         <div class="featured-work-text">   

		  <h3 class="work-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="work-summary">
           <?php $featured_teaser = get_post_meta($post->ID, 'featured-teaser', true);
                if ($featured_teaser)
                {echo $featured_teaser;}

            else { the_excerpt();}
            
            ?></div>

         </div> 


        <?php endwhile; wp_reset_query(); ?>

        <div class="more-work">

                    <?php
                        $watf_style_classes = array('first-work-post','second-work-post','third-work-post','fourth-work-post');
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
                        'showposts' => 3

                    ) );
                    
    while ( $most_recent_work_not_sticky->have_posts() ) : $most_recent_work_not_sticky->the_post(); ?>
    
        <div class="<?php echo $watf_style_classes[$watf_style_index++ % $watf_styles_count]; ?>"> 

           <a href="<?php the_permalink(); ?>"> 
            <?php
                if ( has_post_thumbnail() ){ ?>

                <div class="work-thumb">

                    <?php $thumbID = get_post_thumbnail_id($post->ID); ?>
                    <?php the_post_thumbnail('thumb-work'); ?>

                </div>    
            
            <?php } ?>

		  <h3 class="work-title"><?php the_title(); ?></h3>
          <div class="work-summary"><?php the_excerpt(); ?></div>	
          </a>

		</div><!-- /.article -->

        <?php endwhile; wp_reset_query(); ?>

    </div><!-- /.more-work -->

         <?php 
           // Custom widget Area Start
           if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('work-button') ) : ?>
          <?php endif;
          // Custom widget Area End
          ?> 

    </div><!-- /.wrapper -->


</section>