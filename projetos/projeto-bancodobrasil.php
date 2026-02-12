<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Banco do Brasil — Sedes SBS Brasília | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Projeto de HVAC para as 3 sedes do Banco do Brasil no Setor Bancário Sul em Brasília: 96.135 m², 4.350 TR, chillers centrífugos e parafuso, fancoils, fancoletes, pressurização e exaustão.';
$og_title         = $page_title;
$og_description   = 'Climatização das 3 sedes do Banco do Brasil em Brasília — 96.135 m², 4.350 TR, sistema de água gelada com chillers centrífugos e parafuso.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-bancodobrasil.php';
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
        "name": "Banco do Brasil — Sedes SBS Brasília (HVAC)",
        "description": "Sistema de HVAC para as 3 sedes do Banco do Brasil no Setor Bancário Sul em Brasília, com chillers centrífugos e parafuso, fancoils e pressurização.",
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
          "name": "Banco do Brasil S.A."
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
    { "@type": "ListItem", "position": 3, "name": "Banco do Brasil SBS", "item": "https://siqueiraeblanco.com.br/projetos/projeto-bancodobrasil.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-19.webp?v=4') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Banco do Brasil — Sedes SBS</span>
        </nav>
        <span class="section__subtitle">Corporativo</span>
        <h1 class="page-hero__title">Banco do Brasil — <span class="gradient-text">Sedes SBS Brasília</span></h1>
        <p class="page-hero__subtitle">Cliente: Banco do Brasil S.A. | Local: Setor Bancário Sul, Brasília-DF | Área total: 96.135 m²</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área total</span>
            <span class="project-spec__value">96.135 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Capacidade total</span>
            <span class="project-spec__value">4.350 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sede I</span>
            <span class="project-spec__value">46.135 m² · 1.900 TR · 26 pavimentos</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sede II</span>
            <span class="project-spec__value">18.000 m² · 750 TR · 15 pavimentos</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sede III</span>
            <span class="project-spec__value">32.000 m² · 1.700 TR · 20 pavimentos</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Sistema</span>
            <span class="project-spec__value">Água gelada (chillers parafuso Sedes I/II, centrífugo Sede III, scroll backup)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Equipamentos terminais</span>
            <span class="project-spec__value">Fancoils e fancoletes</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Automação</span>
            <span class="project-spec__value">Siemens / Trane</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Complementares</span>
            <span class="project-spec__value">Exaustão de garagens e pressurização de escadas</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          As três sedes do Banco do Brasil no Setor Bancário Sul de Brasília formam um dos maiores complexos corporativos
          do país e um dos projetos mais emblemáticos do portfólio da Siqueira e Blanco. Juntos, os edifícios somam mais de
          96.000 m² de área climatizada e 4.350 TR de capacidade instalada — o equivalente a climatizar um shopping center
          de grande porte, mas com exigências de conforto, redundância e continuidade operacional de um banco que não para.
        </p>
        <p>
          O <strong>Edifício Sede I</strong>, o mais icônico do trio, possui 26 pavimentos — 21 andares de escritórios,
          térreo, sobreloja e 3 subsolos — com lajes de aproximadamente 800 m² por andar. É o prédio histórico do Banco
          do Brasil em Brasília, e sua central de água gelada de 1.900 TR foi projetada com chillers tipo parafuso de alta
          eficiência, garantindo estabilidade térmica para milhares de funcionários e operações bancárias que exigem
          ambiente controlado 24 horas.
        </p>
        <p>
          A <strong>Sede II</strong>, com 15 pavimentos e 18.000 m², funciona como suporte administrativo e operacional.
          Sua estrutura mais compacta recebeu sistema de 750 TR dimensionado para máxima eficiência por metro quadrado,
          com chillers tipo parafuso e distribuição por fancoils e fancoletes que permitem controle individualizado
          por zona.
        </p>
        <p>
          A <strong>Sede III</strong> é o edifício mais moderno do complexo — 20 pavimentos com as maiores lajes corporativas
          individuais, de aproximadamente 1.585 m² cada. Com 1.700 TR de capacidade, o projeto contemplou chillers centrífugos
          como equipamento principal, com backup scroll para garantir redundância total. As lajes amplas exigiram
          distribuição criteriosa de fancoils para manter uniformidade térmica sem zonas quentes ou frias.
        </p>
        <p>
          Em todos os três edifícios, o escopo incluiu exaustão mecânica das garagens subterrâneas — essencial para
          controle de monóxido de carbono e segurança dos ocupantes — e sistemas de pressurização de escadas de emergência,
          garantindo rotas de fuga livres de fumaça em caso de incêndio, conforme exigido pelas normas de segurança contra
          incêndio e pânico (IT do Corpo de Bombeiros e NBR 14880).
        </p>
        <p>
          A automação projetada com tecnologia Siemens e Trane integra as três centrais em um sistema de supervisão
          e controle unificado, permitindo gerenciamento centralizado de todas as plantas de água gelada, monitoramento
          em tempo real de temperaturas, pressões e consumo energético, além de rotinas automáticas de rodízio e partida
          sequencial dos chillers conforme a demanda. A operação integrada com diferentes tecnologias de compressão
          (centrífugos, parafuso e scroll) proporciona flexibilidade operacional e otimização energética — permitindo
          que cada planta opere no ponto de maior eficiência, reduzindo desperdício e custos operacionais de um dos
          maiores consumidores de energia do setor público federal.
        </p>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Atuamos com soluções de HVAC para grandes complexos corporativos, com foco em eficiência energética, redundância e operação contínua.';
$form_origin     = 'Projeto: Banco do Brasil - Sedes SBS Brasília';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-esaf.php">
            <span class="related-card__badge">Governamental</span>
            <div class="related-card__title">ESAF — Escola de Administração Fazendária</div>
            <div class="related-card__meta">VRF-Split + Chiller-Fancoil • 1.220 TR</div>
          </a>
          <a class="related-card glass-card" href="projeto-prf.php">
            <span class="related-card__badge">Governamental</span>
            <div class="related-card__title">PRF — Sede Vitória</div>
            <div class="related-card__meta">VRF-Split • 343 TR</div>
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