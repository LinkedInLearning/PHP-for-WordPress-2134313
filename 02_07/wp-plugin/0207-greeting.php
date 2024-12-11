<?php
/**
 * Plugin Name: 0207 Gruß-Plugin
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

// Konstante definieren für Autor/Autorin.


function greeting_message() {
	// Aktuelle Stunde abrufen.
	$hour = date( 'G' ); // "G" liefert die Stunde im 24-Stunden-Format (0-23).

	// Variable für die Nachricht.
	$message = '';

	// Kontrollstruktur für die Begrüßung.
	

	echo '<div class="notice notice-success is-dismissible">';
    // Ausgabe der Nachricht und Ausgabe des Autors/der Autorin.
	
    echo '</div>';
}

// Ausgabe der Begrüßung im Admin-Dashboard.
add_action( 'admin_notices', 'greeting_message' );
