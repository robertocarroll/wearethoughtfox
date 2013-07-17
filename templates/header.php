<header role="banner">

<?php if ( is_front_page() ) {?>

 <div class="splash" id="top">
    <div class="splash-inner"> 
        <img alt="logo" class="logo" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-with-person.png">
        <?php 
           // Custom widget Area Start
           if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home_top_1') ) : ?>
          <?php endif;
          // Custom widget Area End
          ?>             
   </div>      
  </div>  

  <?php get_template_part('templates/nav-home'); ?> 

<?php } else  { ?>    
  
<?php get_template_part('templates/nav'); ?>

<?php } ?>

</header>

