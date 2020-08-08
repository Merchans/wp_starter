<?php

function mr_edit_admin_menu()
{
    remove_menu_page("edit-comments.php");
    remove_submenu_page("themes.php", "theme-editor.php");
    remove_submenu_page("plugins.php", "plugin-editor.php");

    //remove_menu_page( 'index.php' );                  //Dashboard
    remove_menu_page( 'edit.php' );                   //Posts
    //remove_menu_page( 'upload.php' );                 //Media
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'themes.php' );                 //Appearance
    //remove_menu_page( 'plugins.php' );                //Plugins
    remove_menu_page( 'users.php' );                  //Users
    remove_menu_page( 'tools.php' );                  //Tools
    //remove_menu_page( 'options-general.php' );        //Settings
}

function mr_menu_order($menu_order)
{
    return array(
        'index.php',
        'edit.php?post_type=page',
        'edit.php?post_type=theory',
        'edit.php?post_type=projects',
        'upload.php',
        'plugins.php',
    );
}
