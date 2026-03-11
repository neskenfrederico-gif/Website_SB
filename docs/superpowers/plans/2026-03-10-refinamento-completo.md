# Refinamento Completo do Website — Plano de Implementação

> **For agentic workers:** REQUIRED: Use superpowers:subagent-driven-development (if subagents available) or superpowers:executing-plans to implement this plan. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Corrigir 35 problemas identificados na auditoria (5 críticos, 15 importantes, 15 melhorias) no site estático Siqueira e Blanco.

**Architecture:** Site estático PHP sem build tools. Edições diretas em HTML/CSS/JS. Sem framework de testes — verificação via inspeção manual e validação de sintaxe.

**Tech Stack:** PHP, HTML5, CSS3, Vanilla JS, Service Worker

---

## Chunk 1: Correções Críticas

### Task 1: Remover AggregateRating fabricado do Schema.org

**Files:**
- Modify: `index.php:90-97`

- [ ] **Step 1: Remover bloco AggregateRating**

Em `index.php`, remover as linhas 90-97 (o bloco `"aggregateRating": { ... },`). Manter o resto do JSON-LD `LocalBusiness` intacto. Certificar-se de remover a vírgula trailing do campo anterior.

- [ ] **Step 2: Validar JSON-LD**

Verificar que o JSON-LD restante é válido — sem vírgulas soltas, chaves balanceadas. Abrir o arquivo e conferir a estrutura do bloco `<script type="application/ld+json">`.

- [ ] **Step 3: Commit**

```bash
git add index.php
git commit -m "fix(seo): remove AggregateRating fabricado do Schema.org"
```

---

### Task 2: Corrigir honeypot de acessibilidade

**Files:**
- Modify: `index.php:1477-1480`

- [ ] **Step 1: Adicionar aria-hidden nos elementos internos**

Em `index.php`, linhas 1477-1480, adicionar `aria-hidden="true"` no `<input>` e no `<label>`:

```html
<div class="form-group form-group--honey" aria-hidden="true">
  <label for="_honey" aria-hidden="true">Não preencha este campo</label>
  <input type="text" id="_honey" name="_gotcha" tabindex="-1" autocomplete="off" aria-hidden="true">
</div>
```

---

### Task 3: Sanitizar innerHTML no spotlight

**Files:**
- Modify: `script.js:1228-1229`

- [ ] **Step 1: Criar helper de sanitização**

Antes do rotador de spotlight no `script.js`, adicionar uma função helper que permite apenas tags seguras:

```js
function sanitizeHTML(str) {
  const div = document.createElement('div');
  div.textContent = str;
  const clean = div.innerHTML;
  // Permitir apenas <span>, <strong>, <em> com classes
  return str.replace(/<(?!\/?(?:span|strong|em)\b)[^>]*>/gi, '');
}
```

- [ ] **Step 2: Aplicar sanitização nas linhas 1228-1229**

```js
titleEl.innerHTML = sanitizeHTML(c.title);
descEl.innerHTML = sanitizeHTML(c.desc);
```

---

### Task 4: Corrigir preload duplo de imagens

**Files:**
- Modify: `index.php:53-55`

- [ ] **Step 1: Remover preloads redundantes**

Em `index.php`, linhas 53-55, manter apenas o preload do WebP (que é o formato primário):

```html
<link rel="preload" as="image" href="banner_hero1.webp" type="image/webp" />
```

Remover:
- `<link rel="preload" as="image" href="banner_hero1.jpg" type="image/jpeg" />`
- `<link rel="preload" as="image" href="Logomarca.png" type="image/png" />`

---

### Task 5: Alinhar cache do Service Worker

**Files:**
- Modify: `sw.js:6-12`

- [ ] **Step 1: Remover CSS e JS do precache array**

O SW já usa strategy network-first, então o precache de CSS/JS com query string é problemático. Remover esses itens do array e deixar apenas recursos estáticos:

```js
const PRECACHE_ASSETS = [
  '/',
  '/Logomarca.png',
  '/manifest.json',
];
```

A estratégia network-first já garante que CSS/JS atualizados serão buscados da rede.

- [ ] **Step 2: Commit da Onda 1 completa**

```bash
git add index.php script.js sw.js
git commit -m "fix(critico): corrige 5 problemas criticos - schema, a11y, xss, preload, sw"
```

---

## Chunk 2: Correções Importantes (Parte 1)

### Task 6: Remover CSS duplicado `.team-stat__*`

**Files:**
- Modify: `styles.css:1274-1289`

- [ ] **Step 1: Remover primeira ocorrência duplicada**

