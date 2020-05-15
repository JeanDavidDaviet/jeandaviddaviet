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

function etude_cpt() {
  $args = array(
    'public' => true,
    'label'  => 'Etudes',
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor')
  );
  register_post_type( 'etude', $args );
}
add_action( 'init', 'etude_cpt' );

function portfolio_cpt() {
  $args = array(
    'public' => true,
    'label'  => 'Portfolio',
    'show_in_rest' => true,
    'supports' => array( 'title', 'editor', 'thumbnail')
  );
  register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_cpt' );

function link_cpt() {
    $args = array(
      'public' => true,
      'has_archive' => 'links',
      'label'  => 'Link',
      'show_in_rest' => true,
      'supports' => array( 'title', 'editor'),
      'taxonomies' => array( 'post_tag' )
    );
    register_post_type( 'link', $args );
}
add_action( 'init', 'link_cpt' );

function projet_init() {
  register_taxonomy(
    'projet',
    'portfolio',
    array(
      'label' => __( 'Projet' ),
      'rewrite' => array( 'slug' => 'projet' ),
      'show_in_rest' => true,
      'hierarchical' => true
    )
  );
}
add_action( 'init', 'projet_init' );
