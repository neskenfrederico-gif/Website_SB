<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Louis Dreyfus - Enclausuramento Envase | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Sistema de HVAC e ventilação para enclausuramento do envase de óleo da Louis Dreyfus em Jataí-GO, com expansão direta, 3 splitões e rede de dutos padrão TDC.';
$og_title         = $page_title;
$og_description   = 'HVAC e ventilação para enclausuramento de envase, com dutos padrão TDC (Jataí-GO).';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-louisdreyfus.php';
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
        "name": "Louis Dreyfus - Enclausuramento Envase (HVAC)",
        "description": "Sistema de HVAC e ventilação para enclausuramento do envase de óleo, com expansão direta (splitões) e rede de dutos padrão TDC.",
        "location": "Jataí - GO, Brasil",
        "areaServed": "BR",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Louis Dreyfus"
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
    { "@type": "ListItem", "position": 3, "name": "Louis Dreyfus", "item": "https://siqueiraeblanco.com.br/projetos/projeto-louisdreyfus.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-14.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Louis Dreyfus — Enclausuramento Envase</span>
        </nav>
        <span class="section__subtitle">Industrial</span>
        <h1 class="page-hero__title">Louis Dreyfus — <span class="gradient-text">Enclausuramento Envase</span></h1>
        <p class="page-hero__subtitle">Cliente: Louis Dreyfus | Local: Jataí-GO | HVAC e ventilação para área enclausurada</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área atendida</span>
            <span class="project-spec__value">577 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Capacidade</span>
            <span class="project-spec__value">150 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Vazão de HVAC</span>
            <span class="project-spec__value">91.800 m³/h</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema adotado</span>
            <span class="project-spec__value">Expansão direta</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Equipamentos</span>
            <span class="project-spec__value">03 condicionadores Splitão</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Ano</span>
            <span class="project-spec__value">2022</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O enclausuramento do envase de óleo foi concebido para melhorar o controle ambiental do processo, estabilizando
          temperatura e distribuição de ar na região de trabalho e mitigando interferências externas. Em ambientes industriais,
          esse tipo de solução reduz variações térmicas, melhora o conforto e auxilia na consistência operacional.
        </p>
        <p>
          A implantação utilizou expansão direta com splitões, combinando capacidade adequada e resposta rápida a variações de
          carga. A rede de dutos foi executada em padrão TDC, garantindo robustez e facilidade de manutenção, além de permitir
          melhor controle de vazões e direcionamento do ar para a área enclausurada.
        </p>
        <p>
          O conjunto HVAC + ventilação foi dimensionado para atender às necessidades de vazão e distribuição, com foco em
          confiabilidade e integração ao layout do envase.
        </p>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Atuamos com soluções industriais de HVAC, ventilação e redes de dutos, do projeto à implantação.';
$form_origin     = 'Projeto: Louis Dreyfus - Enclausuramento Envase';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-savoy.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Savoy — Ventilação Mecânica Aerossóis</div>
            <div class="related-card__meta">Exaustão 100% • rede girotubo</div>
          </a>
          <a class="related-card glass-card" href="projeto-ontex.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Active Ontex — Controle de IBUTG</div>
            <div class="related-card__meta">Alta vazão • CAG • automação Siemens</div>
          </a>
          <a class="related-card glass-card" href="projeto-hypermarcas.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Hypermarcas — CD Ar-Condicionado</div>
            <div class="related-card__meta">CD climatizado • automação Schneider</div>
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
