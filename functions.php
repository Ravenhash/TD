<?php

function techdata_files(){

  wp_enqueue_script('techdata_modernizr.min.js', get_theme_file_uri('/js/modernizr.min.js'),array('jquery'), '1.0', true);

  wp_enqueue_style('googleFonts', '//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap');

  wp_enqueue_style('techdata_all.min.css', get_theme_file_uri('/css/all.min.css'));
  wp_enqueue_style('techdata_bootstrap.min.css', get_theme_file_uri('/css/bootstrap.min.css'));
  wp_enqueue_style('techdata_animate.compat.css', get_theme_file_uri('/css/animate.compat.css'));
  wp_enqueue_style('techdata_simple-line-icons.min.css', get_theme_file_uri('/css/simple-line-icons.min.css'));
  wp_enqueue_style('techdata_owl.carousel.min.css', get_theme_file_uri('/css/owl.carousel.min.css'));
  wp_enqueue_style('techdata_owl.theme.default.min.css', get_theme_file_uri('/css/owl.theme.default.min.css'));
  wp_enqueue_style('techdata_agnific-popup.min.css', get_theme_file_uri('/css/agnific-popup.min.css'));

  wp_enqueue_style('techdata_theme.css', get_theme_file_uri('/css/theme.css'));
  wp_enqueue_style('techdata_theme-elements.css', get_theme_file_uri('/css/theme-elements.css'));
  wp_enqueue_style('techdata_theme-blog.css', get_theme_file_uri('/css/theme-blog.css'));
  wp_enqueue_style('techdata_theme-shop.css', get_theme_file_uri('/css/theme-shop.css'));

}

add_action('wp_enqueue_scripts', 'techdata_files');