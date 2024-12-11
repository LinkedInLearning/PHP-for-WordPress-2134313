<?php
/**
 * Plugin Name: 0203 Kommentare
 * Description: Ein einfaches Plugin zum Erlernen von PHP für WordPress.
 * Version: 1.0
 * Author: Florence
 *
 * @package WordPressPHPCourse
 * @subpackage CommentsExample
 * @since 1.0.0
 * @license GPL-2.0-or-later
 * @copyright 2024 Florence Maurice
 */

// Sicherheitsüberprüfung, um zu verhindern, dass das Plugin direkt aufgerufen wird.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Outputs a welcome message inside a styled notice div.
 *
 * This function generates a success notice with a welcome message
 * for a user named Florence. The notice is styled with WordPress
 * admin notice classes and is dismissible.
 *
 * @return void
 */
function my_output() {
	$name = 'Florence';
	echo '<div class="notice notice-success is-dismissible">';
	echo '<p>Herzlich willkommen, ' . $name . '. Dies ist ein einfaches Plugin-Beispiel.</p>';
	echo '</div>';
}
// Funktion wird ausgeführt wird, wenn die Aktion admin_notices aufgerufen wird.
add_action( 'admin_notices', 'my_output' );
