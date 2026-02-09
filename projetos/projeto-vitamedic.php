<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Vitamedic - CD Logístico | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Sistema de HVAC para CD logístico da Vitamedic Indústria Farmacêutica: expansão direta com splitões, 250 TR, rede de dutos em MPU e automação Siemens.';
$og_title         = $page_title;
$og_description   = 'Projeto de climatização para CD logístico com 7.000 m², 250 TR e automação Siemens.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-vitamedic.php';
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
        "name": "Vitamedic - CD Logístico (HVAC)",
        "description": "Sistema de HVAC para centro de distribuição logístico com expansão direta (splitões), rede de dutos em MPU e automação Siemens.",
        "areaServed": "BR",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Vitamedic Indústria Farmacêutica"
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
    { "@type": "ListItem", "position": 3, "name": "Vitamedic CD", "item": "https://siqueiraeblanco.com.br/projetos/projeto-vitamedic.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-17.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Vitamedic — CD Logístico</span>
        </nav>
        <span class="section__subtitle">Logístico</span>
        <h1 class="page-hero__title">Vitamedic — <span class="gradient-text">CD Logístico</span></h1>
        <p class="page-hero__subtitle">Cliente: Vitamedic Indústria Farmacêutica | Área: 7.000 m²</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área atendida</span>
            <span class="project-spec__value">7.000 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Capacidade</span>
            <span class="project-spec__value">250 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema adotado</span>
            <span class="project-spec__value">Expansão direta (Splitão)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Dutos</span>
            <span class="project-spec__value">Rede em MPU</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Automação</span>
            <span class="project-spec__value">Siemens</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O centro de distribuição logístico da Vitamedic Indústria Farmacêutica demandou um sistema de climatização robusto
          para garantir as condições ambientais adequadas ao armazenamento e movimentação de produtos farmacêuticos.
        </p>
        <p>
          O sistema adotado foi de expansão direta, utilizando condicionadores tipo splitão para atender a carga térmica de 250 TR
          distribuída nos 7.000 m² do CD. A rede de dutos foi executada em MPU (poliuretano metalizado), garantindo isolamento
          térmico eficiente e durabilidade.
        </p>
        <p>
          A automação Siemens integra o controle do sistema, com supervisão de temperatura, alarmes e otimização energética
          para operação contínua e confiável.
        </p>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Atuamos com soluções de HVAC e ventilação para logística, indústria e grandes áreas, com foco em confiabilidade e automação.';
$form_origin     = 'Projeto: Vitamedic - CD Logístico';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-hypermarcas.php">
            <span class="related-card__badge">Logístico</span>
            <div class="related-card__title">Hypermarcas — CD Ar-Condicionado</div>
            <div class="related-card__meta">Splitão • automação Schneider • alta vazão</div>
          </a>
          <a class="related-card glass-card" href="projeto-hypera.php">
            <span class="related-card__badge">Logístico</span>
            <div class="related-card__title">Hypera — CD Autoportante</div>
            <div class="related-card__meta">VRF • automação Siemens • zoneamento</div>
          </a>
          <a class="related-card glass-card" href="projeto-ontex.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Active Ontex — Controle de IBUTG</div>
            <div class="related-card__meta">CAG • alta vazão • supervisão Siemens</div>
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