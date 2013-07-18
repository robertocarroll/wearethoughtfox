<?php
                        $watf_style_classes = array('first-work-post','second-work-post','third-work-post','fourth-work-post');
                        $watf_styles_count = count($watf_style_classes);
                        $watf_style_index = 0;
                    ?> 
    
        <div class="<?php echo $watf_style_classes[$watf_style_index++ % $watf_styles_count]; ?>"> 

            <?php
                if ( has_post_thumbnail() ){ ?>

                <div class="work-thumb">

                    <?php $thumbID = get_post_thumbnail_id($post->ID); ?>
                    <?php the_post_thumbnail('thumb-work'); ?>

                </div>    
            
            <?php } ?>

		  <h3 class="work-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="work-summary"><?php the_excerpt(); ?></div>	

		</div><!-- /.article -->