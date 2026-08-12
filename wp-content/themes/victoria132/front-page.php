<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
$img = get_template_directory_uri() . '/assets/img/';
?>

<section class="hero" style="background-image:url('<?php echo esc_url( $img . 'hero.webp' ); ?>');">
  <div class="hero-inner wrap">
    <h1>Tu descanso en el corazón de Xalapa</h1>
    <p class="lead">Habitaciones equipadas a unos pasos de la Catedral, el Parque Juárez y el Palacio de Gobierno. Consulta disponibilidad al instante, sin llamadas ni esperas.</p>
    <div class="hero-ctas">
      <a class="btn btn-primary" href="<?php echo v132_whatsapp_url( 'Hola, quiero consultar disponibilidad en Victoria 132.' ); ?>" target="_blank" rel="noopener">Consultar disponibilidad →</a>
      <a class="btn btn-ghost" href="#habitaciones">Ver habitaciones</a>
    </div>
  </div>
</section>

<section class="value-strip">
  <div class="wrap">
    <div class="value-grid">
      <div class="value-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M2 8.5a15 15 0 0 1 20 0M5.5 12a10 10 0 0 1 13 0M9 15.5a5 5 0 0 1 6 0"/><circle cx="12" cy="19" r="1"/></svg>
        <h4>Wifi 200 Mbps</h4><span>En todas las áreas, sin costo extra</span>
      </div>
      <div class="value-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="4" y="2.5" width="16" height="19" rx="2"/><circle cx="12" cy="13" r="4.2"/><circle cx="12" cy="13" r="1.4"/></svg>
        <h4>Lavandería</h4><span>Autoservicio, se cobra por kilo</span>
      </div>
      <div class="value-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="18" height="18" rx="3"/><path d="M9 16V7.5h3.4a2.6 2.6 0 1 1 0 5.2H9"/></svg>
        <h4>Estacionamiento</h4><span>Cajones propios · pregunta disponibilidad</span>
      </div>
      <div class="value-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3l7 3v5c0 5-3 8.5-7 10-4-1.5-7-5-7-10V6l7-3z"/></svg>
        <h4>Seguridad</h4><span>Para que solo te preocupes por descansar</span>
      </div>
      <div class="value-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M4 9h13v4a5 5 0 0 1-5 5H9a5 5 0 0 1-5-5V9z"/><path d="M17 10h1.5a2.3 2.3 0 0 1 0 4.6H17"/></svg>
        <h4>Café-Land Victoria</h4><span>Cafetería en planta baja del edificio</span>
      </div>
      <div class="value-item">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="5" y="2" width="14" height="20" rx="2.5"/><path d="M9 18h6"/></svg>
        <h4>Mobile-First</h4><span>Reserva desde tu celular en segundos</span>
      </div>
    </div>
  </div>
</section>

<section id="habitaciones">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Habitaciones</span>
      <h2>Cada habitación, a un clic de reservarse</h2>
      <p>Disponibilidad y precios actualizados directamente desde nuestro panel — sin intermediarios.</p>
    </div>

    <?php
    $rooms = new WP_Query( array(
      'post_type'      => 'habitacion',
      'posts_per_page' => -1,
      'orderby'        => 'title',
      'order'          => 'ASC',
    ) );
    ?>

    <?php if ( $rooms->have_posts() ) : ?>
      <div class="rooms-grid">
        <?php while ( $rooms->have_posts() ) : $rooms->the_post(); ?>
          <?php v132_render_room_card( get_the_ID() ); ?>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    <?php else : ?>
      <p class="rooms-note">Aún no hay habitaciones publicadas. Agrégalas desde <strong>Habitaciones → Añadir nueva</strong> en el panel de administración.</p>
    <?php endif; ?>
  </div>
</section>

