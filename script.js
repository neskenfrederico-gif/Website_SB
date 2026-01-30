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
if (contactForm) {
  contactForm.addEventListener("submit", (e) => {
    e.preventDefault();

    // Get form data
    const formData = new FormData(contactForm);
    const data = Object.fromEntries(formData);

    // Simple validation
    if (!data.name || !data.email || !data.subject || !data.message) {
      showNotification(
        "Por favor, preencha todos os campos obrigatórios.",
        "error"
      );
      return;
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(data.email)) {
      showNotification("Por favor, insira um e-mail válido.", "error");
      return;
    }

    // Simulate form submission
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = "<span>Enviando...</span>";
    submitBtn.disabled = true;

    // Simulate API call
    setTimeout(() => {
      // Create WhatsApp message
      const whatsappMessage = encodeURIComponent(
        `*Novo contato pelo site*\n\n` +
          `*Nome:* ${data.name}\n` +
          `*E-mail:* ${data.email}\n` +
          `*Telefone:* ${data.phone || "Não informado"}\n` +
          `*Tipo de Projeto:* ${data.subject}\n\n` +
          `*Mensagem:*\n${data.message}`
      );

      // Open WhatsApp
      window.open(
        `https://wa.me/5562992250067?text=${whatsappMessage}`,
        "_blank"
      );

      showNotification(
        "Mensagem enviada! Você será redirecionado para o WhatsApp.",
        "success"
      );
      contactForm.reset();
      submitBtn.innerHTML = originalText;
      submitBtn.disabled = false;
    }, 1500);
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

// ===== Initialize =====
document.addEventListener("DOMContentLoaded", () => {
  // Add loaded class to body
  document.body.classList.add("loaded");

  // Initialize Fade-in Observer
  initFadeInObserver();

  // Initialize Slider
  initHeroSlider();

  // Initial active section check
  highlightActiveSection();
});
