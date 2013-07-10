  <div class="nav-wrapper">
    <nav class="nav-main wrapper" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
        endif;
      ?>
    </nav>
  </div>