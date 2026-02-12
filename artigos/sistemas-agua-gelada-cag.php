<?php
$base             = '..';
$active_page      = 'artigos';
$page_title       = 'Sistemas de Água Gelada (CAG): Guia Completo para Grandes Instalações | Siqueira e Blanco';
$page_description = 'Guia técnico sobre centrais de água gelada (CAG/chilled water): chillers, torres de resfriamento, bombas, fancoils. Quando usar, dimensionamento e vantagens para grandes edificações.';
$og_title         = 'Sistemas de Água Gelada (CAG): Guia Completo';
$og_description   = 'Chillers, torres, bombas e fancoils. Quando usar sistemas de água gelada em grandes instalações.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/artigos/sistemas-agua-gelada-cag.php';
$canonical        = 'https://siqueiraeblanco.com.br/artigos/sistemas-agua-gelada-cag.php';
$extra_css        = ['artigo.css?v=1770973200'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "headline": "Sistemas de Água Gelada (CAG): Guia Completo para Grandes Instalações",
          "description": "Guia técnico sobre centrais de água gelada: chillers, torres de resfriamento, bombas, fancoils e dimensionamento.",
          "image": "https://siqueiraeblanco.com.br/banner_hero.webp",
          "datePublished": "2026-02-08",
          "dateModified": "2026-02-08",
          "author": { "@type": "Organization", "name": "Siqueira e Blanco Engenharia HVAC" },
          "publisher": { "@type": "Organization", "name": "Siqueira e Blanco Engenharia HVAC", "logo": { "@type": "ImageObject", "url": "https://siqueiraeblanco.com.br/Logomarca.png" } }
        }
        </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Início", "item": "https://siqueiraeblanco.com.br/" },
            { "@type": "ListItem", "position": 2, "name": "Artigos", "item": "https://siqueiraeblanco.com.br/artigos/" },
            { "@type": "ListItem", "position": 3, "name": "Sistemas de Água Gelada", "item": "https://siqueiraeblanco.com.br/artigos/sistemas-agua-gelada-cag.php" }
          ]
        }
        </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

