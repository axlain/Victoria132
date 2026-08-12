<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<section style="padding-top:48px;">
  <div class="wrap">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php
      $capacidad  = get_field( 'capacidad' );
      $camas      = get_field( 'camas' );
      $precio_ref = get_field( 'precio_ref' );
      $servicios  = get_field( 'servicios' );
      $labels     = v132_servicio_labels();
      $wa_message = sprintf( 'Hola, quiero consultar disponibilidad de la Habitación %s.', get_the_title() );
      ?>
      <a href="<?php echo esc_url( home_url( '/#habitaciones' ) ); ?>" style="display:inline-block;margin-bottom:20px;color:var(--ink-soft);font-size:.9rem;">← Volver a habitaciones</a>

      <div class="section-head">
        <span class="eyebrow">Habitación</span>
        <h2>Habitación <?php the_title(); ?></h2>
        <?php if ( $capacidad || $camas ) : ?>
          <p><?php echo esc_html( implode( ' · ', array_filter( array( $camas, $capacidad ) ) ) ); ?></p>
        <?php endif; ?>
      </div>

      <?php if ( has_post_thumbnail() ) : ?>
        <div style="border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow);margin-bottom:32px;">
          <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%;height:auto;display:block;' ) ); ?>
        </div>
      <?php endif; ?>

      <?php if ( $servicios ) : ?>
        <div class="room-tags" style="margin-bottom:24px;">
          <?php foreach ( $servicios as $slug ) : ?>
            <span class="mini-tag"><?php echo esc_html( $labels[ $slug ] ?? $slug ); ?></span>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <div style="max-width:720px;margin-bottom:32px;">
        <?php the_content(); ?>
      </div>

      <?php if ( $precio_ref ) : ?>
        <p class="room-price" style="font-size:1.2rem;">Desde $<?php echo esc_html( number_format_i18n( $precio_ref ) ); ?> MXN / noche</p>
      <?php endif; ?>

      <a class="btn btn-primary" href="<?php echo v132_whatsapp_url( $wa_message ); ?>" target="_blank" rel="noopener">Consultar disponibilidad</a>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>
