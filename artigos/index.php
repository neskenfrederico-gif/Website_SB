<?php
$base             = '..';
$active_page      = 'artigos';
$page_title       = 'Artigos Técnicos sobre HVAC e Climatização | Siqueira e Blanco';
$page_description = 'Artigos técnicos sobre engenharia HVAC: salas limpas, PMOC, BIM na construção civil, retrofit de sistemas e normas ISO 14644. Conteúdo para profissionais.';
$og_title         = 'Artigos Técnicos HVAC | Siqueira e Blanco';
$og_description   = 'Conteúdo técnico sobre climatização industrial, salas limpas e boas práticas de engenharia HVAC.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/artigos/';
$canonical        = 'https://siqueiraeblanco.com.br/artigos/';
$extra_css        = ['artigo.css?v=1770574139'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "CollectionPage",
          "name": "Artigos Técnicos sobre HVAC",
          "description": "Artigos técnicos sobre engenharia HVAC, salas limpas, PMOC e climatização industrial.",
          "url": "https://siqueiraeblanco.com.br/artigos/",
          "publisher": {
            "@type": "Organization",
            "name": "Siqueira e Blanco Engenharia HVAC",
            "url": "https://siqueiraeblanco.com.br/"
          }
        }
        </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Início", "item": "https://siqueiraeblanco.com.br/" },
            { "@type": "ListItem", "position": 2, "name": "Artigos", "item": "https://siqueiraeblanco.com.br/artigos/" }
          ]
        }
        </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

