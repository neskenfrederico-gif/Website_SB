# Refinamento Completo do Website Siqueira e Blanco

**Data:** 2026-03-10
**Escopo:** Análise e correção de 35 problemas (5 críticos, 15 importantes, 15 melhorias)
**Abordagem:** Incremental por prioridade (3 ondas, 1 commit por onda)

---

## Onda 1: Críticos (5 itens)

### C1. Remover AggregateRating fabricado
- **Arquivo:** `index.php` (~linhas 90-97)
- **Ação:** Remover bloco `AggregateRating` do JSON-LD LocalBusiness
- **Risco:** Google pode penalizar rich snippets com ratings não verificáveis

### C2. Corrigir honeypot de acessibilidade
- **Arquivo:** `index.php` (~linhas 1477-1480)
- **Ação:** Adicionar `aria-hidden="true"` no `<input>` e `<label>` do campo honeypot

### C3. Sanitizar innerHTML no spotlight
- **Arquivo:** `script.js` (~linhas 1228-1229)
- **Ação:** Criar helper de sanitização para `titleEl.innerHTML` e `descEl.innerHTML`

### C4. Corrigir preload duplo
- **Arquivo:** `index.php` (~linhas 53-55)
- **Ação:** Remover preload do JPG fallback e do Logomarca.png redundante

### C5. Alinhar cache do Service Worker
- **Arquivo:** `sw.js` (~linhas 6-11)
- **Ação:** Alinhar URLs do PRECACHE_ASSETS com as referências do HTML

---

## Onda 2: Importantes (15 itens)

| # | Problema | Arquivo | Ação |
|---|----------|---------|------|
| I1 | CSS duplicado `.team-stat__*` | `styles.css` | Unificar declarações |
| I2 | Slides inativos sem `aria-hidden` | `script.js` | Adicionar toggle de `aria-hidden` |
| I3 | `aria-label` duplicado no nav | `index.php` | Remover do div interno |
| I4 | Dropdown inacessível por teclado | `script.js`+`styles.css` | Adicionar toggle por botão |
| I5 | `<h4>` dentro de `<button>` | `index.php` | Trocar por `<span>` |
| I6 | Mesmo endpoint Formspree | `index.php` | Documentar ou separar |
| I7 | `<picture>` inútil no spotlight | `script.js` | Corrigir srcset/src |
| I8 | Notificações ignoram reduced-motion | `script.js` | Adicionar media query check |
| I9 | Twitter meta tags ausentes | `includes/head.php` | Adicionar twitter:title/desc/image |
| I10 | `og:type` genérico em sub-páginas | Sub-páginas PHP | Usar `article` ou `service` |
| I11 | OG image genérica | Sub-páginas PHP | Usar imagem específica |
| I12 | `!important` no portfolio | `styles.css` | Resolver por especificidade |
| I13 | CSS morto (~300+ linhas) | `styles.css` | Identificar e remover |
| I14 | Imagens sem width/height | `index.php` | Adicionar dimensões |
| I15 | Sitemap com lastmod estático | `sitemap.xml` | Atualizar datas |

---

## Onda 3: Melhorias (15 itens)

| # | Melhoria | Arquivo | Ação |
|---|----------|---------|------|
| M1 | `aria-label` nos depoimentos | `index.php` | Adicionar labels descritivos |
| M2 | Botão "Ver mais" morto | `script.js`/`index.php` | Implementar ou remover |
| M3 | Contadores não centralizados | `script.js` | Centralizar dados |
| M4 | `0.65rem` hard-coded | `styles.css` | Usar variável CSS |
| M5 | Emojis sem acessibilidade | `index.php` | Adicionar `role="img"` |
| M6 | Classe `mobile-only` indefinida | `styles.css`/`index.php` | Definir ou remover |
| M7 | `getPageSize()` chamada antes de definir | `script.js` | Reordenar |
| M8 | Null check no FAQ | `script.js` | Adicionar verificação |
| M9 | Counter CSS com "0" prefix | `styles.css` | Usar `decimal-leading-zero` |
| M10 | URLs inconsistentes no sitemap | `sitemap.xml` | Padronizar |
| M11 | `/docs/` não bloqueado no robots | `robots.txt` | Avaliar e bloquear se necessário |
| M12 | Schema.org genérico em projetos | Sub-páginas PHP | Usar tipo mais específico |
| M13 | Nav scroll sem "Artigos" | `script.js` | Mapear seção |
| M14 | CSS morto `.scroll-indicator` | `styles.css` | Remover |
| M15 | Cores WhatsApp hard-coded | `styles.css` | Usar variáveis CSS |

---

## Notas de implementação
- Cada onda gera 1 commit com prefixo conventional commits
- Atualizar cache-bust `?v=` em todos os 21+ HTML/PHP após mudanças em CSS/JS
- Testar responsividade após cada onda
