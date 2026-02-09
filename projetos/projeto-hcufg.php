<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'HC-UFG Hospital das Clínicas | Siqueira e Blanco Engenharia HVAC';
$page_description = 'Sistema de HVAC para o Hospital das Clínicas da UFG em Goiânia-GO: 44.000 m², 1.500 TR, filtragem HEPA, centro cirúrgico, UTIs e área de transplantados com filtros H13.';
$og_title         = $page_title;
$og_description   = 'Projeto de climatização hospitalar com 44.000 m², 1.500 TR, filtragem HEPA e H13 para o HC-UFG.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/projetos/projeto-hcufg.php';
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
        "name": "HC-UFG Hospital das Clínicas (HVAC)",
        "description": "Sistema de HVAC hospitalar completo com filtragem HEPA, centro cirúrgico, UTIs e área de transplantados com filtros H13.",
        "location": "Goiânia - GO, Brasil",
        "areaServed": "BR",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "client": {
          "@type": "Organization",
          "name": "UFG — Universidade Federal de Goiás"
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
    { "@type": "ListItem", "position": 3, "name": "HC-UFG", "item": "https://siqueiraeblanco.com.br/projetos/projeto-hcufg.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<section class="project-hero" style="background: linear-gradient(180deg, rgba(10,12,16,0.7), rgba(10,12,16,0.85)), url('../portfolio/portfolio-18.webp?v=4') center/cover no-repeat;">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../portfolio/">Portfólio</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">HC-UFG — Hospital das Clínicas</span>
        </nav>
        <span class="section__subtitle">Hospitalar</span>
        <h1 class="page-hero__title">HC-UFG — <span class="gradient-text">Hospital das Clínicas</span></h1>
        <p class="page-hero__subtitle">Cliente: UFG — Universidade Federal de Goiás | Local: Goiânia-GO | Área: 44.000 m²</p>
      </div>
    </section>

    <!-- Ficha técnica -->
    <section class="project-section">
      <div class="container">
        <h2 class="project-section__title">Ficha técnica</h2>
        <div class="project-specs">
          <div class="project-spec glass-card">
            <span class="project-spec__label">Área atendida</span>
            <span class="project-spec__value">44.000 m²</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Capacidade</span>
            <span class="project-spec__value">1.500 TR</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Pavimentos</span>
            <span class="project-spec__value">20 pavimentos</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Filtragem</span>
            <span class="project-spec__value">HEPA + H13 (transplantados)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Áreas críticas</span>
            <span class="project-spec__value">UTIs, centro cirúrgico, transplantados</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O Hospital das Clínicas da Universidade Federal de Goiás é referência em saúde no estado, com 20 pavimentos e
          44.000 m² de área atendida. O projeto de climatização contemplou a totalidade do edifício, incluindo áreas comuns,
          ambulatórios, internações, UTIs, centro cirúrgico e a unidade de transplantados.
        </p>
        <p>
          Para as áreas críticas — centro cirúrgico e UTIs — foram especificados sistemas com filtragem HEPA, garantindo
          controle rigoroso de partículas e biossegurança. A área de transplantados recebeu filtragem classe H13,
          atendendo aos requisitos mais exigentes de qualidade do ar para pacientes imunossuprimidos.
        </p>
        <p>
          Com capacidade instalada de 1.500 TR, o sistema atende a demanda térmica de todo o complexo hospitalar,
          com controles de pressurização, renovação de ar e temperatura diferenciados por zona e criticidade.
        </p>
      </div>
    </section>

    <!-- CTA -->

<?php
$cta_description = 'Atuamos com soluções de HVAC para hospitais, salas limpas e áreas críticas, com foco em biossegurança e filtragem de alta eficiência.';
$form_origin     = 'Projeto: HC-UFG Hospital das Clínicas';
include '../includes/form-project-cta.php';
?>

<section class="project-section project-section--flush">
      <div class="container">
        <h2 class="project-section__title">Projetos relacionados</h2>
        <div class="project-related__grid">
          <a class="related-card glass-card" href="projeto-geolab-siteii.php">
            <span class="related-card__badge">Farmacêutico</span>
            <div class="related-card__title">Geolab — Site II</div>
            <div class="related-card__meta">Salas limpas Grau B/C • filtragem HEPA • CAG</div>
          </a>
          <a class="related-card glass-card" href="projeto-injetaveis.php">
            <span class="related-card__badge">Farmacêutico</span>
            <div class="related-card__title">Brainfarma — Prédio de Injetáveis</div>
            <div class="related-card__meta">FANCOIL • filtragem absoluta • cascata de pressão</div>
          </a>
          <a class="related-card glass-card" href="projeto-esaf.php">
            <span class="related-card__badge">Governamental</span>
            <div class="related-card__title">ESAF — Escola de Administração Fazendária</div>
            <div class="related-card__meta">VRF-Split + Chiller-Fancoil • 1.220 TR</div>
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