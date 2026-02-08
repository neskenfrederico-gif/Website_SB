// ===== DOM Elements (cached) =====
const header = document.getElementById("header");
const navMenu = document.getElementById("nav-menu");
const navToggle = document.getElementById("nav-toggle");
const navClose = document.getElementById("nav-close");
const navLinks = document.querySelectorAll(".nav__link");
const filterBtns = document.querySelectorAll(".filter-btn");
const projectCards = document.querySelectorAll(".project-card");
const contactForm = document.getElementById("contact-form");
const statNumbers = document.querySelectorAll(".stats__number");
const hero = document.querySelector(".hero");
const sections = document.querySelectorAll("section[id]");

// ===== Mobile Menu =====
// Create overlay element for mobile menu backdrop
const navOverlay = document.createElement("div");
navOverlay.classList.add("nav__overlay");
navOverlay.id = "nav-overlay";
document.body.appendChild(navOverlay);

function openMenu() {
  navMenu.classList.add("show");
  navOverlay.classList.add("show");
  // iOS fix: use position fixed + top offset to prevent background scroll
  document.body.style.position = "fixed";
  document.body.style.top = `-${window.scrollY}px`;
  document.body.style.width = "100%";
  if (navToggle) {
    navToggle.setAttribute("aria-expanded", "true");
    navToggle.style.display = "none";
  }
}

function closeMenu() {
  const scrollY = document.body.style.top;
  navMenu.classList.remove("show");
  navOverlay.classList.remove("show");
  // iOS fix: restore scroll position
  document.body.style.position = "";
  document.body.style.top = "";
  document.body.style.width = "";
  window.scrollTo(0, parseInt(scrollY || "0") * -1);
  if (navToggle) {
    navToggle.setAttribute("aria-expanded", "false");
    navToggle.style.display = "";
  }
}

if (navToggle) {
  navToggle.addEventListener("click", openMenu);
}

if (navClose) {
  navClose.addEventListener("click", closeMenu);
}

// Close menu when clicking overlay (outside menu)
navOverlay.addEventListener("click", closeMenu);

// Close menu with Escape key
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && navMenu.classList.contains("show")) {
    closeMenu();
  }
});

// ===== Mobile Dropdown Toggle =====
const dropdownParent = document.querySelector(".nav__item--dropdown > .nav__link");
if (dropdownParent) {
  dropdownParent.addEventListener("click", (e) => {
    // Only intercept on mobile (when nav menu is in mobile mode)
    if (window.innerWidth < 768) {
      e.preventDefault();
      const parentItem = dropdownParent.closest(".nav__item--dropdown");
      parentItem.classList.toggle("dropdown-open");
    }
  });
}

// Close menu when clicking on a link
navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    closeMenu();
    // Update active link
    navLinks.forEach((l) => l.classList.remove("active"));
    link.classList.add("active");
  });
});

// Close menu when clicking dropdown links (sub-items)
document.querySelectorAll(".nav__dropdown-link").forEach((link) => {
  link.addEventListener("click", closeMenu);
});

// ===== Unified Scroll Handler =====
let scrollTicking = false;

function updateHeader() {
  const currentScroll = window.scrollY || window.pageYOffset;
  if (currentScroll > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
}

function highlightActiveSection() {
  const scrollY = window.pageYOffset;

  sections.forEach((section) => {
    const sectionHeight = section.offsetHeight;
    const sectionTop = section.offsetTop - 100;
    const sectionId = section.getAttribute("id");
    const correspondingLink = document.querySelector(
      `.nav__link[href="#${sectionId}"]`
    );

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      navLinks.forEach((link) => link.classList.remove("active"));
      if (correspondingLink) {
        correspondingLink.classList.add("active");
      }
    }
  });
}

function onScroll() {
  if (!scrollTicking) {
    requestAnimationFrame(() => {
      updateHeader();
      highlightActiveSection();
      updateParallax();
      updateBackToTop();
      scrollTicking = false;
    });
    scrollTicking = true;
  }
}

window.addEventListener("scroll", onScroll, { passive: true });

