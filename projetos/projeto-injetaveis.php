<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Brainfarma - Prédio de Injetáveis | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Projeto executivo de HVAC para área de produção de injetáveis da Brainfarma, com áreas classificadas, cascata de pressão, filtragem HEPA e atendimento à RDC 301/ANVISA em Anápolis-GO.';
$og_title         = $page_title;
$og_description   = 'Projeto executivo de HVAC para produção de injetáveis com controle de pressão, HEPA e conformidade RDC 301/ANVISA.';
$og_image         = 'https://siqueiraeblanco.com.br/portfolio/portfolio-1.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-injetaveis.php';
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
        "name": "Brainfarma - Prédio de Injetáveis (Projeto HVAC)",
        "description": "Projeto executivo de sistema HVAC para área de produção de injetáveis com áreas classificadas, controle de cascata de pressão e filtragem HEPA conforme RDC 301/ANVISA.",
        "location": "Anápolis - GO, Brasil",
        "areaServed": "BR",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Brainfarma Indústria Química e Farmacêutica S/A"
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
    { "@type": "ListItem", "position": 3, "name": "Prédio de Injetáveis", "item": "https://siqueiraeblanco.com.br/projetos/projeto-injetaveis.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-1.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Brainfarma — Prédio de Injetáveis</span>
        </nav>
        <span class="section__subtitle">Farmacêutico</span>
        <h1 class="page-hero__title">Brainfarma — <span class="gradient-text">Prédio de Injetáveis</span></h1>
        <p class="page-hero__subtitle">Cliente: Brainfarma | Local: Anápolis-GO | Projeto executivo de sistema HVAC</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área climatizada</span>
            <span class="project-spec__value">1.800 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Capacidade</span>
            <span class="project-spec__value">180 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema adotado</span>
            <span class="project-spec__value">Expansão indireta + FANCOIL + TA</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Tratamento de ar</span>
            <span class="project-spec__value">Filtragem absoluta terminal (HEPA)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Estratégia de controle</span>
            <span class="project-spec__value">Cascata de pressão e setorização</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Local</span>
            <span class="project-spec__value">Anápolis-GO</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          Este projeto executivo de HVAC foi desenvolvido para uma área de produção de injetáveis com ambientes classificados,
          exigindo controle rigoroso de particulados, diferencial de pressão, temperatura e renovação de ar. O desafio central
          foi conciliar requisitos de qualidade do ar (salas limpas) com eficiência energética e confiabilidade operacional.
        </p>
        <p>
          A engenharia contemplou setorização por criticidade, definição de cascata de pressão para mitigação de contaminação
          cruzada, e especificação do tratamento de ar com filtragem absoluta terminal (HEPA). Foram definidos critérios de
          balanceamento, estratégias de controle e pontos de medição para garantir estabilidade de operação e rastreabilidade.
        </p>
        <p>
          Como diferencial, o escopo priorizou documentação e detalhamento executivo, com critérios claros para comissionamento,
          compatibilização com instalações prediais e diretrizes para atendimento às boas práticas regulatórias — sempre com foco
          em projeto de engenharia, não em execução de obras.
        </p>
      </div>
    </section>

    <!-- Normas -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Normas e conformidade</h2>
        <ul class="project-list">
          <li>ANVISA RDC 301</li>
          <li>ISO 14644 (Classes ISO 7/8)</li>
          <li>ABNT NBR 7256</li>
          <li>ABNT NBR 16401</li>
        </ul>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Conte para nós o seu desafio. Atuamos com elaboração de projetos executivos de HVAC, ventilação e tratamento de ar,
              com foco em desempenho, conformidade normativa e compatibilização.';
$form_origin     = 'Projeto: Brainfarma - Prédio de Injetáveis';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-cosmed.php">
            <span class="related-card__badge">Farmacêutico</span>
            <div class="related-card__title">Brainfarma — Prédio COSMED</div>
            <div class="related-card__meta">Expansão direta • controle de temperatura e umidade</div>
          </a>
          <a class="related-card glass-card" href="projeto-geolab.php">
            <span class="related-card__badge">Farmacêutico</span>
            <div class="related-card__title">Geolab — Áreas de Sólidos e Líquidos</div>
            <div class="related-card__meta">FANCOIL • filtragem absoluta</div>
          </a>
          <a class="related-card glass-card" href="projeto-lakeview.php">
            <span class="related-card__badge">Hoteleiro</span>
            <div class="related-card__title">Lake View Resort</div>
            <div class="related-card__meta">Projeto HVAC para apart hotel • Brasília-DF</div>
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
