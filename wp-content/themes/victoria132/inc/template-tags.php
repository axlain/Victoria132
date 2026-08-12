<?php
if ( ! defined( 'ABSPATH' ) ) exit;

function v132_servicio_labels() {
	return array(
		'wifi'     => 'Wifi',
		'tv'       => 'TV',
		'cocineta' => 'Cocineta',
		'closet'   => 'Closet',
		'bano'     => 'Baño privado',
		'balcon'   => 'Balcón',
	);
}

/**
 * Tarjeta de habitación reutilizada en la portada y en el archivo de habitaciones.
 */
function v132_render_room_card( $post_id ) {
	$title      = get_the_title( $post_id );
	$permalink  = get_permalink( $post_id );
	$capacidad  = get_field( 'capacidad', $post_id );
	$camas      = get_field( 'camas', $post_id );
	$precio_ref = get_field( 'precio_ref', $post_id );
	$servicios  = get_field( 'servicios', $post_id );
	$labels     = v132_servicio_labels();

	$meta_parts = array_filter( array( $camas, $capacidad ) );
	$wa_message = sprintf( 'Hola, quiero consultar disponibilidad de la Habitación %s.', $title );
	?>
	<div class="room-card">
		<a class="room-photo" href="<?php echo esc_url( $permalink ); ?>">
			<?php if ( has_post_thumbnail( $post_id ) ) : ?>
				<?php echo get_the_post_thumbnail( $post_id, 'medium_large' ); ?>
			<?php else : ?>
				<div class="room-photo-empty">Sin foto todavía</div>
			<?php endif; ?>
			<span class="room-tag">Habitación <?php echo esc_html( $title ); ?></span>
		</a>
		<div class="room-body">
			<h3><a href="<?php echo esc_url( $permalink ); ?>">Habitación <?php echo esc_html( $title ); ?></a></h3>
			<?php if ( $meta_parts ) : ?>
				<div class="room-meta"><?php echo esc_html( implode( ' · ', $meta_parts ) ); ?></div>
			<?php endif; ?>
			<?php if ( $servicios ) : ?>
				<div class="room-tags">
					<?php foreach ( $servicios as $slug ) : ?>
						<span class="mini-tag"><?php echo esc_html( $labels[ $slug ] ?? $slug ); ?></span>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<?php if ( $precio_ref ) : ?>
				<div class="room-price">Desde $<?php echo esc_html( number_format_i18n( $precio_ref ) ); ?> MXN / noche</div>
			<?php endif; ?>
			<a class="btn btn-primary" href="<?php echo v132_whatsapp_url( $wa_message ); ?>" target="_blank" rel="noopener">Consultar disponibilidad</a>
		</div>
	</div>
	<?php
}
