<?php if ( ! defined( 'ABSPATH' ) ) exit; ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <div class="nav wrap">
    <div class="brand">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/victoria_logo.webp' ); ?>" alt="<?php bloginfo( 'name' ); ?>" style="height:34px;width:auto;">
        <?php endif; ?>
      </a>
    </div>
    <nav class="navlinks">
      <a href="<?php echo esc_url( home_url( '/#habitaciones' ) ); ?>">Habitaciones</a>
      <a href="<?php echo esc_url( home_url( '/#espacios' ) ); ?>">Espacios</a>
      <a href="<?php echo esc_url( home_url( '/#ubicacion' ) ); ?>">Ubicación</a>
      <a href="<?php echo esc_url( home_url( '/#contacto' ) ); ?>">Contacto</a>
    </nav>
    <div class="nav-cta">
      <span class="nav-phone">📞 (55) 1228 5766</span>
      <a class="btn btn-dark" style="padding:10px 20px;font-size:.85rem;" href="<?php echo v132_whatsapp_url( 'Hola, quiero consultar disponibilidad.' ); ?>" target="_blank" rel="noopener">Reservar</a>
      <button class="burger" aria-label="Abrir menú">☰</button>
    </div>
  </div>
</header>
