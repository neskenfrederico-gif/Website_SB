<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'ESAF - Escola de Administração Fazendária | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Elaboração de projeto de ar-condicionado para a ESAF (Ministério da Fazenda) em Brasília-DF: 18.500 m², 1.220 TR, sistema híbrido VRF-Split (350 TR) + Chiller/Fancoil (870 TR) e automação.';
$og_title         = $page_title;
$og_description   = 'Projeto executivo HVAC com sistema híbrido VRF + Chiller/Fancoil e automação para escola/hotel em Brasília-DF.';
$og_image         = 'https://siqueiraeblanco.com.br/portfolio/portfolio-6.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-esaf.php';
$canonical        = $og_url;
$extra_css        = ['projeto.css?v=1770973200'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "CreativeWork",
        "name": "ESAF - Escola de Administração Fazendária (Projeto HVAC)",
        "description": "Elaboração de projeto de ar-condicionado para apartamentos, áreas administrativas, auditório e restaurante, com sistema híbrido VRF-Split + Chiller/Fancoil e automação.",
        "location": "Brasília - DF, Brasil",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Ministério da Fazenda"
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
    { "@type": "ListItem", "position": 3, "name": "ESAF", "item": "https://siqueiraeblanco.com.br/projetos/projeto-esaf.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-6.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">ESAF — Escola de Administração Fazendária</span>
        </nav>
        <span class="section__subtitle">Governamental</span>
        <h1 class="page-hero__title">ESAF — <span class="gradient-text">Escola de Administração Fazendária</span></h1>
        <p class="page-hero__subtitle">Cliente: Ministério da Fazenda | Local: Brasília-DF | Área: 18.500 m²</p>
      </div>
    </section>

    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card"><span class="project-spec__label">Área</span><span class="project-spec__value">18.500 m²</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Capacidade</span><span class="project-spec__value">1.220 TR / 14.640 KBTU/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Sistema</span><span class="project-spec__value">VRF-SPLIT (350 TR) + Chiller/Fancoil (870 TR)</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Ventilação/Exaustão</span><span class="project-spec__value">29.900 m³/h</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Ambientes</span><span class="project-spec__value">Apartamentos, adm., auditório, restaurante</span></div>
          <div class="project-spec glass-card"><span class="project-spec__label">Local</span><span class="project-spec__value">Brasília-DF</span></div>
        </div>
      </div>
    </section>

    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          A ESAF reúne características de escola, hospedagem e áreas de suporte (auditório e restaurante), exigindo um projeto
          executivo de climatização com alta capacidade e diferentes perfis de operação. O desafio foi integrar soluções para
          conforto, confiabilidade e eficiência, respeitando setorização e necessidades específicas de cada ambiente.
        </p>
        <p>
          Foi definido um sistema híbrido, combinando VRF-Split para parte da demanda e expansão indireta com Chiller/Fancoil
          para grandes cargas e áreas estratégicas. O projeto incluiu premissas de automação e monitoramento, com critérios de
          controle para otimizar consumo e garantir estabilidade.
        </p>
        <p>
          Como entrega de engenharia, foram consolidados memoriais, especificações, layouts e diretrizes para comissionamento,
          suportando implantação organizada e rastreável — sem execução de obras.
        </p>
      </div>
    </section>

<?php
$cta_description = 'Atuamos com projetos executivos de HVAC para instituições, hotéis e grandes edifícios: soluções híbridas, automação e documentação completa.';
$form_origin     = 'Projeto: ESAF';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-prf.php"><span class="related-card__badge">Governamental</span><div class="related-card__title">Sede PRF Vitória</div><div class="related-card__meta">VRF-SPLIT • alojamentos e auditório</div></a>
          <a class="related-card glass-card" href="projeto-goinn.php"><span class="related-card__badge">Hoteleiro</span><div class="related-card__title">Hotel GoInn</div><div class="related-card__meta">Exaustão • pressurização de escadas</div></a>
          <a class="related-card glass-card" href="projeto-lineavitta.php"><span class="related-card__badge">Comercial</span><div class="related-card__title">Linea Vitta</div><div class="related-card__meta">Edifício comercial • grande capacidade</div></a>
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
