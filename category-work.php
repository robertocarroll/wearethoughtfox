

<div class="wrapper">
  <div class="work-page">

    <h1>Work</h1>

    <div class="entry-meta">
    <ul class="nav">
      <?php $args = array('taxonomy' => 'type'); ?>
      <?php $tax_menu_items = get_categories( $args );
      foreach ( $tax_menu_items as $tax_menu_item ):?>
      <li>
        <a href="<?php echo get_term_link($tax_menu_item,$tax_menu_item->taxonomy); ?>">
          <?php echo $tax_menu_item->name; ?>
        </a>
      </li>
      <?php endforeach; ?>
      </ul>
     </div> 

<?php
      $watf_style_classes = array('first-work-post','second-work-post','third-work-post','fourth-work-post');
      $watf_styles_count = count($watf_style_classes);
      $watf_style_index = 0;
  ?>  

    </div><!-- /.work-page -->                


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
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
      
       <?php endwhile; ?>

      <?php else : ?>

<!-- posts not found info -->
<?php endif; ?>
  
</div><!-- /.wrapper -->
