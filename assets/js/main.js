(() => {
  const header = document.querySelector('.site-header');
  const setHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 20);
  setHeader();
  window.addEventListener('scroll', setHeader, { passive: true });

  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener('click', (e) => {
      const target = link.getAttribute('href');
      if (!target || target === '#') return;
      const el = document.querySelector(target);
      if (!el) return;
      e.preventDefault();
      el.scrollIntoView({ behavior: 'smooth', block: 'start' });
      const nav = document.querySelector('.navbar-collapse.show');
      if (nav && window.bootstrap) bootstrap.Collapse.getOrCreateInstance(nav).hide();
    });
  });

  const voicesCarousel = document.querySelector('#communityVoicesCarousel');
  if (voicesCarousel && window.bootstrap) {
    const carousel = bootstrap.Carousel.getOrCreateInstance(voicesCarousel, {
      interval: 4800,
      ride: 'carousel',
      touch: true,
      keyboard: true,
      pause: false,
      wrap: true
    });

    const current = voicesCarousel.querySelector('.voice-current');
    const total = voicesCarousel.querySelector('.voice-total');
    const items = [...voicesCarousel.querySelectorAll('.carousel-item')];
    if (total) total.textContent = String(items.length).padStart(2, '0');

    const updateCounter = () => {
      const active = voicesCarousel.querySelector('.carousel-item.active');
      const index = Math.max(0, items.indexOf(active));
      if (current) current.textContent = String(index + 1).padStart(2, '0');
    };
    updateCounter();
    voicesCarousel.addEventListener('slid.bs.carousel', updateCounter);
    voicesCarousel.addEventListener('slide.bs.carousel', () => carousel.cycle());

    // Mouse drag support on desktop/laptop
    const dragSurface = voicesCarousel.querySelector('.carousel-inner');
    if (dragSurface) {
      let isDown = false;
      let startX = 0;
      let deltaX = 0;
      const threshold = 60;

      const endDrag = () => {
        if (!isDown) return;
        dragSurface.classList.remove('is-dragging');
        isDown = false;
        if (Math.abs(deltaX) > threshold) {
          if (deltaX < 0) carousel.next();
          else carousel.prev();
          setTimeout(() => carousel.cycle(), 120);
        }
        deltaX = 0;
      };

      dragSurface.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.clientX;
        deltaX = 0;
        dragSurface.classList.add('is-dragging');
      });

      window.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        deltaX = e.clientX - startX;
      });

      window.addEventListener('mouseup', endDrag);
      dragSurface.addEventListener('mouseleave', endDrag);
      dragSurface.addEventListener('dragstart', (e) => e.preventDefault());
    }
  }

  if (window.gsap && window.ScrollTrigger && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    gsap.registerPlugin(ScrollTrigger);
    gsap.from('.hero-copy > *', { y: 28, duration: .85, stagger: .08, ease: 'power3.out' });
    gsap.from('.hero-collage .photo', { y: 24, scale: .985, duration: 1, stagger: .08, ease: 'power3.out' });
    const groups = [
      ['.pillar', '.pillars-strip'],
      ['.program-feature, .program-tile', '.section-programs'],
      ['.principle', '.story-section'],
      ['.impact-stat', '.impact-section'],
    ];
    groups.forEach(([targets, trigger]) => {
      gsap.from(targets, { y: 26, scale: .99, duration: .72, stagger: .08, ease: 'power2.out', scrollTrigger: { trigger, start: 'top 82%', once: true } });
    });
    gsap.to('.round-seal', { y: -10, repeat: -1, yoyo: true, duration: 2.6, ease: 'sine.inOut' });
  }
})();
