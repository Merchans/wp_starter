<?php


function mr_enqueue()
{

    $uri    = get_theme_file_uri( );
    $version = MR_DEV_MODE ? time() : false;

    // Registration CSS
    wp_register_style( "mr_bemit", $uri. "/assets/css/style.css", [], $version, true);



    // Registration JS


    // Enqueue Styles
    wp_enqueue_style( "mr_bemit",);

    // Enqueue Scripts
    wp_enqueue_script( 'jquery', '', '', '', true );

}
