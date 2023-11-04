<?php
class Jdd_Menu_Walker extends Walker
{
    public $tree_type = array( 'post_type', 'taxonomy', 'custom' );

    public $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    public function start_lvl( &$output, $depth = 0, $args = array() )
    {
        $output .= "<ul>";
    }

    public function end_lvl( &$output, $depth = 0, $args = array() )
    {
        $output .= "</ul>";
    }

    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
    {
        $output .= '<li class="navbar-item">';

        $atts = array();
        $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = ! empty($item->target)     ? $item->target     : '';
        $atts['rel']    = ! empty($item->xfn)        ? $item->xfn        : '';
        $atts['href']   = ! empty($item->url)        ? $item->url        : '';

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if (! empty($value) ) {
                $value = ( 'href' === $attr ) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);

        $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

        $item_output = $args['before'];
        $item_output .= '<a class="navbar-link"'. $attributes .'>';
        $item_output .= $args['link_before'] . $title . $args['link_after'];
        $item_output .= '</a>';
        $item_output .= $args['after'];

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    public function end_el( &$output, $item, $depth = 0, $args = array() )
    {
        $output .= "</li>";
    }

}