Em `styles.css`, remover as linhas 1274-1289 (primeira definição de `.team-stat__value` e `.team-stat__label`). Manter apenas a segunda ocorrência (linhas 1364-1377) que usa variáveis CSS corretamente (`--font-size-2xs` em vez de `0.65rem`).

---

### Task 7: Remover `aria-label` duplicado no nav

**Files:**
- Modify: `index.php:219`

- [ ] **Step 1: Remover aria-label do div interno**

Em `index.php`, linha 219, remover `aria-label="Menu principal"` do `<div class="nav__menu">`:

```html
<div class="nav__menu" id="nav-menu">
```

O `<nav>` pai (linha 215) já tem o `aria-label`, então o div não precisa repetir.

---

### Task 8: Corrigir `<h4>` dentro de `<button>` no footer

**Files:**
- Modify: `index.php:1563-1566, 1577, 1591`

- [ ] **Step 1: Trocar h4 por span em todos os footer toggles**

Nas linhas 1563-1566, 1577 e 1591, trocar `<h4>` por `<span class="footer__col-title">`:

```html
<button class="footer__col-toggle" aria-expanded="false">
  <span class="footer__col-title">Links Rápidos</span>
  <svg class="footer__col-arrow" ...></svg>
</button>
```

Repetir para os outros 2 botões de toggle do footer.

- [ ] **Step 2: Adicionar estilo para `.footer__col-title`**

Em `styles.css`, adicionar (perto dos estilos do footer):

```css
.footer__col-title {
  font-size: var(--font-size-base);
  font-weight: 600;
}
```

---

### Task 9: Adicionar `prefers-reduced-motion` nas notificações

**Files:**
- Modify: `script.js:581-621`

- [ ] **Step 1: Adicionar media query no CSS injetado**

Dentro da função `injectNotificationStyles()` no `script.js` (linhas 581-621), adicionar ao final do `style.textContent`:

```css
@media (prefers-reduced-motion: reduce) {
  .notification { animation: none !important; }
}
```

---

### Task 10: Adicionar Twitter meta tags em `head.php`

**Files:**
- Modify: `includes/head.php:36`

- [ ] **Step 1: Adicionar meta tags após twitter:card**

Após a linha 36 de `includes/head.php`, adicionar:

```php
<meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
<meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>" />
<meta name="twitter:image" content="<?= htmlspecialchars($og_image) ?>" />
```

---

### Task 11: Remover `!important` do portfolio

**Files:**
- Modify: `styles.css:2117-2121`

- [ ] **Step 1: Aumentar especificidade em vez de usar !important**

Substituir as linhas 2117-2121:

```css
.portfolio__grid.portfolio--expanded .project-card-link {
  display: flex;
  opacity: 1;
  animation: fadeInUp var(--transition-slow) forwards;
}
```

Se necessário para sobrescrever `.portfolio--collapsed`, verificar a regra colapsada e garantir que a ordem no CSS resolva a cascata (expanded deve vir DEPOIS de collapsed).

---

### Task 12: Adicionar `width`/`height` nas imagens de clientes

**Files:**
- Modify: `index.php:445-457`

- [ ] **Step 1: Adicionar dimensões em todas as 13 imagens**

Para cada `<img>` de cliente nas linhas 445-457, adicionar `width` e `height`. Os logos de clientes tipicamente são exibidos em ~120x60px:

```html
<img fetchpriority="high" src="clientes/geolab.jpg" alt="Logo Geolab ..." decoding="async" width="120" height="60" loading="lazy" />
```

Nota: verificar as dimensões reais de cada imagem antes de adicionar. Usar valores que correspondam ao aspect ratio real.

- [ ] **Step 2: Trocar `fetchpriority="high"` por `loading="lazy"`**

Os logos de clientes não estão acima do fold — remover `fetchpriority="high"` e adicionar `loading="lazy"` em todas as 13 imagens.

---

### Task 13: Corrigir `og:type` em sub-páginas de projetos e setores

**Files:**
- Modify: Todos os arquivos em `projetos/*.php` e `setores/*.php`

- [ ] **Step 1: Alterar og:type em páginas de projeto**

Em cada arquivo `projetos/projeto-*.php`, alterar a variável `$og_type` (ou o meta tag direto) de `"website"` para `"article"`.

- [ ] **Step 2: Alterar og:type em páginas de setor**

Em cada arquivo `setores/*.php`, alterar de `"website"` para `"article"`.

---

### Task 14: Atualizar sitemap.xml

**Files:**
- Modify: `sitemap.xml`

- [ ] **Step 1: Atualizar lastmod para data atual**

Alterar todos os `<lastmod>` de `2026-02-13` para `2026-03-10` (data atual das modificações).

