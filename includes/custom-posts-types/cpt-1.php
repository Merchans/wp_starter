<?php

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type ...

/* this code is from this article:
https://www.cloudways.com/blog/how-to-create-custom-post-types-in-wordpress/ */


/* Custom Post Type Start */

function mr_create_posttype() {
register_post_type( 'News',
// CPT Options
array(
  'labels' => array(
   'name' => __( 'News' ),
   'singular_name' => __( 'News' )
  ),
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'News'),
 )
);
}


/*Custom Post type start*/
function mr_post_type_news() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('News', 'plural', 'mr-web'),
'singular_name' => _x('News', 'singular', 'mr-web'),
'menu_name' => _x('News', 'admin menu', 'mr-web'),
'name_admin_bar' => _x('News', 'admin bar', 'mr-web'),
'add_new' => _x('Add New', 'add new', 'mr-web'),
'add_new_item' => __('Add New News', 'mr-web'),
'new_item' => __('New News', 'mr-web'),
'edit_item' => __('Edit News', 'mr-web'),
'view_item' => __('View News', 'mr-web'),
'all_items' => __('All News', 'mr-web'),
'search_items' => __('Search News', 'mr-web'),
'not_found' => __('No News found.', 'mr-web'),
);
$args = array(
// link for the icon: https://developer.wordpress.org/resource/dashicons/#admin-links
'menu_icon' => '',
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'News'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('News', $args);
}

/*Custom Post type end*/

