<?php
/**
 * Plugin Name: 0310 Favoriten verwalten - abgesichert
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

// Menü hinzufügen und Callback registrieren.
add_action(
	'admin_menu',
	function () {
		add_menu_page(
			'Favoritenliste',
			'Favoritenliste',
			'manage_options',
			'favorite-list',
			'favorite_list_page',
			'dashicons-heart',
			20
		);
	}
);

// Favoriten initialisieren, falls noch nicht vorhanden.
if ( false === get_option( 'favorite_list' ) ) {
	add_option( 'favorite_list', array() );
}

// Favoriten-Seite im Admin-Bereich.
function favorite_list_page() {
	$favorites = get_option( 'favorite_list', array() );

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( 'Keine Berechtigung.');
	}

	if ( isset( $_POST['favorite'] ) && check_admin_referer( 'lilwp_save_favorite', 'lilwp_nonce' ) ) {
		$new_favorite = sanitize_text_field( wp_unslash( $_POST['favorite'] ) );
		if ( $new_favorite ) {
			if ( ! in_array( $new_favorite, $favorites, true ) ) {
				$favorites[] = $new_favorite;
				update_option( 'favorite_list', $favorites );
				echo '<div>Favorit hinzugefügt!</div>';
			} else {
				echo '<div>Favorit ist bereits in der Liste.</div>';
			}
		} else {
			echo '<div>Ungültige Eingabe.</div>';
		}
	}

	?>
	<div>
		<h1>Favoritenliste</h1>
		<form method="post">
			<?php
			wp_nonce_field( 'lilwp_save_favorite', 'lilwp_nonce' );
			?>
			<label for="favorite">Neuer Favorit:</label>
			<input type="text" id="favorite" name="favorite" required>
			<button type="submit">Hinzufügen</button>
		</form>
		<h2>Aktuelle Favoriten</h2>
		<ul>
			<?php foreach ( $favorites as $favorite ): ?>
				<li><?php echo esc_html( $favorite ); ?></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<?php
}
