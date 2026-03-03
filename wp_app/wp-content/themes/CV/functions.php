<?php 

function db_add_thumbnails() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'db_add_thumbnails');



function db_theme_menu_sidebar() {
    register_nav_menus([
        'main' => 'Menu Principal',
        'foot' => 'Menu de Bas de page'
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
function dba_breadcrumbs() {
  
    echo '<ol class="breadcrumbs"><li><a href="'.home_url().'" rel="nofollow">🏠</a></li>';

    if (is_category() || is_single()) {
       if (is_single()) {
            echo '<li>' . get_the_title() . '</li>';
        }
    } elseif (is_page()) {
        echo '<li>' . get_the_title() . '</li>';
    } 

    echo "</ol>";
}

/**
 * widget 
 * https://www.hostinger.com/fr/tutoriels/creer-un-widget-wordpress
 */

// class Widget_Contact extends WP_Widget {
//     public function __construct() {
//         parent::__construct(
//             'dba_widget_contact',
//             'Widget Contact',
//             ['description' => 'Formulaire de contact']
//         );
//     }

//     public function widget($args, $instance) {
//        if ( ! empty( $title ) ){

//        }
//        if(!empty())
//     }

//     public function form($instance) {
       
//     }

//     public function update($new_instance, $old_instance) {
        
//     }
// }

/**
 * FIN WIDGET
*/


// function register_contact_widget() {
//     register_widget('Widget_Contact');
// }
// add_action('widgets_init', 'register_contact_widget');   

// test à voir ce que ca fait
function mon_theme_widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar Widget',
        'id'            => 'sidebar',
        'description'   => 'Zone de widgets dans la barre latérale',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'mon_theme_widgets_init' );


function register_footer_widgets() {
    register_sidebar( array(
        'name'          => 'Footer Widget',
        'id'            => 'footer-sidebar',
        'description'   => 'Zone de widgets dans le footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'register_footer_widgets' );