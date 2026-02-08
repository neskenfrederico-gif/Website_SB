<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Sede PRF Vitória | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Elaboração de projeto de ar-condicionado e ventilação/exaustão para a Sede PRF Vitória-ES: 6.872 m², 343 TR / 4.117 KBTU/h, sistema VRF-SPLIT e 15.900 m³/h.';
$og_title         = $page_title;
$og_description   = 'Projeto executivo HVAC para edifício administrativo e centro de treinamento com alojamentos, auditório e restaurante.';
$og_image         = 'https://siqueiraeblanco.com.br/portfolio/portfolio-7.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-prf.php';
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
        "name": "Sede PRF Vitória (Projeto HVAC)",
        "description": "Elaboração de projeto de ar-condicionado para alojamentos, áreas administrativas, auditório e restaurante, com sistema VRF-SPLIT.",
        "location": "Vitória - ES, Brasil",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Polícia Rodoviária Federal"
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
    { "@type": "ListItem", "position": 3, "name": "Sede PRF Vitória", "item": "https://siqueiraeblanco.com.br/projetos/projeto-prf.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-7.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Sede PRF Vitória</span>
        </nav>
        <span class="section__subtitle">Governamental</span>
        <h1 class="page-hero__title">Sede <span class="gradient-text">PRF Vitória</span></h1>
        <p class="page-hero__subtitle">Cliente: Polícia Rodoviária Federal | Local: Vitória-ES | Área: 6.872 m²</p>
      </div>
    </section>

    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card"><span class="project-spec__label">Área</span><span class="project-spec__value">6.872 m²</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Capacidade</span><span class="project-spec__value">343 TR / 4.117 KBTU/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Sistema</span><span class="project-spec__value">Expansão direta / VRF-SPLIT</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Ventilação/Exaustão</span><span class="project-spec__value">15.900 m³/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Ambientes</span><span class="project-spec__value">Alojamentos, adm., auditório, restaurante</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Local</span><span class="project-spec__value">Vitória-ES</span></div>
        </div>
      </div>
    </section>

    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          Para a Sede da PRF em Vitória-ES, o projeto executivo de HVAC considerou a coexistência de ambientes administrativos e
          de treinamento, incluindo alojamentos, auditório e restaurante. Isso exige soluções com confiabilidade operacional,
          conforto térmico e facilidade de manutenção.
        </p>
        <p>
          A engenharia definiu sistema VRF-Split, com setorização e critérios de operação compatíveis com diferentes horários e
          perfis de uso. Também foram estabelecidas vazões de ventilação/exaustão, rotas de infraestrutura e diretrizes de
          balanceamento para assegurar desempenho conforme os requisitos do edifício.
        </p>
        <p>
          O pacote final é de projeto de engenharia, voltado à implantação organizada e comissionamento, sem execução de obras.
        </p>
      </div>
    </section>

<?php
$cta_description = 'Projetos executivos de HVAC para instituições públicas e edifícios de grande porte: dimensionamento, setorização e documentação completa.';
$form_origin     = 'Projeto: Sede PRF Vitória';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-esaf.php"><span class="related-card__badge">Governamental</span><div class="related-card__title">ESAF</div><div class="related-card__meta">Sistema híbrido • automação • grande capacidade</div></a>
          <a class="related-card glass-card" href="projeto-lakeview.php"><span class="related-card__badge">Hoteleiro</span><div class="related-card__title">Lake View Resort</div><div class="related-card__meta">Apart hotel • climatização e ventilação</div></a>
          <a class="related-card glass-card" href="projeto-lineavitta.php"><span class="related-card__badge">Comercial</span><div class="related-card__title">Linea Vitta</div><div class="related-card__meta">Edifício comercial • exaustão e pressurização</div></a>
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
