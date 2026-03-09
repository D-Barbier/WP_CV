<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/monscript.js" defer></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="">
        <!-- <h1><?php bloginfo('name'); ?></h1>
        <h1><?php bloginfo('description'); ?></h1> -->
        <a href="#" id="menuToggle">☰</a>


        <nav id="nav-menu">
            <div id="menu">
                
                <?php wp_nav_menu(['theme_location' => 'main']) ?>
            </div>
        </nav>

        <?php if (!is_front_page()): ?>
            <?php dba_breadcrumbs(); ?>
        <?php endif; ?>
    </header>



    <main>

        <!-- FIN HEADER -->