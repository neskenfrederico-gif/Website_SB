<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Hypermarcas - CD Ar-Condicionado | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Sistema de HVAC para centro de distribuição (CD) da Hypermarcas em Anápolis-GO: expansão direta com splitões, 500 TR, alta vazão e automação completa Schneider.';
$og_title         = $page_title;
$og_description   = 'Projeto de climatização para CD com 20.000 m², 500 TR e automação Schneider (Anápolis-GO).';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-hypermarcas.php';
$canonical        = $og_url;
$extra_css        = ['projeto.css?v=1770600000'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "CreativeWork",
        "name": "Hypermarcas - CD Ar-Condicionado (HVAC)",
        "description": "Sistema de HVAC para centro de distribuição com expansão direta (splitões) e automação completa Schneider.",
        "location": "Anápolis - GO, Brasil",
        "areaServed": "BR",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Hypermarcas S.A"
        }
      }
    </script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Início", "item": "https://siqueiraeblanco.com.br/" },
    { "@type": "ListItem", "position": 2, "name": "Portfólio", "item": "https://siqueiraeblanco.com.br/#portfolio" },
    { "@type": "ListItem", "position": 3, "name": "Hypermarcas CD", "item": "https://siqueiraeblanco.com.br/projetos/projeto-hypermarcas.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-15.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Hypermarcas — CD Ar-Condicionado</span>
        </nav>
        <span class="section__subtitle">Industrial</span>
        <h1 class="page-hero__title">Hypermarcas — <span class="gradient-text">CD Ar-Condicionado</span></h1>
        <p class="page-hero__subtitle">Cliente: Hypermarcas S.A | Local: Anápolis-GO | Área: 20.000 m²</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área atendida</span>
            <span class="project-spec__value">20.000 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Capacidade</span>
            <span class="project-spec__value">500 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Vazão de HVAC</span>
            <span class="project-spec__value">340.000 m³/h</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema adotado</span>
            <span class="project-spec__value">Expansão direta (Splitão)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Automação</span>
            <span class="project-spec__value">Sistema completo Schneider</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Ano</span>
            <span class="project-spec__value">2015</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          Centros de distribuição exigem climatização com grande capacidade de movimentação de ar e estabilidade operacional,
          garantindo conforto para as equipes, preservação de materiais e condições adequadas nas áreas de separação e expedição.
          Neste projeto, a premissa foi atender uma área extensa com robustez e previsibilidade de operação.
        </p>
        <p>
          O sistema adotado foi de expansão direta, com 10 condicionadores de ar tipo splitão distribuídos para atender a carga
          térmica e a necessidade de alta vazão. A solução priorizou modularidade e manutenção, reduzindo impactos em caso de
          paradas pontuais e permitindo ajustes por zona.
        </p>
        <p>
          A automação Schneider foi implementada de forma completa, integrando controles e rotinas de operação para otimização
          energética, alarmes e supervisão do desempenho do sistema.
        </p>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Atuamos com soluções de HVAC e ventilação para logística, indústria e grandes áreas, com foco em confiabilidade e
              automação.';
$form_origin     = 'Projeto: Hypermarcas - CD Ar-Condicionado';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-hypera.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Hypera — CD Autoportante</div>
            <div class="related-card__meta">VRF • automação Siemens • zoneamento</div>
          </a>
          <a class="related-card glass-card" href="projeto-ontex.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Active Ontex — Controle de IBUTG</div>
            <div class="related-card__meta">CAG • alta vazão • supervisão Siemens</div>
          </a>
          <a class="related-card glass-card" href="projeto-louisdreyfus.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Louis Dreyfus — Enclausuramento Envase</div>
            <div class="related-card__meta">Expansão direta • dutos TDC</div>
          </a>
        </div>
      </div>
    </section>

    </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/whatsapp-float.php'; ?>
    <?php
    $extra_scripts = ['../form-validate.js?v=1769798735'];
    include '../includes/scripts.php';
    ?>
  </body>
</html>
