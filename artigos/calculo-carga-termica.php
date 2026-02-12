<?php
$base             = '..';
$active_page      = 'artigos';
$page_title       = 'Cálculo de Carga Térmica: ASHRAE, HAP e Trace 700 | Siqueira e Blanco';
$page_description = 'Guia técnico sobre cálculo de carga térmica para ar-condicionado: metodologia ASHRAE, softwares HAP e Trace 700, fatores de cálculo e dimensionamento de sistemas HVAC.';
$og_title         = 'Cálculo de Carga Térmica: ASHRAE e HAP';
$og_description   = 'Como calcular a carga térmica para dimensionamento de sistemas de ar-condicionado.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/artigos/calculo-carga-termica.php';
$canonical        = 'https://siqueiraeblanco.com.br/artigos/calculo-carga-termica.php';
$extra_css        = ['artigo.css?v=1770973200'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
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
            <span aria-current="page">Carga Térmica</span>
          </nav>
          <span class="section__subtitle">Engenharia</span>
          <h1 class="page-hero__title">Cálculo de <span class="gradient-text">Carga Térmica</span>: Fundamentos</h1>
          <p class="page-hero__subtitle">Fevereiro 2026 · 15 min de leitura</p>
        </div>
      </section>

      <section class="article-content">
        <div class="container">
          <div class="article-content__wrapper">
            
            <p>O <strong>cálculo de carga térmica</strong> é a base de qualquer projeto de ar-condicionado. Ele determina a quantidade de calor que o sistema precisa remover (resfriamento) ou adicionar (aquecimento) para manter as condições de conforto ou processo.</p>

            <p>Um cálculo mal feito resulta em sistemas <strong>subdimensionados</strong> (não atingem temperatura desejada) ou <strong>superdimensionados</strong> (custo desnecessário e baixa eficiência em carga parcial).</p>

            <h2>Componentes da Carga Térmica</h2>

            <h3>Carga Sensível (Temperatura)</h3>

            <table class="article-table">
              <thead>
                <tr>
                  <th>Componente</th>
                  <th>Descrição</th>
                  <th>Fatores</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Transmissão</strong></td>
                  <td>Calor através de paredes, teto, piso</td>
                  <td>Área, U (condutância), ΔT</td>
                </tr>
                <tr>
                  <td><strong>Radiação solar</strong></td>
                  <td>Calor através de vidros e superfícies</td>
                  <td>Orientação, área, SHGC, sombreamento</td>
                </tr>
                <tr>
                  <td><strong>Infiltração</strong></td>
                  <td>Ar externo por frestas e aberturas</td>
                  <td>Volume, ΔT, taxa de infiltração</td>
                </tr>
                <tr>
                  <td><strong>Pessoas</strong></td>
                  <td>Calor metabólico (sensível)</td>
                  <td>Número, atividade (65-130 W/pessoa)</td>
                </tr>
                <tr>
                  <td><strong>Iluminação</strong></td>
                  <td>Calor de luminárias</td>
                  <td>Potência instalada (W/m²)</td>
                </tr>
                <tr>
                  <td><strong>Equipamentos</strong></td>
                  <td>Calor de computadores, máquinas</td>
                  <td>Potência, fator de uso</td>
                </tr>
              </tbody>
            </table>

            <h3>Carga Latente (Umidade)</h3>
            <ul>
              <li><strong>Pessoas</strong> — Respiração e transpiração (30-60 W/pessoa)</li>
              <li><strong>Infiltração</strong> — Ar externo úmido</li>
              <li><strong>Processos</strong> — Água aberta, cozimento, lavagem</li>
            </ul>

            <h3>Carga de Ar Externo</h3>
            <p>Ar de renovação conforme NBR 16401 ou ASHRAE 62.1:</p>
            <ul>
              <li>Escritórios: 27 m³/h por pessoa</li>
              <li>Salas de reunião: 31 m³/h por pessoa</li>
              <li>Hospitais: 54-81 m³/h por pessoa</li>
            </ul>

            <div class="info-box">
              <div class="info-box__title">💡 Dica Importante</div>
              <p>O ar externo geralmente representa <strong>30-50% da carga total</strong> em edifícios comerciais. Economizadores e recuperadores de calor podem reduzir significativamente essa parcela.</p>
            </div>

            <h2>Metodologias de Cálculo</h2>

            <h3>ASHRAE Handbook — Fundamentals</h3>
            <p>Referência mundial para cálculos de carga térmica:</p>
            <ul>
              <li><strong>RTS (Radiant Time Series)</strong> — Método atual para cargas de pico</li>
              <li><strong>CLTD/SCL/CLF</strong> — Método simplificado (ainda usado)</li>
              <li><strong>Heat Balance</strong> — Método mais preciso, usado em softwares</li>
            </ul>

            <h3>NBR 16401</h3>
            <p>Norma brasileira para instalações de ar-condicionado:</p>
            <ul>
              <li>Define condições de projeto para cidades brasileiras</li>
              <li>Requisitos de vazão de ar externo</li>
              <li>Critérios de conforto térmico</li>
            </ul>

            <h2>Softwares de Cálculo</h2>

            <h3>Carrier HAP (Hourly Analysis Program)</h3>
            <ul>
              <li>Software mais usado no Brasil</li>
              <li>Cálculo hora a hora (8.760 horas/ano)</li>
              <li>Seleção de equipamentos Carrier integrada</li>
              <li>Análise de energia e custos operacionais</li>
            </ul>

            <h3>Trane TRACE 700</h3>
            <ul>
              <li>Similar ao HAP, com foco em análise de energia</li>
              <li>Comparação de alternativas de sistemas</li>
              <li>Relatórios para certificação LEED</li>
            </ul>

            <h3>EnergyPlus</h3>
            <ul>
              <li>Software gratuito do DOE (EUA)</li>
              <li>Mais poderoso, porém mais complexo</li>
              <li>Usado para simulações detalhadas e pesquisa</li>
            </ul>

            <h3>Design Builder / OpenStudio</h3>
            <ul>
              <li>Interface gráfica para EnergyPlus</li>
              <li>Integração com modelos BIM</li>
            </ul>

            <h2>Dados de Entrada Essenciais</h2>

            <ol>
              <li><strong>Localização</strong> — Latitude, altitude, dados climáticos</li>
              <li><strong>Orientação</strong> — Fachadas e exposição solar</li>
              <li><strong>Envoltória</strong> — Paredes, telhado, vidros (U, SHGC)</li>
              <li><strong>Ocupação</strong> — Número de pessoas, horários</li>
              <li><strong>Iluminação</strong> — Potência instalada, horários</li>
              <li><strong>Equipamentos</strong> — Computadores, copiadoras, etc.</li>
              <li><strong>Setpoints</strong> — Temperatura e umidade desejadas</li>
              <li><strong>Horários de operação</strong> — Schedules de uso</li>
            </ol>

            <h2>Exemplo de Cálculo</h2>

            <p>Escritório em Goiânia (16°S, 750m altitude):</p>

            <pre style="background: rgba(255,255,255,0.05); padding: 1rem; border-radius: 8px; overflow-x: auto;">
Dados:
- Área: 500 m²
- Pé-direito: 2,8 m
- Ocupação: 50 pessoas
- Iluminação: 12 W/m²
- Equipamentos: 15 W/m²
- Ar externo: 27 m³/h/pessoa

Condições externas (1% ASHRAE):
- Temperatura: 33°C BS / 22°C BU
- Interna: 24°C / 50% UR

Cargas estimadas:
- Transmissão + solar: ~80 W/m²
- Pessoas sensível: 50 × 75W = 3.750 W
- Pessoas latente: 50 × 55W = 2.750 W
- Iluminação: 500 × 12 = 6.000 W
- Equipamentos: 500 × 15 = 7.500 W
- Ar externo: 50 × 27 × 1,2 × (33-24) × 1,006 / 3,6 = ~4.500 W (sensível)

CARGA TOTAL: ~65.000 W = 18,5 TR
            </pre>

            <div class="warning-box">
              <div class="warning-box__title">⚠️ Importante</div>
              <p>Este é um cálculo simplificado para ilustração. Projetos reais exigem análise hora a hora com software especializado, considerando picos de carga em diferentes horários e estações.</p>
            </div>

            <h2>Nossos Projetos</h2>

            <ul>
              <li><strong><a href="../projetos/projeto-geolab.php">Geolab Site I</a></strong> — Cálculo de carga térmica detalhado para <strong>25.000 m²</strong> de área farmacêutica, considerando requisitos de salas limpas e processo. CAG de 1.500 TR.</li>
              <li><strong><a href="../projetos/projeto-esaf.php">ESAF Brasília</a></strong> — Cálculo de carga para 18.500 m², definindo sistema híbrido Chiller (870 TR) + VRF (350 TR) como solução otimizada.</li>
              <li><strong><a href="../projetos/projeto-lakeview.php">Lake View Resort</a></strong> — Simulação energética anual para 246 apartamentos, otimizando sistema VRF + splits.</li>
              <li><strong><a href="../projetos/projeto-goinn.php">Hotel GoInn</a></strong> — Cálculo de carga considerando ocupação variável de hotel e picos em horários de check-in.</li>
            </ul>

            <h2>Fatores de Segurança</h2>

            <p>É comum adicionar fatores de segurança ao cálculo:</p>

            <ul>
              <li><strong>10-15%</strong> — Incertezas de dados e condições futuras</li>
              <li><strong>Pico x Médio</strong> — Dimensionar para pico, operar em carga parcial</li>
              <li><strong>Não exagerar!</strong> — Oversizing prejudica eficiência e conforto</li>
            </ul>

            <div class="article-cta">
              <h3>Precisa de Cálculo de Carga Térmica?</h3>
              <p>Realizamos cálculos detalhados com HAP e Trace 700, incluindo simulação energética anual e análise de alternativas.</p>
              <a href="../contato/" class="btn">Solicitar Orçamento</a>
            </div>

          </div>
        </div>
      </section>

      <section class="related-articles">
        <div class="container">
          <h2 class="section__title">Artigos <span class="gradient-text">Relacionados</span></h2>
          <div class="related-articles__grid">
            <a href="bim-hvac-projetos.php" class="related-card">
              <span class="related-card__category">Tecnologia</span>
              <h3 class="related-card__title">BIM para HVAC</h3>
              <p class="related-card__excerpt">Modelagem 3D e coordenação de projetos.</p>
            </a>
            <a href="sistemas-agua-gelada-cag.php" class="related-card">
              <span class="related-card__category">Sistemas</span>
              <h3 class="related-card__title">Sistemas de Água Gelada</h3>
              <p class="related-card__excerpt">Chillers e dimensionamento de CAG.</p>
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
