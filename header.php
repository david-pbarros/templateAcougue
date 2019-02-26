<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" id="sb-font-awesome-css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?></title>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('home'); ?>>
    <header>
    <?php if (has_header_image()) : ?>
        <div class="banner" style="background-image: url(<?php header_image(); ?>); height: <?php echo get_custom_header()->height; ?>px;">         
            <?php 
                if (has_custom_logo()) :
                    the_custom_logo();
                endif;
            ?>
            <div class="banner__text">
                <h1 class="banner__title"><?php bloginfo('name'); ?></h1>
                <h2 class="banner__description"><?php bloginfo('description'); ?></h2>
            </div>

            
        </div>
    <?php endif;?>

    <?php wp_nav_menu( array(
          'theme_location' => 'main',
          'menu_class' => 'top-bar__menu'
    ) ); ?>
    </header>

    <main class="container" role="main">