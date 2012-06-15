<?php

/*
* Custom Backgrounds
*/
  $defaults = array(
    'default-color' => 'ffffff',
  );
  add_theme_support( 'custom-background', $defaults );

/*
* Theme color support
*/
  $wp_customize->add_section( 'SelfPressed_color_scheme', array(
    'title' => __( 'Color Scheme', 'SelfPressed' ),
    'priority' => 35,
  ) );

  $wp_customize->add_setting( 'SelfPressed_theme_options[color_scheme]', array(
    'default'        => '',
    'type'           => 'option',
    'capability'     => 'edit_theme_options',
  ) );


function themename_customize_register($wp_customize) {
  // ... do stuff ...

  function SelfPressed_customize_register($wp_customize) {
    
  }
  add_action( 'customize_register', 'themename_customize_register' );


/***************
  RUN after parent functions.php
***************/
  function dandr_post_parent_setup() {
    /*
    * Unregister sidebar for pages
    */
      unregister_sidebar( 'Sidebar' );

      define('MAIN_CLASSES', 'test2');
  }
  add_action( 'after_setup_theme', 'dandr_post_parent_setup', 11);
?>
