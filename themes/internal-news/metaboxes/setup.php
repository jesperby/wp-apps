<?php
include_once get_stylesheet_directory() . '/lib/wpalchemy/MetaBox.php';

// Admin styles and script for the meta boxes
function wpalchemy_assets($hook) {
  wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/metaboxes/meta.css');
  wp_enqueue_script('wpalchemy-metabox', get_stylesheet_directory_uri() . '/metaboxes/metaboxes.js');
}
add_action('admin_enqueue_scripts', 'wpalchemy_assets');
