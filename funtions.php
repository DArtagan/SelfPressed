<?php
 
  define('MAIN_CLASSES', "test1");

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
