<?php
$base             = '..';
$active_page      = 'setores';
$page_title       = 'Setores de Atuação | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Setores de atuação da Siqueira e Blanco: HVAC para indústria farmacêutica, data centers, corporativo, industrial, pressurização de escadas e ventilação de pós de metais.';
$og_title         = 'Setores de Atuação | Siqueira e Blanco Engenharia HVAC';
$og_description   = 'Expertise em climatização para farmacêutico, data centers, corporativo, industrial, pressurização e pós de metais.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/setores/';
$canonical        = $og_url;
$extra_css        = [];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Início", "item": "https://siqueiraeblanco.com.br/" },
    { "@type": "ListItem", "position": 2, "name": "Setores", "item": "https://siqueiraeblanco.com.br/setores/" }
  ]
}
    </script>
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "Setores de Atuação — Siqueira e Blanco",
    "description": "Setores atendidos pela Siqueira e Blanco Engenharia HVAC.",
    "url": "https://siqueiraeblanco.com.br/setores/",
    "mainEntity": {
      "@type": "ItemList",
      "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Hospitalar & Farmacêutico", "url": "https://siqueiraeblanco.com.br/setores/farmaceutico.php" },
        { "@type": "ListItem", "position": 2, "name": "Data Centers", "url": "https://siqueiraeblanco.com.br/setores/datacenter.php" },
        { "@type": "ListItem", "position": 3, "name": "Corporativo", "url": "https://siqueiraeblanco.com.br/setores/corporativo.php" },
        { "@type": "ListItem", "position": 4, "name": "Industrial", "url": "https://siqueiraeblanco.com.br/setores/industrial.php" },
        { "@type": "ListItem", "position": 5, "name": "Pressurização de Escadas", "url": "https://siqueiraeblanco.com.br/setores/pressurizacao.php" },
        { "@type": "ListItem", "position": 6, "name": "Ventilação Pós de Metais", "url": "https://siqueiraeblanco.com.br/setores/pos-metais.php" }
      ]
    }
  }
  </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<!-- Hero -->
    <section class="page-hero">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Setores</span>
        </nav>
        <span class="section__subtitle">Expertise de Mercado</span>
        <h1 class="page-hero__title">Setores de <span class="gradient-text">Atuação</span></h1>
        <p class="page-hero__subtitle">Soluções de engenharia HVAC especializadas para os segmentos mais exigentes do mercado.</p>
      </div>
    </section>

    <!-- Sectors Grid -->
    <section class="section sectors" id="setores">
      <div class="container">
        <div class="sectors__grid">
          <a class="sector-card sector-card--link fade-in" href="farmaceutico.php" aria-label="Abrir setor Hospitalar & Farmacêutico">
            <div class="sector-card__icon" aria-hidden="true">🏥</div>
            <h3>Hospitalar & Farmacêutico</h3>
            <p>Salas limpas, controle de cascata de pressão (NBR 7256), filtragem HEPA e controle rigoroso de umidade.</p>
            <span class="sector-card__hint" aria-hidden="true">Ver detalhes</span>
          </a>
          <a class="sector-card sector-card--link fade-in" href="datacenter.php" aria-label="Abrir setor Data Centers">
            <div class="sector-card__icon" aria-hidden="true">💾</div>
            <h3>Data Centers</h3>
            <p>Sistemas de precisão com redundância Tier III/IV, controle de microclima e eficiência energética (PUE).</p>
            <span class="sector-card__hint" aria-hidden="true">Ver detalhes</span>
          </a>
          <a class="sector-card sector-card--link fade-in" href="corporativo.php" aria-label="Abrir setor Corporativo High-End">
            <div class="sector-card__icon" aria-hidden="true">🏢</div>
            <h3>Corporativo High-End</h3>
            <p>Edifícios Triple A, certificações LEED/WELL, foco em conforto térmico e qualidade do ar interior.</p>
            <span class="sector-card__hint" aria-hidden="true">Ver detalhes</span>
          </a>
          <a class="sector-card sector-card--link fade-in" href="industrial.php" aria-label="Abrir setor Industrial">
            <div class="sector-card__icon" aria-hidden="true">🏭</div>
            <h3>Industrial</h3>
            <p>Ventilação industrial complexa, exaustão de gases, controle de poluentes e sistemas de resfriamento de processo.</p>
            <span class="sector-card__hint" aria-hidden="true">Ver detalhes</span>
          </a>
          <a class="sector-card sector-card--link fade-in" href="pressurizacao.php" aria-label="Abrir setor Pressurização de Escadas">
            <div class="sector-card__icon" aria-hidden="true">🚨</div>
            <h3>Pressurização de Escadas</h3>
            <p>Sistemas de segurança conforme IT-18 do Corpo de Bombeiros, prevenindo infiltração de fumaça em escadas de emergência.</p>
            <span class="sector-card__hint" aria-hidden="true">Ver detalhes</span>
          </a>
          <a class="sector-card sector-card--link fade-in" href="pos-metais.php" aria-label="Abrir setor Pós de Metais">
            <div class="sector-card__icon" aria-hidden="true">⚙️</div>
            <h3>Ventilação Pós de Metais</h3>
            <p>Captação e exaustão de partículas metálicas (nióbio) com sistemas de filtragem industrial e prevenção de explosões.</p>
            <span class="sector-card__hint" aria-hidden="true">Ver detalhes</span>
          </a>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section cta-section">
      <div class="container">
        <div class="cta-card glass-card fade-in">
          <h2>Precisa de engenharia HVAC?</h2>
          <p>Entre em contato para discutir seu projeto. Atendemos todo o Brasil.</p>
          <div class="cta-buttons">
            <a href="../contato/" class="btn btn--primary">Solicitar Orçamento</a>
            <a href="../portfolio/" class="btn btn--secondary">Ver Projetos Realizados</a>
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
