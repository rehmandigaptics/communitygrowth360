(() => {
  const header = document.querySelector('.site-header');
  const setHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 20);
  setHeader();
  window.addEventListener('scroll', setHeader, { passive: true });

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const smoothBehavior = prefersReducedMotion ? 'auto' : 'smooth';
  let lenis = null;

  const headerOffset = () => {
    const siteHeader = document.querySelector('.site-header');
    return siteHeader ? siteHeader.getBoundingClientRect().height + 12 : 12;
  };

  const scrollToHash = (hash, updateHistory = true) => {
    if (!hash || hash === '#') return false;
    let el = null;
    try {
      el = document.querySelector(hash);
    } catch (_) {
      return false;
    }
    if (!el) return false;
    const top = Math.max(0, window.scrollY + el.getBoundingClientRect().top - headerOffset());
    if (lenis) {
      lenis.scrollTo(top, { immediate: prefersReducedMotion, duration: 1.15 });
    } else {
      window.scrollTo({ top, behavior: smoothBehavior });
    }
    if (updateHistory && history.replaceState) {
      history.replaceState(null, '', hash);
    }
    return true;
  };

  if (!prefersReducedMotion) {
    import('https://cdn.jsdelivr.net/npm/lenis@1.3.17/dist/lenis.mjs').then(({ default: Lenis }) => {
      lenis = new Lenis({
        lerp: 0.085,
        smoothWheel: true,
        anchors: false,
        autoRaf: false,
        stopInertiaOnNavigate: true,
        allowNestedScroll: true
      });
      window.cgLenis = lenis;

      lenis.on('scroll', () => {
        setHeader();
        if (window.ScrollTrigger) ScrollTrigger.update();
      });

      if (window.gsap) {
        gsap.ticker.add((time) => {
          lenis.raf(time * 1000);
        });
        gsap.ticker.lagSmoothing(0);
      } else {
        const raf = (time) => {
          lenis.raf(time);
          requestAnimationFrame(raf);
        };
        requestAnimationFrame(raf);
      }
    }).catch(() => {});
  }

  const closeMobileNav = () => {
    const nav = document.querySelector('.navbar-collapse.show');
    if (nav && window.bootstrap) bootstrap.Collapse.getOrCreateInstance(nav).hide();
  };

  document.querySelectorAll('a[href*="#"]').forEach(link => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      if (!href || href === '#') return;

      let url;
      try {
        url = new URL(href, window.location.href);
      } catch (_) {
        return;
      }

      if (url.origin !== window.location.origin) return;
      if (url.pathname !== window.location.pathname) return;
      if (!url.hash || url.hash === '#') return;

      if (!scrollToHash(url.hash)) return;
      e.preventDefault();
      closeMobileNav();
    });
  });

  if (window.location.hash && !prefersReducedMotion) {
    const hash = window.location.hash;
    if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
    window.scrollTo(0, 0);
    requestAnimationFrame(() => {
      setTimeout(() => scrollToHash(hash, false), 50);
    });
  }

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
