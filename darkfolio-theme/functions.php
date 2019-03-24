<?php

/**
 * Theme support
 * @author Genevieve Masioni <genevievemasioni.com>
 */
function darkfolio_setup() {
  // Custom logo
  add_theme_support('custom-logo');
  // Featured image
  add_theme_support('post-thumbnails');
  // Menus
  register_nav_menus(array(
    'primary'       => __('Primary menu')
  ));
}

add_action('after_setup_theme', 'darkfolio_setup');

?>
