<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Brainfarma - Prédio COSMED | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Projeto executivo de HVAC para área de produção de dermocosméticos (COSMED) da Brainfarma, com controle de temperatura e umidade e atendimento às exigências ANVISA em Anápolis-GO.';
$og_title         = $page_title;
$og_description   = 'Projeto executivo de HVAC para dermocosméticos com controle de temperatura e umidade.';
$og_image         = 'https://siqueiraeblanco.com.br/portfolio/portfolio-2.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-cosmed.php';
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
        "name": "Brainfarma - Prédio COSMED (Projeto HVAC)",
        "description": "Projeto executivo de sistema HVAC para área de produção de dermocosméticos, com controle de temperatura e umidade.",
        "location": "Anápolis - GO, Brasil",
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
    { "@type": "ListItem", "position": 3, "name": "Prédio COSMED", "item": "https://siqueiraeblanco.com.br/projetos/projeto-cosmed.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-2.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Brainfarma — Prédio COSMED</span>
        </nav>
        <span class="section__subtitle">Farmacêutico</span>
        <h1 class="page-hero__title">Brainfarma — <span class="gradient-text">Prédio COSMED</span></h1>
        <p class="page-hero__subtitle">Cliente: Brainfarma | Local: Anápolis-GO | Aplicação: Produção de dermocosméticos</p>
      </div>
    </section>

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
            <span class="project-spec__value">160 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema adotado</span>
            <span class="project-spec__value">Expansão direta</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Equipamento</span>
            <span class="project-spec__value">Evaporadora TROX TKZ</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Critério de conforto/processo</span>
            <span class="project-spec__value">Controle de temperatura e umidade</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Local</span>
            <span class="project-spec__value">Anápolis-GO</span>
          </div>
        </div>
      </div>
    </section>

    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O Prédio COSMED demandou um projeto executivo de HVAC voltado à estabilidade de condições termo-higrométricas,
          fundamentais para a qualidade do processo de produção de dermocosméticos. A engenharia considerou cargas internas,
          ocupação, exigências de renovação e estratégias de controle compatíveis com a operação da planta.
        </p>
        <p>
          Foi especificado sistema de expansão direta com evaporadoras TROX TKZ, com definição de setorização, critérios de
          insuflamento/retorno, e diretrizes para balanceamento de vazões. O detalhamento executivo buscou reduzir interferências
          em campo e facilitar comissionamento e manutenção.
        </p>
        <p>
          O resultado é um conjunto de documentos de projeto (engenharia) orientados a desempenho e conformidade, suportando
          a implantação do sistema com rastreabilidade técnica e melhor previsibilidade de operação.
        </p>
      </div>
    </section>

    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Normas e conformidade</h2>
        <ul class="project-list">
          <li>Requisitos aplicáveis ANVISA (ambientes de produção)</li>
          <li>ABNT NBR 16401</li>
        </ul>
      </div>
    </section>

<?php
$cta_description = 'Elaboramos projetos executivos de HVAC com foco em desempenho, compatibilização e atendimento normativo.';
$form_origin     = 'Projeto: Brainfarma - Prédio COSMED';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-injetaveis.php">
            <span class="related-card__badge">Farmacêutico</span>
            <div class="related-card__title">Brainfarma — Prédio de Injetáveis</div>
            <div class="related-card__meta">Áreas classificadas • cascata de pressão • HEPA</div>
          </a>
          <a class="related-card glass-card" href="projeto-geolab.php">
            <span class="related-card__badge">Farmacêutico</span>
            <div class="related-card__title">Geolab — Áreas de Sólidos e Líquidos</div>
            <div class="related-card__meta">FANCOIL • filtragem absoluta</div>
          </a>
          <a class="related-card glass-card" href="projeto-lineavitta.php">
            <span class="related-card__badge">Comercial</span>
            <div class="related-card__title">Linea Vitta</div>
            <div class="related-card__meta">Projeto HVAC para edifício comercial • Brasília-DF</div>
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
