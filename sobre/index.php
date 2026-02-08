<?php
$base             = '..';
$active_page      = 'sobre';
$page_title       = 'Sobre a Siqueira e Blanco | Engenharia HVAC de Alta Complexidade';
$page_description = 'Conheça a Siqueira e Blanco: engenharia HVAC de alta complexidade com 15+ anos de experiência, 200+ projetos e atuação em 12 estados. Equipe multidisciplinar especializada em ambientes críticos.';
$og_title         = 'Sobre a Siqueira e Blanco | Engenharia HVAC de Alta Complexidade';
$og_description   = '15+ anos de experiência em projetos HVAC para indústrias farmacêuticas, data centers e ambientes críticos. Conheça nossa história e diferenciais.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/sobre/';
$canonical        = 'https://siqueiraeblanco.com.br/sobre/';
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "AboutPage",
        "name": "Sobre a Siqueira e Blanco",
        "description": "Engenharia HVAC de alta complexidade com 15+ anos de experiência",
        "mainEntity": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia",
          "description": "Empresa de engenharia especializada em sistemas HVAC para ambientes críticos e operações de alta exigência",
          "foundingDate": "2009",
          "numberOfEmployees": {
            "@type": "QuantitativeValue",
            "value": "15"
          },
          "areaServed": {
            "@type": "Country",
            "name": "BR"
          },
          "knowsAbout": ["HVAC", "Climatização Industrial", "Salas Limpas", "BIM", "Comissionamento", "PMOC", "Data Centers", "Indústria Farmacêutica"]
        }
      }
      </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