- [ ] **Step 2: Verificar consistência de URLs**

Garantir que todas as URLs no sitemap correspondem a arquivos reais no projeto.

---

### Task 15: Limpar CSS morto e remover `.scroll-indicator`

**Files:**
- Modify: `styles.css:1076-1092`

- [ ] **Step 1: Remover bloco `.scroll-indicator`**

Remover as linhas 1076-1092 (`.scroll-indicator` e `.scroll-indicator__line`). Verificar no `index.php` que não há nenhum elemento com essa classe (confirmar que é realmente morto).

- [ ] **Step 2: Commit da Onda 2**

```bash
git add index.php styles.css script.js includes/head.php sw.js sitemap.xml projetos/ setores/
git commit -m "fix(importante): corrige 15 problemas importantes - css, a11y, seo, performance"
```

---

## Chunk 3: Correções Importantes (Parte 2) — Itens que requerem mais cuidado

### Task 16: Tornar dropdown de navegação acessível por teclado

**Files:**
- Modify: `script.js` (adicionar handler de teclado)
- Modify: `index.php:228-240` (ajustar markup)

- [ ] **Step 1: Adicionar botão de toggle no dropdown**

Em `index.php`, converter o link "Setores" (que é pai do dropdown) para incluir um botão de toggle acessível:

```html
<li class="nav__item nav__item--dropdown">
  <a href="#setores" class="nav__link">Setores</a>
  <button class="nav__dropdown-toggle" aria-expanded="false" aria-label="Abrir submenu de setores">
    <svg class="dropdown-arrow" ...></svg>
  </button>
  <ul class="nav__dropdown" role="menu">
    ...
  </ul>
</li>
```

- [ ] **Step 2: Adicionar JS para toggle do dropdown**

No `script.js`, adicionar listener para o botão de toggle:

```js
const dropdownToggle = document.querySelector('.nav__dropdown-toggle');
if (dropdownToggle) {
  dropdownToggle.addEventListener('click', function() {
    const expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', String(!expanded));
    this.closest('.nav__item--dropdown').classList.toggle('dropdown-open');
  });
}
```

---

### Task 17: Corrigir `<picture>` no spotlight

**Files:**
- Modify: `script.js:1254-1260`

- [ ] **Step 1: Separar tratamento de source e img**

O `<source>` deve receber o WebP e o `<img>` pode receber o mesmo (como fallback o browser já cuida). Mas o `type` do source deve ser preservado. A correção é garantir que o source mantenha `type="image/webp"`:

```js
if (imgEl) {
  const picture = imgEl.closest('picture');
  const source = picture ? picture.querySelector('source[type="image/webp"]') : null;
  if (source) source.srcset = c.img;
  imgEl.src = c.img;
  imgEl.alt = c.alt;
}
```

Isso é funcionalmente equivalente ao atual, mas explicita o seletor. O real problema é conceitual — se não há fallback JPG, o `<picture>` é desnecessário. Mas manter não causa dano.

---

### Task 18: Documentar formulários Formspree

**Files:**
- Modify: `index.php:1422, 1523`

- [ ] **Step 1: Adicionar comentário explicativo**

Adicionar comentário nos formulários documentando que ambos usam o mesmo endpoint:

```html
<!-- Ambos os formulários (contato e newsletter) usam o mesmo endpoint Formspree.
     Diferenciados pelo campo oculto form_type. Separar se volume aumentar. -->
```

---

## Chunk 4: Melhorias

### Task 19: Adicionar `aria-label` nos depoimentos

**Files:**
- Modify: `index.php:1212, 1232, 1252`

- [ ] **Step 1: Adicionar aria-label descritivo em cada article**

```html
<article class="testimonial-card" aria-label="Depoimento de [Nome do Cliente]">
```

Aplicar em cada um dos 3 depoimentos com o nome correto.

---

### Task 20: Remover botão "Ver mais" morto dos depoimentos

**Files:**
- Modify: `index.php:1217, 1237, 1257`

- [ ] **Step 1: Remover os botões sem funcionalidade**

Remover as 3 instâncias de:
```html
<button class="testimonial-card__toggle" aria-label="Ver depoimento completo">Ver mais →</button>
```

Se o texto dos depoimentos está truncado visualmente por CSS, remover também o `max-height` ou `overflow: hidden` correspondente para que o texto completo apareça.

---

### Task 21: Usar variável CSS em vez de `0.65rem` hard-coded

**Files:**
- Modify: `styles.css:1284` (se ainda existir após Task 6)

- [ ] **Step 1: Trocar valor hard-coded**

