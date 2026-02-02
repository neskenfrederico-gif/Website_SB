# CLAUDE.md - AI Assistant Guide for Website_SB

## Project Overview

**Siqueira e Blanco Engenharia** — corporate website for an HVAC engineering consultancy based in Anapolis, GO, Brazil. The site is a static HTML/CSS/JS portfolio showcasing industrial HVAC projects, services, and company information.

- **Live URL:** https://siqueiraeblanco.com.br/
- **Language:** Portuguese (Brazil) — all user-facing content is in pt-BR
- **Domain:** HVAC engineering for pharmaceutical plants, data centers, hotels, and commercial buildings

## Tech Stack

| Layer       | Technology                      |
|-------------|---------------------------------|
| Markup      | HTML5 (semantic, Schema.org)    |
| Styling     | CSS3 (custom properties, Grid, Flexbox) |
| Scripts     | Vanilla JavaScript (ES6+)       |
| Fonts       | Inter (Google Fonts)            |
| Images      | WebP (primary), JPG (fallback)  |
| Forms       | Formspree (contact form endpoint) |
| Build tools | **None** — no bundler, no npm, no framework |

There is no `package.json`, no build step, no TypeScript, and no CSS preprocessor. Files are served as-is.

## File Structure

```
/
├── index.html              # Main SPA-style page (all sections)
├── styles.css              # Global stylesheet (~2,500 lines)
├── script.js               # All client-side behavior (~640 lines)
├── favicon.ico
├── apple-touch-icon.png
├── Logomarca.png           # Company logo
├── ico.png
├── banner_hero*.{jpg,webp} # Hero slider images (3 pairs)
├── spotlight-*.webp        # Featured case study images
│
├── projetos/               # 16 individual project detail pages
│   ├── projeto.css         # Shared styles for project pages
│   ├── projeto-geolab.html
│   ├── projeto-cosmed.html
│   └── ... (16 HTML files total)
│
├── setores/                # 4 industry sector detail pages
│   ├── setor.css           # Shared styles for sector pages
│   ├── farmaceutico.html
│   ├── datacenter.html
│   ├── corporativo.html
│   └── industrial.html
│
├── portfolio/              # Portfolio thumbnail images
│   ├── portfolio-1.webp through portfolio-16.webp
│   └── SOURCES.md          # Image attribution and licenses
│
└── docs/                   # PDF documentation files
    ├── portfolio-fluxo-apresentacao.pdf
    ├── portfolio-fluxo-execucao.pdf
    └── portfolio-sb-projetos.pdf
```

## Main Page Sections (index.html)

The main page uses anchor-based navigation with smooth scrolling:

| Anchor       | Section                           |
|--------------|-----------------------------------|
| `#home`      | Hero slider with animated text    |
| `#sobre`     | About — company, team, credentials |
| `#setores`   | Industry sectors (4 cards)        |
| `#servicos`  | Services offered (4 cards)        |
| `#destaque`  | Spotlight featured cases (rotator)|
| `#ciclo-de-vida` | Engineering lifecycle / 3 pillars |
| `#processo`  | Engineering process methodology   |
| `#portfolio` | Portfolio grid with category filters |
| `#faq`       | FAQ accordion                     |
| `#contato`   | Contact form + company location   |

## CSS Architecture

### Design Tokens (CSS Custom Properties)

All design tokens are defined in `:root` at the top of `styles.css`:

