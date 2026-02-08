<?php
$base             = '..';
$active_page      = 'artigos';
$page_title       = 'Ventilação Industrial: Exaustão, Captação e NR-15 | Siqueira e Blanco';
$page_description = 'Guia completo sobre ventilação industrial: sistemas de exaustão, captação de poluentes, ventilação geral diluidora, NR-15, ACGIH e dimensionamento de coifas e dutos.';
$og_title         = 'Ventilação Industrial: Exaustão e NR-15';
$og_description   = 'Captação de poluentes, exaustão localizada, ventilação geral e conformidade NR-15.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/artigos/ventilacao-industrial.php';
$canonical        = 'https://siqueiraeblanco.com.br/artigos/ventilacao-industrial.php';
$extra_css        = ['artigo.css?v=1770574139'];
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
            <span aria-current="page">Ventilação Industrial</span>
          </nav>
          <span class="section__subtitle">Industrial</span>
          <h1 class="page-hero__title">Ventilação Industrial: <span class="gradient-text">Exaustão e Captação</span></h1>
          <p class="page-hero__subtitle">Fevereiro 2026 · 12 min de leitura</p>
        </div>
      </section>

      <section class="article-content">
        <div class="container">
          <div class="article-content__wrapper">
            
            <p>A <strong>ventilação industrial</strong> é fundamental para garantir a saúde dos trabalhadores, a qualidade do produto e a segurança operacional. Diferente da climatização de conforto, ela foca na <strong>remoção de contaminantes</strong> (poeiras, fumos, vapores, gases) e no controle de condições ambientais específicas.</p>

            <h2>Tipos de Ventilação Industrial</h2>

            <h3>1. Ventilação Geral Diluidora (VGD)</h3>
            <p>Introduz ar limpo e remove ar contaminado de forma distribuída:</p>
            <ul>
              <li>Para contaminantes de baixa toxicidade</li>
              <li>Quando fonte não pode ser isolada</li>
              <li>Taxas típicas: 6-60 trocas de ar por hora</li>
              <li>Menor custo, mas menos eficiente</li>
            </ul>

            <h3>2. Ventilação Local Exaustora (VLE)</h3>
            <p>Captura contaminantes na fonte antes de se dispersarem:</p>
            <ul>
              <li>Coifas, captores, braços articulados</li>
              <li>Para contaminantes de alta toxicidade</li>
              <li>Maior eficiência, menor vazão total</li>
              <li>Exigida pela NR-15 para agentes nocivos</li>
            </ul>

            <h3>3. Ventilação por Diluição + Exaustão</h3>
            <p>Combinação das duas estratégias para máxima eficácia.</p>

            <h2>Componentes de um Sistema VLE</h2>

            <table class="article-table">
              <thead>
                <tr>
                  <th>Componente</th>
                  <th>Função</th>
                  <th>Exemplos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Captor</strong></td>
                  <td>Captura o contaminante na fonte</td>
                  <td>Coifa, enclausuramento, slot, braço</td>
                </tr>
                <tr>
                  <td><strong>Dutos</strong></td>
                  <td>Transporta ar contaminado</td>
                  <td>Aço galvanizado, inox, PVC</td>
                </tr>
                <tr>
                  <td><strong>Filtro/Coletor</strong></td>
                  <td>Remove partículas do ar</td>
                  <td>Ciclone, bag filter, lavador</td>
                </tr>
                <tr>
                  <td><strong>Ventilador</strong></td>
                  <td>Gera fluxo de ar</td>
                  <td>Centrífugo, axial</td>
                </tr>
                <tr>
                  <td><strong>Chaminé</strong></td>
                  <td>Descarga para atmosfera</td>
                  <td>Conforme CONAMA</td>
                </tr>
              </tbody>
            </table>

            <h2>Normas e Legislação</h2>

            <h3>NR-15 (Atividades Insalubres)</h3>
            <ul>
              <li>Define <strong>Limites de Tolerância</strong> para agentes químicos</li>
              <li>Exige ventilação adequada em ambientes com contaminantes</li>
              <li>Base para dimensionamento de sistemas de exaustão</li>
            </ul>

            <h3>NR-9 (PPRA) → PGR</h3>
            <ul>
              <li>Programa de Gerenciamento de Riscos</li>
              <li>Identifica agentes de risco e medidas de controle</li>
              <li>Ventilação como medida de proteção coletiva</li>
            </ul>

            <h3>ACGIH (TLVs)</h3>
            <ul>
              <li>American Conference of Governmental Industrial Hygienists</li>
              <li>Referência internacional para limites de exposição</li>
              <li>Manual de Ventilação Industrial (Industrial Ventilation)</li>
            </ul>

            <div class="info-box">
              <div class="info-box__title">📘 ACGIH Industrial Ventilation</div>
              <p>O manual da ACGIH é a <strong>bíblia da ventilação industrial</strong>. Contém velocidades de captura, projetos de coifas e cálculos detalhados para cada tipo de operação.</p>
            </div>

            <h2>Velocidades de Captura</h2>

            <p>A velocidade de captura depende da dispersão do contaminante:</p>

            <table class="article-table">
              <thead>
                <tr>
                  <th>Condição</th>
                  <th>Velocidade de Captura</th>
                  <th>Exemplos</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Baixa velocidade de geração</td>
                  <td>0,25-0,50 m/s</td>
                  <td>Evaporação de tanques, desengorduramento</td>
                </tr>
                <tr>
                  <td>Velocidade moderada</td>
                  <td>0,50-1,00 m/s</td>
                  <td>Pintura spray, soldagem leve</td>
                </tr>
                <tr>
                  <td>Alta velocidade</td>
                  <td>1,00-2,50 m/s</td>
                  <td>Esmerilhamento, lixamento</td>
                </tr>
                <tr>
                  <td>Muito alta velocidade</td>
                  <td>2,50-10,0 m/s</td>
                  <td>Jateamento, corte abrasivo</td>
                </tr>
              </tbody>
            </table>

            <h2>Dimensionamento de Coifas</h2>

            <p>Fórmula básica para vazão de captura:</p>

            <pre style="background: rgba(255,255,255,0.05); padding: 1rem; border-radius: 8px; overflow-x: auto;">
