<?php
/**
 * Plugin Name: 0401 OO Plugin
 * Description: Ein einfaches Plugin zum Erlernen von PHP für WordPress (OOP).
 * Version: 1.0
 * Author: Florence
 *
 * @package Lilwp_OO_Plugin
 */

// Sicherheitsüberprüfung, um direktes Laden zu verhindern.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin zur Demonstration von Variablen und Ausgabe (OOP).
 *
 * @package Lilwp_OO_Plugin
 */
class LILWP_Variables_Output_Plugin {

	/**
	 * Name des Benutzers.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Konstruktor.
	 * Initialisiert den Namen und registriert den Hook.
	 */
	public function __construct() {
		$this->name = 'Florence';
		add_action( 'admin_notices', array( $this, 'output_message' ) );
	}

	/**
	 * Gibt die Begrüßungsnachricht aus.
	 */
	public function output_message() {
		echo '<div class="notice notice-success is-dismissible">';
		echo '<p>Herzlich willkommen, ' . esc_html( $this->name ) . '. Dies ist ein OO-Plugin-Beispiel.</p>';
		echo '</div>';
	}
}

// Plugin-Instanz erstellen.
$lilwp_oo = new LILWP_Variables_Output_Plugin();
