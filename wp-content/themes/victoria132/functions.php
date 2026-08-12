<?php
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'V132_WHATSAPP', '525512285766' );

require_once get_template_directory() . '/inc/cpt-habitaciones.php';
require_once get_template_directory() . '/inc/acf-fields.php';
require_once get_template_directory() . '/inc/template-tags.php';

function v132_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'v132_setup' );

function v132_assets() {
	wp_enqueue_style( 'v132-fonts', 'https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap', array(), null );
	wp_enqueue_style( 'v132-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.1' );
	wp_enqueue_script( 'v132-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.1', true );
}
add_action( 'wp_enqueue_scripts', 'v132_assets' );

/**
 * Builds a wa.me link with a prefilled, URL-encoded message.
 */
function v132_whatsapp_url( $message = '' ) {
	$base = 'https://wa.me/' . V132_WHATSAPP;
	if ( $message ) {
		$base .= '?text=' . rawurlencode( $message );
	}
	return esc_url( $base );
}
