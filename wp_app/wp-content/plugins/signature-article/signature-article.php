<?php

/**
 * Plugin Name: Plugin Signature
 * Description: Ajoute une signature sous les articles
 * Author: Damien BARBIER
 * 
 * 
 */

function dba_signature($content){

    if(is_single()){
        
    }else if(is_page()){

    }

    return $content;
    

}


add_filter('the_content','dba_signature');