<main id="main-content">
      <section class="page-hero">
        <div class="container">
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../">Início</a>
            <span aria-hidden="true">›</span>
            <span aria-current="page">Artigos</span>
          </nav>
          <span class="section__subtitle">Base de Conhecimento</span>
          <h1 class="page-hero__title">Artigos <span class="gradient-text">Técnicos</span></h1>
          <p class="page-hero__subtitle">Conteúdo sobre engenharia HVAC, normas técnicas, boas práticas e tendências do setor.</p>
        </div>
      </section>

      <section class="section" style="background: var(--color-gray-50);">
        <div class="container">
          <div class="articles-grid">
            
            <!-- Artigo 1 -->
            <a href="o-que-e-pmoc.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg></div>
                <span class="article-card__category">Legislação</span>
                <h2 class="article-card__title">O que é PMOC? Guia Completo sobre a Lei 13.589</h2>
                <p class="article-card__excerpt">Entenda a obrigatoriedade do Plano de Manutenção, Operação e Controle, as multas por descumprimento e como implementar na sua empresa.</p>
                <div class="article-card__meta">
                  <span>8 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 2 -->
            <a href="classificacao-salas-limpas-iso-14644.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg></div>
                <span class="article-card__category">Salas Limpas</span>
                <h2 class="article-card__title">Classificação de Salas Limpas: ISO 14644 Explicada</h2>
                <p class="article-card__excerpt">Classes ISO 5 a 8, contagem de partículas, requisitos de filtragem HEPA/ULPA e como especificar corretamente para sua aplicação.</p>
                <div class="article-card__meta">
                  <span>12 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 3 -->
            <a href="retrofit-hvac-quando-fazer.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg></div>
                <span class="article-card__category">Retrofit</span>
                <h2 class="article-card__title">Retrofit de HVAC: Quando Vale a Pena Modernizar?</h2>
                <p class="article-card__excerpt">Análise de ROI, sinais de que seu sistema precisa de retrofit, e como planejar a modernização sem parar a operação.</p>
                <div class="article-card__meta">
                  <span>10 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 4 -->
            <a href="sistemas-agua-gelada-cag.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                <span class="article-card__category">Sistemas HVAC</span>
                <h2 class="article-card__title">Sistemas de Água Gelada (CAG): Guia Completo</h2>
                <p class="article-card__excerpt">Chillers, torres de resfriamento, bombas e fancoils. Quando usar CAG em grandes instalações industriais e comerciais.</p>
                <div class="article-card__meta">
                  <span>12 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 5 -->
            <a href="sistemas-vrf.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 3v18M15 3v18M3 9h18M3 15h18"/></svg></div>
                <span class="article-card__category">Sistemas HVAC</span>
                <h2 class="article-card__title">Sistemas VRF/VRV: Guia Completo</h2>
                <p class="article-card__excerpt">Como funciona o VRF, vantagens sobre split, quando usar em hotéis e edifícios comerciais.</p>
                <div class="article-card__meta">
                  <span>10 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 6 -->
            <a href="sistemas-split.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="2" y="7" width="20" height="10" rx="2"/><path d="M6 17v2M18 17v2M12 7V5"/></svg></div>
                <span class="article-card__category">Sistemas HVAC</span>
                <h2 class="article-card__title">Sistemas Split: Tipos e Aplicações</h2>
                <p class="article-card__excerpt">Hi-wall, cassete, piso-teto, duto e multi-split. Quando usar cada tipo e dimensionamento básico.</p>
                <div class="article-card__meta">
                  <span>8 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 7 -->
            <a href="climatizacao-data-center.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><circle cx="6" cy="6" r="1"/><circle cx="6" cy="18" r="1"/></svg></div>
                <span class="article-card__category">Data Centers</span>
                <h2 class="article-card__title">Climatização de Data Centers: CRAC, CRAH e In-Row</h2>
                <p class="article-card__excerpt">Sistemas de precisão para TI, contenção de corredores, PUE e redundância Tier III/IV.</p>
                <div class="article-card__meta">
                  <span>14 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 8 -->
            <a href="pressurizacao-escadas.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                <span class="article-card__category">Segurança</span>
                <h2 class="article-card__title">Pressurização de Escadas: IT-18 e Projeto</h2>
                <p class="article-card__excerpt">Requisitos do Corpo de Bombeiros, cálculo de vazão e dimensionamento de sistemas de proteção contra fumaça.</p>
                <div class="article-card__meta">
                  <span>15 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 9 -->
            <a href="ventilacao-industrial.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><circle cx="12" cy="12" r="3"/><path d="M12 1v6M12 17v6M4.22 4.22l4.24 4.24M15.54 15.54l4.24 4.24M1 12h6M17 12h6M4.22 19.78l4.24-4.24M15.54 8.46l4.24-4.24"/></svg></div>
                <span class="article-card__category">Industrial</span>
                <h2 class="article-card__title">Ventilação Industrial: Exaustão e NR-15</h2>
                <p class="article-card__excerpt">Captação de poluentes, exaustão localizada, velocidades de captura e conformidade normativa.</p>
                <div class="article-card__meta">
                  <span>12 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 10 -->
            <a href="bim-hvac-projetos.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg></div>
                <span class="article-card__category">Tecnologia</span>
                <h2 class="article-card__title">BIM para HVAC: LOD, Clash Detection e Revit</h2>
                <p class="article-card__excerpt">Modelagem 3D paramétrica, níveis de desenvolvimento e coordenação de projetos multidisciplinares.</p>
                <div class="article-card__meta">
                  <span>12 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

            <!-- Artigo 11 -->
            <a href="calculo-carga-termica.php" class="article-card">
              <div class="article-card__content">
                <div class="article-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg></div>
                <span class="article-card__category">Engenharia</span>
                <h2 class="article-card__title">Cálculo de Carga Térmica: HAP e ASHRAE</h2>
                <p class="article-card__excerpt">Fundamentos de cálculo, softwares de simulação e dimensionamento de sistemas de ar-condicionado.</p>
                <div class="article-card__meta">
                  <span>15 min de leitura</span>
                  <span>Fev 2026</span>
                </div>
              </div>
            </a>

          </div>
        </div>
      </section>

      <!-- Projetos em Destaque -->
      <section class="section" style="background: var(--color-white);">
        <div class="container">
          <div class="section__header">
            <span class="section__subtitle">Aplicação Prática</span>
            <h2 class="section__title">Projetos <span class="gradient-text">Relacionados</span></h2>
          </div>
          <p style="color: var(--text-muted); text-align: center; max-width: 700px; margin: 0 auto 2rem;">
            Veja como aplicamos esses conceitos em projetos reais para indústrias farmacêuticas, data centers e grandes empreendimentos.
          </p>
          <div class="articles-grid">
            <a href="../projetos/projeto-geolab-siteii.php" class="article-card">
              <div class="article-card__content" style="padding-top: 1.5rem;">
                <span class="article-card__category">Farmacêutico</span>
                <h3 class="article-card__title">Geolab Site II — Salas Limpas ISO 7/8</h3>
                <p class="article-card__excerpt">8.000 m² de área classificada, 900 TR de capacidade, produção de colírios com controle rigoroso de partículas.</p>
                <div class="article-card__meta">
                  <span>Anápolis - GO</span>
                  <span>Ver projeto →</span>
                </div>
              </div>
            </a>
            <a href="../projetos/projeto-bancodobrasil.php" class="article-card">
              <div class="article-card__content" style="padding-top: 1.5rem;">
                <span class="article-card__category">Retrofit</span>
                <h3 class="article-card__title">Banco do Brasil — Sedes SBS Brasília</h3>
                <p class="article-card__excerpt">Retrofit das 3 sedes com 96.135 m² e 4.350 TR, chillers parafuso e centrífugo, automação Siemens/Trane.</p>
                <div class="article-card__meta">
                  <span>Brasília - DF</span>
                  <span>Ver projeto →</span>
                </div>
              </div>
            </a>
            <a href="../projetos/projeto-injetaveis.php" class="article-card">
              <div class="article-card__content" style="padding-top: 1.5rem;">
                <span class="article-card__category">Salas Limpas</span>
                <h3 class="article-card__title">Brainfarma — Prédio de Injetáveis</h3>
                <p class="article-card__excerpt">Salas limpas Grau A/B para produção de injetáveis, filtragem absoluta e cascata de pressão.</p>
                <div class="article-card__meta">
                  <span>Anápolis - GO</span>
                  <span>Ver projeto →</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>

      <!-- CTA -->
      <section class="section" style="background: var(--color-gray-50);">
        <div class="container" style="text-align: center;">
          <h2 class="section__title">Precisa de ajuda com seu <span class="gradient-text">projeto HVAC</span>?</h2>
          <p style="color: var(--text-muted); max-width: 600px; margin: 1rem auto 2rem;">
            Nossa equipe está pronta para analisar seu projeto e propor a melhor solução técnica.
          </p>
          <a href="../contato/" class="btn btn--primary">Solicitar Orçamento</a>
        </div>
      </section>
    </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/whatsapp-float.php'; ?>
    <?php include '../includes/scripts.php'; ?>
  </body>
</html>
