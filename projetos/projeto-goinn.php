<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Estação Goiânia (Hotel GoInn) | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Projeto de ar-condicionado, ventilação/exaustão e pressurização de escadas para o Hotel GoInn (172 apartamentos) em Goiânia-GO: 326 TR, 50.965 m³/h e 108.960 m³/h.';
$og_title         = $page_title;
$og_description   = 'Elaboração de projeto HVAC para 172 apartamentos com exaustão mecânica e pressurização de escadas.';
$og_image         = 'https://siqueiraeblanco.com.br/portfolio/portfolio-4.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-goinn.php';
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
        "name": "Estação Goiânia (Hotel GoInn) (Projeto HVAC)",
        "description": "Elaboração de projeto de ar-condicionado para 172 apartamentos e áreas comuns, com exaustão mecânica e pressurização de escadas.",
        "location": "Goiânia - GO, Brasil",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Hotel GoInn"
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
    { "@type": "ListItem", "position": 3, "name": "Hotel GoInn", "item": "https://siqueiraeblanco.com.br/projetos/projeto-goinn.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-4.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Estação Goiânia (Hotel GoInn)</span>
        </nav>
        <span class="section__subtitle">Hoteleiro</span>
        <h1 class="page-hero__title">Estação Goiânia (<span class="gradient-text">Hotel GoInn</span>)</h1>
        <p class="page-hero__subtitle">Cliente: Hotel GoInn | Local: Goiânia-GO | 172 apartamentos e áreas comuns</p>
      </div>
    </section>

    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card"><span class="project-spec__label">Área</span><span class="project-spec__value">15.199 m²</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Capacidade</span><span class="project-spec__value">326 TR / 3.912 KBTU/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Sistema</span><span class="project-spec__value">Expansão direta / SPLIT</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Ventilação/Exaustão</span><span class="project-spec__value">50.965 m³/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Pressurização de escadas</span><span class="project-spec__value">108.960 m³/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Local</span><span class="project-spec__value">Goiânia-GO</span></div>
        </div>
      </div>
    </section>

    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          Para o Hotel GoInn, a Siqueira e Blanco elaborou o projeto de ar-condicionado e sistemas complementares de ventilação,
          contemplando 172 apartamentos, academia, áreas administrativas, hall/recepção e lanchonete. A diversidade de usos exigiu
          definição criteriosa de setpoints, cargas e infraestrutura para atender conforto e eficiência.
        </p>
        <p>
          Além da climatização por sistema Split, o projeto contemplou exaustão mecânica de sanitários e pressurização de escadas,
          com vazões dimensionadas e diretrizes de controle/automação para operação segura. Foram estabelecidos critérios de
          distribuição de ar, rotas de dutos e pontos de medição para facilitar balanceamento e comissionamento.
        </p>
        <p>
          O entregável foi um conjunto executivo de engenharia, orientado à compatibilização com arquitetura/instalações e à
          previsibilidade de implantação — sem execução de obras.
        </p>
      </div>
    </section>

<?php
$cta_description = 'Projetos de HVAC, exaustão e pressurização para hotéis e edifícios: dimensionamento, compatibilização e documentação executiva.';
$form_origin     = 'Projeto: Estação Goiânia (Hotel GoInn)';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-lakeview.php"><span class="related-card__badge">Hoteleiro</span><div class="related-card__title">Lake View Resort</div><div class="related-card__meta">246 apartamentos • exaustão sanitários • ventilação garagens</div></a>
          <a class="related-card glass-card" href="projeto-lineag.php"><span class="related-card__badge">Comercial</span><div class="related-card__title">Linea G</div><div class="related-card__meta">Edifício misto • exaustão • pressurização</div></a>
          <a class="related-card glass-card" href="projeto-esaf.php"><span class="related-card__badge">Governamental</span><div class="related-card__title">ESAF</div><div class="related-card__meta">Escola/Hotel • automação • sistema híbrido</div></a>
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
