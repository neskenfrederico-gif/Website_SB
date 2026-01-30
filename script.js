// ===== DOM Elements =====
const header = document.getElementById("header");
const navMenu = document.getElementById("nav-menu");
const navToggle = document.getElementById("nav-toggle");
const navClose = document.getElementById("nav-close");
const navLinks = document.querySelectorAll(".nav__link");
const filterBtns = document.querySelectorAll(".filter-btn");
const projectCards = document.querySelectorAll(".project-card");
const contactForm = document.getElementById("contact-form");
const statNumbers = document.querySelectorAll(".stats__number");

// ===== Mobile Menu =====
function openMenu() {
  navMenu.classList.add("show");
  document.body.style.overflow = "hidden";
}

function closeMenu() {
  navMenu.classList.remove("show");
  document.body.style.overflow = "";
}

if (navToggle) {
  navToggle.addEventListener("click", openMenu);
}

if (navClose) {
  navClose.addEventListener("click", closeMenu);
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

// ===== Header Scroll Effect =====
let lastScroll = 0;
let ticking = false;

function updateHeader() {
  const currentScroll = window.scrollY || window.pageYOffset;

  if (currentScroll > 50) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }

  lastScroll = currentScroll;
  ticking = false;
}

window.addEventListener("scroll", () => {
  if (!ticking) {
    requestAnimationFrame(updateHeader);
    ticking = true;
  }
}, { passive: true });

// ===== Active Section Highlighting =====
const sections = document.querySelectorAll("section[id]");

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

window.addEventListener("scroll", highlightActiveSection);

// ===== Portfolio Filters =====
filterBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    // Update active button
    filterBtns.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");

    const filter = btn.dataset.filter;

    projectCards.forEach((card) => {
      const category = card.dataset.category;

      if (filter === "all" || category === filter) {
        card.classList.remove("hidden");
        card.style.animation = "fadeInUp 0.5s ease forwards";
      } else {
        card.classList.add("hidden");
      }
    });
  });
});

// ===== Animate Numbers on Scroll =====
function animateNumber(element, target) {
  let current = 0;
  const increment = target / 50;
  const duration = 2000;
  const stepTime = duration / 50;

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
  contactForm.addEventListener("submit", async (e) => {
    e.preventDefault();

    contactForm.classList.add("was-submitted");

    // HTML5 validation (shows visual feedback via CSS)
    if (!contactForm.checkValidity()) {
      showNotification("Por favor, preencha todos os campos obrigatórios.", "error");
      return;
    }

    const formData = new FormData(contactForm);
    const data = Object.fromEntries(formData);

    // Extra email validation (defensive)
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(data.email)) {
      showNotification("Por favor, insira um e-mail válido.", "error");
      return;
    }

    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = "<span>Enviando...</span>";
    submitBtn.disabled = true;

    // 1) Attempt real submission to a configurable endpoint (Formspree, etc.)
    const result = await sendFormToEndpoint(contactForm, formData);

    // 2) Keep the current WhatsApp flow as fallback/secondary channel
    const whatsappMessage = buildWhatsappMessage(data);
    window.open(`https://wa.me/5562992250067?text=${whatsappMessage}`, "_blank");

    if (result && result.ok) {
      showNotification(
        "Mensagem enviada! Você será redirecionado para o WhatsApp.",
        "success"
      );
    } else {
      showNotification(
        "Mensagem preparada! Se o envio automático não estiver configurado, você será redirecionado para o WhatsApp.",
        "info"
      );
    }

    contactForm.reset();
    contactForm.classList.remove("was-submitted");
    submitBtn.innerHTML = originalText;
    submitBtn.disabled = false;
  });
}

// ===== Notification System =====
function showNotification(message, type = "info") {
  // Remove existing notifications
  const existingNotification = document.querySelector(".notification");
  if (existingNotification) {
    existingNotification.remove();
  }

  // Create notification element
  const notification = document.createElement("div");
  notification.className = `notification notification--${type}`;
  notification.innerHTML = `
        <span>${message}</span>
        <button class="notification__close">&times;</button>
    `;

  // Add styles
  notification.style.cssText = `
        position: fixed;
        bottom: 20px;
        right: 20px;
        padding: 16px 24px;
        background: ${
          type === "success"
            ? "#10B981"
            : type === "error"
            ? "#EF4444"
            : "#3B82F6"
        };
        color: white;
        border-radius: 12px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        display: flex;
        align-items: center;
        gap: 12px;
        z-index: 9999;
        animation: slideIn 0.3s ease;
        font-weight: 500;
    `;

  // Add slide animation
  const slideStyle = document.createElement("style");
  slideStyle.textContent = `
        @keyframes slideIn {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideOut {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
    `;
  document.head.appendChild(slideStyle);

  document.body.appendChild(notification);

  // Close button
  const closeBtn = notification.querySelector(".notification__close");
  closeBtn.style.cssText = `
        background: none;
        border: none;
        color: white;
        font-size: 24px;
        cursor: pointer;
        line-height: 1;
    `;

  closeBtn.addEventListener("click", () => {
    notification.style.animation = "slideOut 0.3s ease forwards";
    setTimeout(() => notification.remove(), 300);
  });

  // Auto remove
  setTimeout(() => {
    if (notification.parentNode) {
      notification.style.animation = "slideOut 0.3s ease forwards";
      setTimeout(() => notification.remove(), 300);
    }
  }, 5000);
}

