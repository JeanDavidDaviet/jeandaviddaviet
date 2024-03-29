<?php

// function news_cpt() {
//     $args = array(
//       'public' => true,
//       'label'  => 'News',
//       'show_in_rest' => true,
//       'supports' => array( 'title', 'editor', 'thumbnail'),
//       'has_archive' => true
//     );
//     register_post_type( 'news', $args );

//     add_permastruct(
//       'news',
//       "/news/%year%/%monthnum%/%news%/",
//       array( 'with_front' => false )
//     );

//     add_rewrite_rule(
//         '^news/([0-9]{4})/([0-9]{1,2})/?$',
//         'index.php?post_type=news&year=$matches[1]&monthnum=$matches[2]',
//         'top'
//     );
//     add_rewrite_rule(
//         '^news/([0-9]{4})/?$',
//         'index.php?post_type=news&year=$matches[1]',
//         'top'
//     );
// }
// add_action( 'init', 'news_cpt' );

// function wpd_pg_review_permalinks( $url, $post ) {
//     if ( 'news' == get_post_type( $post ) ) {
//         $url = str_replace( "%year%", get_the_date('Y'), $url );
//         $url = str_replace( "%monthnum%", get_the_date('m'), $url );
//     }
//     return $url;
// }
// add_filter( 'post_type_link', 'wpd_pg_review_permalinks', 10, 2 );

function testimony_cpt() {
  $args = array(
    'public' => false,
    'show_ui' => true,
    'label'  => 'Témoignage',
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor')
  );
  register_post_type( 'temoignage', $args );
}
add_action( 'init', 'testimony_cpt' );

function link_cpt() {
    $args = array(
      'public' => true,
      'has_archive' => 'liens',
      'label'  => 'Link',
      'show_in_rest' => true,
      'supports' => array( 'title', 'editor'),
      'taxonomies' => array( 'post_tag' )
    );
    register_post_type( 'link', $args );
}
add_action( 'init', 'link_cpt' );
