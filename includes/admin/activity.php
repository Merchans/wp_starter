<?php

// Acript for puting a Custom Post Type to Dashbord Activity panel
// https://gist.github.com/wassim/edff111575fad9085a92ebea68988fbd

function mr_put_cpt_to_dashbord( $query_args ) {
  // Return public built-in posts + custom post types with 'post' capabilities
  $post_types = get_post_types( array( 'public' => true, "capability_type" => "post" ) );
  if ( is_array( $query_args['post_type'] ) ) {
    $query_args['post_type'] = $post_types;
  } else {
    $temp = $post_types;
    $query_args['post_type'] = $temp;
  }
  return $query_args;
}
