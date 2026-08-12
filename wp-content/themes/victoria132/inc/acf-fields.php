<?php
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Campos de habitación registrados por código (solo tipos disponibles en ACF gratuito).
 * El campo de fotos usa la Galería nativa del editor de bloques (the_content),
 * no un campo ACF Gallery — eso evita depender de ACF PRO por ahora.
 */
function v132_register_acf_fields() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
		'key'    => 'group_habitacion_detalles',
		'title'  => 'Detalles de la habitación',
		'fields' => array(
			array(
				'key'   => 'field_v132_capacidad',
				'label' => 'Capacidad',
				'name'  => 'capacidad',
				'type'  => 'text',
				'instructions' => 'Ej. "2 personas"',
			),
			array(
				'key'   => 'field_v132_camas',
				'label' => 'Camas',
				'name'  => 'camas',
				'type'  => 'text',
				'instructions' => 'Ej. "1 cama matrimonial"',
			),
			array(
				'key'     => 'field_v132_servicios',
				'label'   => 'Servicios incluidos',
				'name'    => 'servicios',
				'type'    => 'checkbox',
				'choices' => array(
					'wifi'     => 'Wifi',
					'tv'       => 'TV',
					'cocineta' => 'Cocineta',
					'closet'   => 'Closet',
					'bano'     => 'Baño privado',
					'balcon'   => 'Balcón',
				),
				'layout' => 'horizontal',
			),
			array(
				'key'          => 'field_v132_precio_ref',
				'label'        => 'Precio de referencia (MXN / noche)',
				'name'         => 'precio_ref',
				'type'         => 'number',
				'instructions' => 'Opcional. Si se deja vacío, el sitio muestra "Consultar disponibilidad" en vez de un precio.',
			),
		),
		'location' => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'habitacion',
				),
			),
		),
	) );
}
add_action( 'acf/init', 'v132_register_acf_fields' );
