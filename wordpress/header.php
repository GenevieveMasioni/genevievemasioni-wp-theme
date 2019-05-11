<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="<?php bloginfo('author'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/css/responsive.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
  integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <style media="screen">
    .profile-resume {
      background-image: url("<?php echo get_theme_mod('profile_resume',
    get_bloginfo('template_url').'/images/mug.jpg'); ?>");
    }
  </style>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <nav class="nav-primary">
      <ul class="menu-header">
        <li>
          <?php
          wp_nav_menu(array(
            'theme_location'      => 'primary',
            'depth'               => 2,
            'container'           => false,
            'menu_class'      => 'sub-menu'
          ));
          ?>
          <a class="projects">Projets</a>
        </li>
        <li><a href="#a-propos">Qui suis-je ?</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main id="main">
    <i class="fa fa-toggle-off fa-2x light-toggle"></i>
    <?php $counter = 0; ?>
