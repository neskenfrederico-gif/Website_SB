<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Linea Vitta | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Elaboração de projeto de ar-condicionado, ventilação/exaustão e pressurização de escadas para o Linea Vitta em Brasília-DF: 27.500 m², 941 TR, 57.900 m³/h e 110.160 m³/h.';
$og_title         = $page_title;
$og_description   = 'Projeto executivo de HVAC para edifício comercial com exaustão mecânica e pressurização de escadas.';
$og_image         = 'https://siqueiraeblanco.com.br/portfolio/portfolio-5.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-lineavitta.php';
$canonical        = $og_url;
$extra_css        = ['projeto.css?v=1770581541'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "CreativeWork",
        "name": "Linea Vitta (Projeto HVAC)",
        "description": "Elaboração de projeto de ar-condicionado para edifício comercial, com exaustão mecânica de sanitários e pressurização de escadas.",
        "location": "Brasília - DF, Brasil",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Linea/JR Empreendimentos de Engenharia Ltda"
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
    { "@type": "ListItem", "position": 3, "name": "Linea Vitta", "item": "https://siqueiraeblanco.com.br/projetos/projeto-lineavitta.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-5.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Linea Vitta</span>
        </nav>
        <span class="section__subtitle">Comercial</span>
        <h1 class="page-hero__title"><span class="gradient-text">Linea Vitta</span></h1>
        <p class="page-hero__subtitle">Cliente: Linea/JR Empreendimentos | Local: Brasília-DF | Área: 27.500 m²</p>
      </div>
    </section>

    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card"><span class="project-spec__label">Área</span><span class="project-spec__value">27.500 m²</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Capacidade</span><span class="project-spec__value">941 TR / 11.292 KBTU/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Sistema</span><span class="project-spec__value">Expansão direta / SPLIT</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Ventilação/Exaustão</span><span class="project-spec__value">57.900 m³/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Pressurização de escadas</span><span class="project-spec__value">110.160 m³/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Local</span><span class="project-spec__value">Brasília-DF</span></div>
        </div>
      </div>
    </section>

    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O Linea Vitta demandou um projeto executivo de HVAC para um edifício comercial de grande porte, com variedade de layouts
          e necessidades de ocupação. O desafio esteve em dimensionar infraestrutura e sistemas que suportassem flexibilidade de
          uso, mantendo desempenho e eficiência.
        </p>
        <p>
          A engenharia contemplou climatização por sistema Split, com critérios de distribuição de ar e compatibilização das
          rotas técnicas. Também foram dimensionados sistemas de exaustão mecânica de sanitários e pressurização de escadas,
          com definição de vazões, pontos de captação/insuflamento e diretrizes de controle.
        </p>
        <p>
          O resultado é um pacote executivo (projeto de engenharia) que melhora a previsibilidade na implantação e facilita
          balanceamento e comissionamento — sem execução de obras.
        </p>
      </div>
    </section>

<?php
$cta_description = 'Projetos executivos de HVAC para edifícios comerciais: climatização, exaustão e pressurização com compatibilização completa.';
$form_origin     = 'Projeto: Linea Vitta';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-lineag.php"><span class="related-card__badge">Comercial</span><div class="related-card__title">Linea G</div><div class="related-card__meta">Edifício misto • 513 TR • exaustão e pressurização</div></a>
          <a class="related-card glass-card" href="projeto-esaf.php"><span class="related-card__badge">Governamental</span><div class="related-card__title">ESAF</div><div class="related-card__meta">Sistema híbrido • automação • grande capacidade</div></a>
          <a class="related-card glass-card" href="projeto-lakeview.php"><span class="related-card__badge">Hoteleiro</span><div class="related-card__title">Lake View Resort</div><div class="related-card__meta">Apart hotel • climatização e ventilação</div></a>
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
