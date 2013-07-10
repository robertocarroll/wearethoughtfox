<header role="banner">

<?php if ( is_front_page() ) {?>

 <div class="splash">
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

<?php } ?>    
  
<?php get_template_part('templates/nav'); ?> 

</header>