Q = V × A × 3600

Onde:
Q = Vazão (m³/h)
V = Velocidade de captura (m/s)
A = Área de abertura da coifa (m²)
            </pre>

            <p>Para coifas afastadas da fonte (flangeadas ou não):</p>

            <pre style="background: rgba(255,255,255,0.05); padding: 1rem; border-radius: 8px; overflow-x: auto;">
Q = V × (10x² + A) × 3600   (coifa simples)
Q = V × (7,5x² + A) × 3600  (coifa flangeada)

Onde:
x = distância da fonte à coifa (m)
            </pre>

            <h2>Nossos Projetos de Ventilação Industrial</h2>

            <ul>
              <li><strong><a href="../projetos/projeto-savoy.php">Savoy Cosméticos</a></strong> — Ventilação mecânica com <strong>100% de exaustão</strong> para área de envase de aerossóis, com renovação de ar e dutos girotubo em pintura eletrostática.</li>
              <li><strong><a href="../projetos/projeto-louisdreyfus.php">Louis Dreyfus</a></strong> — Ventilação industrial para planta agroindustrial, incluindo controle de poeira de grãos e exaustão de silos.</li>
              <li><strong><a href="../setores/pos-metais.php">Pós de Metais (Nióbio)</a></strong> — Projeto especializado para captação de pós metálicos com risco de explosão. Sistema com inertização e filtros especiais ATEX.</li>
              <li><strong><a href="../projetos/projeto-brainfarma-fluxos.php">Brainfarma Fluxos</a></strong> — Exaustão de pós farmacêuticos com contenção e filtragem HEPA, conforme requisitos de salas limpas.</li>
              <li><strong><a href="../projetos/projeto-hypermarcas.php">Hypermarcas</a></strong> — Retrofit de sistema de exaustão em áreas de manipulação de sólidos, adequação à NR-15.</li>
            </ul>

            <div class="warning-box">
              <div class="warning-box__title">⚠️ Atmosferas Explosivas</div>
              <p>Pós metálicos, solventes e grãos podem formar <strong>atmosferas explosivas</strong>. Sistemas de ventilação devem seguir normas ATEX/NR-20, com equipamentos à prova de explosão e sistemas de supressão/inertização.</p>
            </div>

            <h2>Tipos de Coletores</h2>

            <h3>Ciclones</h3>
            <ul>
              <li>Separação por força centrífuga</li>
              <li>Eficiência: 70-90% para partículas >10 µm</li>
              <li>Baixo custo, sem partes móveis</li>
              <li>Pré-tratamento antes de filtros finos</li>
            </ul>

            <h3>Filtros Manga (Bag Filters)</h3>
            <ul>
              <li>Alta eficiência (99%+) para partículas finas</li>
              <li>Limpeza por pulso de ar reverso</li>
              <li>Para poeiras secas não pegajosas</li>
            </ul>

            <h3>Lavadores de Gases (Scrubbers)</h3>
            <ul>
              <li>Remoção de gases e vapores</li>
              <li>Também remove partículas</li>
              <li>Para contaminantes solúveis/reativos</li>
            </ul>

            <h3>Precipitadores Eletrostáticos</h3>
            <ul>
              <li>Para fumos e névoas muito finas</li>
              <li>Alta eficiência, baixa perda de carga</li>
              <li>Maior custo e manutenção</li>
            </ul>

            <h2>Cálculo de Perda de Carga</h2>

            <p>Para dimensionamento de ventiladores e dutos:</p>

            <ul>
              <li><strong>Velocidade em dutos:</strong> 15-25 m/s (evitar deposição)</li>
              <li><strong>Perda por atrito:</strong> Tabelas ou fórmula de Darcy-Weisbach</li>
              <li><strong>Perdas singulares:</strong> Curvas, reduções, entradas</li>
              <li><strong>Método das velocidades:</strong> Balanceamento do sistema</li>
            </ul>

            <div class="article-cta">
              <h3>Projeto de Ventilação Industrial?</h3>
              <p>Projetamos sistemas de exaustão e ventilação conforme NR-15 e ACGIH para indústrias de todos os portes.</p>
              <a href="../contato/" class="btn">Solicitar Orçamento</a>
            </div>

          </div>
        </div>
      </section>

      <section class="related-articles">
        <div class="container">
          <h2 class="section__title">Artigos <span class="gradient-text">Relacionados</span></h2>
          <div class="related-articles__grid">
            <a href="pressurizacao-escadas.php" class="related-card">
              <span class="related-card__category">Segurança</span>
              <h3 class="related-card__title">Pressurização de Escadas</h3>
              <p class="related-card__excerpt">IT-18 e sistemas de proteção contra fumaça.</p>
            </a>
            <a href="classificacao-salas-limpas-iso-14644.php" class="related-card">
              <span class="related-card__category">Salas Limpas</span>
              <h3 class="related-card__title">Salas Limpas ISO 14644</h3>
              <p class="related-card__excerpt">Quando a ventilação precisa ser ultralimpa.</p>
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
