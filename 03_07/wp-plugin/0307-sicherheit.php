<?php
/**
 * Plugin Name: 0307 Sicherheit
 * Description: Ein einfaches Plugin zum Erlernen von PHP für WordPress.
 * Version: 1.0
 * Author: Florence
 */

// Sicherheitsüberprüfung, um zu verhindern, dass das Plugin direkt aufgerufen wird.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function my_output() {
	$name = '<style>';
	echo '<div class="notice notice-success is-dismissible">';
	echo '<p>Herzlich willkommen, ' . esc_html($name) . '. Dies ist ein einfaches Plugin-Beispiel.</p>';
	echo '</div>';
}
// Funktion wird ausgeführt wird, wenn die Aktion admin_notices aufgerufen wird.
add_action( 'admin_notices', 'my_output' );
