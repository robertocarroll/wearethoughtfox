

<div class="wrapper">
  <div class="work-page">

    <?php if ( have_posts() ) : ?>

    <?php $term = get_term_by('slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
		
    <h1><?php	echo $term->name;?></h1>

    <?php while (have_posts()) : the_post(); ?>

    <div class="work-list"> 
        <h3 class="gamma least-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_excerpt(); ?>
      </div>

     <?php endwhile; ?> 

     <?php endif; ?>

  </div><!-- /.work-page -->
</div><!-- /.wrapper -->
