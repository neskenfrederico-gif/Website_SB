<?php
$base             = '..';
$active_page      = 'artigos';
$page_title       = 'Climatização de Data Centers: CRAC, CRAH, In-Row e Free Cooling | Siqueira e Blanco';
$page_description = 'Guia técnico sobre climatização de data centers: sistemas CRAC, CRAH, In-Row, contenção de corredores, PUE e redundância Tier III/IV. Projetos de precisão para TI.';
$og_title         = 'Climatização de Data Centers: Guia Técnico';
$og_description   = 'CRAC, CRAH, In-Row, contenção de corredores e eficiência energética (PUE).';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/artigos/climatizacao-data-center.php';
$canonical        = 'https://siqueiraeblanco.com.br/artigos/climatizacao-data-center.php';
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
          "headline": "Climatização de Data Centers: CRAC, CRAH, In-Row e Free Cooling",
          "datePublished": "2026-02-08",
          "author": { "@type": "Organization", "name": "Siqueira e Blanco Engenharia HVAC" }
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
            <span aria-current="page">Data Centers</span>
          </nav>
          <span class="section__subtitle">Data Centers</span>
          <h1 class="page-hero__title">Climatização de <span class="gradient-text">Data Centers</span>: Guia Técnico</h1>
          <p class="page-hero__subtitle">Fevereiro 2026 · 14 min de leitura · Equipe Técnica S&B</p>
        </div>
      </section>

      <section class="article-content">
        <div class="container">
          <div class="article-content__wrapper">
            
            <p>A <strong>climatização de data centers</strong> é uma das aplicações mais críticas da engenharia HVAC. Servidores e equipamentos de TI geram grande quantidade de calor e exigem <strong>temperatura e umidade controladas 24/7</strong>, com alta confiabilidade e redundância.</p>

            <p>Neste guia, exploramos as principais tecnologias, estratégias de eficiência e requisitos para projetos de climatização de ambientes de missão crítica.</p>

            <h2>Requisitos Térmicos (ASHRAE)</h2>

            <p>A <strong>ASHRAE TC 9.9</strong> define as condições recomendadas para ambientes de TI:</p>

            <table class="article-table">
              <thead>
                <tr>
                  <th>Parâmetro</th>
                  <th>Classe A1 (Recomendado)</th>
                  <th>Classe A2 (Permitido)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Temperatura</strong></td>
                  <td>18-27°C</td>
                  <td>10-35°C</td>
                </tr>
                <tr>
                  <td><strong>Umidade Relativa</strong></td>
                  <td>≤60% e ponto de orvalho ≤15°C</td>
                  <td>20-80%</td>
                </tr>
                <tr>
                  <td><strong>Taxa de variação</strong></td>
                  <td>≤5°C/hora</td>
                  <td>≤20°C/hora</td>
                </tr>
              </tbody>
            </table>

            <div class="info-box">
              <div class="info-box__title">💡 Tendência Atual</div>
              <p>Data centers modernos operam com temperaturas mais altas (24-27°C) para economizar energia. A cada 1°C de aumento no setpoint, economia de <strong>4-5% no consumo de refrigeração</strong>.</p>
            </div>

            <h2>Sistemas de Climatização</h2>

            <h3>CRAC (Computer Room Air Conditioner)</h3>
            <ul>
              <li>Unidade de ar-condicionado de precisão com <strong>compressor próprio</strong></li>
              <li>Condensação a ar (externa) ou a água (torre/chiller)</li>
              <li>Ideal para salas de servidores pequenas/médias</li>
              <li>Capacidades: 5-100 kW por unidade</li>
            </ul>

            <h3>CRAH (Computer Room Air Handler)</h3>
            <ul>
              <li>Unidade de tratamento de ar conectada a <strong>central de água gelada</strong></li>
              <li>Maior eficiência em grandes instalações</li>
              <li>Permite free cooling com economizadores</li>
              <li>Capacidades: 30-300+ kW por unidade</li>
            </ul>

            <h3>In-Row Cooling</h3>
            <ul>
              <li>Unidades instaladas <strong>entre os racks</strong>, na própria fileira</li>
              <li>Resfriamento próximo à fonte de calor</li>
              <li>Ideal para alta densidade (>10 kW/rack)</li>
              <li>Menor mistura de ar quente/frio</li>
            </ul>

            <h3>Rear Door Heat Exchanger</h3>
            <ul>
              <li>Trocador de calor na <strong>porta traseira do rack</strong></li>
              <li>Remove calor diretamente na saída do servidor</li>
              <li>Para densidades extremas (20-40 kW/rack)</li>
            </ul>

            <h2>Estratégias de Eficiência</h2>

            <h3>Contenção de Corredores</h3>
            <p>Separação física entre corredores quentes e frios:</p>
            <ul>
              <li><strong>Contenção de corredor frio</strong> — Isola a entrada de ar frio nos servidores</li>
              <li><strong>Contenção de corredor quente</strong> — Isola o retorno de ar quente</li>
              <li>Reduz mistura e melhora eficiência em <strong>20-40%</strong></li>
            </ul>

            <h3>Free Cooling</h3>
            <ul>
              <li><strong>Economizador a ar</strong> — Usa ar externo quando temperatura permite</li>
              <li><strong>Economizador a água</strong> — Bypass do chiller em temperaturas baixas</li>
              <li>Economia de <strong>30-70%</strong> dependendo do clima</li>
            </ul>

            <h3>PUE (Power Usage Effectiveness)</h3>
            <p>Métrica de eficiência energética de data centers:</p>
            <ul>
              <li><strong>PUE = Energia Total / Energia de TI</strong></li>
              <li>PUE 2.0 — Data center típico antigo</li>
              <li>PUE 1.5 — Bom desempenho</li>
              <li>PUE 1.2 — Excelente (hyperscale moderno)</li>
            </ul>

            <h2>Redundância e Classificação Tier</h2>

            <table class="article-table">
              <thead>
                <tr>
                  <th>Tier</th>
                  <th>Redundância</th>
                  <th>Disponibilidade</th>
                  <th>Downtime/Ano</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Tier I</strong></td>
                  <td>N (sem redundância)</td>
                  <td>99.67%</td>
                  <td>28.8 horas</td>
                </tr>
                <tr>
                  <td><strong>Tier II</strong></td>
                  <td>N+1 (componentes)</td>
                  <td>99.75%</td>
                  <td>22 horas</td>
                </tr>
                <tr>
                  <td><strong>Tier III</strong></td>
                  <td>N+1 (manutenção concorrente)</td>
                  <td>99.98%</td>
                  <td>1.6 horas</td>
                </tr>
                <tr>
                  <td><strong>Tier IV</strong></td>
                  <td>2N (tolerante a falhas)</td>
                  <td>99.99%</td>
                  <td>26 minutos</td>
                </tr>
              </tbody>
            </table>

            <h2>Nossos Projetos de Data Center</h2>

            <ul>
              <li><strong><a href="../setores/datacenter.php">Setor Data Centers</a></strong> — Atuamos em projetos de climatização de precisão para data centers corporativos e colocations, com redundância Tier III/IV.</li>
              <li><strong><a href="../projetos/projeto-bancodobrasil.php">Banco do Brasil — Sedes SBS</a></strong> — Infraestrutura de climatização para CPDs das 3 sedes no Setor Bancário Sul de Brasília, com 4.350 TR e redundância operacional.</li>
              <li><strong><a href="../projetos/projeto-esaf.php">ESAF Brasília</a></strong> — Data center governamental com refrigeração de precisão e backup de climatização.</li>
              <li><strong>Banco do Brasil</strong> — Projetos de climatização para agências e CPDs regionais com requisitos de alta disponibilidade.</li>
              <li><strong>UFG</strong> — Data center acadêmico com sistema de contenção de corredores e monitoramento ambiental.</li>
            </ul>

            <div class="warning-box">
              <div class="warning-box__title">⚠️ Criticidade</div>
              <p>Falha na climatização de data center pode causar <strong>desligamento de emergência (EPO)</strong> dos servidores em minutos, resultando em perda de dados e interrupção de serviços. Redundância não é opcional.</p>
            </div>

            <h2>Monitoramento e Automação</h2>

            <ul>
              <li><strong>Sensores de temperatura/umidade</strong> — Em cada rack e corredor</li>
              <li><strong>CFD (Computational Fluid Dynamics)</strong> — Simulação de fluxo de ar</li>
              <li><strong>DCIM (Data Center Infrastructure Management)</strong> — Gestão integrada</li>
              <li><strong>Alarmes e notificações</strong> — 24/7 para equipe de operação</li>
            </ul>

            <div class="article-cta">
              <h3>Projeto de Data Center?</h3>
              <p>Projetamos sistemas de climatização de precisão para data centers de qualquer porte, com redundância Tier II a IV.</p>
              <a href="../contato/" class="btn">Solicitar Orçamento</a>
            </div>

          </div>
        </div>
      </section>

      <section class="related-articles">
        <div class="container">
          <h2 class="section__title">Artigos <span class="gradient-text">Relacionados</span></h2>
          <div class="related-articles__grid">
            <a href="sistemas-agua-gelada-cag.php" class="related-card">
              <span class="related-card__category">Sistemas HVAC</span>
              <h3 class="related-card__title">Sistemas de Água Gelada</h3>
              <p class="related-card__excerpt">Chillers e CRAH para grandes data centers.</p>
            </a>
            <a href="o-que-e-pmoc.php" class="related-card">
              <span class="related-card__category">Legislação</span>
              <h3 class="related-card__title">O que é PMOC?</h3>
              <p class="related-card__excerpt">Manutenção obrigatória para ambientes climatizados.</p>
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
