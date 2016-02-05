<?php
//Add thumbnail, automatic feed links and title tag support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

//Add menu support and register main menu
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'hide-menu' => __( 'Hide Menu' )      
    )
  );
}
add_action( 'init', 'register_my_menus' );
//  Main Sidebar
    if(function_exists('register_sidebar'))
         register_sidebar(array(
         'name' => 'Main Sidebar',
          'before_widget' => '<hr>',
           'after_widget' => '',
         'before_title' => '<h3>',
         'after_title' => '</h3>',
    ));

?>
