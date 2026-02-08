<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Active Ontex - Controle de IBUTG | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Sistema HVAC para área de produção industrial da Active Ontex em Senador Canedo-GO, com controle de IBUTG, alta vazão (710.000 m³/h), expansão indireta e automação Siemens.';
$og_title         = $page_title;
$og_description   = 'HVAC industrial com controle de IBUTG para conforto térmico e segurança dos trabalhadores, com automação Siemens (Senador Canedo-GO).';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-ontex.php';
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
        "name": "Active Ontex - Controle de IBUTG (HVAC Industrial)",
        "description": "Sistema HVAC para área de produção de fraldas descartáveis com controle de IBUTG, alta vazão de ar e automação completa Siemens.",
        "location": "Senador Canedo - GO, Brasil",
        "areaServed": "BR",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Active Ontex S.A"
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
    { "@type": "ListItem", "position": 3, "name": "Active Ontex", "item": "https://siqueiraeblanco.com.br/projetos/projeto-ontex.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-10.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Active Ontex — Controle de IBUTG</span>
        </nav>
        <span class="section__subtitle">Industrial</span>
        <h1 class="page-hero__title">Active Ontex — <span class="gradient-text">Controle de IBUTG</span></h1>
        <p class="page-hero__subtitle">Cliente: Active Ontex S.A | Local: Senador Canedo-GO | HVAC industrial com controle de IBUTG</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área atendida</span>
            <span class="project-spec__value">15.600 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Capacidade</span>
            <span class="project-spec__value">1.050 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Vazão total</span>
            <span class="project-spec__value">710.000 m³/h</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema adotado</span>
            <span class="project-spec__value">Expansão indireta (CAG)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Automação</span>
            <span class="project-spec__value">Sistema completo Siemens</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Ano</span>
            <span class="project-spec__value">2018/2019</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O projeto da Active Ontex demandou uma solução de climatização e ventilação em escala industrial para uma planta de
          produção de fraldas descartáveis. Além das cargas térmicas elevadas e da necessidade de grandes vazões de ar,
          o objetivo central era garantir condições de conforto térmico e segurança dos trabalhadores por meio do
          controle de IBUTG (Índice de Bulbo Úmido Termômetro de Globo).
        </p>
        <p>
          A implantação utilizou expansão indireta com resfriadores de líquidos de condensação a ar, motobombas centrífugas,
          FAN COILs para climatização e resfriadores evaporativos como suporte de controle térmico e eficiência. O sistema foi
          concebido para atender variações de carga típicas de processos industriais, com estratégias de controle e operação
          que favorecem estabilidade e economia energética.
        </p>
        <p>
          A automação Siemens foi aplicada de forma completa, integrando setpoints, alarmes, intertravamentos e supervisão do
          sistema, aumentando a confiabilidade e a capacidade de resposta operacional.
        </p>
        <p><strong>Principais componentes:</strong> 03 resfriadores de líquidos (condensação a ar), 04 motobombas centrífugas, 10 climatizadores FAN COIL e 14 resfriadores evaporativos.</p>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Projetamos e implantamos soluções de HVAC e ventilação industrial para conforto térmico, controle de processo,
              exaustão e automação de sistemas.';
$form_origin     = 'Projeto: Active Ontex - Controle de IBUTG';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-savoy.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Savoy — Ventilação Mecânica Aerossóis</div>
            <div class="related-card__meta">Renovação e exaustão 100% • área qualificada</div>
          </a>
          <a class="related-card glass-card" href="projeto-hypermarcas.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Hypermarcas — CD Ar-Condicionado</div>
            <div class="related-card__meta">Centro de distribuição • automação Schneider</div>
          </a>
          <a class="related-card glass-card" href="projeto-hypera.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Hypera — CD Autoportante</div>
            <div class="related-card__meta">VRF • automação Siemens • zoneamento</div>
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
