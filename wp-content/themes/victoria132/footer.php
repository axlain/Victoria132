<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<section id="contacto">
  <div class="wrap">
    <div class="final-cta">
      <h2>¿Listo para tu próxima estancia en Xalapa?</h2>
      <p>Escríbenos y te confirmamos disponibilidad al momento.</p>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="<?php echo v132_whatsapp_url( 'Hola, quiero platicar sobre disponibilidad en Victoria 132.' ); ?>" target="_blank" rel="noopener">Hablar por WhatsApp</a>
        <a class="btn btn-ghost" style="border-color:rgba(255,255,255,.6)" href="tel:5512285766">Llamar ahora</a>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="wrap">
    <div class="footer-grid">
      <div>
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/victoria_logo.webp' ); ?>" alt="Victoria 132" style="height:32px;margin-bottom:14px;">
        <p>Guadalupe Victoria 132, Centro, Xalapa Enríquez, Ver., C.P. 91000</p>
      </div>
      <div>
        <h4>Contacto</h4>
        <a href="tel:5512285766">(55) 1228 5766</a>
        <a href="<?php echo v132_whatsapp_url(); ?>" target="_blank" rel="noopener">WhatsApp — 24 hrs</a>
        <p>Oficina: L–V, 8:00–16:00 hrs</p>
      </div>
      <div>
        <h4>Síguenos</h4>
        <p style="color:var(--ink-faint)">Redes sociales — pendiente vincular</p>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Victoria 132 — Xalapa, Ver.</span>
      <span><?php bloginfo( 'name' ); ?></span>
    </div>
  </div>
</footer>

<a class="wa-float" href="<?php echo v132_whatsapp_url( 'Hola, quiero consultar disponibilidad.' ); ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.5 14.4c-.3-.2-1.7-.9-2-1s-.5-.1-.7.1-.7 1-.9 1.2-.4.2-.7.1a8.3 8.3 0 0 1-2.4-1.5 9 9 0 0 1-1.7-2.1c-.2-.3 0-.5.1-.6l.4-.5.3-.4a.5.5 0 0 0 0-.5c-.1-.1-.7-1.6-.9-2.2s-.5-.5-.7-.5h-.6a1.1 1.1 0 0 0-.8.4 3.4 3.4 0 0 0-1 2.5 6 6 0 0 0 1.3 3.1c.1.2 2.2 3.4 5.4 4.7a18 18 0 0 0 1.8.7 4.3 4.3 0 0 0 2 .1 3.2 3.2 0 0 0 2.1-1.5 2.6 2.6 0 0 0 .2-1.5c-.1-.1-.3-.2-.6-.4z"/><path d="M12 2a10 10 0 0 0-8.6 15L2 22l5.1-1.3A10 10 0 1 0 12 2zm0 18.2a8.2 8.2 0 0 1-4.2-1.1l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2z"/></svg>
</a>

<div class="lightbox" id="lightbox">
  <button class="lightbox-close" aria-label="Cerrar">✕</button>
  <img id="lightboxImg" src="" alt="">
  <div class="lightbox-cap" id="lightboxCap"></div>
</div>

<?php wp_footer(); ?>
</body>
</html>
