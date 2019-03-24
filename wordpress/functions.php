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


/**
 * Filter the_content() method to not wrap <img> tags with <p> tag
 * @author Genevieve Masioni <genevievemasioni.com>
 */
function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

/**
 * Initialize widgets location
 * @author Genevieve Masioni <genevievemasioni.com>
 */
function init_widgets($id) {
  register_sidebar(array(
    'name'    => 'Footer widget 1',
    'id'      => 'footer-widget-1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before-title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));

  register_sidebar(array(
    'name'    => 'Footer widget 2',
    'id'      => 'footer-widget-2',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before-title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));

  register_sidebar(array(
    'name'    => 'Footer widget 3',
    'id'      => 'footer-widget-3',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before-title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));

  register_sidebar(array(
    'name'    => 'Footer widget 4',
    'id'      => 'footer-widget-4',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before-title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));

  register_sidebar(array(
    'name'    => 'Footer widget 5',
    'id'      => 'footer-widget-5',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before-title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ));

}

// Widget
add_action('widgets_init', 'init_widgets');

// Customizer
require get_template_directory().'/inc/customizer.php';
?>
