<?php

/*
* Custom Backgrounds
*/
  $defaults = array(
    'default-color'          => 'ffffff',
  );
  add_theme_support( 'custom-background', $defaults );



/***************
  RUN after parent functions.php
***************/
  function dandr_post_parent_setup() {
    /*
    * Unregister sidebar for pages
    */
      unregister_sidebar( 'Sidebar' );a

      define('MAIN_CLASSES', 'test2');
  }
  add_action( 'after_setup_theme', 'dandr_post_parent_setup', 11);
?>