- **Colors:** `--color-primary` (#1e3a5f blue), `--color-secondary` (#4ecdc4 teal), `--color-accent` (#ff6b35 orange), plus neutral scale `--color-gray-50` through `--color-gray-900`
- **Gradients:** `--gradient-primary`, `--gradient-accent`, `--gradient-dark`
- **Typography:** `--font-size-xs` through `--font-size-6xl`
- **Spacing:** `--spacing-1` (0.25rem) through `--spacing-24` (6rem)
- **Shadows:** `--shadow-sm` through `--shadow-2xl`, `--shadow-glow`
- **Border radius:** `--radius-sm` through `--radius-full`
- **Transitions:** `--transition-fast` (150ms), `--transition-base` (300ms), `--transition-slow` (500ms)
- **Z-index:** `--z-dropdown` (100), `--z-header` (1000), `--z-modal` (2000)

Always use these variables instead of hard-coded values.

### Class Naming Convention

BEM-inspired naming: `block__element--modifier`

```
.nav__logo        (block__element)
.btn--primary     (block--modifier)
.hero__title      (block__element)
.filter-btn       (kebab-case for standalone components)
```

### Key CSS Classes

- `.container` — max-width 1200px centered wrapper
- `.section` — standard section padding
- `.glass-card` — glassmorphism effect (backdrop-filter)
- `.gradient-text` — text with gradient fill
- `.btn`, `.btn--primary`, `.btn--outline`, `.btn--whatsapp` — button variants
- `.fade-in`, `.fade-in.visible` — scroll-triggered animation
- `.stagger-1` through `.stagger-4` — animation delay helpers

### Responsive Breakpoints

- **Mobile-first** approach (base styles target mobile)
- `@media (min-width: 768px)` — tablet
- `@media (min-width: 1024px)` — desktop

### CSS File Organization

Sections are separated by comment headers:
```css
/* ===== SECTION NAME ===== */
```

### Stylesheet Loading

- `styles.css` — loaded on all pages (global styles)
- `projetos/projeto.css` — loaded only on project detail pages
- `setores/setor.css` — loaded only on sector detail pages

Sub-pages reference global styles via relative path: `../styles.css`

## JavaScript Architecture

`script.js` is the single JS file, loaded only on `index.html`. Sub-pages (`projetos/`, `setores/`) have no JS.

### Feature Map

| Feature                    | Mechanism                    |
|----------------------------|------------------------------|
| Mobile menu toggle         | Class toggling + overflow lock |
| Header shrink on scroll    | `requestAnimationFrame` + class toggle |
| Active nav highlighting    | Scroll position tracking     |
| Portfolio filtering        | `data-category` attribute matching |
| Animated number counters   | `IntersectionObserver`       |
| Scroll fade-in animations  | `IntersectionObserver` + `.visible` class |
| Contact form submission    | `fetch()` to Formspree + WhatsApp fallback |
| Toast notifications        | Dynamically injected DOM elements |
| Smooth scroll              | `scrollIntoView({ behavior: 'smooth' })` |
| Hero parallax particles    | Scroll-based `translateY`    |
| Phone input masking        | Regex formatting to `(XX) XXXXX-XXXX` |
| FAQ accordion              | `max-height` animation toggle |
| Hero image slider          | `setInterval` (5s) with class swap |
| Background lazy loading    | `requestIdleCallback` / timeout |
| WhatsApp button visibility | `IntersectionObserver` on `#contato` |
| Spotlight case rotator     | `setInterval` (6s) with dot nav |

### JavaScript Patterns

- DOM elements are cached at the top of the file
- Event listeners use `addEventListener` (no inline handlers)
- Performance-sensitive scroll handlers use `requestAnimationFrame`
- `IntersectionObserver` for all scroll-triggered effects
- `passive: true` on scroll event listeners
- All initialization runs inside `DOMContentLoaded`

## Cache Busting

CSS and JS files use version query parameters for cache invalidation:

```html
<link rel="stylesheet" href="styles.css?v=1769798725" />
<script src="script.js?v=1769798725"></script>
```

Images use simpler versioning: `?v=3`

**When modifying CSS or JS**, increment the version query parameter in all HTML files that reference the changed file. There are 21 HTML files total that may need updating.

## SEO & Structured Data

- Every page has: `<title>`, `<meta description>`, OG tags, Twitter card, canonical URL
- `index.html` has Schema.org JSON-LD (`LocalBusiness` + `EngineeringService`)
- Project pages have Schema.org JSON-LD (`Project` type)
- All images should have descriptive `alt` attributes
- Heading hierarchy: one `<h1>` per page, then `<h2>`, `<h3>` in order

## Accessibility

- ARIA labels on interactive elements (`aria-label`, `aria-hidden`)
- `role="navigation"` on nav menus
- `:focus-visible` styles are defined
- Semantic HTML5 elements (`<header>`, `<nav>`, `<main>`, `<section>`, `<footer>`)
- `prefers-reduced-motion` media query support

## Adding a New Project Page

1. Create `projetos/projeto-{slug}.html` following the template of an existing project page
2. Include both `../styles.css` and `projeto.css` with appropriate cache-bust versions
3. Add Schema.org JSON-LD with `@type: "Project"`
4. Add OG/Twitter meta tags with project-specific content
5. Add a breadcrumb link back to the portfolio (`../index.html#portfolio`)
6. Add the corresponding card in `index.html` inside the `#portfolio` section with appropriate `data-category` attribute
7. Add the portfolio thumbnail image to `portfolio/portfolio-{N}.webp`

## Adding a New Sector Page

1. Create `setores/{sector-name}.html` following an existing sector page template
2. Include both `../styles.css` and `setor.css`
3. Add the sector card in the `#setores` section of `index.html`

## Git Conventions

### Commit Message Format

Commits follow conventional commits in Portuguese:

```
fix: descrição breve do que foi corrigido
feat: descrição breve da nova funcionalidade
feat(escopo): descrição com escopo opcional
```

**Prefixes used:**
- `fix:` — bug fixes, layout adjustments, compatibility patches
- `feat:` — new features, new content, new pages
- `feat(scope):` — scoped features (e.g., `feat(portfolio):`, `feat(geolab):`)

**Message language:** Portuguese (matching the project language).

### Branch Naming

Feature branches use: `claude/{description}-{id}`

## Important Conventions

1. **No build tools** — do not introduce npm, webpack, or any build pipeline. This is intentionally a zero-dependency static site.
2. **Use CSS variables** — never hard-code colors, spacing, or font sizes. Reference the `:root` tokens.
3. **BEM naming** — follow the existing `block__element--modifier` pattern for new CSS classes.
4. **Mobile-first CSS** — write base styles for mobile, then add `min-width` media queries for larger screens.
5. **Portuguese content** — all user-facing text, meta descriptions, alt text, and commit messages should be in Portuguese.
6. **WebP images** — use WebP as the primary image format. Keep file sizes optimized.
7. **Cache busting** — update `?v=` query params on CSS/JS when those files change. Update across all HTML files that reference them.
8. **Inline SVG icons** — icons are inline SVG (Feather-style), not icon fonts or image files.
9. **No external JS dependencies** — all functionality is vanilla JavaScript. Do not add jQuery, React, or any library.
10. **Schema.org structured data** — maintain JSON-LD blocks on all pages for SEO.
11. **Consistent section comments** — use `/* ===== SECTION NAME ===== */` in CSS and `// ===== Section Name =====` in JS.
12. **Performance** — use `IntersectionObserver` for scroll effects, `requestAnimationFrame` for animation, `passive: true` for scroll listeners, and lazy loading for off-screen images.
