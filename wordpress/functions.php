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

function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');
?>
