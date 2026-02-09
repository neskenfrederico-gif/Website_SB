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
            <span class="project-spec__value">20 (2 subsolos, térreo, mezanino, 1º ao 16º)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Leitos</span>
            <span class="project-spec__value">600 leitos de internação</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Filtragem</span>
            <span class="project-spec__value">HEPA + H13 (transplantados)</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Áreas críticas</span>
            <span class="project-spec__value">UTIs (76 leitos), centro cirúrgico, transplantados</span>
          </div>
          <div class="project-spec glass-card">
            <span class="project-spec__label">Inauguração</span>
            <span class="project-spec__value">Dezembro/2020</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Descrição -->
    <section class="project-section project-section--flush">
      <div class="container project-text">
        <h2 class="project-section__title">Descrição do projeto</h2>
        <p>
          O novo bloco de internação do Hospital das Clínicas da UFG/Ebserh é uma das maiores obras já realizadas pela
          universidade e referência em saúde de alta complexidade no Centro-Oeste. Inaugurado em dezembro de 2020, o edifício
          possui 20 pavimentos — 2 subsolos, térreo, mezanino e andares do 1º ao 16º — com mais de 44.000 m² de área
          construída e capacidade para 600 leitos de internação.
        </p>
        <p>
          A estrutura conta com oito pavimentos de internação geral (60 leitos cada), andares específicos para UTIs
          com 76 leitos e unidade dedicada a pacientes transplantados. O desafio de climatização de um hospital dessa
          magnitude vai muito além do conforto térmico — cada ambiente possui requisitos específicos de temperatura,
          umidade, renovação de ar e nível de filtragem, definidos por normas da ANVISA e pela NBR 7256.
          O projeto demandou zoneamento rigoroso, com cascatas de pressão entre áreas limpas e contaminadas,
          garantindo que o fluxo de ar proteja pacientes e profissionais de saúde.
        </p>
        <p>
          Nos centros cirúrgicos e UTIs, o sistema opera com filtragem absoluta HEPA, assegurando contagem de partículas
          compatível com os procedimentos mais críticos — cirurgias cardíacas, neurocirurgias e transplantes. A unidade de
          transplantados recebeu tratamento diferenciado com filtros classe H13, criando ambientes de pressão positiva com
          renovação de ar intensiva, essenciais para pacientes imunossuprimidos onde qualquer contaminação pode ser fatal.
        </p>
        <p>
          A capacidade instalada de 1.500 TR atende a carga térmica de todo o complexo, distribuída por sistemas dimensionados
          para operação contínua 24/7 — como exige um hospital que não pode parar. Os controles contemplam monitoramento
          de temperatura e umidade por zona, alarmes de desvio, redundância em áreas críticas e integração com o sistema
          predial do hospital.
        </p>
        <p>
          Este é um dos projetos mais completos e desafiadores do portfólio da Siqueira e Blanco — unindo escala, complexidade
          normativa e responsabilidade direta com a vida dos pacientes.
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