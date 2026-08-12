document.addEventListener('DOMContentLoaded', function () {
  var lightbox = document.getElementById('lightbox');
  var lightboxImg = document.getElementById('lightboxImg');
  var lightboxCap = document.getElementById('lightboxCap');
  var closeBtn = lightbox ? lightbox.querySelector('.lightbox-close') : null;

  function openLightbox(src, cap) {
    lightboxImg.src = src;
    lightboxCap.textContent = cap || '';
    lightbox.classList.add('open');
  }
  function closeLightbox() {
    lightbox.classList.remove('open');
  }

  document.querySelectorAll('.js-lightbox').forEach(function (fig) {
    fig.addEventListener('click', function () {
      openLightbox(fig.getAttribute('data-full'), fig.getAttribute('data-cap'));
    });
  });

  if (closeBtn) closeBtn.addEventListener('click', closeLightbox);
  if (lightbox) {
    lightbox.addEventListener('click', function (e) {
      if (e.target === lightbox) closeLightbox();
    });
  }

  var burger = document.querySelector('.burger');
  var navlinks = document.querySelector('.navlinks');
  if (burger && navlinks) {
    function closeMobileMenu() {
      navlinks.classList.remove('open');
    }

    burger.addEventListener('click', function () {
      navlinks.classList.toggle('open');
    });

    navlinks.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', closeMobileMenu);
    });

    document.addEventListener('click', function (e) {
      if (navlinks.classList.contains('open') && !navlinks.contains(e.target) && e.target !== burger) {
        closeMobileMenu();
      }
    });
  }
});
