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
  function SelfPressed_customize_register($wp_customize) {
    $wp_customize->add_section( 'SelfPressed_color_scheme', array(
      'title' => __( 'Color Scheme', 'SelfPressed' ),
      'priority' => 35,
    ) );

    $wp_customize->add_setting( 'SelfPressed_theme_options[color_scheme]', array(
      'default' => '00A5C0',
      'type' => 'option',
      'capability' => 'edit_theme_options',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'highlight_color', array(
      'label' => __( 'Highlight Color', 'SelfPressed' ),
      'section' => 'SelfPressed_color_scheme',
      'settings' => 'SelfPressed_theme_options[highlight_color]',
    ) ) );

  }
  add_action( 'customize_register', 'SelfPressed_customize_register' );


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
