<?php
/**
 * Plugin Name: 0208 Gruß-Plugin
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

// Konstante definieren.
define( 'GREETING_PLUGIN_AUTHOR', 'Florence' );

function greeting_message() {
	// Aktuelle Stunde abrufen.
	$hour = date( 'G' ); // "G" liefert die Stunde im 24-Stunden-Format (0-23).

	// Variable für die Nachricht.
	$message = '';

	// Kontrollstruktur für die Begrüßung.
	if ( $hour < 12 ) {
		$message = 'Guten Morgen!';
	} elseif ( $hour < 18 ) {
		$message = 'Guten Tag!';
	} else {
		$message = 'Guten Abend!';
	}

	echo '<div class="notice notice-success is-dismissible">';
	echo '<p>' . $message . ' Willkommen! Dieses Plugin wurde erstellt von ' . GREETING_PLUGIN_AUTHOR . '.</p>';
	echo '</div>';
}

// Ausgabe der Begrüßung im Admin-Dashboard.
add_action( 'admin_notices', 'greeting_message' );
