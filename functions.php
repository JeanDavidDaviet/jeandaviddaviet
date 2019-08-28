<?php 

// remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
add_filter('sanitize_file_name', 'remove_accents' );

require_once get_template_directory() . '/inc/Jdd_Walker_Comment.php';

function wp_remove_vers( $src ) {
  global $wp_version;
  parse_str(parse_url($src, PHP_URL_QUERY), $query);
  if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
    $src = remove_query_arg('ver', $src);
  }
  return $src;
}
add_filter( 'script_loader_src', 'wp_remove_vers' );
add_filter( 'style_loader_src', 'wp_remove_vers' );

function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

function jce_remove_attachment_comments( $open, $post_id ) {
  $post = get_post( $post_id );
  if ( 'attachment' == $post->post_type ) {
    return false;
  }
  return $open;
}
add_filter( 'comments_open', 'jce_remove_attachment_comments', 10 , 2 );



function add_theme_scripts() {
    wp_deregister_script( 'jquery' );
    wp_enqueue_style( 'style', get_template_directory_uri() . "/dist/css/main.min.css", array(), false);
    // wp_enqueue_script( 'script', get_template_directory_uri() . "/script.min.js", array(), false, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_action( 'init', 'register_my_menu' );
function register_my_menu() {
    register_nav_menus( array(
        'primary' => 'Menu Principal'
    ) );
}

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

add_theme_support( 'post-thumbnails', array( 'portfolio' ) );

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