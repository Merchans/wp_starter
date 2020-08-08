<?php

// Setup
define("MR_DEV_MODE", true);

// Include
include( get_theme_file_path( "/includes/front/enqueue.php" ) );

include( get_theme_file_path( "/includes/setup.php" ) );
include( get_theme_file_path( "/includes/custom-nav-walker.php" ) );
include( get_theme_file_path( "/includes/widgets.php" ) );
include( get_theme_file_path( "/includes/cleanup-and-reorder/cleanup.php" ) );
include( get_theme_file_path( "/includes/cleanup-and-reorder/reorder-menu.php" ) );


// Hooks
add_action( "wp_enqueue_scripts", "mr_enqueue" );
add_action( "after_setup_theme", "mr_setu_theme");
add_action( "widgets_init", "mr_widgets");


add_action('init', 'mr_waste_scripts', PHP_INT_MAX - 1);

// for editing admin icons and ordres
//add_action("admin_menu", "mr_edit_admin_menu", 999);


// Shortcodes
