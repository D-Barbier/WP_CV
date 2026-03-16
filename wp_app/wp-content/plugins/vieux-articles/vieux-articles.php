<?php

/**
 * Plugin Name: Les vieux Articles
 * Description: Message d'avertissement sur les vieux articles
 * Author: Damien BARBIER
 * 
 */

function dba_old_content($content){

    if(!is_single()){
        return $content;
    }

    $delai = 24 * 7 * 60 * 60 ;

    $date = get_the_date('U');

    $dateAuj = date('U');

    $dateEcart = ($dateAuj - $date);

    if($dateEcart > $delai){

        return $content . 'hehe';
    }

    return $content;
}

add_filter('the_content','dba_old_content');

