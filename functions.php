<?php
add_theme_support('post-thumbnails');

$args = array ('default-color' => 'a6b3bf');
add_theme_support('custom-background', $args);

$default = array(
    'default-image' => get_template_directory_uri() . '/assets/images/banner.jpg',
    'height' => 300,
    'width' => 1600,
    'header-text' => true,
    'video' => true
);
add_theme_support('custom-header', $default);

$args_logo = array (
    'width' => 120,
    'height' => 120
);

add_theme_support('custom-logo', $args_logo);

register_nav_menu('main', 'Menu Principal');
?>