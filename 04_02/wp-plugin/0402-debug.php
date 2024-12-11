<?php
/**
 * Plugin Name: 0402 Debuggen
 * Description: Ein einfaches Plugin zum Erlernen von PHP für WordPress.
 * Version: 1.0
 * Author: Florence
 *
 * @package WordPressPHPCourse
 */

// Sicherheitsüberprüfung, um direkten Zugriff zu verhindern.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function lilwp_register_book_post_type() {
	$args = array(
		'labels'      => array(
			'name'               => 'Bücher',
			'singular_name'      => 'Buch',
			'add_new'            => 'Neues Buch hinzufügen',
			'add_new_item'       => 'Neues Buch hinzufügen',
			'edit_item'          => 'Buch bearbeiten',
			'new_item'           => 'Neues Buch',
			'view_item'          => 'Buch anzeigen',
			'search_items'       => 'Bücher durchsuchen',
			'not_found'          => 'Keine Bücher gefunden',
			'not_found_in_trash' => 'Keine Bücher im Papierkorb gefunden',
		),
		'public'      => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'buecher' ),
		'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'menu_icon'   => 'dashicons-book', // Symbol für das Menü im Backend.
	);
	error_log( 'Hallo Error Log' );
    error_log( print_r( $args, true ) );
	register_post_type( 'buch', $args );
}

add_action( 'init', 'lilwp_register_book_post_type' );
