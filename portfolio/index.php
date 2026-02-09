<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Portfólio de Projetos HVAC | Siqueira e Blanco Engenharia';
$page_description = 'Portfólio de projetos HVAC da Siqueira e Blanco: indústrias farmacêuticas, hotéis, data centers, edifícios comerciais e governamentais. 200+ projetos em 12 estados.';
$og_title         = 'Portfólio | Projetos HVAC - Siqueira e Blanco';
$og_description   = 'Conheça nossos projetos de climatização para indústrias farmacêuticas, hotéis, data centers e edifícios comerciais.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/portfolio/';
$canonical        = 'https://siqueiraeblanco.com.br/portfolio/';
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "Portfólio de Projetos HVAC",
        "description": "Projetos de engenharia HVAC realizados pela Siqueira e Blanco",
        "publisher": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia"
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
          <span aria-current="page">Portfólio</span>
        </nav>
        <span class="section__subtitle">Projetos Realizados</span>
        <h1 class="page-hero__title">Nosso <span class="gradient-text">Portfólio</span></h1>
        <p class="page-hero__subtitle">200+ projetos entregues em 12 estados brasileiros</p>
      </div>
    </section>

    <!-- Stats -->
    <section class="section stats">
      <div class="stats__container container grid">
        <div class="stats__data">
          <span class="stats__number" data-target="200" aria-label="200+">200</span>
          <span class="stats__symbol">+</span>
          <p class="stats__title">Projetos <br> Entregues</p>
        </div>
        <div class="stats__data">
          <span class="stats__number" data-target="50" aria-label="50k">50</span>
          <span class="stats__symbol">k</span>
          <p class="stats__title">TRs <br> Projetados</p>
        </div>
        <div class="stats__data">
          <span class="stats__number" data-target="12" aria-label="12">12</span>
          <p class="stats__title">Estados <br> Atendidos</p>
        </div>
        <div class="stats__data">
          <span class="stats__number" data-target="100" aria-label="100%">100</span>
          <span class="stats__symbol">%</span>
          <p class="stats__title">Conformidade <br> Normativa</p>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="section portfolio">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Projetos Realizados</span>
          <h2 class="section__title">Conheça Nossos <span class="gradient-text">Cases</span></h2>
        </div>

        <!-- Filters -->
        <div id="filter-status" role="status" aria-live="polite" class="sr-only"></div>
        <?php include '../includes/projects-data.php'; ?>
        <div class="portfolio__filters" role="group" aria-label="Filtrar projetos por categoria">
          <button class="filter-btn active" data-filter="all" aria-pressed="true">Todos</button>
          <?php foreach ($categories as $key => $label): ?>
            <button class="filter-btn" data-filter="<?= $key ?>" aria-pressed="false"><?= $label ?></button>
          <?php endforeach; ?>
        </div>

        <!-- Projects Grid -->
        <div class="portfolio__grid">
          <?php
          $base_path = '..';
          foreach ($projects as $project) {
              include '../includes/project-card.php';
          }
          ?>
          
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section cta-section">
      <div class="container">
        <div class="cta-card glass-card fade-in">
          <h2>Quer um projeto como esses?</h2>
          <p>Entre em contato para discutir as necessidades do seu empreendimento.</p>
          <div class="cta-buttons">
            <a href="../contato/" class="btn btn--primary">Solicitar Orçamento</a>
            <a href="../servicos/" class="btn btn--secondary">Conhecer Serviços</a>
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
