<header role="banner">

<?php if ( is_front_page() ) {?>
<div class="banner">
 <div class="splash">
  <div class="splash-inner"> 

    <img alt="logo" class="logo" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-with-person.png">
    
        <h1 class="beta narrow darkest-grey"><span class="red">We Are Thought Fox</span> is an agency for digital culture.<br>We design media: websites, apps, videos, maps and more.</h1>             
   </div>      
</div>  
</div>

<?php } ?>    

    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
        endif;
      ?>
    </nav>
</header>

<br style="clear:both;" />