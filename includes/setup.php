<?php

function mr_setu_theme()
{
    add_theme_support("post-thumbnails");

    register_nav_menu( "primary", __("Primary Menu", "mr-web") );
}
