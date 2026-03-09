<?php

function db_add_thumbnails()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'db_add_thumbnails');



function db_theme_menu_sidebar()
{
    register_nav_menus([
        'main' => 'Menu Principal',
        'foot' => 'Menu de Bas de page',

    ]);

    register_sidebar([
        'id' => 'main-sidebar',
        'name' => 'Sidebar Accueil',
        'before_widget' => '<div class="main-sidebar">',
        'after_widget'  => '</div>',
    ]);

}

add_action('init', 'db_theme_menu_sidebar');


/**
 * documentation : https://dev.to/readymadecode/how-to-create-breadcrumb-in-wordpress-without-plugin-45jn
 * is_single : Determines whether the query is for an existing single post.
 * is_category : Determines whether the query is for an existing category archive page.
 * &#127962 : icone maison
 * &#187 : >>
 */
function dba_breadcrumbs()
{

    echo '<ol class="breadcrumbs"><li><a href="' . home_url() . '" rel="nofollow">🏠</a></li>';

    if (is_category() || is_single()) {
        if (is_single()) {
            echo '<li>' . get_the_title() . '</li>';
        }
    } elseif (is_page()) {
        echo '<li>' . get_the_title() . '</li>';
    } elseif (is_home() && !is_front_page()) { // vérifie qu'on est pas sur la page d'accueil et qu'on est bien sur la page des articles
        echo '<li>' . get_the_title() . '</li>';
    }

    echo "</ol>";
}

function register_footer_widgets()
{
    register_sidebar(array(
        'name'          => 'Footer Widget',
        'id'            => 'footer-sidebar',
        'description'   => 'Zone de widgets dans le footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'register_footer_widgets');


function dba_excerpt_more($more)
{
    return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('Lire la suite') . '</a>';
}
add_filter('excerpt_more', 'dba_excerpt_more');
