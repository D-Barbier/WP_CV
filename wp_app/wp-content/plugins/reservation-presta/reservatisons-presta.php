<?php


/**
 * Plugin Name: TEST
 * Description: cesi est un test
 * Author: damien
 */


/**
 * PRESTATION
 * NOM de la prestation
 * Durée de la prestation
 * Tarif de la prestation
 */

function dba_cpt_prestation(){

    $arg = [
        'labels' => [
            'name' => 'Prestation',
            'singular_name' => 'Prestation',
            'add_new_item' => 'Ajouter une prestation',
            'add_new' => 'Ajouter'
        ],
        'public' => true,
        'menu_icon' => 'dashicons-scissors',
        'supports' => ['title','thumbnail','editor']
    ];

    register_post_type('prestation',$arg);

}

add_action('init','dba_cpt_prestation');

/**
 * Ajouter les Champs personnalises pour notre CPT
 * Prix
 * Durée
 */

function dba_afficher_details($post){
    $prix = get_post_meta($post->ID, 'prestation_prix', true);
    echo '<div><label>Prix</label>';
    echo '<input type="number" name="prestation_prix" value="'.esc_attr($prix).'">';
    echo '</div>';
}

function dba_afficher_boite_formulaire(){
    add_meta_box('prestation_details', 'Réglage de la prestation','dba_afficher_details', 'prestation') ;
}

add_action('add_meta_boxes', 'dba_afficher_boite_formulaire');

function dba_sauvegarder_details($post_id){
    if(isset($_POST['prestation_prix'])){
        $prix = intval($_POST['prestation_prix']); //floatval
        if($prix > 0){
            update_post_meta($post_id, 'prestation_prix', $prix);
        }
    }


}


add_action('save_post','dba_sauvegarder_details');
/**
 * Reservation
 * Utilisateur (client) <--> Prestations <--> Date
 */


function dba_afficher_details_front($content){

    if(!is_singular('prestation')){
        return $content;
    }
    
    $prix = get_post_meta(get_the_ID(), 'prestation_prix', true);
    $html = '<p>Tarif : '.$prix .' € </p>';

    return $html . $content;

}

add_filter('the_content','dba_afficher_details_front');
