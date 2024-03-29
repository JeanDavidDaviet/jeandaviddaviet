<?php

add_filter( 'jetpack_honor_dnt_header_for_stats', '__return_true' );
remove_filter('the_excerpt', 'wpautop');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_host_js');
add_filter('sanitize_file_name', 'remove_accents' );
add_filter( 'auto_plugin_update_send_email', '__return_false' );

load_theme_textdomain('jdd', get_template_directory() . '/languages');

require_once 'inc/menu_walker.php';
require_once 'inc/cpt.php';

function wp_remove_vers( $src ) {
  global $wp_version;
  $version = parse_url($src, PHP_URL_QUERY);
  if ($version) {
    parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
      $src = remove_query_arg('ver', $src);
    }
  }
  return $src;
}
add_filter( 'script_loader_src', 'wp_remove_vers' );
add_filter( 'style_loader_src', 'wp_remove_vers' );

function filter_ptags_on_images($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'filter_ptags_on_images');

function set_excerpt_length( $length ) {
  return 20;
}
add_filter('excerpt_length', 'set_excerpt_length');

function jce_remove_attachment_comments( $open, $post_id ) {
  $post = get_post( $post_id );
  if ( 'attachment' == $post->post_type ) {
    return false;
  }
  return $open;
}
add_filter( 'comments_open', 'jce_remove_attachment_comments', 10 , 2 );

function add_theme_scripts() {
  wp_dequeue_style( 'wp-block-library' );
  wp_enqueue_style( 'style', get_template_directory_uri() . "/dist/css/main.min.css", [], filemtime(get_template_directory() . "/dist/css/main.min.css"));
  wp_enqueue_script( 'script', get_template_directory_uri() . "/dist/js/main.min.js", [], filemtime(get_template_directory() . "/dist/js/main.min.js"), true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_action( 'init', 'pm_register_my_menu' );
function pm_register_my_menu() {
    register_nav_menus( array(
        'primary' => 'Menu Principal'
    ) );
}

add_action('wp_ajax_get_page_revision', 'get_page_revision');
add_action('wp_ajax_nopriv_get_page_revision', 'get_page_revision');
function get_page_revision(){
  $revision_id = $_GET['revision'];
  if((int) $revision_id > 0){
    if(wp_verify_nonce($_GET['_wpnonce'], 'get_revision_' . $revision_id)){
      header('X-Robots-Tag: noindex');
      echo apply_filters('the_content', get_post($revision_id)->post_content);
      die;
    }
  }
}

function sgb_external_scripts() {
  global $post;
  if( is_admin() && $post->post_type === 'link'){
    wp_enqueue_script( 'gutenberg-share', get_template_directory_uri() . "/dist/js/gutenberg-share.min.js", [  'wp-data', 'wp-blocks', 'wp-element', 'wp-components', 'wp-i18n', 'jquery' ], time(), true);
  }
 }
 add_action( 'enqueue_block_assets', 'sgb_external_scripts' );

add_filter( 'wpseo_robots', 'yoast_seo_robots_remove_single' );
function yoast_seo_robots_remove_single( $robots ) {
  if ( is_singular ( 'link' ) ) {
    return false;
  } else {
    return $robots;
  }
}

add_filter( 'mkaz_code_syntax_language_list', function( $languages ) {
  return array_merge($languages, array(
    'diff' => 'Diff',
    'twig' => 'Twig',
  ));
} );
