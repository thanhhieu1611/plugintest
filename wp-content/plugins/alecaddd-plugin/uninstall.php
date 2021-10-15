<?php

/**
 * Trigger this file on plugin uninstall
 * 
 * @package AlecadddPlugin
 */

// Security check
if ( ! defined( 'WP_UNINSTALL_PLUGIN' )) {
    die;
}

// // Clear DB stored data for one custom post type
// // get posts in DB, type book & all the posts
// $books = get_posts( array( 'post_type' => 'book', 'numberposts' => -1 ));

// foreach( $books as $book) {
//     // Delete post with the ID, and don\t care about status
//     wp_delete_post( $book->ID, true);
// }

// What if we have many of custom post type, use $wpdb
// Access the database via SQL
global $wpdb;
$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'book' " );
$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts) ");
$wpdb->query( "DELETE FROM wp_term_relationship WHERE object_id NOT IN (SELECT id FROM wp_posts) ");