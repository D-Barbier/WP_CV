<?php

// Active les images à la une pour les articles et pages
function db_add_thumbnails()
{
    add_theme_support('post-thumbnails');
}
// Lance la fonction quand le thème est chargé
add_action('after_setup_theme', 'db_add_thumbnails');


// Crée les menus et la sidebar principale
function db_theme_menu_sidebar()
{
    // Déclare deux menus : un principal et un pour le bas de page
    register_nav_menus([
        'main' => 'Menu Principal',
        'foot' => 'Menu de Bas de page',
    ]);

    // Déclare une zone de widgets pour la sidebar d'accueil
    register_sidebar([
        'id' => 'main-sidebar',
        'name' => 'Sidebar Accueil',
        'before_widget' => '<div class="main-sidebar">',
        'after_widget'  => '</div>',
    ]);
}
// Lance l’enregistrement des menus et sidebar au chargement de WordPress
add_action('init', 'db_theme_menu_sidebar');


/**
 * Affiche un fil d’Ariane (breadcrumbs) simple.
 */
function dba_breadcrumbs()
{
    // Début du fil d'Ariane avec lien vers la page d'accueil
    echo '<ol class="breadcrumbs"><li><a href="' . home_url() . '" rel="nofollow">🏠</a></li>';

    // Si on est sur un article ou une catégorie
    if (is_category() || is_single()) {
        // Si on est sur un article, on affiche le titre de l’article
        if (is_single()) {
            echo '<li>' . get_the_title() . '</li>';
        }
    // Si on est sur une page
    } elseif (is_page()) {
        echo '<li>' . get_the_title() . '</li>';
    // Si on est sur la page des articles (mais pas la page d'accueil)
    } elseif (is_home() && !is_front_page()) {
        echo '<li>' . get_the_title() . '</li>';
    }

    // Fin du fil d’Ariane
    echo "</ol>";
}


// Crée une zone de widgets dans le footer
function register_footer_widgets()
{
    register_sidebar(array(
        'name'          => 'Footer Widget',        // Nom affiché dans l’admin
        'id'            => 'footer-sidebar',       // ID utilisé dans le thème
        'description'   => 'Zone de widgets dans le footer',
        // HTML avant/après chaque widget
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        // HTML avant/après le titre du widget
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
// Active la zone de widgets du footer
add_action('widgets_init', 'register_footer_widgets');


// Change le texte à la fin des extraits (the_excerpt)
function dba_excerpt_more($more)
{
    // Ajoute un lien "Lire la suite" vers l’article complet
    return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('Lire la suite') . '</a>';
}
// Applique la modification sur les extraits
add_filter('excerpt_more', 'dba_excerpt_more');




/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Séries TV', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Série TV', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Séries TV'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les séries TV'),
		'view_item'           => __( 'Voir les séries TV'),
		'add_new_item'        => __( 'Ajouter une nouvelle série TV'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la séries TV'),
		'update_item'         => __( 'Modifier la séries TV'),
		'search_items'        => __( 'Rechercher une série TV'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Séries TV'),
		'description'         => __( 'Tous sur séries TV'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'series-tv'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'seriestv', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );
