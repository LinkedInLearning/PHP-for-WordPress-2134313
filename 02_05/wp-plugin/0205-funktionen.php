<?php
/**
 * Plugin Name: 0205 Funktionen
 * Description: Ein einfaches Plugin zum Erlernen von PHP für WordPress.
 * Version: 1.0
 * Author: Florence
 *
 * @package WordPressPHPCourse
 */

// Sicherheitsüberprüfung, um zu verhindern, dass das Plugin direkt aufgerufen wird.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Filters the title and adds smiley faces before and after the title.
 *
 * @param string $title The original title.
 * @return string The modified title with smiley faces.
 */
function change_title( $title ) {
	return ':) ' . $title . ' :)';
}
add_filter( 'the_title', 'change_title' );
