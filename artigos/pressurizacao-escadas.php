<?php
$base             = '..';
$active_page      = 'artigos';
$page_title       = 'Pressurização de Escadas: IT-18, Cálculo e Projeto | Siqueira e Blanco';
$page_description = 'Guia técnico sobre pressurização de escadas de emergência: IT-18 do Corpo de Bombeiros, cálculo de vazão, diferenciais de pressão, tipos de sistemas e dimensionamento.';
$og_title         = 'Pressurização de Escadas: IT-18 e Projeto';
$og_description   = 'Requisitos do Corpo de Bombeiros, cálculo de vazão e dimensionamento de sistemas.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/artigos/pressurizacao-escadas.php';
$canonical        = 'https://siqueiraeblanco.com.br/artigos/pressurizacao-escadas.php';
$extra_css        = ['artigo.css?v=1770973200'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
        { "@context": "https://schema.org", "@type": "Article", "headline": "Pressurização de Escadas: IT-18, Cálculo e Projeto", "datePublished": "2026-02-08", "author": { "@type": "Organization", "name": "Siqueira e Blanco Engenharia HVAC" } }
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
            <span aria-current="page">Pressurização de Escadas</span>
          </nav>
          <span class="section__subtitle">Segurança</span>
          <h1 class="page-hero__title">Pressurização de Escadas: <span class="gradient-text">IT-18 e Projeto</span></h1>
          <p class="page-hero__subtitle">Fevereiro 2026 · 15 min de leitura</p>
        </div>
      </section>

      <section class="article-content">
        <div class="container">
          <div class="article-content__wrapper">
            
            <p>A <strong>pressurização de escadas</strong> é um sistema de segurança contra incêndio que mantém as rotas de fuga livres de fumaça, permitindo a evacuação segura dos ocupantes e o acesso dos bombeiros. É <strong>obrigatória</strong> em edifícios altos e ocupações específicas conforme as Instruções Técnicas do Corpo de Bombeiros.</p>

            <h2>Por Que Pressurizar?</h2>

            <p>Durante um incêndio, a fumaça é responsável por <strong>80% das mortes</strong> — não o fogo em si. A fumaça quente tende a subir e invadir escadas através de:</p>

            <ul>
              <li>Frestas de portas</li>
              <li>Aberturas quando portas são abertas</li>
              <li>Efeito chaminé (stack effect) em edifícios altos</li>
            </ul>

            <p>A pressurização cria uma <strong>barreira de ar positivo</strong> que impede a entrada de fumaça na escada, mesmo com portas abertas durante a evacuação.</p>

            <h2>Requisitos da IT-18 (Goiás/SP)</h2>

            <p>A <strong>Instrução Técnica 18</strong> do Corpo de Bombeiros define:</p>

            <h3>Quando é Obrigatória</h3>
            <ul>
              <li>Edifícios com altura superior a <strong>30 metros</strong> (varia por estado)</li>
              <li>Subsolos com mais de <strong>2 níveis</strong></li>
              <li>Edifícios com <strong>área superior a 750 m²</strong> por pavimento (algumas ocupações)</li>
              <li>Hospitais, shopping centers e locais de reunião de público</li>
            </ul>

            <h3>Requisitos de Pressão</h3>

            <table class="article-table">
              <thead>
                <tr>
                  <th>Condição</th>
                  <th>Pressão Mínima</th>
                  <th>Pressão Máxima</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Todas as portas fechadas</strong></td>
                  <td>25 Pa</td>
                  <td>80 Pa</td>
                </tr>
                <tr>
                  <td><strong>Uma porta aberta (evacuação)</strong></td>
                  <td>Velocidade mínima de 1,0 m/s na porta</td>
                  <td>—</td>
                </tr>
                <tr>
                  <td><strong>Força para abrir porta</strong></td>
                  <td>—</td>
                  <td>110 N (≈11 kgf)</td>
                </tr>
              </tbody>
            </table>

            <div class="warning-box">
              <div class="warning-box__title">⚠️ Pressão Máxima</div>
              <p>Se a pressão for muito alta, as portas ficam <strong>difíceis de abrir</strong>, impedindo a evacuação. O projeto deve garantir o equilíbrio entre proteção e funcionalidade.</p>
            </div>

            <h2>Tipos de Sistemas</h2>

            <h3>1. Sistema com Insuflamento Único</h3>
            <ul>
              <li>Ventilador na cobertura ou térreo</li>
              <li>Duto vertical ao longo da escada</li>
              <li>Grelhas de insuflamento a cada 3 pavimentos</li>
              <li>Ideal para edifícios até 30 andares</li>
            </ul>

            <h3>2. Sistema com Múltiplos Pontos</h3>
            <ul>
              <li>Ventiladores em andares intermediários</li>
              <li>Para edifícios muito altos (>30 andares)</li>
              <li>Compensa perdas de carga em dutos longos</li>
            </ul>

            <h3>3. Sistema com Antecâmara</h3>
            <ul>
              <li>Escada enclausurada com antecâmara pressurizada</li>
              <li>Dupla barreira contra fumaça</li>
              <li>Exigido em algumas ocupações (hospitais)</li>
            </ul>

            <h2>Cálculo de Vazão</h2>

            <p>A vazão de ar necessária considera:</p>

            <h3>1. Vazão de Compensação (Portas Fechadas)</h3>
            <p>Para manter pressão com frestas:</p>
            <pre style="background: rgba(255,255,255,0.05); padding: 1rem; border-radius: 8px; overflow-x: auto;">
Q = A × v × 3600

Onde:
Q = Vazão (m³/h)
A = Área total de frestas (m²)
v = Velocidade nas frestas (m/s) — tipicamente 8-12 m/s
            </pre>

            <h3>2. Vazão com Porta Aberta</h3>
            <p>Para manter velocidade mínima na porta aberta:</p>
            <pre style="background: rgba(255,255,255,0.05); padding: 1rem; border-radius: 8px; overflow-x: auto;">
Q = A_porta × v_min × 3600

Onde:
A_porta = Área da porta (tipicamente 1,8 m²)
v_min = 1,0 m/s (requisito IT-18)
Q = 1,8 × 1,0 × 3600 = 6.480 m³/h por porta aberta
            </pre>

            <h3>3. Vazão Total</h3>
            <p>Considera cenário de evacuação com múltiplas portas abertas simultaneamente (tipicamente 2-3 portas).</p>

            <div class="info-box">
              <div class="info-box__title">📊 Exemplo Prático</div>
              <p>Edifício de 20 andares, escada com portas de 0,9 × 2,1m:</p>
              <ul style="margin: 0.5rem 0 0 1rem;">
                <li>Frestas: ~0,01 m² por porta × 20 = 0,2 m²</li>
                <li>Vazão frestas: 0,2 × 10 × 3600 = 7.200 m³/h</li>
                <li>Vazão 2 portas abertas: 2 × 6.480 = 12.960 m³/h</li>
                <li><strong>Vazão total: ~20.000 m³/h</strong></li>
              </ul>
            </div>

            <h2>Componentes do Sistema</h2>

            <h3>Ventiladores</h3>
            <ul>
              <li><strong>Tipo:</strong> Centrífugo ou axial de alta pressão</li>
              <li><strong>Certificação:</strong> Resistência a 300°C por 2 horas (ou protegido)</li>
              <li><strong>Redundância:</strong> 100% backup em ocupações críticas</li>
              <li><strong>Acionamento:</strong> Automático por detectores de fumaça</li>
            </ul>

            <h3>Dutos</h3>
            <ul>
              <li><strong>Material:</strong> Aço galvanizado ou alvenaria</li>
              <li><strong>Resistência ao fogo:</strong> 2 horas (RF 120)</li>
              <li><strong>Velocidade máxima:</strong> 15 m/s</li>
            </ul>

            <h3>Dampers e Controles</h3>
            <ul>
              <li><strong>Dampers de alívio:</strong> Limitam pressão máxima</li>
              <li><strong>Sensores de pressão:</strong> Monitoramento contínuo</li>
              <li><strong>Painel de controle:</strong> Integrado ao sistema de alarme</li>
            </ul>

            <h2>Nossos Projetos de Pressurização</h2>

            <ul>
              <li><strong><a href="../projetos/projeto-goinn.php">Hotel GoInn Goiânia</a></strong> — Sistema de pressurização de escadas com <strong>108.960 m³/h</strong> de vazão total, atendendo 172 apartamentos em múltiplos pavimentos. Ventiladores centrífugos com backup 100%.</li>
              <li><strong><a href="../projetos/projeto-lakeview.php">Lake View Resort</a></strong> — Pressurização de 2 escadas de emergência para apart hotel de 246 unidades em Brasília, conforme IT do CBMDF.</li>
              <li><strong><a href="../projetos/projeto-lineavitta.php">Linea Vitta</a></strong> — Sistema de pressurização com antecâmara para edifício comercial/residencial de 27.500 m².</li>
              <li><strong><a href="../projetos/projeto-lineag.php">Linea G</a></strong> — Pressurização integrada ao sistema de exaustão de fumaça, com dampers motorizados e controle automático.</li>
              <li><strong><a href="../setores/pressurizacao.php">Setor Pressurização</a></strong> — Confira mais detalhes sobre nossa expertise em sistemas de pressurização.</li>
            </ul>

            <h2>Erros Comuns</h2>

            <ul>
              <li><strong>Subdimensionamento</strong> — Não considerar portas abertas durante evacuação</li>
              <li><strong>Dutos subdimensionados</strong> — Perda de carga excessiva</li>
              <li><strong>Falta de damper de alívio</strong> — Pressão excessiva, portas travadas</li>
              <li><strong>Ventilador não certificado</strong> — Falha durante incêndio</li>
              <li><strong>Falta de manutenção</strong> — Sistemas que não funcionam quando necessário</li>
            </ul>

            <h2>Testes e Comissionamento</h2>

            <ol>
              <li><strong>Teste de pressão estática</strong> — Todas as portas fechadas, medir 25-80 Pa</li>
              <li><strong>Teste de velocidade</strong> — Porta aberta, medir ≥1,0 m/s</li>
              <li><strong>Teste de força</strong> — Força para abrir porta ≤110 N</li>
              <li><strong>Teste de fumaça</strong> — Simulação com gerador de fumaça</li>
              <li><strong>Teste integrado</strong> — Acionamento automático por detectores</li>
            </ol>

            <div class="article-cta">
              <h3>Projeto de Pressurização?</h3>
              <p>Projetamos sistemas de pressurização de escadas conforme IT-18 para aprovação no Corpo de Bombeiros.</p>
              <a href="../contato/" class="btn">Solicitar Orçamento</a>
            </div>

          </div>
        </div>
      </section>

      <section class="related-articles">
        <div class="container">
          <h2 class="section__title">Artigos <span class="gradient-text">Relacionados</span></h2>
          <div class="related-articles__grid">
            <a href="ventilacao-industrial.php" class="related-card">
              <span class="related-card__category">Industrial</span>
              <h3 class="related-card__title">Ventilação Industrial</h3>
              <p class="related-card__excerpt">Exaustão, captação de poluentes e NR-15.</p>
            </a>
            <a href="o-que-e-pmoc.php" class="related-card">
              <span class="related-card__category">Legislação</span>
              <h3 class="related-card__title">O que é PMOC?</h3>
              <p class="related-card__excerpt">Manutenção obrigatória de sistemas.</p>
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
