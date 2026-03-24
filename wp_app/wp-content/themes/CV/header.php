<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Définit la langue du site dans la balise <html> -->

<head>
    <!-- Définit l'encodage du site -->
    <meta charset=<?php bloginfo('charset'); ?>>
    <!-- Rend le site adapté aux écrans mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titre du site (nom défini dans WordPress) -->
    <title><?php bloginfo('name') ?></title>
    <!-- Feuille de style principale du thème -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <!-- Fichier JavaScript du thème, chargé après le HTML -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/monscript.js" defer></script>
    <!-- Nécessaire pour que WordPress et les extensions ajoutent leurs scripts -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Ajoute automatiquement des classes au body selon le type de page -->

    <!-- Point d'entrée pour que WordPress/les plugins ajoutent du contenu après <body> -->
    <?php wp_body_open(); ?>

    <div class="accesibility">
        <button title="Augmenter la taille du texte" id="textUp"></button>
        <button title="Diminuer la taille du texte" id="textDown"></button>
        <button title="Activer / Désactiver le monde sombre" id="darkMode"></button>
        <button title="Changer la police" id="textChange"></button>
    </div>

    <header class="mainHeader">
        <!-- Icône/menu pour ouvrir le menu de navigation (surtout utile sur mobile) -->
        <a href="#" id="menuToggle">☰</a>

        <nav id="nav-menu">
            <div id="menu">
                <!-- Affiche le menu associé à l'emplacement "main" du thème -->
                <?php wp_nav_menu(['theme_location' => 'main']) ?>

            </div>

        </nav>


        <!-- Affiche le fil d’Ariane sur toutes les pages sauf la page d'accueil -->
        <?php if (!is_front_page()): ?>
            <?php dba_breadcrumbs(); ?>
        <?php endif; ?>

        <?php get_search_form() ?>
    </header>

    <main>
        <!-- FIN HEADER -->