// ===== Portfolio Lazy Loading =====
const lazyCards = document.querySelectorAll(".project-card__image");
if (lazyCards.length) {
  const lazyObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("lazy-loaded");
          lazyObserver.unobserve(entry.target);
        }
      });
    },
    { rootMargin: "200px 0px" }
  );
  lazyCards.forEach((card) => lazyObserver.observe(card));
}

// ===== Portfolio Rotation + Filters =====
function initPortfolioRotation() {
  var grid = document.querySelector(".portfolio__grid");
  var showAllBtn = document.getElementById("portfolio-show-all");
  var filterStatus = document.getElementById("filter-status");
  var reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (!grid) return;

  var allLinks = [];
  grid.querySelectorAll(".project-card-link").forEach(function(el) {
    allLinks.push(el);
  });

  if (allLinks.length === 0) return;

  // Mark first batch visible, then activate collapsed mode
  var pageSize = getPageSize();
  for (var i = 0; i < allLinks.length && i < pageSize; i++) {
    allLinks[i].classList.add("portfolio-visible");
  }
  grid.classList.add("portfolio--collapsed");

  var isExpanded = false;
  var rotationInterval = null;
  var currentPage = 0;
  var activeFilter = "all";
  var ROTATION_DELAY = 8000;

  function getPageSize() {
    if (window.innerWidth >= 1024) return 6;
    if (window.innerWidth >= 768) return 4;
    return 2;
  }

  function getFilteredLinks() {
    return allLinks.filter(function(link) {
      var card = link.querySelector(".project-card");
      if (!card) return false;
      if (activeFilter === "all") return true;
      return card.dataset.category === activeFilter;
    });
  }

  function showPage(page) {
    var filtered = getFilteredLinks();
    var size = getPageSize();
    var totalPages = Math.ceil(filtered.length / size);
    if (totalPages === 0) return;

    currentPage = page % totalPages;
    var start = currentPage * size;
    var visible = filtered.slice(start, start + size);

    // Remove all visible
    allLinks.forEach(function(l) { l.classList.remove("portfolio-visible"); });
    // Add visible to current page
    visible.forEach(function(l) { l.classList.add("portfolio-visible"); });
  }

  function startRotation() {
    stopRotation();
    if (reducedMotion || isExpanded) return;
    var filtered = getFilteredLinks();
    if (filtered.length <= getPageSize()) return;
    rotationInterval = setInterval(function() {
      showPage(currentPage + 1);
    }, ROTATION_DELAY);
  }

  function stopRotation() {
    if (rotationInterval) {
      clearInterval(rotationInterval);
      rotationInterval = null;
    }
  }

  // Pause on hover/touch
  grid.addEventListener("mouseenter", stopRotation);
  grid.addEventListener("mouseleave", function() { if (!isExpanded) startRotation(); });
  grid.addEventListener("touchstart", stopRotation, { passive: true });
  grid.addEventListener("touchend", function() { if (!isExpanded) startRotation(); }, { passive: true });

  // "Ver todos" button
  if (showAllBtn) {
    showAllBtn.addEventListener("click", function() {
      isExpanded = true;
      stopRotation();
      grid.classList.remove("portfolio--collapsed");
      grid.classList.add("portfolio--expanded");
      showAllBtn.style.display = "none";
    });
  }

  // Filter buttons
  filterBtns.forEach(function(btn) {
    btn.addEventListener("click", function() {
      filterBtns.forEach(function(b) {
        b.classList.remove("active");
        b.setAttribute("aria-pressed", "false");
      });
      btn.classList.add("active");
      btn.setAttribute("aria-pressed", "true");

      activeFilter = btn.dataset.filter;

      // Apply filter
      var visibleCount = 0;
      projectCards.forEach(function(card) {
        var category = card.dataset.category;
        if (activeFilter === "all" || category === activeFilter) {
          card.classList.remove("hidden");
          visibleCount++;
        } else {
          card.classList.add("hidden");
        }
      });

      // Announce
      if (filterStatus) {
        var label = btn.textContent.trim();
        filterStatus.textContent = visibleCount + " projeto" + (visibleCount !== 1 ? "s" : "") + " encontrado" + (visibleCount !== 1 ? "s" : "") + ' na categoria "' + label + '".';
      }

      // Reset rotation
      if (!isExpanded) {
        currentPage = 0;
        showPage(0);
        startRotation();
        if (showAllBtn) {
          var filtered = getFilteredLinks();
          showAllBtn.style.display = filtered.length > getPageSize() ? "" : "none";
        }
      }
    });
  });

  // Resize handler
  var resizeTimer;
  window.addEventListener("resize", function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      if (!isExpanded) {
        currentPage = 0;
        showPage(0);
        startRotation();
      }
    }, 250);
  });

  // Start
  startRotation();
}

