<?php
/**
 * Plugin Name: 0306 Formular-Beispiel
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

function lilwp_add_admin_menu() {
	add_menu_page(
		'Formular Beispiel',   // Seitentitel.
		'Formular Beispiel',   // Menütext.
		'manage_options',       // Berechtigung.
		'form_handling',        // Slug.
		'lilwp_form_page',      // Callback für den Seiteninhalt.
		'dashicons-feedback',   // Icon.
		20                      // Position.
	);
}
add_action( 'admin_menu', 'lilwp_add_admin_menu' );

function lilwp_form_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'Sie haben keine Berechtigung, diese Seite aufzurufen.' );
	}

	// Formularverarbeitung mit Nonce-Prüfung.
	if ( isset( $_POST['lilwp_name'] ) && check_admin_referer( 'lilwp_save_setting', 'lilwp_nonce' ) ) {
		// https://developer.wordpress.org/reference/functions/sanitize_text_field/ .
		$name = sanitize_text_field( wp_unslash( $_POST['lilwp_name'] )); // Eingabe bereinigen.
		if ( ! empty( $name ) ) {
			update_option( 'lilwp_name', $name );
			echo '<div class="notice notice-success is-dismissible"><p>Einstellung gespeichert!</p></div>';
		} else {
			echo '<div class="notice notice-error is-dismissible"><p>Bitte geben Sie einen gültigen Namen ein.</p></div>';
		}
	}

	// Aktuellen Wert aus der Datenbank abrufen.
	$name = get_option( 'lilwp_name', '' );

	// Ausgabe des Formulars.
	?>
	<div class="wrap">
		<h1>Formular Beispiel</h1>
		<p>Geben Sie Ihren Namen ein:</p>
		<form method="post" action="">
			<?php
			// Nonce-Feld für Sicherheit hinzufügen.
			wp_nonce_field( 'lilwp_save_setting', 'lilwp_nonce' );
			?>
			<label for="lilwp_name">Name:</label><br>
			<input type="text" id="lilwp_name" name="lilwp_name" value="<?php echo esc_attr( $name ); ?>"><br>
			<?php submit_button( 'Speichern' ); ?>
		</form>
	</div>
	<?php
}
