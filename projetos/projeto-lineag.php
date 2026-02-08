<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Linea G | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Elaboração de projeto de ar-condicionado, ventilação/exaustão e pressurização de escadas para o edifício misto Linea G em Brasília-DF: 14.600 m², 513 TR, 22.880 m³/h e 93.780 m³/h.';
$og_title         = $page_title;
$og_description   = 'Projeto executivo de HVAC para edifício misto Comercial/Apart hotel com 208 apartamentos, lojas e áreas administrativas.';
$og_image         = 'https://siqueiraeblanco.com.br/portfolio/portfolio-5.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-lineag.php';
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
        "name": "Linea G (Projeto HVAC)",
        "description": "Elaboração de projeto de ar-condicionado para edifício misto Comercial/Apart hotel, com exaustão mecânica de sanitários e pressurização de escadas.",
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
    { "@type": "ListItem", "position": 3, "name": "Linea G", "item": "https://siqueiraeblanco.com.br/projetos/projeto-lineag.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-9.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Linea G</span>
        </nav>
        <span class="section__subtitle">Comercial</span>
        <h1 class="page-hero__title"><span class="gradient-text">Linea G</span></h1>
        <p class="page-hero__subtitle">Cliente: Linea/JR Empreendimentos | Local: Brasília-DF | Edifício misto Comercial/Apart hotel — 208 apartamentos</p>
      </div>
    </section>

    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card"><span class="project-spec__label">Área</span><span class="project-spec__value">14.600 m²</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Capacidade</span><span class="project-spec__value">513 TR / 6.156 KBTU/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Sistema</span><span class="project-spec__value">Expansão direta / SPLIT</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Ventilação/Exaustão</span><span class="project-spec__value">22.880 m³/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Pressurização de escadas</span><span class="project-spec__value">93.780 m³/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Local</span><span class="project-spec__value">Brasília-DF</span></div>
        </div>
      </div>
    </section>

    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O Linea G é um empreendimento de uso misto, combinando áreas comerciais, lojas e um conjunto expressivo de unidades
          residenciais (apart hotel). O projeto de engenharia HVAC precisou atender diferentes perfis de ocupação, horários e
          cargas internas, mantendo padronização de soluções e facilidade de manutenção.
        </p>
        <p>
          A elaboração contemplou climatização por sistema Split, exaustão mecânica de sanitários e dimensionamento do sistema de
          pressurização de escadas. Foram definidos critérios de vazões, posicionamento de equipamentos, rotas de dutos e soluções
          de compatibilização para minimizar interferências com arquitetura e demais instalações.
        </p>
        <p>
          Entregamos documentação executiva (engenharia) com foco em desempenho e previsibilidade na implantação: especificações,
          memoriais, critérios de controle e diretrizes de comissionamento — sem execução de obras.
        </p>
      </div>
    </section>

<?php
$cta_description = 'Projetamos HVAC e sistemas complementares para edifícios comerciais e de uso misto, com compatibilização e documentação executiva.';
$form_origin     = 'Projeto: Linea G';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-lineavitta.php"><span class="related-card__badge">Comercial</span><div class="related-card__title">Linea Vitta</div><div class="related-card__meta">Edifício comercial • 941 TR • exaustão e pressurização</div></a>
          <a class="related-card glass-card" href="projeto-goinn.php"><span class="related-card__badge">Hoteleiro</span><div class="related-card__title">Hotel GoInn</div><div class="related-card__meta">172 apartamentos • exaustão • pressurização</div></a>
          <a class="related-card glass-card" href="projeto-esaf.php"><span class="related-card__badge">Governamental</span><div class="related-card__title">ESAF</div><div class="related-card__meta">Sistema híbrido • automação • grande capacidade</div></a>
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