<main id="main-content">
    <!-- Page Hero -->
    <section class="page-hero">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Sobre</span>
        </nav>
        <span class="section__subtitle">A Empresa</span>
        <h1 class="page-hero__title">Quem <span class="gradient-text">Somos</span></h1>
        <p class="page-hero__subtitle">Engenharia HVAC de alta complexidade para ambientes críticos</p>
      </div>
    </section>

    <!-- História e Missão -->
    <section class="section">
      <div class="container">
        <div class="content-grid content-grid--2col">
          <div class="content-block fade-in">
            <span class="section__subtitle">Nossa História</span>
            <h2 class="section__title">15+ Anos de <span class="gradient-text">Excelência Técnica</span></h2>
            <p>A <strong>Siqueira e Blanco</strong> nasceu da visão de entregar engenharia HVAC com o rigor técnico que projetos complexos exigem. Desde 2009, atuamos no segmento de alta complexidade — indústrias farmacêuticas, áreas limpas, data centers e grandes empreendimentos.</p>
            <p>Com base em <strong>Anápolis (GO)</strong> e atuação em todo o Brasil, construímos uma reputação baseada em três pilares: conformidade normativa absoluta, previsibilidade de obra e relacionamento técnico de longo prazo com nossos clientes.</p>
            <p>Hoje, com mais de <strong>200 projetos entregues</strong> em <strong>12 estados brasileiros</strong>, somos referência em engenharia de climatização para ambientes que não toleram erro.</p>
          </div>
          <div class="content-block fade-in">
            <div class="stats-card glass-card">
              <div class="stats-card__item">
                <span class="stats-card__number">200+</span>
                <span class="stats-card__label">Projetos Entregues</span>
              </div>
              <div class="stats-card__item">
                <span class="stats-card__number">50k+</span>
                <span class="stats-card__label">TRs Projetados</span>
              </div>
              <div class="stats-card__item">
                <span class="stats-card__number">12</span>
                <span class="stats-card__label">Estados Atendidos</span>
              </div>
              <div class="stats-card__item">
                <span class="stats-card__number">15+</span>
                <span class="stats-card__label">Anos de Experiência</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Missão, Visão, Valores -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Nosso Propósito</span>
          <h2 class="section__title">Missão, Visão e <span class="gradient-text">Valores</span></h2>
        </div>
        <div class="pillars-grid">
          <div class="pillar-card glass-card fade-in">
            <div class="pillar-card__icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <path d="M12 16v-4"></path>
                <path d="M12 8h.01"></path>
              </svg>
            </div>
            <h3 class="pillar-card__title">Missão</h3>
            <p>Entregar engenharia HVAC de alta complexidade com excelência técnica, garantindo ambientes seguros, eficientes e em conformidade normativa para nossos clientes.</p>
          </div>
          <div class="pillar-card glass-card fade-in">
            <div class="pillar-card__icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
            </div>
            <h3 class="pillar-card__title">Visão</h3>
            <p>Ser a referência nacional em engenharia HVAC para ambientes críticos, reconhecida pela inovação técnica, confiabilidade e compromisso com resultados.</p>
          </div>
          <div class="pillar-card glass-card fade-in">
            <div class="pillar-card__icon">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                <path d="M2 17l10 5 10-5"></path>
                <path d="M2 12l10 5 10-5"></path>
              </svg>
            </div>
            <h3 class="pillar-card__title">Valores</h3>
            <ul class="values-list">
              <li><strong>Rigor Técnico</strong> — Conformidade normativa sem concessões</li>
              <li><strong>Transparência</strong> — Comunicação clara e honesta</li>
              <li><strong>Inovação</strong> — Tecnologia BIM e melhoria contínua</li>
              <li><strong>Compromisso</strong> — Prazos e resultados respeitados</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Diferenciais -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Por Que Nos Escolher</span>
          <h2 class="section__title">Nossos <span class="gradient-text">Diferenciais</span></h2>
        </div>
        <div class="features-grid">
          <div class="feature-card fade-in">
            <div class="feature-card__icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                <line x1="8" y1="21" x2="16" y2="21"></line>
                <line x1="12" y1="17" x2="12" y2="21"></line>
              </svg>
            </div>
            <h3>Modelagem BIM LOD 400</h3>
            <p>Projetos executivos com detalhamento para fabricação. Clash Detection elimina conflitos antes da obra, reduzindo retrabalhos e custos.</p>
          </div>
          <div class="feature-card fade-in">
            <div class="feature-card__icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <h3>Conformidade Normativa</h3>
            <p>Aderência rigorosa a ASHRAE, NBR 16401, SMACNA, ISO 14644 e requisitos ANVISA. Projetos preparados para auditorias e certificações.</p>
          </div>
          <div class="feature-card fade-in">
            <div class="feature-card__icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
              </svg>
            </div>
            <h3>Equipe Multidisciplinar</h3>
            <p>Engenheiros mecânicos, projetistas BIM e especialistas em automação trabalhando de forma integrada em cada projeto.</p>
          </div>
          <div class="feature-card fade-in">
            <div class="feature-card__icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
            </div>
            <h3>Experiência de Campo</h3>
            <p>Conhecimento prático de obra traduzido em projetos executáveis. Menos improvisações, menos surpresas, mais previsibilidade.</p>
          </div>
          <div class="feature-card fade-in">
            <div class="feature-card__icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
              </svg>
            </div>
            <h3>Atendimento Nacional</h3>
            <p>Projetos executivos e consultoria para todo o Brasil. Visitas técnicas programadas para acompanhamento de obra.</p>
          </div>
          <div class="feature-card fade-in">
            <div class="feature-card__icon">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="12" y1="1" x2="12" y2="23"></line>
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
              </svg>
            </div>
            <h3>ROI Comprovado</h3>
            <p>Projetos focados em eficiência energética com payback calculado. Retrofit de sistemas com economia de até 40% em energia.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Arsenal Tecnológico -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Arsenal Tecnológico</span>
          <h2 class="section__title">Ferramentas de <span class="gradient-text">Precisão</span></h2>
        </div>
        <div class="tech-showcase">
          <div class="tech-category fade-in">
            <h3>Softwares de Projeto</h3>
            <div class="tech-pills">
              <span class="tech-pill">Revit MEP</span>
              <span class="tech-pill">AutoCAD</span>
              <span class="tech-pill">Navisworks</span>
              <span class="tech-pill">HAP (Carrier)</span>
              <span class="tech-pill">Trace 700</span>
              <span class="tech-pill">EnergyPlus</span>
            </div>
          </div>
          <div class="tech-category fade-in">
            <h3>Normas e Referências</h3>
            <div class="tech-pills">
              <span class="tech-pill">ASHRAE 90.1</span>
              <span class="tech-pill">NBR 16401</span>
              <span class="tech-pill">SMACNA</span>
              <span class="tech-pill">ISO 14644</span>
              <span class="tech-pill">ANVISA RDC</span>
              <span class="tech-pill">NR-10 / NR-12</span>
            </div>
          </div>
          <div class="tech-category fade-in">
            <h3>Metodologias</h3>
            <div class="tech-pills">
              <span class="tech-pill">BIM LOD 350/400</span>
              <span class="tech-pill">Clash Detection</span>
              <span class="tech-pill">Simulação CFD</span>
              <span class="tech-pill">Comissionamento (Cx)</span>
              <span class="tech-pill">TAB</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section cta-section">
      <div class="container">
        <div class="cta-card glass-card fade-in">
          <h2>Pronto para começar seu projeto?</h2>
          <p>Entre em contato para discutir suas necessidades de engenharia HVAC.</p>
          <div class="cta-buttons">
            <a href="../contato/" class="btn btn--primary">Solicitar Orçamento</a>
            <a href="../portfolio/" class="btn btn--secondary">Ver Portfólio</a>
          </div>
        </div>
      </div>
    </section>
  </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/whatsapp-float.php'; ?>
    <?php include '../includes/scripts.php'; ?>
  </body>
</html>
