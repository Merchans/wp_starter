<?php


function mr_enqueue()
{

    $uri    = get_theme_file_uri( );
    $version = MR_DEV_MODE ? time() : false;

    wp_register_style( "mr_bemit", $uri. "/assets/css/style.css", [], $version);

    wp_enqueue_style( "mr_bemit" );
    wp_enqueue_script( "jquery" );

}