// ===== Animate Numbers on Scroll =====
function animateNumber(element, target) {
  if (!target || isNaN(target) || target <= 0) {
    element.textContent = target || "0";
    return;
  }

  let current = 0;
  const steps = 50;
  const increment = target / steps;
  const stepTime = 2000 / steps;

  const timer = setInterval(() => {
    current += increment;
    if (current >= target) {
      current = target;
      clearInterval(timer);
    }
    element.textContent = Math.floor(current).toLocaleString("pt-BR");
  }, stepTime);
}

// Intersection Observer for stat numbers
const statsObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const target = parseInt(entry.target.dataset.target);
        animateNumber(entry.target, target);
        statsObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.5 }
);

statNumbers.forEach((num) => {
  statsObserver.observe(num);
});

// ===== Fade In Animation on Scroll =====
function initFadeInObserver() {
  const fadeElements = document.querySelectorAll(".fade-in");

  if (!fadeElements.length) return;

  const fadeObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          fadeObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1, rootMargin: "0px 0px -40px 0px" }
  );

  fadeElements.forEach((el) => {
    fadeObserver.observe(el);
  });
}

// ===== Contact Form =====
async function sendFormToEndpoint(formEl, formData) {
  const endpoint = (formEl.getAttribute("action") || "").trim();
  if (!endpoint) return { ok: false, skipped: true };

  try {
    const response = await fetch(endpoint, {
      method: formEl.getAttribute("method") || "POST",
      headers: { Accept: "application/json" },
      body: formData,
    });

    return { ok: response.ok, status: response.status };
  } catch (err) {
    return { ok: false, error: err };
  }
}

function buildWhatsappMessage(data) {
  return encodeURIComponent(
    `*Novo contato pelo site*

` +
      `*Nome:* ${data.name}
` +
      `*E-mail:* ${data.email}
` +
      `*Telefone:* ${data.phone || "Não informado"}
` +
      `*Tipo de Projeto:* ${data.subject}

` +
      `*Mensagem:*
${data.message}`
  );
}

if (contactForm) {
  let isSubmitting = false;
  const formLoadTime = Date.now();

  contactForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    // Prevent double-submit
    if (isSubmitting) return;

    // Anti-spam: reject submissions faster than 3 seconds (bot-like)
    if (Date.now() - formLoadTime < 3000) {
      showNotification("Por favor, aguarde um momento antes de enviar.", "error");
      return;
    }

    contactForm.classList.add("was-submitted");

    // HTML5 validation (shows visual feedback via CSS)
    if (!contactForm.checkValidity()) {
      showNotification("Por favor, preencha todos os campos obrigatórios.", "error");
      return;
    }

    const formData = new FormData(contactForm);
    // Object.fromEntries fallback for older browsers
    const data = {};
    formData.forEach((value, key) => { data[key] = value; });

    // Extra email validation (defensive)
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(data.email)) {
      showNotification("Por favor, insira um e-mail válido.", "error");
      return;
    }

    isSubmitting = true;
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = "<span>Enviando...</span>";
    submitBtn.disabled = true;

    try {
      // 1) Attempt real submission to a configurable endpoint (Formspree, etc.)
      const result = await sendFormToEndpoint(contactForm, formData);

      const whatsappMessage = buildWhatsappMessage(data);

      if (result && result.ok) {
        showNotification(
          "Mensagem enviada com sucesso! Abrindo WhatsApp como canal adicional.",
          "success"
        );
        window.open(`https://wa.me/5562992250067?text=${whatsappMessage}`, "_blank");
      } else {
        showNotification(
          "Envio automático indisponível. Abrindo WhatsApp para contato direto.",
          "info"
        );
        window.open(`https://wa.me/5562992250067?text=${whatsappMessage}`, "_blank");
      }

      contactForm.reset();
      contactForm.classList.remove("was-submitted");
    } finally {
      submitBtn.innerHTML = originalText;
      submitBtn.disabled = false;
      isSubmitting = false;
    }
  });
}

