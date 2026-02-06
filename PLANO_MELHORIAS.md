# Plano de Melhorias - Website Siqueira e Blanco

## 📊 Análise Geral

**Qualidade atual:** 8/10 - Site bem construído com boa base técnica.

### ✅ Pontos Fortes
- SEO avançado (JSON-LD, Open Graph, meta tags)
- Acessibilidade sólida (skip-link, ARIA, focus-visible)
- Performance (lazy loading, content-visibility, reduced-motion)
- Design responsivo bem implementado
- UX moderna (WhatsApp float, toast notifications, FAQ accordion)

---

## 🔧 Melhorias a Implementar

### 1. Performance (Alta Prioridade)

| Item | Problema | Solução |
|------|----------|---------|
| Font Loading | Carregamento não otimizado | Adicionar `font-display: swap` inline |
| Observers | 3 IntersectionObservers separados | Consolidar em 1 observer unificado |
| CSS Variables | Variáveis não utilizadas | Remover variáveis órfãs |
| Image preload | Apenas hero preloaded | Adicionar preload do logo |

### 2. SEO (Média Prioridade)

| Item | Problema | Solução |
|------|----------|---------|
| Alt text portfolio | Genérico | Alt descritivo por projeto |
| Sitemap | Ausente | Gerar sitemap.xml |
| Robots.txt | Ausente | Criar robots.txt |

### 3. Acessibilidade (Média Prioridade)

| Item | Problema | Solução |
|------|----------|---------|
| Contraste norms | Texto pequeno claro em fundo escuro | Aumentar opacidade/tamanho |
| Form labels | Pouco descritivos | Labels mais específicos |
| Spotlight | Rotação não anunciada | Adicionar live region |
| Phone mask | Não suporta fixo (8 dígitos) | Ajustar regex |

### 4. Bugs/Correções (Alta Prioridade)

| Item | Problema | Solução |
|------|----------|---------|
| Footer logo | `filter: invert` quebra logo colorido | Usar versão branca do logo |
| CSS selector | `.spotlight-section` inexistente | Corrigir para `.spotlight` |
| Hero slider | Não respeita reduced-motion no init | Adicionar check |
| z-index | Valores inconsistentes | Padronizar escala |

### 5. Código Limpo (Baixa Prioridade)

| Item | Problema | Solução |
|------|----------|---------|
| Form validation | Duplicada em 2 arquivos | Unificar em 1 |
| CSS duplicado | Media queries repetidas | Consolidar |
| JS comments | Inconsistentes | Padronizar JSDoc |

---

## 📁 Arquivos a Criar

1. `sitemap.xml` - Mapa do site para SEO
2. `robots.txt` - Diretivas para crawlers
3. `Logomarca-white.png` - Logo branco para footer (ou usar filter correto)

---

## 📋 Ordem de Execução

1. ✅ **Correções críticas** (bugs, CSS quebrado)
2. ⏳ **Performance** (observers, fonts)
3. ⏳ **SEO** (sitemap, robots, alt text)
4. ⏳ **Acessibilidade** (contraste, labels)
5. ⏳ **Refatoração** (código limpo)

---

## 🚀 Implementando Agora...
