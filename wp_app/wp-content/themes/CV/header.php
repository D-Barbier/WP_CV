<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset= <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="slylesheet" href="<?php echo get_stylesheet_uri() ?>">
    <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="">
        <h1><?php bloginfo('name'); ?></h1>
        <h1><?php bloginfo('description'); ?></h1>
    </header>
    
    <nav>
        <?php wp_nav_menu(['theme_location' => 'main']) ?>
    </nav>

    <main>
    <!-- FIN HEADER -->