// ===== Notification System =====
// Inject notification styles once
(function injectNotificationStyles() {
  if (document.getElementById("notification-styles")) return;
  const style = document.createElement("style");
  style.id = "notification-styles";
  style.textContent = `
    .notification {
      position: fixed;
      bottom: 20px;
      right: 20px;
      padding: 16px 24px;
      color: white;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      display: flex;
      align-items: center;
      gap: 12px;
      z-index: 2001;
      animation: notifSlideIn 0.3s ease;
      font-weight: 500;
    }
    .notification--success { background: #10B981; }
    .notification--error { background: #EF4444; }
    .notification--info { background: #3B82F6; }
    .notification__close {
      background: none;
      border: none;
      color: white;
      font-size: 24px;
      cursor: pointer;
      line-height: 1;
    }
    @keyframes notifSlideIn {
      from { transform: translateX(100%); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }
    @keyframes notifSlideOut {
      from { transform: translateX(0); opacity: 1; }
      to { transform: translateX(100%); opacity: 0; }
    }
  `;
  document.head.appendChild(style);
})();

function showNotification(message, type = "info") {
  // Remove existing notifications
  const existingNotification = document.querySelector(".notification");
  if (existingNotification) {
    existingNotification.remove();
  }

  // Create notification element with accessibility
  const notification = document.createElement("div");
  notification.className = `notification notification--${type}`;
  notification.setAttribute("role", "alert");
  notification.setAttribute("aria-live", "assertive");
  notification.innerHTML = `
        <span>${message}</span>
        <button class="notification__close" aria-label="Fechar notificação">&times;</button>
    `;

  document.body.appendChild(notification);

  // Close button
  const closeBtn = notification.querySelector(".notification__close");
  closeBtn.addEventListener("click", () => {
    notification.style.animation = "notifSlideOut 0.3s ease forwards";
    setTimeout(() => notification.remove(), 300);
  });

  // Auto remove
  setTimeout(() => {
    if (notification.parentNode) {
      notification.style.animation = "notifSlideOut 0.3s ease forwards";
      setTimeout(() => notification.remove(), 300);
    }
  }, 5000);
}

// ===== Smooth Scroll for Anchor Links =====
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    const href = this.getAttribute("href");
    // Guard against invalid selectors (bare "#" or empty)
    if (!href || href === "#" || href.length < 2) return;

    try {
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    } catch (err) {
      // Invalid selector, let browser handle default
    }
  });
});

// ===== Parallax Effect for Hero =====
// Cached particles element (resolved once on first call)
let heroParticles = undefined;
const isMobileDevice = window.matchMedia("(max-width: 768px)").matches;

function updateParallax() {
  // Skip parallax on mobile for performance
  if (isMobileDevice) return;

  if (heroParticles === undefined) {
    heroParticles = document.querySelector(".hero__particles") || null;
  }
  if (!hero || !heroParticles) return;

  const scrolled = window.scrollY || window.pageYOffset;
  if (scrolled < window.innerHeight) {
    heroParticles.style.transform = `translateY(${scrolled * 0.3}px)`;
  }
}
// Parallax is called from unified scroll handler (onScroll)

// ===== Phone Mask (suporta fixo e celular) =====
const phoneInput = document.getElementById("phone");
if (phoneInput) {
  phoneInput.addEventListener("input", (e) => {
    let value = e.target.value.replace(/\D/g, "");
    if (value.length > 11) value = value.slice(0, 11);

    let formatted = "";
    if (value.length > 0) {
      formatted = "(" + value.slice(0, 2);
    }
    if (value.length > 2) {
      formatted += ") " + value.slice(2, value.length > 10 ? 7 : 6);
    }
    if (value.length > (value.length > 10 ? 7 : 6)) {
      formatted += "-" + value.slice(value.length > 10 ? 7 : 6);
    }

    e.target.value = formatted;
    // Keep cursor at end after mask formatting
    const len = formatted.length;
    e.target.setSelectionRange(len, len);
  });
}

