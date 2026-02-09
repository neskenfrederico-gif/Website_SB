<?php
$base             = '..';
$active_page      = 'portfolio';
$page_title       = 'Portfólio de Projetos HVAC | Siqueira e Blanco Engenharia';
$page_description = 'Portfólio de projetos HVAC da Siqueira e Blanco: indústrias farmacêuticas, hotéis, data centers, edifícios comerciais e governamentais. 200+ projetos em 12 estados.';
$og_title         = 'Portfólio | Projetos HVAC - Siqueira e Blanco';
$og_description   = 'Conheça nossos projetos de climatização para indústrias farmacêuticas, hotéis, data centers e edifícios comerciais.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/portfolio/';
$canonical        = 'https://siqueiraeblanco.com.br/portfolio/';
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "Portfólio de Projetos HVAC",
        "description": "Projetos de engenharia HVAC realizados pela Siqueira e Blanco",
        "publisher": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia"
        }
      }
      </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

<main id="main-content">
    <!-- Page Hero -->
    <section class="page-hero">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Portfólio</span>
        </nav>
        <span class="section__subtitle">Projetos Realizados</span>
        <h1 class="page-hero__title">Nosso <span class="gradient-text">Portfólio</span></h1>
        <p class="page-hero__subtitle">200+ projetos entregues em 12 estados brasileiros</p>
      </div>
    </section>

    <!-- Stats -->
    <section class="section stats">
      <div class="stats__container container grid">
        <div class="stats__data">
          <span class="stats__number" data-target="200" aria-label="200+">200</span>
          <span class="stats__symbol">+</span>
          <p class="stats__title">Projetos <br> Entregues</p>
        </div>
        <div class="stats__data">
          <span class="stats__number" data-target="50" aria-label="50k">50</span>
          <span class="stats__symbol">k</span>
          <p class="stats__title">TRs <br> Projetados</p>
        </div>
        <div class="stats__data">
          <span class="stats__number" data-target="12" aria-label="12">12</span>
          <p class="stats__title">Estados <br> Atendidos</p>
        </div>
        <div class="stats__data">
          <span class="stats__number" data-target="100" aria-label="100%">100</span>
          <span class="stats__symbol">%</span>
          <p class="stats__title">Conformidade <br> Normativa</p>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="section portfolio">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Projetos Realizados</span>
          <h2 class="section__title">Conheça Nossos <span class="gradient-text">Cases</span></h2>
        </div>

        <!-- Filters -->
        <div id="filter-status" role="status" aria-live="polite" class="sr-only"></div>
        <div class="portfolio__filters" role="group" aria-label="Filtrar projetos por categoria">
          <button class="filter-btn active" data-filter="all" aria-pressed="true">Todos</button>
          <button class="filter-btn" data-filter="farmaceutico" aria-pressed="false">Farmacêutico</button>
          <button class="filter-btn" data-filter="hoteleiro" aria-pressed="false">Hoteleiro</button>
          <button class="filter-btn" data-filter="comercial" aria-pressed="false">Comercial</button>
          <button class="filter-btn" data-filter="governamental" aria-pressed="false">Governamental</button>
          <button class="filter-btn" data-filter="industrial" aria-pressed="false">Industrial</button>
          <button class="filter-btn" data-filter="logistico" aria-pressed="false">Logístico</button>
        </div>

        <!-- Projects Grid -->
        <div class="portfolio__grid">
          
          <!-- Geolab Site II -->
          <a class="project-card-link" href="../projetos/projeto-geolab-siteii.php">
            <article class="project-card" data-category="farmaceutico">
              <div class="project-card__image project-card__image--11">
                <div class="project-card__overlay">
                  <span class="project-card__category">Farmacêutico</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Geolab Site II</h3>
                <span class="project-card__client">Geolab Indústria Farmacêutica</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">8.000 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">900 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Salas limpas Grau B/C para produção de colírios, central de água gelada com VFD.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Brainfarma Injetáveis -->
          <a class="project-card-link" href="../projetos/projeto-injetaveis.php">
            <article class="project-card" data-category="farmaceutico">
              <div class="project-card__image project-card__image--1">
                <div class="project-card__overlay">
                  <span class="project-card__category">Farmacêutico</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Prédio de Injetáveis</h3>
                <span class="project-card__client">Brainfarma</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">1.800 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">180 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Sistema de expansão indireta com FANCOIL e filtragem absoluta terminal.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- COSMED -->
          <a class="project-card-link" href="../projetos/projeto-cosmed.php">
            <article class="project-card" data-category="farmaceutico">
              <div class="project-card__image project-card__image--2">
                <div class="project-card__overlay">
                  <span class="project-card__category">Farmacêutico</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Prédio COSMED</h3>
                <span class="project-card__client">Brainfarma</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">1.800 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">160 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Área de produção de dermocosméticos com expansão direta e evaporadora TROX TKZ.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Geolab -->
          <a class="project-card-link" href="../projetos/projeto-geolab.php">
            <article class="project-card" data-category="farmaceutico">
              <div class="project-card__image project-card__image--8">
                <div class="project-card__overlay">
                  <span class="project-card__category">Farmacêutico</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Geolab Farmacêutica</h3>
                <span class="project-card__client">Geolab</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">25.000 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">1.500 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Salas limpas para sólidos, efervescentes, semissólidos, líquidos e colírios com filtragem HEPA.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Brainfarma Fluxos -->
          <a class="project-card-link" href="../projetos/projeto-brainfarma-fluxos.php">
            <article class="project-card" data-category="farmaceutico">
              <div class="project-card__image project-card__image--12">
                <div class="project-card__overlay">
                  <span class="project-card__category">Farmacêutico</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Brainfarma Fluxos</h3>
                <span class="project-card__client">Brainfarma/Hypera</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">800 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">264 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Fluxos laminares e UTAs com expansão indireta para controle de contaminação cruzada.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Hypera -->
          <a class="project-card-link" href="../projetos/projeto-hypera.php">
            <article class="project-card" data-category="logistico">
              <div class="project-card__image project-card__image--16">
                <div class="project-card__overlay">
                  <span class="project-card__category">Logístico</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Hypera Pharma</h3>
                <span class="project-card__client">Hypera</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">4.000 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">200 TR</span>
                  </div>
                </div>
                <p class="project-card__description">CD Autoportante com climatização VRF e automação integrada Siemens.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Hypermarcas -->
          <a class="project-card-link" href="../projetos/projeto-hypermarcas.php">
            <article class="project-card" data-category="farmaceutico">
              <div class="project-card__image project-card__image--15">
                <div class="project-card__overlay">
                  <span class="project-card__category">Farmacêutico</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Hypermarcas</h3>
                <span class="project-card__client">Hypermarcas</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">20.000 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">500 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Climatização completa com expansão direta (Splitão) e automação Schneider.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Lake View Resort -->
          <a class="project-card-link" href="../projetos/projeto-lakeview.php">
            <article class="project-card" data-category="hoteleiro">
              <div class="project-card__image project-card__image--3">
                <div class="project-card__overlay">
                  <span class="project-card__category">Hoteleiro</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Lake View Resort</h3>
                <span class="project-card__client">Direcional Engenharia</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">19.968 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">502 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Apart Hotel com 246 apartamentos em Brasília. Sistema Split para apartamentos e áreas comuns.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- GoInn -->
          <a class="project-card-link" href="../projetos/projeto-goinn.php">
            <article class="project-card" data-category="hoteleiro">
              <div class="project-card__image project-card__image--4">
                <div class="project-card__overlay">
                  <span class="project-card__category">Hoteleiro</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Estação Goiânia</h3>
                <span class="project-card__client">Hotel GoInn</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">15.199 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">326 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Hotel com 172 apartamentos, incluindo pressurização de escadas (108.960 m³/h).</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Linea Vitta -->
          <a class="project-card-link" href="../projetos/projeto-lineavitta.php">
            <article class="project-card" data-category="comercial">
              <div class="project-card__image project-card__image--5">
                <div class="project-card__overlay">
                  <span class="project-card__category">Comercial</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Linea Vitta</h3>
                <span class="project-card__client">Linea/JR Empreendimentos</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">27.500 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">941 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Edifício comercial em Brasília com sistema VRF/Split e pressurização de escadas.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Linea G -->
          <a class="project-card-link" href="../projetos/projeto-lineag.php">
            <article class="project-card" data-category="comercial">
              <div class="project-card__image project-card__image--9">
                <div class="project-card__overlay">
                  <span class="project-card__category">Comercial</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Linea G</h3>
                <span class="project-card__client">Linea/JR Empreendimentos</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">14.600 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">513 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Edifício misto Comercial/Apart hotel com 208 apartamentos, lojas e áreas administrativas.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- ESAF -->
          <a class="project-card-link" href="../projetos/projeto-esaf.php">
            <article class="project-card" data-category="governamental">
              <div class="project-card__image project-card__image--6">
                <div class="project-card__overlay">
                  <span class="project-card__category">Governamental</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">ESAF</h3>
                <span class="project-card__client">Ministério da Fazenda</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">18.500 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">1.220 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Sistema híbrido VRF-Split (350 TR) + Chiller-Fancoil (870 TR) para a Escola de Administração Fazendária.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- PRF -->
          <a class="project-card-link" href="../projetos/projeto-prf.php">
            <article class="project-card" data-category="governamental">
              <div class="project-card__image project-card__image--7">
                <div class="project-card__overlay">
                  <span class="project-card__category">Governamental</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">PRF Brasília</h3>
                <span class="project-card__client">Polícia Rodoviária Federal</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">6.872 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">343 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Sede da PRF em Vitória-ES com sistema VRF-Split para alojamentos, adm. e auditório.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Ontex -->
          <a class="project-card-link" href="../projetos/projeto-ontex.php">
            <article class="project-card" data-category="industrial">
              <div class="project-card__image project-card__image--10">
                <div class="project-card__overlay">
                  <span class="project-card__category">Industrial</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Ontex</h3>
                <span class="project-card__client">Ontex Global</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">15.600 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">1.050 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Controle de IBUTG com 710.000 m³/h para produção de fraldas, automação Siemens.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Savoy -->
          <a class="project-card-link" href="../projetos/projeto-savoy.php">
            <article class="project-card" data-category="industrial">
              <div class="project-card__image project-card__image--13">
                <div class="project-card__overlay">
                  <span class="project-card__category">Industrial</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Savoy Cosméticos</h3>
                <span class="project-card__client">Savoy</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">953 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Vazão</span>
                    <span class="spec__value">110.000 m³/h</span>
                  </div>
                </div>
                <p class="project-card__description">Ventilação e exaustão 100% para linha de envase de aerosóis com girotubo.</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

          <!-- Louis Dreyfus -->
          <a class="project-card-link" href="../projetos/projeto-louisdreyfus.php">
            <article class="project-card" data-category="industrial">
              <div class="project-card__image project-card__image--14">
                <div class="project-card__overlay">
                  <span class="project-card__category">Industrial</span>
                </div>
              </div>
              <div class="project-card__content">
                <h3 class="project-card__title">Louis Dreyfus</h3>
                <span class="project-card__client">Louis Dreyfus Company</span>
                <div class="project-card__specs">
                  <div class="spec">
                    <span class="spec__label">Área</span>
                    <span class="spec__value">577 m²</span>
                  </div>
                  <div class="spec">
                    <span class="spec__label">Capacidade</span>
                    <span class="spec__value">150 TR</span>
                  </div>
                </div>
                <p class="project-card__description">Climatização com expansão direta e 03 condicionadores Splitão (91.800 m³/h).</p>
                <span class="project-card__details">Ver detalhes</span>
              </div>
            </article>
          </a>

        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section cta-section">
      <div class="container">
        <div class="cta-card glass-card fade-in">
          <h2>Quer um projeto como esses?</h2>
          <p>Entre em contato para discutir as necessidades do seu empreendimento.</p>
          <div class="cta-buttons">
            <a href="../contato/" class="btn btn--primary">Solicitar Orçamento</a>
            <a href="../servicos/" class="btn btn--secondary">Conhecer Serviços</a>
          </div>
        </div>
      </div>
    </section>
  </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/whatsapp-float.php'; ?>
    <?php include '../includes/scripts.php'; ?>
  </body>
</html>
