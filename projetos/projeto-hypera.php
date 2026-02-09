<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Hypera - CD Autoportante | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Sistema VRF e automação Siemens para CD autoportante da Hypera em Anápolis-GO (40 m de altura), com TROX TKZ, condensadoras TRANE ULTRA e controle por zoneamento.';
$og_title         = $page_title;
$og_description   = 'Climatização VRF e automação integrada para galpão autoportante de 40 m (Anápolis-GO).';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-hypera.php';
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
        "name": "Hypera - CD Autoportante (VRF + Automação)",
        "description": "Galpão autoportante com 40 m de altura para centro de distribuição, com sistema VRF (TROX TKZ + TRANE ULTRA) e automação Siemens integrada (e+i) com controle por zoneamento.",
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
          "name": "Hypera S.A."
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
    { "@type": "ListItem", "position": 3, "name": "Hypera CD", "item": "https://siqueiraeblanco.com.br/projetos/projeto-hypera.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-16.webp?v=3') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Hypera — CD Autoportante</span>
        </nav>
        <span class="section__subtitle">Logístico</span>
        <h1 class="page-hero__title">Hypera — <span class="gradient-text">CD Autoportante</span></h1>
        <p class="page-hero__subtitle">Cliente: Hypera S.A. | Local: Anápolis-GO | Climatização VRF + automação integrada</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área atendida</span>
            <span class="project-spec__value">4.000 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Capacidade</span>
            <span class="project-spec__value">200 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Vazão total</span>
            <span class="project-spec__value">320.000 m³/h</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema adotado</span>
            <span class="project-spec__value">VRF</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Automação</span>
            <span class="project-spec__value">Siemens (arquitetura integrada e+i)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Ano</span>
            <span class="project-spec__value">2023</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O CD Autoportante da Hypera possui características construtivas desafiadoras: um galpão com aproximadamente 40 metros
          de altura, com grandes volumes de ar e dinâmica térmica complexa. Nessas condições, estratégias convencionais podem
          gerar estratificação térmica e baixa eficiência, exigindo engenharia focada em zoneamento e controle fino.
        </p>
        <p>
          A solução adotada foi um sistema VRF com 08 evaporadoras TROX TKZ e 16 condensadoras VRF ULTRA TRANE, permitindo
          modularidade, redundância operacional e ajuste por zonas. A automação Siemens foi implementada com arquitetura integrada
          e+i, viabilizando controle de parâmetros por zoneamento, além de supervisão e rastreabilidade de operação.
        </p>
        <p>
          A montagem exigiu planejamento construtivo e logística, com dutos em MPU e execução utilizando sistema N2 e andaime
          tubo roll, garantindo produtividade e segurança na instalação em altura.
        </p>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Fale com a nossa equipe para soluções em HVAC industrial, VRF e automação, com foco em eficiência, controle e
              confiabilidade em grandes volumes.';
$form_origin     = 'Projeto: Hypera - CD Autoportante';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-hypermarcas.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Hypermarcas — CD Ar-Condicionado</div>
            <div class="related-card__meta">Splitões • automação Schneider</div>
          </a>
          <a class="related-card glass-card" href="projeto-ontex.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Active Ontex — Controle de IBUTG</div>
            <div class="related-card__meta">CAG • alta vazão • automação Siemens</div>
          </a>
          <a class="related-card glass-card" href="projeto-savoy.php">
            <span class="related-card__badge">Industrial</span>
            <div class="related-card__title">Savoy — Ventilação Mecânica Aerossóis</div>
            <div class="related-card__meta">Renovação + exaustão 100%</div>
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
