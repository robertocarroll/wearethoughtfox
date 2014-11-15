  <div class="nav-wrapper"> 
    <nav class="nav-main wrapper" role="navigation">
      <a href="#menu" class="menu-trigger"><i class="icon-list-ul icon-2x"></i></a>
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-slide'));
        endif;
      ?>
    </nav>
  </div>

   <div class="logo-small">	
			<a href="<?php echo get_settings('home'); ?>" accesskey="1" title="Home"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-small.png" alt="<?php bloginfo('name'); ?>" /></a>
</div><!-- .logo-small -->