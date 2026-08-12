<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function v132_register_cpt_habitacion() {
	$labels = array(
		'name'               => 'Habitaciones',
		'singular_name'      => 'Habitación',
		'add_new_item'       => 'Añadir nueva habitación',
		'edit_item'          => 'Editar habitación',
		'new_item'           => 'Nueva habitación',
		'view_item'          => 'Ver habitación',
		'search_items'       => 'Buscar habitaciones',
		'not_found'          => 'No se encontraron habitaciones',
		'menu_name'          => 'Habitaciones',
	);

	register_post_type( 'habitacion', array(
		'labels'        => $labels,
		'public'        => true,
		'has_archive'   => true,
		'rewrite'       => array( 'slug' => 'habitaciones' ),
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'menu_icon'     => 'dashicons-admin-multisite',
		'show_in_rest'  => true,
	) );
}
add_action( 'init', 'v132_register_cpt_habitacion' );
