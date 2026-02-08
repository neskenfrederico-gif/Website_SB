<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Savoy - Ventilação Mecânica Aerossóis | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Sistema de ventilação mecânica com renovação de ar e 100% de exaustão para área de envase de aerossóis da Savoy em Senador Canedo-GO, com rede de dutos girotubo e acabamento em pintura eletrostática.';
$og_title         = $page_title;
$og_description   = 'Ventilação mecânica com renovação e exaustão total para aceite de área qualificada (Senador Canedo-GO).';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-savoy.php';
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
        "name": "Savoy - Ventilação Mecânica para Envase de Aerossóis",
        "description": "Sistema de ventilação mecânica com renovação de ar e 100% de exaustão na área de envase de aerossóis, para aceite de área qualificada, com rede de dutos girotubo em pintura eletrostática.",
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
          "name": "Savoy Indústria de Cosméticos"
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
    { "@type": "ListItem", "position": 3, "name": "Savoy Ventilação", "item": "https://siqueiraeblanco.com.br/projetos/projeto-savoy.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-13.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Savoy — Ventilação Mecânica Aerossóis</span>
        </nav>
        <span class="section__subtitle">Industrial</span>
        <h1 class="page-hero__title">Savoy — <span class="gradient-text">Ventilação Mecânica Aerossóis</span></h1>
        <p class="page-hero__subtitle">Cliente: Savoy Indústria de Cosméticos | Local: Senador Canedo-GO | Ventilação mecânica e exaustão de processo</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área atendida</span>
            <span class="project-spec__value">953 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Vazão de HVAC</span>
            <span class="project-spec__value">110.000 m³/h</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema adotado</span>
            <span class="project-spec__value">Ventilação e exaustão 100%</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Equipamentos</span>
            <span class="project-spec__value">03 ventiladores + 03 exaustores</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Rede de dutos</span>
            <span class="project-spec__value">Girotubo • pintura branca</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Ano</span>
            <span class="project-spec__value">2021</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          A área de envase de aerossóis impõe requisitos específicos de segurança e controle ambiental, devido à presença de
          solventes e partículas em suspensão. O objetivo deste projeto foi implementar um sistema de ventilação mecânica capaz
          de garantir renovação de ar adequada e exaustão total, sustentando condições para aceite de área qualificada.
        </p>
        <p>
          A solução adotou um arranjo dedicado de ventiladores e exaustores, com distribuição por rede de dutos dimensionada
          para a vazão global requerida. A implantação privilegiou acessibilidade para manutenção, controle de perdas de carga
          e confiabilidade operacional, essenciais em linhas de produção contínuas.
        </p>
        <p>
          Como diferencial construtivo, foi executada rede de dutos girotubo com pintura eletrostática branca, resultando em
          acabamento uniforme, durabilidade e padronização visual compatível com ambientes industriais controlados.
        </p>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Nossa equipe atua com projetos e implantação de ventilação industrial, exaustão e tratamento de ar, incluindo
              redes de dutos e soluções para processos críticos.';
$form_origin     = 'Projeto: Savoy - Ventilação Mecânica Aerossóis';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-ontex.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Active Ontex — Controle de IBUTG</div>
            <div class="related-card__meta">Alta vazão • automação Siemens</div>
          </a>
          <a class="related-card glass-card" href="projeto-louisdreyfus.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Louis Dreyfus — Enclausuramento Envase</div>
            <div class="related-card__meta">HVAC e ventilação • dutos TDC</div>
          </a>
          <a class="related-card glass-card" href="projeto-hypera.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Hypera — CD Autoportante</div>
            <div class="related-card__meta">VRF • zoneamento • automação</div>
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
