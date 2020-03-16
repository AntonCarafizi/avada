<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url" content="<?php echo get_permalink(); ?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>"/>
    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>"/>
    <?php wp_head(); ?>
    <title><?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?></title>
</head>
<body <?php body_class(); ?>>
<header>
    <nav>
    <?php
    wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse justify-content-md-center',
            'container_id' => 'navbarCollapse',
            'menu_class' => 'nav navbar-nav',
            'walker' => new wp_bootstrap_navwalker())
    );
    ?>
    </nav>
</header>