Se a primeira ocorrência de `.team-stat__label` foi removida na Task 6, este item já está resolvido. Caso contrário, trocar `font-size: 0.65rem` por `font-size: var(--font-size-2xs)`.

Para a segunda ocorrência em `styles.css:5197` (`padding: 0.65rem 0.75rem`), trocar por `padding: var(--spacing-2) var(--spacing-3)` (valores mais próximos).

---

### Task 22: Acessibilidade dos emojis no dropdown

**Files:**
- Modify: `index.php:233-238`

- [ ] **Step 1: Envolver emojis com span role="img"**

```html
<li><a href="setores/farmaceutico.php" class="nav__dropdown-link"><span role="img" aria-hidden="true">🏥</span> Farmacêutico</a></li>
<li><a href="setores/datacenter.php" class="nav__dropdown-link"><span role="img" aria-hidden="true">💾</span> Data Centers</a></li>
```

Usar `aria-hidden="true"` já que o texto adjacente é descritivo o suficiente.

---

### Task 23: Definir classe `mobile-only`

**Files:**
- Modify: `styles.css`

- [ ] **Step 1: Adicionar regra CSS**

```css
.mobile-only {
  display: none;
}

@media (max-width: 767px) {
  .mobile-only {
    display: inline-flex;
  }
}
```

---

### Task 24: Corrigir ordem de `getPageSize()`

**Files:**
- Modify: `script.js:248-260`

- [ ] **Step 1: Mover definição antes da chamada**

Mover a definição de `function getPageSize()` (linha 260) para antes da linha 248 onde é chamada. Isso torna o código mais robusto mesmo que function hoisting funcione no caso atual.

---

### Task 25: Adicionar null check no FAQ

**Files:**
- Modify: `script.js:761`

- [ ] **Step 1: Adicionar verificação**

```js
const answer = q.nextElementSibling;
if (answer) answer.style.maxHeight = 0;
```

---

### Task 26: Corrigir counter CSS do processo

**Files:**
- Modify: `styles.css:1549-1557`

- [ ] **Step 1: Usar decimal-leading-zero**

Trocar:
```css
content: "0" counter(step-counter);
```
Por:
```css
content: counter(step-counter, decimal-leading-zero);
```

---

### Task 27: Usar variáveis CSS para cores WhatsApp

**Files:**
- Modify: `styles.css:2263-2273`

- [ ] **Step 1: Substituir hex por variáveis**

```css
.btn-cta--whatsapp {
  background: var(--color-whatsapp);
}
.btn-cta--whatsapp:hover {
  background: var(--color-whatsapp-dark);
}
```

Verificar se `--color-whatsapp-dark` existe no `:root`. Se não, criar com valor `#1ebe5b`.

---

### Task 28: Mapear seção "Artigos" no nav scroll

**Files:**
- Modify: `script.js` (no objeto `sectionToNavMap`)

- [ ] **Step 1: Adicionar entrada para artigos**

No objeto `sectionToNavMap` (linha ~173), adicionar:

```js
'artigos-home': '.nav__link[href="artigos/"]',
```

---

### Task 29: Remover CSS morto adicional

**Files:**
- Modify: `styles.css`

- [ ] **Step 1: Verificar e remover classes mortas**

Buscar no CSS por classes que não existem no HTML:
- `.hero__trust`
- `.hero__norms-bar`
- `.hero__stats`
- `.stat-card` (verificar primeiro se não é usada)

Remover as que forem confirmadas como mortas.

---

### Task 30: Atualizar cache-bust e commit final

**Files:**
- Modify: Todos os 21+ arquivos HTML/PHP que referenciam `styles.css` e `script.js`

- [ ] **Step 1: Gerar novo timestamp de cache-bust**

Atualizar o `?v=` em todas as referências a `styles.css` e `script.js` em todos os arquivos PHP/HTML. Usar timestamp Unix atual.

- [ ] **Step 2: Commit da Onda 3**

```bash
git add -A
git commit -m "refactor(melhorias): 15 melhorias de a11y, css, js e seo"
```

---

## Resumo de Arquivos

| Arquivo | Tasks |
|---------|-------|
| `index.php` | 1, 2, 4, 7, 8, 12, 16, 18, 19, 20, 22, 30 |
| `styles.css` | 6, 8, 11, 15, 21, 23, 26, 27, 29, 30 |
| `script.js` | 3, 9, 16, 17, 24, 25, 28, 30 |
| `sw.js` | 5 |
| `includes/head.php` | 10 |
| `sitemap.xml` | 14 |
| `projetos/*.php` | 13, 30 |
| `setores/*.php` | 13, 30 |