<main id="main-content">
      <section class="article-hero">
        <div class="container">
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../">Início</a>
            <span aria-hidden="true">›</span>
            <a href="./">Artigos</a>
            <span aria-hidden="true">›</span>
            <span aria-current="page">Água Gelada (CAG)</span>
          </nav>
          <span class="section__subtitle">Sistemas HVAC</span>
          <h1 class="page-hero__title">Sistemas de <span class="gradient-text">Água Gelada (CAG)</span>: Guia Completo</h1>
          <p class="page-hero__subtitle">Fevereiro 2026 · 12 min de leitura · Equipe Técnica S&B</p>
        </div>
      </section>

      <section class="article-content">
        <div class="container">
          <div class="article-content__wrapper">
            
            <p>Os <strong>sistemas de água gelada</strong> (também chamados de CAG — Central de Água Gelada ou <em>chilled water systems</em>) são a solução preferida para climatização de <strong>grandes edificações</strong>: indústrias, hospitais, shopping centers, data centers e edifícios corporativos de grande porte.</p>

            <p>Neste guia, explicamos como funcionam, quando usar, e os principais componentes de um sistema de água gelada bem projetado.</p>

            <h2>Como Funciona um Sistema de Água Gelada?</h2>

            <p>O princípio é simples: um <strong>chiller</strong> (resfriador de líquidos) produz água gelada (tipicamente 5-7°C) que é distribuída por tubulações até os ambientes climatizados. Lá, <strong>fancoils</strong> ou <strong>UTAs</strong> (Unidades de Tratamento de Ar) trocam calor com o ar ambiente.</p>

            <div class="info-box">
              <div class="info-box__title">🌡️ Ciclo Básico</div>
              <p><strong>Chiller</strong> → Água gelada (5-7°C) → <strong>Bombas</strong> → Tubulação → <strong>Fancoils/UTAs</strong> → Retorno (12-14°C) → Chiller</p>
            </div>

            <h2>Componentes Principais</h2>

            <h3>1. Chillers (Resfriadores)</h3>
            <p>O coração do sistema. Tipos principais:</p>
            <ul>
              <li><strong>Chillers a ar</strong> — Condensação a ar, instalação externa. Mais simples, mas menor eficiência em climas quentes.</li>
              <li><strong>Chillers a água</strong> — Condensação em torre de resfriamento. Maior eficiência, ideal para grandes cargas.</li>
              <li><strong>Chillers centrífugos</strong> — Para cargas acima de 300 TR, alta eficiência (COP > 6).</li>
              <li><strong>Chillers scroll/parafuso</strong> — Para cargas de 30-300 TR, boa relação custo-benefício.</li>
            </ul>

            <h3>2. Torres de Resfriamento</h3>
            <p>Rejeitam o calor do condensador para a atmosfera através de evaporação. Essenciais para chillers a água.</p>

            <h3>3. Bombas de Água Gelada</h3>
            <ul>
              <li><strong>Bombas primárias</strong> — Circulam água pelo chiller (vazão constante)</li>
              <li><strong>Bombas secundárias</strong> — Distribuem para os ambientes (vazão variável com VFD)</li>
            </ul>

            <h3>4. Fancoils e UTAs</h3>
            <ul>
              <li><strong>Fancoils</strong> — Unidades compactas para ambientes individuais (escritórios, quartos)</li>
              <li><strong>UTAs</strong> — Unidades maiores com tratamento de ar (filtragem, umidificação, ar externo)</li>
            </ul>

            <h3>5. Sistema de Automação (BMS)</h3>
            <p>Controla temperaturas, pressões, vazões e otimiza consumo de energia.</p>

            <h2>Quando Usar Água Gelada?</h2>

            <table class="article-table">
              <thead>
                <tr>
                  <th>Critério</th>
                  <th>Água Gelada</th>
                  <th>Expansão Direta (Split/VRF)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Carga térmica</strong></td>
                  <td>> 100 TR (recomendado)</td>
                  <td>< 100 TR</td>
                </tr>
                <tr>
                  <td><strong>Distância chiller-ambiente</strong></td>
                  <td>Ilimitada (água em tubulação)</td>
                  <td>Limitada (refrigerante)</td>
                </tr>
                <tr>
                  <td><strong>Vida útil</strong></td>
                  <td>20-25 anos</td>
                  <td>12-15 anos</td>
                </tr>
                <tr>
                  <td><strong>Eficiência em carga parcial</strong></td>
                  <td>Excelente (com VFD)</td>
                  <td>Boa</td>
                </tr>
                <tr>
                  <td><strong>Manutenção centralizada</strong></td>
                  <td>Sim (CAG)</td>
                  <td>Distribuída</td>
                </tr>
                <tr>
                  <td><strong>Custo inicial</strong></td>
                  <td>Maior</td>
                  <td>Menor</td>
                </tr>
                <tr>
                  <td><strong>Custo operacional</strong></td>
                  <td>Menor (economia de escala)</td>
                  <td>Maior</td>
                </tr>
              </tbody>
            </table>

            <h2>Nossos Projetos de Água Gelada</h2>

            <p>Confira alguns projetos de CAG que executamos:</p>

            <ul>
              <li><strong><a href="../projetos/projeto-geolab.php">Geolab Site I</a></strong> — Central de água gelada com <strong>1.500 TR</strong> de capacidade, 3 chillers centrífugos em paralelo, torres de resfriamento e sistema de bombeamento primário/secundário.</li>
              <li><strong><a href="../projetos/projeto-geolab-siteii.php">Geolab Site II</a></strong> — CAG de <strong>900 TR</strong> com chillers de parafuso e VFD em bombas para otimização energética. Atende 8.000 m² de salas limpas.</li>
              <li><strong><a href="../projetos/projeto-esaf.php">ESAF Brasília</a></strong> — Sistema híbrido com Chiller/Fancoil (<strong>870 TR</strong>) + VRF-Split (350 TR) para 18.500 m² da Escola de Administração Fazendária.</li>
              <li><strong><a href="../projetos/projeto-injetaveis.php">Brainfarma Injetáveis</a></strong> — Sistema de expansão indireta com <strong>180 TR</strong>, fancoils para salas limpas com controle individual de temperatura.</li>
              <li><strong><a href="../projetos/projeto-cosmed.php">Brainfarma COSMED</a></strong> — CAG de <strong>160 TR</strong> para produção de dermocosméticos.</li>
              <li><strong><a href="../projetos/projeto-esaf.php">ESAF Brasília</a></strong> — Central de água gelada para edifício governamental, com redundância N+1.</li>
            </ul>

            <div class="warning-box">
              <div class="warning-box__title">💡 Dica de Projeto</div>
              <p>Para cargas acima de 500 TR, considere <strong>múltiplos chillers em paralelo</strong> com staging automático. Isso garante redundância e melhor eficiência em carga parcial.</p>
            </div>

            <h2>Dimensionamento: Fatores Críticos</h2>

            <ol>
              <li><strong>Carga térmica</strong> — Cálculo preciso com software (HAP, Trace 700)</li>
              <li><strong>Perfil de carga</strong> — Variação ao longo do dia/ano</li>
              <li><strong>Redundância</strong> — N+1 para operações críticas</li>
              <li><strong>Delta T</strong> — Diferencial de temperatura (típico: 5-7°C)</li>
              <li><strong>Perda de carga</strong> — Dimensionamento de tubulação e bombas</li>
              <li><strong>Expansão futura</strong> — Prever crescimento de 20-30%</li>
            </ol>

            <h2>Eficiência Energética</h2>

            <p>Estratégias para reduzir consumo:</p>

            <ul>
              <li><strong>VFD em bombas e ventiladores</strong> — Economia de 30-50% em carga parcial</li>
              <li><strong>Chillers com compressor de velocidade variável</strong></li>
              <li><strong>Free cooling</strong> — Usar ar externo frio quando disponível</li>
              <li><strong>Reset de setpoint</strong> — Aumentar temperatura da água gelada em carga parcial</li>
              <li><strong>Otimização de torres</strong> — Approach e range adequados</li>
            </ul>

            <div class="article-cta">
              <h3>Projeto de Central de Água Gelada?</h3>
              <p>Projetamos CAGs de 50 a 5.000+ TR para indústrias, hospitais e grandes edificações.</p>
              <a href="../contato/" class="btn">Solicitar Orçamento</a>
            </div>

          </div>
        </div>
      </section>

      <section class="related-articles">
        <div class="container">
          <h2 class="section__title">Artigos <span class="gradient-text">Relacionados</span></h2>
          <div class="related-articles__grid">
            <a href="sistemas-vrf.php" class="related-card">
              <span class="related-card__category">Sistemas HVAC</span>
              <h3 class="related-card__title">Sistemas VRF: Quando Usar?</h3>
              <p class="related-card__excerpt">Vantagens do VRF para edifícios comerciais e hotéis.</p>
            </a>
            <a href="retrofit-hvac-quando-fazer.php" class="related-card">
              <span class="related-card__category">Retrofit</span>
              <h3 class="related-card__title">Retrofit de HVAC</h3>
              <p class="related-card__excerpt">Quando modernizar seu sistema de climatização.</p>
            </a>
          </div>
        </div>
      </section>
    </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/whatsapp-float.php'; ?>
    <?php include '../includes/scripts.php'; ?>
  </body>
</html>
