

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
$args=array(
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => 1,
    'caller_get_posts'=>1
);
$oldestpost =  get_posts($args);

$args=array(
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 1,
    'caller_get_posts'=>1
);
$newestpost =  get_posts($args);

if ( !empty($oldestpost) && !empty($newestpost) ) {
  $oldest = mysql2date("Y", $oldestpost[0]->post_date);
  $newest = mysql2date("Y", $newestpost[0]->post_date);

  for ( $counter = intval($newest); $counter >= intval($oldest); $counter = $counter - 1) {

    $args=array(
      'year'     => $counter,
      'posts_per_page' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
      'caller_get_posts'=>1,
      'category_name' => 'work'
    );

    $my_query = new WP_Query($args);

    if( $my_query->have_posts() ) {

      echo '<header class="work-title"><h2>' . $counter . '</h2></header>';
      
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <div class="work-list"> 
        <h3 class="gamma least-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_excerpt(); ?>
      </div>
      
       <?php endwhile;
    } //if ($my_query)
  wp_reset_query();  // Restore global post data stomped by the_post().
  }
}
?>
  </div><!-- /.work-page -->
</div><!-- /.wrapper -->
