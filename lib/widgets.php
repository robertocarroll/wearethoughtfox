<?php
/**
 * Register sidebars and widgets
 */
function watf_widgets_init() {

  register_sidebar( array(
    'name' => 'Home top',
    'id' => 'home_top_1',
    'before_widget' => '<h1 class="beta narrow darkest-grey">',
    'after_widget' => '</h1>',
    'before_title' => '',
    'after_title' => '',
  ) );


  register_sidebar( array(
    'name' => 'Work Main text',
    'id' => 'work_1',
    'before_widget' => '<div class="about-us">',
    'after_widget' => '</div>',
    'before_title' => '',
    'after_title' => '',
  ) );

  register_sidebar( array(
    'name' => 'Work Clients',
    'id' => 'work_2',
    'before_widget' => '<div class="clients">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gamma margin-below-half">',
    'after_title' => '</h2>',
  ) );

  register_sidebar( array(
    'name' => 'Work Services',
    'id' => 'work_3',
    'before_widget' => '<div class="services">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="gamma margin-below-half">',
    'after_title' => '</h2>',
  ) );

}
add_action( 'widgets_init', 'watf_widgets_init' );