<section id="espacios" class="gallery-section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Espacios y amenidades</span>
      <h2>Un ambiente pensado para quedarte</h2>
      <p>Terraza, mesa de billar, ping-pong, cocina compartida y patio colonial.</p>
    </div>
    <div class="gallery-grid">
      <figure class="tall js-lightbox" data-full="<?php echo esc_url( $img . 'area-comun.webp' ); ?>" data-cap="Terraza y área común">
        <img src="<?php echo esc_url( $img . 'area-comun.webp' ); ?>" alt="Terraza"><figcaption>Terraza / área común</figcaption>
      </figure>
      <figure class="js-lightbox" data-full="<?php echo esc_url( $img . 'billar.webp' ); ?>" data-cap="Mesa de billar">
        <img src="<?php echo esc_url( $img . 'billar.webp' ); ?>" alt="Billar"><figcaption>Mesa de billar</figcaption>
      </figure>
      <figure class="js-lightbox" data-full="<?php echo esc_url( $img . 'pingpong.webp' ); ?>" data-cap="Ping-pong">
        <img src="<?php echo esc_url( $img . 'pingpong.webp' ); ?>" alt="Ping pong"><figcaption>Ping-pong</figcaption>
      </figure>
      <figure class="tall js-lightbox" data-full="<?php echo esc_url( $img . 'comedor.webp' ); ?>" data-cap="Terraza comedor">
        <img src="<?php echo esc_url( $img . 'comedor.webp' ); ?>" alt="Comedor terraza"><figcaption>Comedor en terraza</figcaption>
      </figure>
      <figure class="js-lightbox" data-full="<?php echo esc_url( $img . 'cocina.webp' ); ?>" data-cap="Cocina compartida">
        <img src="<?php echo esc_url( $img . 'cocina.webp' ); ?>" alt="Cocina"><figcaption>Cocina compartida</figcaption>
      </figure>
      <figure class="js-lightbox" data-full="<?php echo esc_url( $img . 'bano.webp' ); ?>" data-cap="Baño con talavera">
        <img src="<?php echo esc_url( $img . 'bano.webp' ); ?>" alt="Baño"><figcaption>Baños con talavera</figcaption>
      </figure>
      <figure class="js-lightbox" data-full="<?php echo esc_url( $img . 'pasillo.webp' ); ?>" data-cap="Pasillo colonial">
        <img src="<?php echo esc_url( $img . 'pasillo.webp' ); ?>" alt="Pasillo"><figcaption>Pasillos coloniales</figcaption>
      </figure>
    </div>
  </div>
</section>

<section id="ubicacion">
  <div class="wrap">
    <div class="location-grid">
      <div>
        <span class="eyebrow">Ubicación</span>
        <h2>En pleno centro histórico de Xalapa</h2>
        <p style="color:var(--ink-soft)">Guadalupe Victoria 132, Centro, Xalapa Enríquez, Ver. C.P. 91000</p>
        <ul class="poi-list">
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 21s7-7.4 7-12a7 7 0 1 0-14 0c0 4.6 7 12 7 12z"/><circle cx="12" cy="9" r="2.4"/></svg>A una cuadra del Parque Ecológico Los Tecajetes</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 21s7-7.4 7-12a7 7 0 1 0-14 0c0 4.6 7 12 7 12z"/><circle cx="12" cy="9" r="2.4"/></svg>Cerca de la Catedral y el Parque Juárez</li>
          <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 21s7-7.4 7-12a7 7 0 1 0-14 0c0 4.6 7 12 7 12z"/><circle cx="12" cy="9" r="2.4"/></svg>A pasos del Palacio de Gobierno</li>
        </ul>
        <div class="hero-ctas" style="margin-top:26px;">
          <a class="btn btn-dark" href="<?php echo v132_whatsapp_url(); ?>" target="_blank" rel="noopener">Escribir por WhatsApp</a>
        </div>
      </div>
      <div class="map-frame">
        <iframe src="https://www.google.com/maps?q=Guadalupe+Victoria+132,+Centro,+Xalapa+Enr%C3%ADquez,+Ver.,+91000&output=embed" loading="lazy" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

<section class="testi-section">
  <div class="wrap">
    <div class="section-head center">
      <span class="eyebrow">Confianza de huéspedes</span>
      <h2>Lo que dicen quienes se han quedado</h2>
      <p>Contenido de ejemplo — pendiente enlazar reseñas reales de Google/Booking/Airbnb.</p>
    </div>
    <div class="testi-grid">
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p>"Excelente ubicación, a un paso de todo el centro. El wifi funcionó perfecto para trabajar remoto."</p>
        <div class="testi-name">Reseña de ejemplo</div>
      </div>
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p>"Muy tranquilo y seguro. La terraza con la mesa de billar fue un plus que no esperaba."</p>
        <div class="testi-name">Reseña de ejemplo</div>
      </div>
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p>"Habitación amplia y muy limpia. Volvería a hospedarme sin duda."</p>
        <div class="testi-name">Reseña de ejemplo</div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