// ===== Smooth Scroll for Anchor Links =====
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute("href"));
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

// ===== Parallax Effect for Hero =====
const hero = document.querySelector(".hero");
let parallaxTicking = false;

function updateParallax() {
  const scrolled = window.scrollY || window.pageYOffset;
  if (hero && scrolled < window.innerHeight) {
    const particles = document.querySelector(".hero__particles");
    if (particles) {
      particles.style.transform = `translateY(${scrolled * 0.3}px)`;
    }
  }
  parallaxTicking = false;
}

window.addEventListener("scroll", () => {
  if (!parallaxTicking) {
    requestAnimationFrame(updateParallax);
    parallaxTicking = true;
  }
}, { passive: true });

// ===== Phone Mask =====
const phoneInput = document.getElementById("phone");
if (phoneInput) {
  phoneInput.addEventListener("input", (e) => {
    let value = e.target.value.replace(/\D/g, "");
    if (value.length > 11) value = value.slice(0, 11);

    if (value.length > 0) {
      value = "(" + value;
    }
    if (value.length > 3) {
      value = value.slice(0, 3) + ") " + value.slice(3);
    }
    if (value.length > 10) {
      value = value.slice(0, 10) + "-" + value.slice(10);
    }

    e.target.value = value;
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

    // Toggle max-height
    if (item.classList.contains("active")) {
      answer.style.maxHeight = answer.scrollHeight + "px";
    } else {
      answer.style.maxHeight = 0;
    }

    // Close other items (optional - accordion effect)
    faqQuestions.forEach((q) => {
      if (q !== question) {
        q.parentElement.classList.remove("active");
        q.nextElementSibling.style.maxHeight = 0;
      }
    });
  });
});

// ===== Hero Slider =====
function initHeroSlider() {
  const slides = document.querySelectorAll(".hero__slide");
  if (slides.length === 0) return;

  let currentSlide = 0;
  const slideInterval = 5000; // 5 seconds

  setInterval(() => {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add("active");
  }, slideInterval);
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

  // Initialize Fade-in Observer
  initFadeInObserver();

  // Initialize Slider
  initHeroSlider();

  // Lazy-load hero backgrounds
  preloadHeroSlideBackgrounds();

  // WhatsApp floating button (hide on contact section)
  initWhatsappFloatVisibility();

  // Footer current year
  const yearEl = document.getElementById("current-year");
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Initial active section check
  highlightActiveSection();

  // Spotlight Cases Rotator
  initSpotlightRotator();
});

// ===== Spotlight Cases Rotator =====
function initSpotlightRotator() {
  const cases = [
    {
      title: 'Geolab — <span class="gradient-text">Site II</span>',
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
  let interval = setInterval(nextCase, 6000);

  function goToCase(index) {
    current = index;
    updateCase();
    clearInterval(interval);
    interval = setInterval(nextCase, 6000);
  }

  function nextCase() {
    current = (current + 1) % cases.length;
    updateCase();
  }

  function updateCase() {
    const c = cases[current];
    const content = document.querySelector('.spotlight__content');
    
    // Fade out content + image
    content.style.opacity = '0';
    content.style.transform = 'translateY(10px)';
    imgEl.style.opacity = '0';
    
    setTimeout(() => {
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

      // Update image
      const picture = imgEl.closest('picture');
      const source = picture ? picture.querySelector('source') : null;
      if (source) source.srcset = c.img;
      imgEl.src = c.img;

      // Update dots
      dotsContainer.querySelectorAll('.spotlight__dot').forEach((d, i) => {
        d.classList.toggle('active', i === current);
      });

      // Fade in
      content.style.opacity = '1';
      content.style.transform = 'translateY(0)';
      imgEl.style.opacity = '1';
    }, 300);
  }
}
