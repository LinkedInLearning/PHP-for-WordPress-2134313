<?php
/**
 * Plugin Name: 0309 Favoriten verwalten - unsicher
 * Description: Ein einfaches Plugin zum Erlernen von PHP für WordPress.
 * Version: 1.0
 * Author: Florence
 *
 * @package WordPressPHPCourse
 */

// Menü hinzufügen und Callback registrieren
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
        echo 'Keine Berechtigung.';
    }

    
    if ( isset( $_POST['favorite'] )) {
        $new_favorite = $_POST['favorite'];
        if ( $new_favorite ) {
            if ( ! in_array( $new_favorite, $favorites, true )) {
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
            <label for="favorite">Neuer Favorit:</label>
            <input type="text" id="favorite" name="favorite" required>
            <button type="submit">Hinzufügen</button>
        </form>
        <h2>Aktuelle Favoriten</h2>
        <ul>
            <?php foreach ( $favorites as $favorite ): ?>
                <li><?php echo $favorite; ?></li> 
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
}
