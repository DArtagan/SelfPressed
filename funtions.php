<?php
  /***************
  RUN after parent functions.php
  ***************/
  function dandr_post_parent_setup() {
    /*
    * Unregister sidebar for pages
    */
      unregister_sidebar( 'Sidebar' );
  }
  add_action( 'after_setup_theme', 'dandr_post_parent_setup', 11);
?>
