/**
 * Manu Mohan - Portfolio Theme Scripts
 * Ultra-smooth 60fps animations, Dark & Light theme switcher,
 * scroll-linked lazy reveals, 3D flip cards, dynamic journey progress bar,
 * compact portfolio widget, expandable posts, and certs slideshow.
 *
 * @package Manu_Mohan
 * @version 2.1.0
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // Check for reduced motion preference
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;




  /* ==========================================================================
     2. SCROLL-LINKED LAZY / FADE-IN LOADING (.reveal-on-scroll)
     ========================================================================== */
  const initScrollReveals = () => {
    const revealElements = document.querySelectorAll('.reveal-on-scroll');
    if (!revealElements.length) return;

    if (prefersReducedMotion || !('IntersectionObserver' in window)) {
      revealElements.forEach(el => el.classList.add('is-revealed'));
      return;
    }

    const revealObserver = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          obs.unobserve(entry.target);
        }
      });
    }, {
      root: null,
      rootMargin: '0px 0px -40px 0px',
      threshold: 0.08
    });

    revealElements.forEach(el => revealObserver.observe(el));
  };

  initScrollReveals();


  /* ==========================================================================
     3. STICKY NAVIGATION HEADER & ACTIVE SECTION HIGHLIGHTING
     ========================================================================== */
  const header = document.querySelector('.site-header');
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.main-nav .nav-link[href^="#"]');

  const onScrollHeaderAndNav = () => {
    const scrollPos = window.scrollY;

    // Header sticky styling
    if (header) {
      if (scrollPos > 30) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }

    // Active Section Indicator
    let currentId = '';
    const triggerPos = scrollPos + 140;

    sections.forEach(sec => {
      const top = sec.offsetTop;
      const height = sec.offsetHeight;
      if (triggerPos >= top && triggerPos < top + height) {
        currentId = sec.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (currentId && link.getAttribute('href') === `#${currentId}`) {
        link.classList.add('active');
      }
    });
  };

  window.addEventListener('scroll', onScrollHeaderAndNav, { passive: true });
  onScrollHeaderAndNav();


  /* ==========================================================================
     4. MOBILE MENU DRAWER TOGGLE
     ========================================================================== */
  const mobileToggle = document.querySelector('.mobile-nav-toggle');
  const mobileDrawer = document.querySelector('.mobile-drawer');
  const mobileLinks = document.querySelectorAll('.mobile-drawer .nav-link');

  if (mobileToggle && mobileDrawer) {
    const toggleMenu = (open) => {
      const shouldOpen = typeof open === 'boolean' ? open : !mobileDrawer.classList.contains('open');
      mobileDrawer.classList.toggle('open', shouldOpen);
      mobileToggle.classList.toggle('active', shouldOpen);
      mobileToggle.setAttribute('aria-expanded', shouldOpen ? 'true' : 'false');
      document.body.style.overflow = shouldOpen ? 'hidden' : '';
    };

    mobileToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      toggleMenu();
    });

    mobileLinks.forEach(link => {
      link.addEventListener('click', () => toggleMenu(false));
    });

    document.addEventListener('click', (e) => {
      if (mobileDrawer.classList.contains('open') && !mobileDrawer.contains(e.target) && !mobileToggle.contains(e.target)) {
        toggleMenu(false);
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && mobileDrawer.classList.contains('open')) {
        toggleMenu(false);
      }
    });
  }


  /* ==========================================================================
     5. THEME SWITCHER (OBSIDIAN BLACK & ORANGE / CRISP LIGHT MODE)
     ========================================================================== */
  const themeToggle = document.querySelector('.theme-toggle-btn');
  const updateThemeUI = (isLight) => {
    if (themeToggle) {
      const label = isLight ? 'Switch to dark theme' : 'Switch to light theme';
      themeToggle.setAttribute('aria-label', label);
      themeToggle.setAttribute('title', label);
    }
  };

  const savedTheme = localStorage.getItem('mm_theme');
  if (savedTheme === 'light') {
    document.body.classList.add('theme-light');
    updateThemeUI(true);
  } else {
    updateThemeUI(false);
  }

  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const isLight = document.body.classList.toggle('theme-light');
      localStorage.setItem('mm_theme', isLight ? 'light' : 'dark');
      updateThemeUI(isLight);
    });
  }


  /* ==========================================================================
     6. SERVICE CARDS: 3D HOVER-FLIP INTERACTIVE WIDGETS
     ========================================================================== */
  // While desktop uses smooth CSS :hover 3D rotation, this handles touch screens
  // and keyboard accessibility (Enter / Space key) cleanly.
  const flipCards = document.querySelectorAll('.service-flip-card');
  flipCards.forEach(card => {
    // Touch tap toggle for mobile devices
    card.addEventListener('click', (e) => {
      // If clicking inside a link, don't intercept
      if (e.target.closest('a')) return;

      const isFlipped = card.classList.contains('flipped');
      // Flip back all other cards
      flipCards.forEach(c => {
        if (c !== card) c.classList.remove('flipped');
      });
      card.classList.toggle('flipped', !isFlipped);
    });

    // Keyboard support
    card.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        card.classList.toggle('flipped');
      }
    });
  });

  // Tap outside flips cards back
  document.addEventListener('click', (e) => {
    if (!e.target.closest('.service-flip-card')) {
      flipCards.forEach(c => c.classList.remove('flipped'));
    }
  });


  /* ==========================================================================
     7. EXPERIENCE SECTION: "MY JOURNEY" DYNAMIC VERTICAL PROGRESS BAR
     ========================================================================== */
  const initJourneyTimeline = () => {
    const timeline = document.getElementById('journey-timeline');
    const progressFill = document.getElementById('journey-progress-fill');
    const nodes = document.querySelectorAll('.journey-node');

    if (!timeline || !progressFill || !nodes.length) return;

    const updateJourneyProgress = () => {
      const rect = timeline.getBoundingClientRect();
      const windowHeight = window.innerHeight;
      
      // Progress trigger line is calibrated at 60% of viewport height
      const triggerY = windowHeight * 0.60;
      
      // Calculate how far the trigger point has traveled through the timeline height
      const totalDist = rect.height;
      const currentDist = triggerY - rect.top;
      
      let percentage = (currentDist / totalDist) * 100;
      percentage = Math.max(0, Math.min(100, percentage));

      progressFill.style.height = `${percentage.toFixed(1)}%`;

      // Unlock individual milestone nodes as progress passes them
      nodes.forEach(node => {
        const nodeRect = node.getBoundingClientRect();
        if (nodeRect.top <= triggerY + 30) {
          node.classList.add('unlocked');
        } else {
          node.classList.remove('unlocked');
        }
      });
    };

    window.addEventListener('scroll', updateJourneyProgress, { passive: true });
    window.addEventListener('resize', updateJourneyProgress, { passive: true });
    updateJourneyProgress();
  };

  initJourneyTimeline();


  /* ==========================================================================
     8. TESTIMONIALS SECTION: INTERACTIVE SLIDER WITH COOL TRANSITIONS
     ========================================================================== */
  const initTestimonialsSlider = () => {
    const track = document.getElementById('testimonials-track');
    const slides = document.querySelectorAll('.testimonial-slide-item');
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');
    const dotsContainer = document.getElementById('testimonial-dots');

    if (!track || !slides.length) return;

    let currentIndex = 0;
    let autoPlayTimer = null;

    const getSlidesPerView = () => {
      if (window.innerWidth <= 640) return 1;
      if (window.innerWidth <= 992) return 2;
      return 3;
    };

    const getMaxIndex = () => {
      const spv = getSlidesPerView();
      return Math.max(0, slides.length - spv);
    };

    const updateDots = () => {
      if (!dotsContainer) return;
      dotsContainer.innerHTML = '';
      const maxIdx = getMaxIndex();
      for (let i = 0; i <= maxIdx; i++) {
        const dot = document.createElement('button');
        dot.type = 'button';
        dot.className = `testimonial-dot ${i === currentIndex ? 'active' : ''}`;
        dot.setAttribute('aria-label', `Go to testimonial slide ${i + 1}`);
        dot.addEventListener('click', () => {
          goToSlide(i);
          resetAutoPlay();
        });
        dotsContainer.appendChild(dot);
      }
    };

    const goToSlide = (index) => {
      const maxIdx = getMaxIndex();
      currentIndex = Math.max(0, Math.min(index, maxIdx));

      const spv = getSlidesPerView();
      const slideWidthPercent = 100 / spv;
      const gapOffset = 16 * (currentIndex / spv);
      track.style.transform = `translateX(calc(-${currentIndex * slideWidthPercent}% - ${gapOffset}px))`;

      if (dotsContainer) {
        const dots = dotsContainer.querySelectorAll('.testimonial-dot');
        dots.forEach((dot, idx) => {
          dot.classList.toggle('active', idx === currentIndex);
        });
      }
    };

    const nextSlide = () => {
      const maxIdx = getMaxIndex();
      if (currentIndex >= maxIdx) {
        goToSlide(0);
      } else {
        goToSlide(currentIndex + 1);
      }
    };

    const prevSlide = () => {
      const maxIdx = getMaxIndex();
      if (currentIndex <= 0) {
        goToSlide(maxIdx);
      } else {
        goToSlide(currentIndex - 1);
      }
    };

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        nextSlide();
        resetAutoPlay();
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        prevSlide();
        resetAutoPlay();
      });
    }

    const startAutoPlay = () => {
      stopAutoPlay();
      autoPlayTimer = setInterval(nextSlide, 5000);
    };

    const stopAutoPlay = () => {
      if (autoPlayTimer) clearInterval(autoPlayTimer);
    };

    const resetAutoPlay = () => {
      stopAutoPlay();
      startAutoPlay();
    };

    track.addEventListener('mouseenter', stopAutoPlay);
    track.addEventListener('mouseleave', startAutoPlay);

    let touchStartX = 0;
    let touchEndX = 0;

    track.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
      stopAutoPlay();
    }, { passive: true });

    track.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      if (touchStartX - touchEndX > 45) {
        nextSlide();
      } else if (touchEndX - touchStartX > 45) {
        prevSlide();
      }
      startAutoPlay();
    }, { passive: true });

    window.addEventListener('resize', () => {
      updateDots();
      goToSlide(currentIndex);
    });

    updateDots();
    startAutoPlay();
  };

  initTestimonialsSlider();


  /* ==========================================================================
     9. BLOG / POSTS SECTION: "EXPLORE MORE" SMOOTH EXPANSION
     ========================================================================== */
  const initPostsExpandable = () => {
    const exploreBtn = document.getElementById('posts-explore-btn');
    const expandableWrap = document.getElementById('posts-expandable-wrap');

    if (!exploreBtn || !expandableWrap) return;

    exploreBtn.addEventListener('click', () => {
      const isExpanded = expandableWrap.classList.toggle('expanded');
      exploreBtn.classList.toggle('active', isExpanded);
      exploreBtn.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');

      const btnText = exploreBtn.querySelector('.btn-text');
      if (btnText) {
        btnText.textContent = isExpanded 
          ? 'Show Fewer Insights' 
          : 'Explore More Insights (4 More)';
      }

      // If collapsing and user has scrolled deep, gently scroll back to top of posts
      if (!isExpanded) {
        const postsSec = document.getElementById('posts');
        if (postsSec && window.scrollY > postsSec.offsetTop + 400) {
          postsSec.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  };

  initPostsExpandable();


  /* ==========================================================================
     10. CERTIFICATIONS: INTERACTIVE IMAGE SLIDESHOW WIDGET
     ========================================================================== */
  const initCertSlideshow = () => {
    const slideshow = document.getElementById('cert-slideshow');
    const track = document.getElementById('cert-slider-track');
    const slides = document.querySelectorAll('.cert-slide-item');
    const prevBtn = document.getElementById('cert-prev-btn');
    const nextBtn = document.getElementById('cert-next-btn');
    const dots = document.querySelectorAll('.cert-dot');

    if (!slideshow || !track || !slides.length) return;

    let currentIndex = 0;
    const totalSlides = slides.length;
    let autoSlideTimer = null;
    let touchStartX = 0;
    let touchEndX = 0;

    const updateSlider = (index) => {
      currentIndex = (index + totalSlides) % totalSlides;

      // Calculate translation offset
      const slideWidth = slides[0].offsetWidth;
      const gap = 24; // var(--space-3)
      const offset = currentIndex * (slideWidth + gap);

      track.style.transform = `translateX(-${offset}px)`;

      // Update dots
      dots.forEach((dot, i) => {
        dot.classList.toggle('active', i === currentIndex);
      });
    };

    const nextSlide = () => updateSlider(currentIndex + 1);
    const prevSlide = () => updateSlider(currentIndex - 1);

    if (nextBtn) nextBtn.addEventListener('click', () => {
      nextSlide();
      restartAutoGlide();
    });

    if (prevBtn) prevBtn.addEventListener('click', () => {
      prevSlide();
      restartAutoGlide();
    });

    dots.forEach((dot, i) => {
      dot.addEventListener('click', () => {
        updateSlider(i);
        restartAutoGlide();
      });
    });

    // Dynamic Glide on Hover & Auto Progression
    const startAutoGlide = () => {
      if (prefersReducedMotion) return;
      stopAutoGlide();
      autoSlideTimer = setInterval(nextSlide, 3400);
    };

    const stopAutoGlide = () => {
      if (autoSlideTimer) {
        clearInterval(autoSlideTimer);
        autoSlideTimer = null;
      }
    };

    const restartAutoGlide = () => {
      stopAutoGlide();
      startAutoGlide();
    };

    slideshow.addEventListener('mouseenter', stopAutoGlide);
    slideshow.addEventListener('mouseleave', startAutoGlide);
    slideshow.addEventListener('focusin', stopAutoGlide);
    slideshow.addEventListener('focusout', startAutoGlide);

    // Touch swipe support for mobile
    slideshow.addEventListener('touchstart', (e) => {
      touchStartX = e.changedTouches[0].screenX;
      stopAutoGlide();
    }, { passive: true });

    slideshow.addEventListener('touchend', (e) => {
      touchEndX = e.changedTouches[0].screenX;
      const diff = touchStartX - touchEndX;
      if (Math.abs(diff) > 40) {
        if (diff > 0) {
          nextSlide();
        } else {
          prevSlide();
        }
      }
      startAutoGlide();
    }, { passive: true });

    window.addEventListener('resize', () => {
      updateSlider(currentIndex);
    });

    startAutoGlide();
  };

  initCertSlideshow();


  /* ==========================================================================
     11. 60FPS ANIMATED NUMBER COUNTER (STATS)
     ========================================================================== */
  const counterElements = document.querySelectorAll('.stat-number');
  if ('IntersectionObserver' in window && counterElements.length > 0) {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = entry.target;
          const endValue = parseInt(target.getAttribute('data-target') || '0', 10);
          const duration = 1600;
          const startTime = performance.now();

          const animateCounter = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // Ease out cubic
            const easeOut = 1 - Math.pow(1 - progress, 3);
            const currentValue = Math.floor(easeOut * endValue);
            target.textContent = currentValue;

            if (progress < 1) {
              requestAnimationFrame(animateCounter);
            } else {
              target.textContent = endValue;
            }
          };

          requestAnimationFrame(animateCounter);
          obs.unobserve(target);
        }
      });
    }, { threshold: 0.25 });

    counterElements.forEach(el => observer.observe(el));
  }


  /* ==========================================================================
     12. INTERACTIVE FAQ ACCORDION
     ========================================================================== */
  const accordionTriggers = document.querySelectorAll('.accordion-trigger');
  accordionTriggers.forEach(trigger => {
    trigger.addEventListener('click', () => {
      const item = trigger.closest('.accordion-item');
      if (!item) return;

      const isActive = item.classList.contains('active');

      // Close other accordion items
      document.querySelectorAll('.accordion-item').forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
          const otherTrigger = otherItem.querySelector('.accordion-trigger');
          if (otherTrigger) otherTrigger.setAttribute('aria-expanded', 'false');
        }
      });

      // Toggle current
      item.classList.toggle('active', !isActive);
      trigger.setAttribute('aria-expanded', !isActive ? 'true' : 'false');
    });
  });


  /* ==========================================================================
     13. CONTACT CONSULTATION FORM & WHATSAPP DIRECT ACTION
     ========================================================================== */
  const contactForm = document.getElementById('consultation-form');
  const feedbackBox = document.getElementById('form-feedback');

  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('form-name')?.value || '';
      const email = document.getElementById('form-email')?.value || '';
      const phone = document.getElementById('form-phone')?.value || '';
      const service = document.getElementById('form-service')?.value || 'Digital Marketing Strategy';
      const message = document.getElementById('form-message')?.value || '';

      if (feedbackBox) {
        feedbackBox.textContent = `Thank you, ${name}! Your consultation inquiry regarding "${service}" has been received. Manu Mohan will respond promptly.`;
        feedbackBox.className = 'form-feedback success';
        feedbackBox.style.display = 'block';
      }

      // Pre-filled WhatsApp direct chat link
      const whatsappText = encodeURIComponent(
        `Hi Manu Mohan! I'm ${name}.\nEmail: ${email}\nPhone: ${phone}\nInterested in: ${service}\nMessage: ${message}`
      );
      
      const openWhatsApp = confirm("Would you also like to open WhatsApp directly to chat with Manu Mohan right now?");
      if (openWhatsApp) {
        window.open(`https://wa.me/917736921257?text=${whatsappText}`, '_blank');
      }

      contactForm.reset();
    });
  }


  /* ==========================================================================
     14. BACK TO TOP SMOOTH SCROLL
     ========================================================================== */
  const fixedBackToTop = document.getElementById('fixed-back-to-top');
  const footerBackToTop = document.getElementById('footer-back-to-top');

  const updateBackToTopVisibility = () => {
    if (fixedBackToTop) {
      if (window.scrollY > 300) {
        fixedBackToTop.classList.add('visible');
      } else {
        fixedBackToTop.classList.remove('visible');
      }
    }
  };

  window.addEventListener('scroll', updateBackToTopVisibility, { passive: true });
  updateBackToTopVisibility();

  const handleScrollToTop = (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  };

  if (fixedBackToTop) fixedBackToTop.addEventListener('click', handleScrollToTop);
  if (footerBackToTop) footerBackToTop.addEventListener('click', handleScrollToTop);


  /* ==========================================================================
     15. POSTS ARTICLE READER MODAL, LIKES, AND SHARE
     ========================================================================== */
  const postArticles = {
    'modal-post-1': {
      category: 'SEO Trends 2026',
      date: 'October 2026',
      readTime: '4 min read',
      title: "Google's AI Search Overhaul: How We Rank in Conversational & Zero-Click SERPs",
      metric: '🚀 +280% Organic Search Visibility',
      content: `
        <p>Google's continuous rollout of Search Generative Experience (SGE) has permanently transformed consumer search behavior. Rather than browsing 10 blue links, users now receive consolidated AI snapshots answering their intent instantly.</p>
        <h4>Key 2026 Strategic Shifts:</h4>
        <ul>
          <li><strong>Entity Clustering Over Pure Keywords:</strong> Semantic relationships and topical authority establish your brand as a primary source for Google's Gemini index.</li>
          <li><strong>E-E-A-T First-Party Proof:</strong> Google actively prioritizes genuine hands-on experience, client case studies, original screenshots, and direct author expertise.</li>
          <li><strong>Conversational Long-Tail Capture:</strong> Optimizing for natural dialogue phrases, FAQs, and decision-stage queries that AI models pull into answer blocks.</li>
        </ul>
        <h4>Actionable 30-Day Execution Blueprint:</h4>
        <p>Audit your core service pages, inject clear structured schema markup (FAQ, Service, LocalBusiness), and build comparison hubs that solve user hesitations before they ask.</p>
      `
    },
    'modal-post-2': {
      category: 'Meta Ads Mastery',
      date: 'October 2026',
      readTime: '5 min read',
      title: "Advantage+ & Broad Audiences: Why Micro-Targeting is Killing Your ROAS",
      metric: '🔥 4.8x Consistent ROAS Scaled',
      content: `
        <p>The era of stacking 50 niche interests in Facebook Ads Manager is over. Meta's Andromeda algorithm has evolved to the point where confining the AI to hyper-narrow interest pools actually drives CPMs up by 40%.</p>
        <h4>How Modern Meta Ads Actually Work:</h4>
        <ul>
          <li><strong>The Creative IS the Targeting:</strong> Your hook, visual aesthetic, and headline dictate who stops scrolling and engages. The algorithm finds lookalikes based on viewer retention.</li>
          <li><strong>Dynamic Creative Testing (DCT):</strong> Running 3 hooks, 2 bodies, and 2 visual variations in an automated sandbox before scaling winning combinations into Advantage+ campaigns.</li>
          <li><strong>Post-Click Retention:</strong> Ensuring landing page speed is under 1.5s with instant zero-friction lead forms or WhatsApp direct chat buttons.</li>
        </ul>
      `
    },
    'modal-post-3': {
      category: 'Viral Video Strategy',
      date: 'October 2026',
      readTime: '3 min read',
      title: "The 3-Second Pattern Interrupt: Scripting Reels & Shorts That Convert",
      metric: '⚡ 2.4M+ Combined Viral Views',
      content: `
        <p>With an average human attention span on social feeds hovering around 2.7 seconds, conventional video intros result in immediate 80% viewer drop-off.</p>
        <h4>The 3-Part Viral Framework:</h4>
        <ul>
          <li><strong>The Pattern Interrupt (0-3s):</strong> Visual motion, high-contrast text overlays, or contrarian questions that disrupt unconscious thumb scrolling.</li>
          <li><strong>Value Delivery (3-20s):</strong> High-density actionable insights without fluff or filler words.</li>
          <li><strong>The Open Loop & Soft CTA (20-30s):</strong> A clear reason to save the reel or send a DM for the full breakdown.</li>
        </ul>
      `
    },
    'modal-post-4': {
      category: 'Local SEO Playbook',
      date: 'October 2026',
      readTime: '4 min read',
      title: "Local SEO for Kerala & Gulf Businesses: Dominating the Google 3-Pack Map",
      metric: '📍 #1 Map Ranking in 45 Days',
      content: `
        <p>Local businesses in Kochi and GCC markets often spend lakhs on paid ads while ignoring the free #1 customer source: the Google Local 3-Pack Map listing.</p>
        <h4>The Local Authority Formula:</h4>
        <ul>
          <li><strong>Name, Address, Phone (NAP) Consistency:</strong> Perfect citation sync across 40+ business directories and local registries.</li>
          <li><strong>Review Velocity & Keyword-Rich Responses:</strong> Prompting happy clients to mention specific services in their reviews.</li>
          <li><strong>Geotagged Visual Updates:</strong> Uploading weekly localized photos and geo-coordinate schema directly into the business profile.</li>
        </ul>
      `
    },
    'modal-post-5': {
      category: 'Google Ads PMax',
      date: 'October 2026',
      readTime: '5 min read',
      title: "Performance Max Secrets: Stopping Budget Waste on Low-Quality Display Clicks",
      metric: '🎯 -40% Wasted Spend Eliminated',
      content: `
        <p>Google PMax campaigns are famous for eating marketing budgets on low-intent mobile games and YouTube bumper placements if not strictly constrained with negative placements and asset group rules.</p>
        <h4>How to Tame Performance Max:</h4>
        <ul>
          <li><strong>Account-Level Negative Keywords:</strong> Prevent PMax from cannibalizing your branded search terms to inflate false ROAS numbers.</li>
          <li><strong>Customer Match Layering:</strong> Feeding first-party CRM lists into PMax as starting audience signals.</li>
          <li><strong>Final URL Expansion Controls:</strong> Restricting URL expansion to specific high-converting landing pages only.</li>
        </ul>
      `
    },
    'modal-post-6': {
      category: 'CRO & AI Copywriting',
      date: 'October 2026',
      readTime: '4 min read',
      title: "High-Converting Landing Page Architecture: Turning Cold Ad Traffic into Leads",
      metric: '📈 +42% Conversion Rate Lift',
      content: `
        <p>Traffic is useless without conversion architecture. When driving paid traffic from Meta or Google, users demand instant clarity, undeniable social proof, and zero cognitive friction.</p>
        <h4>The 5-Section Conversion Wireframe:</h4>
        <ul>
          <li><strong>Above the Fold:</strong> Clear outcome-based headline, specific subheadline, visual proof, and primary CTA.</li>
          <li><strong>The Pain & Agitation Bridge:</strong> Articulating the customer's exact current dilemma better than they can themselves.</li>
          <li><strong>The Mechanism / Solution:</strong> Why this strategic approach works when past solutions failed.</li>
          <li><strong>Unassailable Social Proof:</strong> Client logos, metric screenshots, and authentic video/text testimonials.</li>
          <li><strong>Risk Reversal & Multi-Channel Contact:</strong> Consultation booking forms alongside instant WhatsApp chat options.</li>
        </ul>
      `
    }
  };

  // Likes handling
  const likeBtns = document.querySelectorAll('.post-like-btn');
  likeBtns.forEach(btn => {
    const card = btn.closest('.post-card');
    const postId = card?.getAttribute('data-id') || 'post';
    const storageKey = `mm_liked_${postId}`;
    const countEl = btn.querySelector('.like-count');
    const baseCount = parseInt(btn.getAttribute('data-likes') || '100', 10);

    if (localStorage.getItem(storageKey) === 'true') {
      btn.classList.add('liked');
      if (countEl) countEl.textContent = baseCount + 1;
    }

    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const isLiked = btn.classList.toggle('liked');
      const newCount = isLiked ? baseCount + 1 : baseCount;
      if (countEl) countEl.textContent = newCount;
      localStorage.setItem(storageKey, isLiked ? 'true' : 'false');
    });
  });

  // Share handling
  const shareBtns = document.querySelectorAll('.post-share-btn');
  shareBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      const title = btn.getAttribute('data-title') || document.title;
      const url = window.location.href;

      if (navigator.clipboard) {
        navigator.clipboard.writeText(`${title} - Read more: ${url}`);
        const originalContent = btn.innerHTML;
        btn.innerHTML = `<span style="color:var(--accent-orange);font-size:0.75rem;">Copied! ✓</span>`;
        setTimeout(() => {
          btn.innerHTML = originalContent;
        }, 2200);
      } else {
        window.open(`https://wa.me/?text=${encodeURIComponent(title + ' ' + url)}`, '_blank');
      }
    });
  });

  // Modal Reader handling
  const readerModal = document.getElementById('post-reader-modal');
  const modalTarget = document.getElementById('modal-content-target');
  const modalCloseBtn = document.getElementById('modal-close-btn');
  const readLinks = document.querySelectorAll('.post-read-link');

  readLinks.forEach(link => {
    link.addEventListener('click', () => {
      const modalId = link.getAttribute('data-modal');
      const article = postArticles[modalId];

      if (article && readerModal && modalTarget) {
        modalTarget.innerHTML = `
          <div class="post-modal-category">${article.category}</div>
          <h2 class="post-modal-title">${article.title}</h2>
          <div class="post-modal-meta">
            <span>Published: ${article.date}</span>
            <span>&bull;</span>
            <span>${article.readTime}</span>
            <span>&bull;</span>
            <span style="color:var(--accent-orange);font-weight:700;">Curated by Manu Mohan</span>
          </div>
          <div class="post-metric-pill" style="display:inline-flex;margin-bottom:var(--space-4);">
            <span>${article.metric}</span>
          </div>
          <div class="post-modal-body">
            ${article.content}
            <div class="post-modal-cta-box">
              <div>
                <h4 style="margin:0 0 4px 0;color:var(--text-primary);font-size:1.1rem;">Want to Deploy This Strategy for Your Business?</h4>
                <p style="margin:0;font-size:0.875rem;color:var(--text-secondary);">Connect directly with Manu Mohan for a tailored consultation.</p>
              </div>
              <a href="https://wa.me/917736921257?text=${encodeURIComponent('Hi Manu Mohan! I read your article on ' + article.title + ' and want to discuss applying it.')}" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp" style="padding:10px 20px;font-size:0.875rem;">
                Chat on WhatsApp
              </a>
            </div>
          </div>
        `;

        readerModal.classList.add('open');
        readerModal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
      }
    });
  });

  const closeModal = () => {
    if (readerModal) {
      readerModal.classList.remove('open');
      readerModal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }
  };

  if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeModal);
  if (readerModal) {
    readerModal.addEventListener('click', (e) => {
      if (e.target === readerModal) closeModal();
    });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && readerModal?.classList.contains('open')) {
      closeModal();
    }
  });
});