// ===== FAQ Accordion =====
const faqQuestions = document.querySelectorAll(".faq-question");

faqQuestions.forEach((question) => {
  question.addEventListener("click", () => {
    const item = question.parentElement;
    const answer = question.nextElementSibling;

    // Toggle active class
    item.classList.toggle("active");
    const isOpen = item.classList.contains("active");

    // Update aria-expanded
    question.setAttribute("aria-expanded", isOpen);

    // Toggle max-height
    if (isOpen) {
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }

    // Close other items (accordion effect)
    faqQuestions.forEach((q) => {
      if (q !== question) {
        q.parentElement.classList.remove("active");
        q.setAttribute("aria-expanded", "false");
        q.nextElementSibling.style.maxHeight = 0;
      }
    });
  });
});

// Recalculate open FAQ heights on window resize
let faqResizeTimer;
window.addEventListener("resize", () => {
  clearTimeout(faqResizeTimer);
  faqResizeTimer = setTimeout(() => {
    faqQuestions.forEach((q) => {
      if (q.parentElement.classList.contains("active")) {
        const answer = q.nextElementSibling;
        answer.style.maxHeight = answer.scrollHeight + "px";
      }
    });
  }, 200);
});

// ===== Hero Slider =====
function initHeroSlider() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  const slides = document.querySelectorAll(".hero__slide");
  if (slides.length <= 1) return;

  let currentSlide = 0;
  const slideInterval = 5000;
  let heroInterval = null;

  function advanceSlide() {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add("active");
  }

  function startSlider() {
    stopSlider();
    heroInterval = setInterval(advanceSlide, slideInterval);
  }

  function stopSlider() {
    if (heroInterval) {
      clearInterval(heroInterval);
      heroInterval = null;
    }
  }

  // Pause on hover, focus, or touch
  const heroSection = document.getElementById("home");
  if (heroSection) {
    heroSection.addEventListener("mouseenter", stopSlider);
    heroSection.addEventListener("mouseleave", startSlider);
    heroSection.addEventListener("touchstart", stopSlider, { passive: true });
    heroSection.addEventListener("touchend", startSlider, { passive: true });
  }

  startSlider();
}



// ===== Hero Background Lazy Loading =====
function preloadHeroSlideBackgrounds() {
  const slides = document.querySelectorAll(".hero__slide");
  if (!slides.length) return;

  const applyBg = (slide) => {
    const webp = slide.dataset.bgWebp;
    const jpg = slide.dataset.bgJpg;
    if (!webp || !jpg) return;
    if (slide.style.backgroundImage) return;

    // Use image-set with -webkit- prefix fallback, then plain url as final fallback
    slide.style.backgroundImage = `url('${webp}')`;
    slide.style.backgroundImage = `-webkit-image-set(url('${webp}') 1x)`;
    slide.style.backgroundImage = `image-set(url('${webp}') type('image/webp'), url('${jpg}') type('image/jpeg'))`;
  };

  // Keep the first slide eager; lazy-load the others after idle.
  const lazySlides = Array.from(slides).filter((s) => !s.classList.contains("active"));
  const run = () => lazySlides.forEach(applyBg);

  if ("requestIdleCallback" in window) {
    window.requestIdleCallback(run, { timeout: 2000 });
  } else {
    setTimeout(run, 1200);
  }
}

// ===== WhatsApp Floating Button Visibility =====
function initWhatsappFloatVisibility() {
  const floatBtn = document.getElementById("whatsapp-float");
  const contatoSection = document.getElementById("contato");
  if (!floatBtn || !contatoSection) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          floatBtn.classList.add("is-hidden");
        } else {
          floatBtn.classList.remove("is-hidden");
        }
      });
    },
    { threshold: 0.2 }
  );

  observer.observe(contatoSection);
}

