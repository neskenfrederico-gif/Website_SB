<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Lake View Resort | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Elaboração de projeto de ar-condicionado, ventilação e exaustão para o Lake View Resort (Apart Hotel com 246 apartamentos) em Brasília-DF: 502 TR, 68.800 m³/h.';
$og_title         = $page_title;
$og_description   = 'Projeto executivo de HVAC para apart hotel com 246 apartamentos: ar-condicionado split, exaustão sanitários e ventilação de garagens.';
$og_image         = 'https://siqueiraeblanco.com.br/portfolio/portfolio-3.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-lakeview.php';
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
        "name": "Lake View Resort (Projeto HVAC)",
        "description": "Elaboração de projeto de ar-condicionado para 246 apartamentos e áreas comuns, com exaustão mecânica de sanitários e ventilação mecânica de garagens.",
        "location": "Brasília - DF, Brasil",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Direcional Engenharia"
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
    { "@type": "ListItem", "position": 3, "name": "Lake View Resort", "item": "https://siqueiraeblanco.com.br/projetos/projeto-lakeview.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-3.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Lake View Resort</span>
        </nav>
        <span class="section__subtitle">Hoteleiro</span>
        <h1 class="page-hero__title"><span class="gradient-text">Lake View</span> Resort</h1>
        <p class="page-hero__subtitle">Cliente: Direcional Engenharia | Local: Brasília-DF | Apart Hotel — 246 apartamentos</p>
      </div>
    </section>

    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card"><span class="project-spec__label">Área</span><span class="project-spec__value">19.968 m²</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Capacidade</span><span class="project-spec__value">502 TR / 6.024 KBTU/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Sistema</span><span class="project-spec__value">Expansão direta / SPLIT</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Ventilação/Exaustão</span><span class="project-spec__value">68.800 m³/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Aplicações</span><span class="project-spec__value">Aptos, fitness, recepção, gourmet</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Local</span><span class="project-spec__value">Brasília-DF</span></div>
        </div>
      </div>
    </section>

    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O Lake View Resort exigiu um projeto executivo abrangente para o sistema de ar-condicionado e para as soluções de
          ventilação/exaustão, considerando a diversidade de ambientes (apartamentos, áreas comuns e garagens) e a necessidade
          de conforto térmico com operação eficiente.
        </p>
        <p>
          Foram definidos critérios de carga térmica, especificação de equipamentos, setorização e rotas de dutos/infraestrutura,
          além de vazões de exaustão mecânica para sanitários e ventilação mecânica de garagens. O projeto priorizou compatibilização
          com arquitetura e demais disciplinas, reduzindo retrabalhos e interferências.
        </p>
        <p>
          Entregamos documentação técnica para implantação (projeto de engenharia), com foco em clareza executiva e suporte ao
          comissionamento — sem execução de obras.
        </p>
      </div>
    </section>

<?php
$cta_description = 'Projetos de HVAC para hotéis, apart-hotéis e edifícios de uso misto: climatização, ventilação e exaustão com desempenho e previsibilidade.';
$form_origin     = 'Projeto: Lake View Resort';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-goinn.php"><span class="related-card__badge">Hoteleiro</span><div class="related-card__title">Estação Goiânia (Hotel GoInn)</div><div class="related-card__meta">172 apartamentos • exaustão • pressurização de escadas</div></a>
          <a class="related-card glass-card" href="projeto-esaf.php"><span class="related-card__badge">Governamental</span><div class="related-card__title">ESAF</div><div class="related-card__meta">Sistema híbrido VRF + Chiller/Fancoil • automação</div></a>
          <a class="related-card glass-card" href="projeto-lineag.php"><span class="related-card__badge">Comercial</span><div class="related-card__title">Linea G</div><div class="related-card__meta">Edifício misto • exaustão • pressurização de escadas</div></a>
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
