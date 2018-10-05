<?php
/**
 * Created by IntelliJ IDEA.
 * User: Tebrase
 * Date: 05/10/2018
 * Time: 12:09
 */

// Enabled support for Post thumbnails on posts and pages.
add_theme_support('post-thumbnails');

add_image_size('tebrablog-featured-image', 2000, 1200, true);
add_image_size('tebrablog-thumbnail-avatar', 100, 100, true);

// This theme uses wp_nav_menu() in two locations.

register_nav_menus( array(
    'top' => __( 'Top Menu',      'tebrablog' ),
    'footer'  => __( 'Footer Menu', 'tebrablog' ),
) );

//Return the post excerpt, if one is set, else generate it using the post content.
function tebrablog_get_the_excerpt( $post_id = null, $num_words = 55 ) {
    $post = $post_id ? get_post( $post_id ) : get_post( get_the_ID() );
    $text = get_the_excerpt( $post );
    if ( ! $text ) {
        $text = get_post_field( 'post_content', $post );
    }
    $generated_excerpt = wp_trim_words( $text, $num_words );
    return apply_filters( 'get_the_excerpt', $generated_excerpt, $post );
}