// ===== Initialize =====
document.addEventListener("DOMContentLoaded", () => {
  // Add loaded class to body
  document.body.classList.add("loaded");

  // Detect if we are on the homepage
  const isHomepage = !!document.getElementById("home");

  // Initialize Fade-in Observer (all pages)
  initFadeInObserver();

  // Footer current year (all pages)
  const yearEl = document.getElementById("current-year");
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Back to top button (all pages)
  initBackToTop();

  // Homepage-only initializations
  if (isHomepage) {
    // Initialize Slider
    initHeroSlider();

    // Lazy-load hero backgrounds
    preloadHeroSlideBackgrounds();

    // WhatsApp floating button (hide on contact section)
    initWhatsappFloatVisibility();

    // Initial active section check
    highlightActiveSection();

    // Spotlight Cases Rotator
    initSpotlightRotator();

    // Portfolio rotation
    initPortfolioRotation();
  }
});

// ===== Spotlight Cases Rotator =====
function initSpotlightRotator() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  const cases = [
    {
      title: 'Geolab — <span class="gradient-text">Site II</span>',
      alt: 'Projeto Geolab Site II - 8.000 m² de salas limpas',
      desc: 'Projeto completo para <strong>8.000 m² de salas limpas Grau B/C</strong>, incluindo central de água gelada com VFD para produção de colírios e laboratório farmacêutico.',
      stat1: '900', stat1Label: 'TR de Capacidade',
      stat2: '8.000 m²', stat2Label: 'Área Climatizada',
      stat3: 'ISO 7/8', stat3Label: 'Classe de Limpeza',
      badge: 'Ref. em Farmacêutica',
      badgeIcon: '🏆',
      img: 'spotlight-geolab.webp?v=3'
    },
    {
      title: 'Geolab — <span class="gradient-text">Site I</span>',
      alt: 'Projeto Geolab Site I - 25.000+ m² de áreas produtivas',
      desc: 'Projeto completo para <strong>25.000+ m² de áreas produtivas</strong>: sólidos, efervescentes e semi-sólidos. CAG de 1.500 TR, UTAs TROX TKZ e desumidificação química para efervescentes.',
      stat1: '1.500', stat1Label: 'TR de Capacidade',
      stat2: '25.000+ m²', stat2Label: 'Área Produtiva',
      stat3: 'TROX TKZ', stat3Label: 'UTAs',
      badge: 'Maior Capacidade',
      badgeIcon: '⚡',
      img: 'spotlight-geolab1.webp?v=3'
    },
    {
      title: 'Active Ontex — <span class="gradient-text">IBUTG</span>',
      alt: 'Projeto Active Ontex - 15.600 m² de área industrial',
      desc: 'Projeto HVAC para <strong>15.600 m² de área industrial</strong> com alta vazão e automação Siemens. Controle térmico rigoroso para conformidade com NR-15/IBUTG.',
      stat1: '1.050', stat1Label: 'TR de Capacidade',
      stat2: '15.600 m²', stat2Label: 'Área Industrial',
      stat3: 'Siemens', stat3Label: 'Automação',
      badge: 'Ref. em Industrial',
      badgeIcon: '🏭',
      img: 'spotlight-ontex.webp?v=3'
    },
    {
      title: 'Linea <span class="gradient-text">Vitta</span>',
      alt: 'Projeto Linea Vitta - 27.500 m² climatizados em Brasília',
      desc: 'Edifício comercial em Brasília com <strong>27.500 m² climatizados</strong>. Sistema VRF/Split de alta eficiência com pressurização de escadas e conformidade total.',
      stat1: '941', stat1Label: 'TR de Capacidade',
      stat2: '27.500 m²', stat2Label: 'Área Climatizada',
      stat3: 'VRF', stat3Label: 'Sistema Adotado',
      badge: 'Maior Área',
      badgeIcon: '🏢',
      img: 'spotlight-linea.webp?v=3'
    }
  ];

  const titleEl = document.getElementById('spotlight-title');
  const descEl = document.getElementById('spotlight-desc');
  const stat1 = document.getElementById('stat-1');
  const stat1Label = document.getElementById('stat-1-label');
  const stat2 = document.getElementById('stat-2');
  const stat2Label = document.getElementById('stat-2-label');
  const stat3 = document.getElementById('stat-3');
  const stat3Label = document.getElementById('stat-3-label');
  const badgeText = document.getElementById('spotlight-badge-text');
  const badgeEl = document.getElementById('spotlight-badge');
  const imgEl = document.getElementById('spotlight-img');
  const dotsContainer = document.getElementById('spotlight-dots');
  const content = document.querySelector('.spotlight__content');

  if (!titleEl || !dotsContainer) return;

  // Create dots
  cases.forEach((_, i) => {
    const dot = document.createElement('button');
    dot.className = 'spotlight__dot' + (i === 0 ? ' active' : '');
    dot.setAttribute('aria-label', 'Case ' + (i + 1));
    dot.addEventListener('click', () => goToCase(i));
    dotsContainer.appendChild(dot);
  });

  let current = 0;
  let interval = null;
  let fadeTimeout = null;
  const ROTATE_INTERVAL = 6000;

  function startRotation() {
    stopRotation();
    interval = setInterval(nextCase, ROTATE_INTERVAL);
  }

  function stopRotation() {
    if (interval) {
      clearInterval(interval);
      interval = null;
    }
  }

  // Pause on hover and touch
  const rotator = document.getElementById('spotlight-rotator');
  if (rotator) {
    rotator.addEventListener('mouseenter', stopRotation);
    rotator.addEventListener('mouseleave', startRotation);
    rotator.addEventListener('touchstart', stopRotation, { passive: true });
    rotator.addEventListener('touchend', startRotation, { passive: true });
  }

  function goToCase(index) {
    // Cancel pending fade-in from previous transition
    if (fadeTimeout) {
      clearTimeout(fadeTimeout);
      fadeTimeout = null;
    }
    current = index;
    updateCase();
    startRotation();
  }

  function nextCase() {
    current = (current + 1) % cases.length;
    updateCase();
  }

  function updateCase() {
    const c = cases[current];

    // Fade out content + image
    content.style.opacity = '0';
    content.style.transform = 'translateY(10px)';
    if (imgEl) imgEl.style.opacity = '0';

    fadeTimeout = setTimeout(() => {
      titleEl.innerHTML = c.title;
      descEl.innerHTML = c.desc;
      stat1.textContent = c.stat1;
      stat1Label.textContent = c.stat1Label;
      stat2.textContent = c.stat2;
      stat2Label.textContent = c.stat2Label;
      stat3.textContent = c.stat3;
      stat3Label.textContent = c.stat3Label;
      badgeText.textContent = c.badge;
      badgeEl.querySelector('.s-icon').textContent = c.badgeIcon;

      // Update image + alt text
      if (imgEl) {
        const picture = imgEl.closest('picture');
        const source = picture ? picture.querySelector('source') : null;
        if (source) source.srcset = c.img;
        imgEl.src = c.img;
        imgEl.alt = c.alt;
      }

      // Update dots
      dotsContainer.querySelectorAll('.spotlight__dot').forEach((d, i) => {
        d.classList.toggle('active', i === current);
      });

      // Fade in
      content.style.opacity = '1';
      content.style.transform = 'translateY(0)';
      if (imgEl) imgEl.style.opacity = '1';
      fadeTimeout = null;
    }, 300);
  }

  startRotation();
}

