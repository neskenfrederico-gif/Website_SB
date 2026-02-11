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
header.appendChild(navOverlay);

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

// Close menu when clicking on a link
navLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    closeMenu();
    // Update active link
    navLinks.forEach((l) => l.classList.remove("active"));
    link.classList.add("active");

    // Anchor links: scroll after body reflow (position:fixed removal)
    const href = link.getAttribute("href");
    if (href && href.startsWith("#") && href.length > 1) {
      e.preventDefault();
      e.stopImmediatePropagation(); // Prevent duplicate smooth-scroll handler
      requestAnimationFrame(() => {
        const target = document.querySelector(href);
        if (target) {
          target.scrollIntoView({ behavior: "smooth", block: "start" });
        }
      });
    }
  });
});

// ===== Unified Scroll Handler =====
let scrollTicking = false;

function updateHeader() {
  const currentScroll = window.scrollY;
  if (currentScroll > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
}

function highlightActiveSection() {
  const scrollY = window.scrollY;

  // Map section IDs to nav link selectors (supports both anchor and route-based links)
  const sectionToNavMap = {
    home: '.nav__link[href="#home"], .nav__link[href="/"]',
    servicos: '.nav__link[href="servicos/"], .nav__link[href="#servicos"]',
    sobre: '.nav__link[href="sobre/"], .nav__link[href="#sobre"]',
    setores: '.nav__link[href="setores/"], .nav__link[href="#setores"]',
    portfolio: '.nav__link[href="portfolio/"], .nav__link[href="#portfolio"]',
    contato: '.nav__link[href="contato/"], .nav__link[href="#contato"]',
  };

  sections.forEach((section) => {
    const sectionHeight = section.offsetHeight;
    const sectionTop = section.offsetTop - 100;
    const sectionId = section.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      navLinks.forEach((link) => link.classList.remove("active"));
      // Try mapped selector first, then fallback to anchor selector
      const selector = sectionToNavMap[sectionId] || `.nav__link[href="#${sectionId}"]`;
      const correspondingLink = document.querySelector(selector);
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
      z-index: var(--z-modal, 2000);
      animation: notifSlideIn 0.3s ease;
      font-weight: 500;
    }
    .notification--success { background: var(--color-whatsapp-dark, #10B981); }
    .notification--error { background: var(--color-error, #EF4444); }
    .notification--info { background: var(--color-primary-light, #3B82F6); }
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

  // Create notification element with accessibility (textContent to prevent XSS)
  const notification = document.createElement("div");
  notification.className = `notification notification--${type}`;
  notification.setAttribute("role", "alert");
  notification.setAttribute("aria-live", "assertive");

  const msgSpan = document.createElement("span");
  msgSpan.textContent = message;
  notification.appendChild(msgSpan);

  const closeBtn = document.createElement("button");
  closeBtn.className = "notification__close";
  closeBtn.setAttribute("aria-label", "Fechar notificação");
  closeBtn.textContent = "\u00D7";
  notification.appendChild(closeBtn);

  document.body.appendChild(notification);

  // Close button
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
const mobileQuery = window.matchMedia("(max-width: 768px)");
let isMobileDevice = mobileQuery.matches;
mobileQuery.addEventListener("change", (e) => { isMobileDevice = e.matches; });

function updateParallax() {
  // Skip parallax on mobile for performance
  if (isMobileDevice) return;

  if (heroParticles === undefined) {
    heroParticles = document.querySelector(".hero__particles") || null;
  }
  if (!hero || !heroParticles) return;

  const scrolled = window.scrollY;
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

// ===== Hero Slider (Multi-Page) =====
function initHeroSlider() {
  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const slides = document.querySelectorAll(".hero__slide");
  const pages = document.querySelectorAll(".hero__page");
  const dotsContainer = document.getElementById("hero-dots");
  const progressBar = document.getElementById("hero-progress");
  const counterCurrent = document.getElementById("hero-counter-current");
  const counterTotal = document.getElementById("hero-counter-total");
  const floatValue = document.getElementById("hero-float-value");
  const floatLabel = document.getElementById("hero-float-label");
  const floatIcon = document.getElementById("hero-float-icon");
  const floatFill = document.querySelector(".hero__float-card-fill");

  if (slides.length <= 1 || pages.length <= 1 || !dotsContainer) return;

  // Data for float card per slide
  const cardData = [
    { value: "200+", label: "Projetos Entregues", fill: 85, icon: "shield" },
    { value: "8.000", label: "m² de Salas Limpas", fill: 70, icon: "flask" },
    { value: "99.99%", label: "Uptime Garantido", fill: 95, icon: "server" },
    { value: "LOD 400", label: "Detalhamento BIM", fill: 80, icon: "cube" },
    { value: "40%", label: "Redução de Custos", fill: 65, icon: "trending" }
  ];

  const iconSVGs = {
    shield: '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    flask: '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>',
    server: '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><circle cx="6" cy="6" r="1"/><circle cx="6" cy="18" r="1"/></svg>',
    cube: '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg>',
    trending: '<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>'
  };

  let currentSlide = 0;
  const totalSlides = pages.length;
  const SLIDE_INTERVAL = 6000;
  let heroInterval = null;
  let progressRAF = null;
  let progressStart = 0;

  // Set counter total
  if (counterTotal) counterTotal.textContent = String(totalSlides).padStart(2, "0");

  // Create dots
  for (let i = 0; i < totalSlides; i++) {
    const dot = document.createElement("button");
    dot.className = "hero__dot" + (i === 0 ? " active" : "");
    dot.setAttribute("aria-label", "Slide " + (i + 1));
    dot.addEventListener("click", () => goToSlide(i));
    dotsContainer.appendChild(dot);
  }

  function updateFloatCard(index) {
    const d = cardData[index];
    if (!d || !floatValue) return;
    floatValue.textContent = d.value;
    floatLabel.textContent = d.label;
    if (floatIcon) floatIcon.innerHTML = iconSVGs[d.icon] || iconSVGs.shield;
    if (floatFill) floatFill.style.width = d.fill + "%";
  }

  function goToSlide(index) {
    if (index === currentSlide) return;

    // Exit animation on current page
    pages[currentSlide].classList.add("hero--exiting");

    setTimeout(() => {
      // Update background
      slides[currentSlide].classList.remove("active");
      slides[index].classList.add("active");

      // Switch pages
      pages[currentSlide].classList.remove("active", "hero--exiting");
      pages[index].classList.add("active");

      // Dots
      const dots = dotsContainer.querySelectorAll(".hero__dot");
      dots[currentSlide].classList.remove("active");
      dots[index].classList.add("active");

      // Counter
      if (counterCurrent) counterCurrent.textContent = String(index + 1).padStart(2, "0");

      // Float card
      updateFloatCard(index);

      currentSlide = index;
      resetProgress();
    }, reducedMotion ? 0 : 300);
  }

  function nextSlide() {
    goToSlide((currentSlide + 1) % totalSlides);
  }

  function resetProgress() {
    if (progressRAF) cancelAnimationFrame(progressRAF);
    progressStart = performance.now();
    if (!reducedMotion) animateProgress();
  }

  function animateProgress() {
    const elapsed = performance.now() - progressStart;
    const pct = Math.min((elapsed / SLIDE_INTERVAL) * 100, 100);
    if (progressBar) progressBar.style.width = pct + "%";
    if (pct < 100) {
      progressRAF = requestAnimationFrame(animateProgress);
    }
  }

  function startSlider() {
    stopSlider();
    heroInterval = setInterval(nextSlide, SLIDE_INTERVAL);
    resetProgress();
  }

  function stopSlider() {
    if (heroInterval) {
      clearInterval(heroInterval);
      heroInterval = null;
    }
    if (progressRAF) {
      cancelAnimationFrame(progressRAF);
      progressRAF = null;
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

  // Initialize first card
  updateFloatCard(0);
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

// ===== Newsletter Form =====
function initNewsletterForm() {
  const form = document.getElementById("newsletter-form");
  if (!form) return;

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const btn = form.querySelector("button[type='submit']");
    const originalHTML = btn.innerHTML;
    btn.innerHTML = '<span>Enviando...</span>';
    btn.disabled = true;

    fetch(form.action, {
      method: "POST",
      body: new FormData(form),
      headers: { Accept: "application/json" }
    })
      .then((res) => {
        if (res.ok) {
          showNotification("Inscrição realizada com sucesso!", "success");
          form.reset();
        } else {
          showNotification("Erro ao enviar. Tente novamente.", "error");
        }
      })
      .catch(() => {
        showNotification("Erro de conexão. Tente novamente.", "error");
      })
      .finally(() => {
        btn.innerHTML = originalHTML;
        btn.disabled = false;
      });
  });
}

// ===== Footer Accordion (Mobile) =====
function initFooterAccordion() {
  const toggles = document.querySelectorAll(".footer__col-toggle");
  if (!toggles.length) return;

  toggles.forEach((toggle) => {
    toggle.addEventListener("click", () => {
      const col = toggle.closest(".footer__col--accordion");
      const isOpen = col.classList.contains("open");

      // Close all
      document.querySelectorAll(".footer__col--accordion.open").forEach((c) => {
        c.classList.remove("open");
        c.querySelector(".footer__col-toggle").setAttribute("aria-expanded", "false");
      });

      // Open clicked (if was closed)
      if (!isOpen) {
        col.classList.add("open");
        toggle.setAttribute("aria-expanded", "true");
      }
    });
  });
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

  // Footer accordion (all pages)
  initFooterAccordion();

  // Newsletter form (all pages with newsletter)
  initNewsletterForm();

  // Portfolio rotation (all pages with portfolio grid)
  initPortfolioRotation();

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
  }
});

// ===== Spotlight Cases Rotator =====
function initSpotlightRotator() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  const cases = [
    {
      title: 'Banco do Brasil — <span class="gradient-text">Sedes SBS</span>',
      alt: 'Banco do Brasil - 3 Sedes SBS Brasília, 96.135 m²',
      desc: '<strong>3 sedes no Setor Bancário Sul</strong>: 96.135 m² e 4.350 TR com chillers parafuso e centrífugo, fancoils, exaustão e pressurização.',
      stat1: '4.350', stat1Label: 'TR de Capacidade',
      stat2: '96.135 m²', stat2Label: 'Área Total',
      stat3: '3', stat3Label: 'Edifícios',
      badge: 'Maior Projeto',
      badgeIcon: '🏦',
      img: 'spotlight-bb.webp?v=4',
      link: 'projetos/projeto-bancodobrasil.php'
    },
    {
      title: 'HC-UFG — <span class="gradient-text">Hospital das Clínicas</span>',
      alt: 'HC-UFG Hospital das Clínicas - 44.000 m², 600 leitos',
      desc: 'Hospital referência em Goiás com <strong>600 leitos e 20 pavimentos</strong>. Filtragem HEPA em centros cirúrgicos e UTIs, filtros H13 para transplantados.',
      stat1: '1.500', stat1Label: 'TR de Capacidade',
      stat2: '44.000 m²', stat2Label: 'Área Climatizada',
      stat3: '600', stat3Label: 'Leitos',
      badge: 'Ref. em Hospitalar',
      badgeIcon: '🏥',
      img: 'spotlight-hcufg.webp?v=4',
      link: 'projetos/projeto-hcufg.php'
    },
    {
      title: 'CCBB — <span class="gradient-text">Centro Cultural</span>',
      alt: 'CCBB Brasília - Centro Cultural Banco do Brasil, Niemeyer',
      desc: 'Edifício Tancredo Neves de <strong>Oscar Niemeyer</strong>. Dual fluid de precisão para galerias de arte, teatro e cinema com controle rigoroso de temperatura e umidade.',
      stat1: '900', stat1Label: 'TR de Capacidade',
      stat2: '15.000 m²', stat2Label: 'Área Construída',
      stat3: 'Precisão', stat3Label: 'Controle Ambiental',
      badge: 'Ref. em Cultural',
      badgeIcon: '🎭',
      img: 'spotlight-ccbb.webp?v=4',
      link: 'projetos/projeto-ccbb.php'
    },
    {
      title: 'Geolab — <span class="gradient-text">Site I</span>',
      alt: 'Projeto Geolab Site I - 25.000+ m² de áreas produtivas',
      desc: 'Projeto completo para <strong>25.000+ m² de áreas produtivas</strong>: sólidos, efervescentes e semissólidos. CAG de 1.500 TR, UTAs TROX TKZ e desumidificação química.',
      stat1: '1.500', stat1Label: 'TR de Capacidade',
      stat2: '25.000+ m²', stat2Label: 'Área Produtiva',
      stat3: 'TROX TKZ', stat3Label: 'UTAs',
      badge: 'Ref. em Farmacêutica',
      badgeIcon: '⚗️',
      img: 'spotlight-geolab1.webp?v=3',
      link: 'projetos/projeto-geolab.php'
    },
    {
      title: 'Ontex — <span class="gradient-text">IBUTG</span>',
      alt: 'Projeto Ontex - 15.600 m² de área industrial',
      desc: 'Projeto HVAC para <strong>15.600 m² de área industrial</strong> com 710.000 m³/h de vazão e automação Siemens. Controle térmico para conformidade NR-15/IBUTG.',
      stat1: '1.050', stat1Label: 'TR de Capacidade',
      stat2: '15.600 m²', stat2Label: 'Área Industrial',
      stat3: 'Siemens', stat3Label: 'Automação',
      badge: 'Ref. em Industrial',
      badgeIcon: '🏭',
      img: 'spotlight-ontex.webp?v=3',
      link: 'projetos/projeto-ontex.php'
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
  const linkEl = document.getElementById('spotlight-link');
  const currentEl = document.getElementById('spotlight-current');
  const content = document.querySelector('.spotlight__content');

  if (!titleEl || !dotsContainer) return;

  // Create dots
  cases.forEach((_, i) => {
    const dot = document.createElement('button');
    dot.className = 'hero__dot' + (i === 0 ? ' active' : '');
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

      // Update link + counter
      if (linkEl && c.link) linkEl.href = c.link;
      if (currentEl) currentEl.textContent = String(current + 1).padStart(2, '0');

      // Reset progress bar
      const progressBar = document.getElementById('spotlight-progress');
      if (progressBar) {
        progressBar.style.transition = 'none';
        progressBar.style.width = '0%';
        void progressBar.offsetHeight;
        progressBar.style.transition = 'width ' + (ROTATE_INTERVAL / 1000) + 's linear';
        progressBar.style.width = '100%';
      }

      // Update image + alt text
      if (imgEl) {
        const picture = imgEl.closest('picture');
        const source = picture ? picture.querySelector('source') : null;
        if (source) source.srcset = c.img;
        imgEl.src = c.img;
        imgEl.alt = c.alt;
      }

      // Update dots
      dotsContainer.querySelectorAll('.hero__dot').forEach((d, i) => {
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
  const scrollY = window.scrollY;
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

  // Pause animation on keyboard focus within carousel (accessibility)
  const carousel = track.closest('.clients-carousel');
  if (carousel) {
    carousel.addEventListener('focusin', () => { track.style.animationPlayState = 'paused'; });
    carousel.addEventListener('focusout', () => { track.style.animationPlayState = ''; });
  }

  // Drag & Touch support
  if (carousel) {
    let isDragging = false;
    let startX = 0;
    let currentTranslate = 0;
    let dragOffset = 0;

    function getTranslateX() {
      const style = window.getComputedStyle(track);
      const matrix = new DOMMatrixReadOnly(style.transform);
      return matrix.m41;
    }

    function startDrag(x) {
      isDragging = true;
      startX = x;
      currentTranslate = getTranslateX();
      track.classList.add('dragging');
      track.style.transform = `translateX(${currentTranslate}px)`;
    }

    function moveDrag(x) {
      if (!isDragging) return;
      const diff = x - startX;
      dragOffset = diff;
      track.style.transform = `translateX(${currentTranslate + diff}px)`;
    }

    function endDrag() {
      if (!isDragging) return;
      isDragging = false;
      track.classList.remove('dragging');
      track.style.transform = '';
      track.style.animationPlayState = '';
    }

    // Mouse events
    carousel.addEventListener('mousedown', (e) => {
      e.preventDefault();
      startDrag(e.clientX);
    });
    window.addEventListener('mousemove', (e) => moveDrag(e.clientX));
    window.addEventListener('mouseup', endDrag);

    // Touch events
    carousel.addEventListener('touchstart', (e) => {
      startDrag(e.touches[0].clientX);
    }, { passive: true });
    carousel.addEventListener('touchmove', (e) => {
      moveDrag(e.touches[0].clientX);
    }, { passive: true });
    carousel.addEventListener('touchend', endDrag);
  }
}

document.addEventListener('DOMContentLoaded', initClientsCarousel);

/* Testimonial "Ver mais" */
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.testimonial-card__quote').forEach(function(quote) {
    if (quote.scrollHeight > quote.clientHeight + 2) {
      quote.classList.add('clamped');
      var btn = quote.parentElement.querySelector('.testimonial-card__toggle');
      if (btn) btn.classList.add('visible');
    }
  });
  document.querySelectorAll('.testimonial-card__toggle').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var quote = this.parentElement.querySelector('.testimonial-card__quote');
      quote.classList.toggle('expanded');
      this.textContent = quote.classList.contains('expanded') ? 'Ver menos ←' : 'Ver mais →';
    });
  });
});
