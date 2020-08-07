<?php

function mr_widgets()
{
    register_sidebar([
        "name"      =>  __( "My First Theme Sidebar", "mr-web" ),
        "id"        =>  "mr_sidebar",
        "description"    => __( "Sidebar for the thee mr-web", "mr-web" ),
        "before_widget" => '<div id="%1s" class="widget clearfix %2$s">',
        "after_widget"  => '</div>',
        "before_title"  => '<h4>',
        "after_title"   => '</h4>'
    ]);
}