// ===== Back to Top Button =====
let backToTopBtn = null;

function initBackToTop() {
  // Create button element
  backToTopBtn = document.createElement('button');
  backToTopBtn.className = 'back-to-top';
  backToTopBtn.innerHTML = '↑';
  backToTopBtn.setAttribute('aria-label', 'Voltar ao topo');
  backToTopBtn.setAttribute('title', 'Voltar ao topo');
  document.body.appendChild(backToTopBtn);

  // Scroll to top on click
  backToTopBtn.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
}

// Called from unified scroll handler
function updateBackToTop() {
  if (!backToTopBtn) return;
  const scrollY = window.scrollY || window.pageYOffset;
  backToTopBtn.classList.toggle('visible', scrollY > 500);
}

// ===== CLIENTS CAROUSEL (infinite scroll) =====
function initClientsCarousel() {
  const track = document.getElementById('clients-track');
  if (!track) return;

  // Duplicar imagens para scroll infinito seamless
  const images = track.querySelectorAll('img');
  if (images.length && !track.dataset.cloned) {
    images.forEach(img => {
      const clone = img.cloneNode(true);
      track.appendChild(clone);
    });
    track.dataset.cloned = 'true';
  }
}

document.addEventListener('DOMContentLoaded', initClientsCarousel);
