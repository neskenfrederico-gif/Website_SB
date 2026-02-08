<?php
$base             = '..';
$active_page      = 'artigos';
$page_title       = 'Classificação de Salas Limpas ISO 14644: Guia Técnico Completo | Siqueira e Blanco';
$page_description = 'Guia completo sobre classificação de salas limpas ISO 14644. Entenda as classes 1 a 9, contagem de partículas, requisitos HEPA/ULPA e aplicações farmacêuticas.';
$og_title         = 'Classificação de Salas Limpas ISO 14644: Guia Técnico';
$og_description   = 'Classes ISO 5 a 8, contagem de partículas e requisitos de filtragem para ambientes controlados.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/artigos/classificacao-salas-limpas-iso-14644.php';
$canonical        = 'https://siqueiraeblanco.com.br/artigos/classificacao-salas-limpas-iso-14644.php';
$extra_css        = ['artigo.css?v=1770574139'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "headline": "Classificação de Salas Limpas ISO 14644: Guia Técnico Completo",
          "description": "Guia completo sobre classificação de salas limpas ISO 14644. Entenda as classes, contagem de partículas e requisitos HEPA/ULPA.",
          "image": "https://siqueiraeblanco.com.br/banner_hero.webp",
          "datePublished": "2026-02-08",
          "dateModified": "2026-02-08",
          "author": {
            "@type": "Organization",
            "name": "Siqueira e Blanco Engenharia HVAC"
          },
          "publisher": {
            "@type": "Organization",
            "name": "Siqueira e Blanco Engenharia HVAC",
            "logo": {
              "@type": "ImageObject",
              "url": "https://siqueiraeblanco.com.br/Logomarca.png"
            }
          }
        }
        </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Início", "item": "https://siqueiraeblanco.com.br/" },
            { "@type": "ListItem", "position": 2, "name": "Artigos", "item": "https://siqueiraeblanco.com.br/artigos/" },
            { "@type": "ListItem", "position": 3, "name": "ISO 14644", "item": "https://siqueiraeblanco.com.br/artigos/classificacao-salas-limpas-iso-14644.php" }
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
            <span aria-current="page">ISO 14644</span>
          </nav>
          <span class="section__subtitle">Salas Limpas</span>
          <h1 class="page-hero__title">Classificação de Salas Limpas: <span class="gradient-text">ISO 14644</span> Explicada</h1>
          <p class="page-hero__subtitle">Fevereiro 2026 · 12 min de leitura · Equipe Técnica S&B</p>
        </div>
      </section>

      <section class="article-content">
        <div class="container">
          <div class="article-content__wrapper">
            
            <p>A <strong>ISO 14644</strong> é a norma internacional que estabelece os padrões para classificação e monitoramento de <strong>salas limpas (cleanrooms)</strong> e ambientes controlados. Ela define os limites máximos de partículas em suspensão no ar para cada classe de limpeza.</p>

            <p>Entender essa classificação é fundamental para projetar sistemas HVAC adequados para <strong>indústrias farmacêuticas, hospitais, laboratórios, microeletrônica</strong> e qualquer ambiente que exija controle de contaminação.</p>

            <h2>O que é uma Sala Limpa?</h2>

            <p>Uma <strong>sala limpa</strong> é um ambiente com controle rigoroso de:</p>

            <ul>
              <li><strong>Concentração de partículas</strong> em suspensão no ar</li>
              <li><strong>Temperatura</strong> (geralmente 20-24°C)</li>
              <li><strong>Umidade relativa</strong> (geralmente 30-60%)</li>
              <li><strong>Pressão diferencial</strong> (cascata de pressão)</li>
              <li><strong>Fluxo de ar</strong> (unidirecional ou turbulento)</li>
            </ul>

            <div class="info-box">
              <div class="info-box__title">💡 Curiosidade</div>
              <p>O ar ambiente comum contém aproximadamente <strong>35 milhões de partículas ≥0,5µm por metro cúbico</strong>. Uma sala limpa ISO 5 permite no máximo <strong>3.520 partículas</strong> — uma redução de 10.000 vezes!</p>
            </div>

            <h2>Classes ISO 14644-1</h2>

            <p>A norma define <strong>9 classes</strong>, sendo a Classe 1 a mais limpa e a Classe 9 a menos restritiva:</p>

            <table class="article-table">
              <thead>
                <tr>
                  <th>Classe ISO</th>
                  <th>Partículas ≥0,5µm/m³</th>
                  <th>Equivalente FS 209E</th>
                  <th>Aplicação Típica</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>ISO 1</strong></td>
                  <td>Não aplicável</td>
                  <td>—</td>
                  <td>Nanotecnologia</td>
                </tr>
                <tr>
                  <td><strong>ISO 2</strong></td>
                  <td>4</td>
                  <td>—</td>
                  <td>Semicondutores avançados</td>
                </tr>
                <tr>
                  <td><strong>ISO 3</strong></td>
                  <td>35</td>
                  <td>Classe 1</td>
                  <td>Microeletrônica</td>
                </tr>
                <tr>
                  <td><strong>ISO 4</strong></td>
                  <td>352</td>
                  <td>Classe 10</td>
                  <td>Semicondutores</td>
                </tr>
                <tr>
                  <td><strong>ISO 5</strong></td>
                  <td>3.520</td>
                  <td>Classe 100</td>
                  <td>Farmacêutica estéril (Grau A)</td>
                </tr>
                <tr>
                  <td><strong>ISO 6</strong></td>
                  <td>35.200</td>
                  <td>Classe 1.000</td>
                  <td>Manipulação asséptica</td>
                </tr>
                <tr>
                  <td><strong>ISO 7</strong></td>
                  <td>352.000</td>
                  <td>Classe 10.000</td>
                  <td>Farmacêutica (Grau C)</td>
                </tr>
                <tr>
                  <td><strong>ISO 8</strong></td>
                  <td>3.520.000</td>
                  <td>Classe 100.000</td>
                  <td>Farmacêutica (Grau D)</td>
                </tr>
                <tr>
                  <td><strong>ISO 9</strong></td>
                  <td>35.200.000</td>
                  <td>—</td>
                  <td>Ambiente controlado básico</td>
                </tr>
              </tbody>
            </table>

            <h2>Correlação com Graus ANVISA/GMP</h2>

            <p>Para a <strong>indústria farmacêutica brasileira</strong>, a ANVISA utiliza a classificação em Graus (A, B, C, D), que se correlaciona com a ISO 14644:</p>

            <table class="article-table">
              <thead>
                <tr>
                  <th>Grau ANVISA</th>
                  <th>ISO "Em Repouso"</th>
                  <th>ISO "Em Operação"</th>
                  <th>Aplicação</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Grau A</strong></td>
                  <td>ISO 5</td>
                  <td>ISO 5</td>
                  <td>Zona crítica de envase</td>
                </tr>
                <tr>
                  <td><strong>Grau B</strong></td>
                  <td>ISO 5</td>
                  <td>ISO 7</td>
                  <td>Área circundante ao Grau A</td>
                </tr>
                <tr>
                  <td><strong>Grau C</strong></td>
                  <td>ISO 7</td>
                  <td>ISO 8</td>
                  <td>Preparação de soluções</td>
                </tr>
                <tr>
                  <td><strong>Grau D</strong></td>
                  <td>ISO 8</td>
                  <td>—</td>
                  <td>Manuseio de componentes</td>
                </tr>
              </tbody>
            </table>

            <div class="warning-box">
              <div class="warning-box__title">⚠️ Importante</div>
              <p><strong>"Em repouso"</strong> significa sala instalada e funcionando, mas sem pessoal. <strong>"Em operação"</strong> é com a equipe trabalhando normalmente. A classe geralmente piora 1-2 níveis em operação.</p>
            </div>

            <h2>Requisitos de HVAC por Classe</h2>

            <h3>Filtração</h3>

            <ul>
              <li><strong>ISO 5-6:</strong> Filtros HEPA H14 (99,995% eficiência)</li>
              <li><strong>ISO 7:</strong> Filtros HEPA H13 (99,95% eficiência)</li>
              <li><strong>ISO 8:</strong> Filtros HEPA H13 ou F9 (dependendo da aplicação)</li>
            </ul>

            <h3>Taxa de Renovação de Ar</h3>

            <ul>
              <li><strong>ISO 5:</strong> 300-600 trocas/hora (fluxo unidirecional)</li>
              <li><strong>ISO 6:</strong> 150-200 trocas/hora</li>
              <li><strong>ISO 7:</strong> 50-60 trocas/hora</li>
              <li><strong>ISO 8:</strong> 20-30 trocas/hora</li>
            </ul>

            <h3>Pressão Diferencial</h3>

            <p>Salas limpas operam em <strong>cascata de pressão positiva</strong> em relação às áreas menos limpas:</p>

            <ul>
              <li>Diferencial típico: <strong>10-15 Pa</strong> entre ambientes adjacentes</li>
              <li>Para contenção (ex: antibióticos): pressão negativa</li>
            </ul>

            <h2>Fluxo de Ar: Unidirecional vs. Turbulento</h2>

            <h3>Fluxo Unidirecional (Laminar)</h3>
            <ul>
              <li>Usado em <strong>ISO 5 e classes superiores</strong></li>
              <li>Ar flui em linhas paralelas (vertical ou horizontal)</li>
              <li>Velocidade típica: 0,36-0,54 m/s</li>
              <li>Partículas são "varridas" para fora continuamente</li>
            </ul>

            <h3>Fluxo Turbulento (Não-Unidirecional)</h3>
            <ul>
              <li>Usado em <strong>ISO 6 a 8</strong></li>
              <li>Ar misturado por difusores convencionais</li>
              <li>Mais econômico, porém menos eficiente na remoção de partículas</li>
            </ul>

            <h2>Monitoramento e Validação</h2>

            <p>A ISO 14644-3 define os métodos de teste para validação de salas limpas:</p>

            <ol>
              <li><strong>Contagem de partículas</strong> com contador óptico</li>
              <li><strong>Teste de integridade de filtros</strong> HEPA (DOP/PAO)</li>
              <li><strong>Visualização de fluxo de ar</strong> (smoke test)</li>
              <li><strong>Medição de velocidade</strong> e uniformidade do ar</li>
              <li><strong>Verificação de pressão diferencial</strong></li>
              <li><strong>Teste de recuperação</strong> (tempo para retornar à classe após perturbação)</li>
            </ol>

            <div class="article-cta">
              <h3>Projeto de Sala Limpa?</h3>
              <p>Projetamos salas limpas ISO 5 a 8 para indústrias farmacêuticas, hospitais e laboratórios.</p>
              <a href="../contato/" class="btn">Solicitar Orçamento</a>
            </div>

            <h2>Nossos Projetos de Salas Limpas</h2>

            <p>Confira alguns projetos de salas limpas ISO 14644 que executamos:</p>

            <ul>
              <li><strong><a href="../projetos/projeto-geolab-siteii.php">Geolab Site II</a></strong> — 8.000 m² de salas limpas <strong>Grau B/C (ISO 7/8)</strong> para produção de colírios. Central de água gelada com 900 TR e UTAs com filtragem HEPA H14.</li>
              <li><strong><a href="../projetos/projeto-geolab.php">Geolab Site I</a></strong> — Complexo farmacêutico com <strong>25.000 m²</strong>, incluindo áreas de efervescentes com desumidificador químico e salas classificadas ISO 7/8.</li>
              <li><strong><a href="../projetos/projeto-injetaveis.php">Brainfarma Injetáveis</a></strong> — Prédio de injetáveis com <strong>salas limpas Grau A/B</strong>, sistema de expansão indireta com FANCOIL e filtragem absoluta terminal.</li>
              <li><strong><a href="../projetos/projeto-hypermarcas.php">Hypermarcas</a></strong> — Retrofit de salas limpas para adequação às novas RDCs da ANVISA, com upgrade de filtração e cascata de pressão.</li>
              <li><strong><a href="../projetos/projeto-brainfarma-fluxos.php">Brainfarma Fluxos</a></strong> — Análise de fluxo de ar e requalificação de áreas classificadas em planta existente.</li>
            </ul>

            <h2>Erros Comuns no Projeto</h2>

            <ul>
              <li><strong>Subdimensionar a renovação de ar</strong> — resultando em classe pior que a especificada</li>
              <li><strong>Ignorar a cascata de pressão</strong> — contaminação cruzada entre ambientes</li>
              <li><strong>Filtros inadequados</strong> — HEPA classe errada ou vedação deficiente</li>
              <li><strong>Layout incorreto</strong> — fluxo de pessoas/materiais contaminando áreas limpas</li>
              <li><strong>Materiais construtivos porosos</strong> — dificultam limpeza e liberam partículas</li>
            </ul>

            <h2>Normas Relacionadas</h2>

            <ul>
              <li><strong>ISO 14644-1</strong> — Classificação da limpeza do ar</li>
              <li><strong>ISO 14644-2</strong> — Monitoramento contínuo</li>
              <li><strong>ISO 14644-3</strong> — Métodos de teste</li>
              <li><strong>ISO 14644-4</strong> — Projeto, construção e partida</li>
              <li><strong>ANVISA RDC 301/2019</strong> — Boas Práticas de Fabricação de Medicamentos</li>
              <li><strong>NBR 7256</strong> — Tratamento de ar em estabelecimentos de saúde</li>
            </ul>

          </div>
        </div>
      </section>

      <!-- Artigos Relacionados -->
      <section class="related-articles">
        <div class="container">
          <h2 class="section__title">Artigos <span class="gradient-text">Relacionados</span></h2>
          <div class="related-articles__grid">
            <a href="o-que-e-pmoc.php" class="related-card">
              <span class="related-card__category">Legislação</span>
              <h3 class="related-card__title">O que é PMOC? Guia Completo</h3>
              <p class="related-card__excerpt">Entenda a obrigatoriedade e como implementar.</p>
            </a>
            <a href="retrofit-hvac-quando-fazer.php" class="related-card">
              <span class="related-card__category">Retrofit</span>
              <h3 class="related-card__title">Retrofit de HVAC: Quando Vale a Pena?</h3>
              <p class="related-card__excerpt">Análise de ROI e sinais de que seu sistema precisa de modernização.</p>
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
