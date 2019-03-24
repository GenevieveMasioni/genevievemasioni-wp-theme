<?php

/**
 * WP customizer with custom sections, controls and settings
 * @author Genevieve Masioni <genevievemasioni.com>
 */
function darkfolio_customize_register($wp_customize) {
  // Home (front page) section
  $wp_customize->add_section('darkfolio', array(
    'title'             => __('Darkfolio', 'darkfolio'),
    'description'       => sprintf(__('Options pour la page d\'accueil.'), 'darkfolio'),
    'priority'          => 130
  ));

  // Background image setting & control
  $wp_customize->add_setting('profile_resume', array(
    'default'           => get_bloginfo('template_directory').'/images/mug.jpg',
    'type'              => 'theme_mod'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'profile_resume', array(
    'label'             => __('Image de fond (footer widget 2)', 'darkfolio'),
    'section'           => 'darkfolio',
    'settings'          => 'profile_resume'
  )));

}

add_action('customize_register', 'darkfolio_customize_register');

 ?>
