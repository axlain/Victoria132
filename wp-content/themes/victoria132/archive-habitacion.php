<?php
if ( ! defined( 'ABSPATH' ) ) exit;
get_header();
?>

<section style="padding-top:48px;">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Hospedaje</span>
      <h2>Todas nuestras habitaciones</h2>
    </div>

    <?php if ( have_posts() ) : ?>
      <div class="rooms-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php v132_render_room_card( get_the_ID() ); ?>
        <?php endwhile; ?>
      </div>
      <?php the_posts_pagination(); ?>
    <?php else : ?>
      <p class="rooms-note">Aún no hay habitaciones publicadas.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
