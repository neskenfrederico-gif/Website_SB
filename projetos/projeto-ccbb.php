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
          Poucos projetos de engenharia HVAC no Brasil carregam tanta responsabilidade simbólica quanto a climatização do
          CCBB Brasília. O Centro Cultural Banco do Brasil funciona dentro do Edifício Tancredo Neves — projetado por
          Oscar Niemeyer, com sua icônica fachada curva em concreto aparente e janelas de formas orgânicas que se tornaram
          cartão-postal da capital federal. O complexo ocupa um terreno de 380.000 m² às margens do Eixo Monumental e é
          um dos centros culturais mais visitados do mundo, recebendo milhões de pessoas por ano em suas galerias, teatro,
          cinema e espaços educativos.
        </p>
        <p>
          Climatizar um espaço cultural desse porte não é apenas uma questão de conforto — é uma questão de preservação
          patrimonial. As quatro galerias de exposição, que somam cerca de 1.200 m², recebem acervos itinerantes de
          museus internacionais, instalações de arte contemporânea e peças históricas de valor inestimável. Uma tela de
          Monet, uma escultura em bronze do século XVIII ou uma fotografia original de Sebastião Salgado exigem condições
          ambientais absolutamente estáveis — tipicamente 21°C ± 1°C e 50% ± 5% de umidade relativa, 24 horas por dia,
          365 dias por ano. Qualquer desvio pode provocar craqueamento de tintas, oxidação de metais, deformação de
          suportes em madeira ou degradação irreversível de materiais orgânicos.
        </p>
        <p>
          Para atender essa exigência, as galerias foram equipadas com unidades <strong>dual fluid de precisão</strong> —
          equipamentos que operam simultaneamente com serpentinas de água gelada (resfriamento) e resistências ou serpentinas
          de água quente (reaquecimento), permitindo desumidificação ativa sem queda de temperatura. Essa tecnologia
          garante controle fino e contínuo dos setpoints, com variação mínima mesmo durante as transições de carga térmica
          causadas pelo fluxo variável de visitantes ao longo do dia.
        </p>
        <p>
          O teatro, com capacidade para 262 espectadores, e o cinema, com 70 lugares, impõem outro nível de complexidade:
          a climatização precisa ser imperceptível. Difusores de baixa velocidade, dutos com atenuadores acústicos e
          equipamentos selecionados por nível de pressão sonora garantem que o sistema opere em silêncio absoluto durante
          apresentações, projeções e concertos. A renovação de ar é dimensionada para ocupação plena, mantendo qualidade
          do ar interior (QAI) dentro dos parâmetros da RE ANVISA nº 09 mesmo nas sessões lotadas.
        </p>
        <p>
          A central térmica é composta por chillers tipo parafuso com condensação a água, alimentados por torre de
          resfriamento dedicada com tratamento químico automatizado. A escolha por condensação a água — e não a ar —
          proporciona maior eficiência energética (COP superior) e operação mais silenciosa, fundamental em um edifício
          cultural onde o ruído externo de condensadores a ar seria inaceitável. A distribuição nos ambientes é feita
          por fancoils e fancoletes, com zoneamento que permite controle independente de temperatura em cada espaço
          conforme sua ocupação e finalidade.
        </p>
        <p>
          Com 900 TR de capacidade instalada nos 15.000 m² do Edifício Tancredo Neves, este projeto representa a
          convergência entre engenharia de precisão e respeito à arquitetura modernista brasileira — onde cada decisão
          técnica foi tomada para ser invisível ao visitante, mas absolutamente determinante para a preservação do
          patrimônio cultural que o CCBB abriga. Um dos projetos mais singulares e exigentes do portfólio da Siqueira
          e Blanco.
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