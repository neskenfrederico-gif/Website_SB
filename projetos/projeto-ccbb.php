<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'CCBB Brasília — Centro Cultural Banco do Brasil | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Sistema de HVAC para o CCBB Brasília: 15.000 m² construídos, 900 TR, chiller parafuso condensação a água, dual fluid de precisão para galerias com controle de temperatura e umidade.';
$og_title         = $page_title;
$og_description   = 'Climatização do Centro Cultural Banco do Brasil em Brasília — 15.000 m², 900 TR, controle de precisão para galerias de arte.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-ccbb.php';
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
        "name": "CCBB Brasília — Centro Cultural Banco do Brasil (HVAC)",
        "description": "Sistema de HVAC para o Centro Cultural Banco do Brasil em Brasília, com chiller parafuso, fancoils e equipamentos dual fluid de precisão para galerias de arte.",
        "location": "Brasília - DF, Brasil",
        "areaServed": "BR",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "Banco do Brasil S.A. — Centro Cultural"
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
    { "@type": "ListItem", "position": 3, "name": "CCBB Brasília", "item": "https://siqueiraeblanco.com.br/projetos/projeto-ccbb.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-20.webp?v=4') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">CCBB — Centro Cultural Banco do Brasil</span>
        </nav>
        <span class="section__subtitle">Cultural</span>
        <h1 class="page-hero__title">CCBB — <span class="gradient-text">Centro Cultural Banco do Brasil</span></h1>
        <p class="page-hero__subtitle">Cliente: Banco do Brasil S.A. | Local: Brasília-DF | Área construída: 15.000 m²</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Terreno total</span>
            <span class="project-spec__value">380.000 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área construída</span>
            <span class="project-spec__value">15.000 m² (Ed. Tancredo Neves)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Capacidade</span>
            <span class="project-spec__value">900 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema principal</span>
            <span class="project-spec__value">Água gelada — chiller parafuso condensação a água</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Equipamentos terminais</span>
            <span class="project-spec__value">Fancoils e fancoletes (edifício) · Dual fluid de precisão (galerias)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Galerias de exposição</span>
            <span class="project-spec__value">4 galerias · ~1.200 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Teatro</span>
            <span class="project-spec__value">262 lugares</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Cinema</span>
            <span class="project-spec__value">70 lugares</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O Centro Cultural Banco do Brasil em Brasília é um dos espaços culturais mais importantes do país e um dos
          CCBBs mais visitados do mundo. Instalado no Edifício Tancredo Neves — obra de Oscar Niemeyer com sua inconfundível
          fachada curva em concreto aparente e janelas orgânicas — o complexo ocupa um terreno de 380.000 m² e abriga
          galerias de arte, teatro, cinema, espaços educativos e áreas de convivência que recebem milhões de visitantes
          por ano.
        </p>
        <p>
          A climatização de um centro cultural dessa envergadura impõe desafios que vão muito além do conforto térmico
          convencional. As quatro galerias de exposição, que somam aproximadamente 1.200 m², abrigam acervos de arte
          contemporânea, instalações e obras itinerantes internacionais que exigem controle rigoroso e ininterrupto de
          temperatura e umidade relativa — qualquer oscilação pode causar danos irreversíveis a pinturas, esculturas e
          peças históricas. Para isso, foram especificados equipamentos <strong>dual fluid de precisão</strong>,
          capazes de manter setpoints estáveis com variação mínima, operando com serpentinas de água gelada e aquecimento
          simultâneo para desumidificação controlada.
        </p>
        <p>
          O teatro com 262 lugares e o cinema com 70 espectadores demandam tratamento acústico integrado ao sistema de
          climatização — baixa velocidade de ar, difusão sem ruído e renovação de ar dimensionada para ocupação plena,
          garantindo conforto sem interferir na experiência cultural.
        </p>
        <p>
          O sistema principal é de água gelada, com chiller de condensação a água tipo parafuso — escolha que elimina a
          necessidade de torre de resfriamento, simplificando a operação e o tratamento de água em um edifício tombado
          onde intervenções externas são restritas. A distribuição nos ambientes do edifício é feita por fancoils e
          fancoletes, permitindo zoneamento e controle individualizado de temperatura conforme a ocupação e o uso de
          cada espaço.
        </p>
        <p>
          Com 900 TR de capacidade instalada, o projeto equilibra a preservação da arquitetura modernista de Niemeyer
          com as exigências técnicas de conservação de acervos e conforto de público — um dos desafios mais singulares
          do portfólio da Siqueira e Blanco.
        </p>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Atuamos com soluções de HVAC para espaços culturais, museus e teatros, com controle de precisão para preservação de acervos e conforto de público.';
$form_origin     = 'Projeto: CCBB Brasília';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-bancodobrasil.php">
            <span class="related-card__badge">Corporativo</span>
            <div class="related-card__title">Banco do Brasil — Sedes SBS</div>
            <div class="related-card__meta">4.350 TR • chillers centrífugos e parafuso</div>
          </a>
          <a class="related-card glass-card" href="projeto-esaf.php">
            <span class="related-card__badge">Governamental</span>
            <div class="related-card__title">ESAF — Escola de Administração Fazendária</div>
            <div class="related-card__meta">VRF-Split + Chiller-Fancoil • 1.220 TR</div>
          </a>
          <a class="related-card glass-card" href="projeto-hcufg.php">
            <span class="related-card__badge">Hospitalar</span>
            <div class="related-card__title">HC-UFG — Hospital das Clínicas</div>
            <div class="related-card__meta">1.500 TR • HEPA • 600 leitos</div>
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