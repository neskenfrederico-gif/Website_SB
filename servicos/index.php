<?php
$base             = '..';
$active_page      = 'servicos';
$page_title       = 'Serviços de Engenharia HVAC | Projetos, BIM e Comissionamento';
$page_description = 'Serviços de engenharia HVAC: projetos executivos, modelagem BIM LOD 400, salas limpas ISO 14644, consultoria e comissionamento. Soluções completas para climatização industrial.';
$og_title         = 'Serviços de Engenharia HVAC | Siqueira e Blanco';
$og_description   = 'Projetos executivos, BIM, salas limpas e comissionamento. Engenharia HVAC completa para indústrias farmacêuticas, data centers e ambientes críticos.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/servicos/';
$canonical        = 'https://siqueiraeblanco.com.br/servicos/';
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "provider": {
          "@type": "Organization",
          "name": "Siqueira e Blanco Engenharia"
        },
        "serviceType": "Engenharia HVAC",
        "areaServed": {
          "@type": "Country",
          "name": "BR"
        },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Serviços de Engenharia HVAC",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Projetos Executivos HVAC",
                "description": "Elaboração de projetos executivos detalhados para sistemas HVAC complexos com conformidade normativa ASHRAE, SMACNA e NBR 16401."
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Modelagem BIM 3D",
                "description": "Modelagem avançada em Revit MEP com LOD 350/400, clash detection e extração automática de quantitativos."
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Áreas Limpas e Cleanrooms",
                "description": "Engenharia para ambientes críticos com classificação ISO 14644 Classes 5-8, controle de cascata de pressão e filtragem HEPA/ULPA."
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Consultoria e Comissionamento",
                "description": "Fiscalização técnica, TAB, PMOC e laudos de qualidade do ar interior."
              }
            }
          ]
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
          <span aria-current="page">Serviços</span>
        </nav>
        <span class="section__subtitle">Portfólio de Serviços</span>
        <h1 class="page-hero__title">Nossos <span class="gradient-text">Serviços</span></h1>
        <p class="page-hero__subtitle">Soluções completas em engenharia HVAC para ambientes críticos</p>
      </div>
    </section>

    <!-- Serviços Principais -->
    <section class="section" id="projetos-executivos">
      <div class="container">
        <div class="service-detail">
          <div class="service-detail__content fade-in">
            <span class="section__subtitle">Serviço Principal</span>
            <h2 class="section__title">Projetos Executivos <span class="gradient-text">HVAC</span></h2>
            <p>Elaboração de projetos executivos detalhados para sistemas de climatização de alta complexidade. Nossos projetos são desenvolvidos com rigor técnico para garantir executabilidade, conformidade normativa e previsibilidade de custos.</p>
            
            <h3>Entregáveis Técnicos</h3>
            <ul class="service-features">
              <li><strong>Plantas e Cortes</strong> — Desenhos técnicos em escala com todas as informações para instalação</li>
              <li><strong>Lista de Materiais (BOM)</strong> — Quantitativo completo com especificações técnicas</li>
              <li><strong>Cálculo de Carga Térmica</strong> — Dimensionamento preciso usando HAP ou Trace 700</li>
              <li><strong>Diagramas Unifilares</strong> — Fluxogramas de processo e controle</li>
              <li><strong>Memorial Descritivo</strong> — Documentação completa do sistema projetado</li>
              <li><strong>Especificações Técnicas</strong> — Requisitos detalhados para aquisição de equipamentos</li>
            </ul>

            <h3>Conformidade Normativa</h3>
            <div class="norms-grid">
              <span class="norm-badge">ASHRAE 90.1</span>
              <span class="norm-badge">NBR 16401</span>
              <span class="norm-badge">SMACNA</span>
              <span class="norm-badge">NBR 7256</span>
              <span class="norm-badge">NR-10</span>
            </div>
          </div>
          <div class="service-detail__aside fade-in">
            <div class="service-card glass-card">
              <div class="service-card__icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                </svg>
              </div>
              <h3 class="service-card__title">Ideal Para</h3>
              <ul class="service-card__list">
                <li>Novas instalações industriais</li>
                <li>Expansões de plantas existentes</li>
                <li>Retrofit de sistemas antigos</li>
                <li>Adequações normativas</li>
              </ul>
              <a href="../contato/" class="btn-cta btn-cta--primary">
                <div class="btn-cta__icon">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                  </svg>
                </div>
                <div class="btn-cta__content">
                  <strong>Solicitar Orçamento</strong>
                  <span>Fale com nossa equipe</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- BIM -->
    <section class="section section--alt" id="modelagem-bim">
      <div class="container">
        <div class="service-detail service-detail--reverse">
          <div class="service-detail__content fade-in">
            <span class="section__subtitle">Tecnologia Avançada</span>
            <h2 class="section__title">Modelagem <span class="gradient-text">BIM 3D</span></h2>
            <p>Modelagem avançada em Revit MEP com nível de desenvolvimento LOD 350/400, garantindo exatidão construtiva e compatibilização total com outras disciplinas (arquitetura, estrutura, elétrica, hidráulica).</p>
            
            <h3>Benefícios do BIM</h3>
            <ul class="service-features">
              <li><strong>Clash Detection</strong> — Identificação e resolução de interferências antes da obra</li>
              <li><strong>Extração de Quantitativos</strong> — Levantamento automático e preciso de materiais</li>
              <li><strong>Visualização 3D</strong> — Compreensão clara do projeto por todas as partes</li>
              <li><strong>Coordenação Multidisciplinar</strong> — Integração com arquitetura, estrutura e MEP</li>
              <li><strong>Documentação As-Built</strong> — Modelo atualizado refletindo a construção real</li>
            </ul>

            <h3>Níveis de Detalhamento</h3>
            <div class="lod-comparison">
              <div class="lod-item">
                <span class="lod-level">LOD 300</span>
                <span class="lod-desc">Coordenação — dimensões e localização</span>
              </div>
              <div class="lod-item lod-item--highlight">
                <span class="lod-level">LOD 400</span>
                <span class="lod-desc">Fabricação — suportes, conexões, acessórios</span>
              </div>
            </div>
          </div>
          <div class="service-detail__aside fade-in">
            <div class="service-card glass-card">
              <div class="service-card__icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                  <line x1="8" y1="21" x2="16" y2="21"></line>
                  <line x1="12" y1="17" x2="12" y2="21"></line>
                </svg>
              </div>
              <h3 class="service-card__title">Redução de Custos</h3>
              <div class="stat-highlight">
                <span class="stat-number">30%</span>
                <span class="stat-label">menos retrabalho em obra</span>
              </div>
              <p>O Clash Detection identifica conflitos antes da construção, evitando custos de correção em campo.</p>
              <a href="../artigos/bim-hvac-projetos.php" class="btn btn--secondary btn--full">Ler Artigo sobre BIM</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Áreas Limpas -->
    <section class="section" id="areas-limpas">
      <div class="container">
        <div class="service-detail">
          <div class="service-detail__content fade-in">
            <span class="section__subtitle">Ambientes Críticos</span>
            <h2 class="section__title">Áreas Limpas / <span class="gradient-text">Cleanrooms</span></h2>
            <p>Engenharia especializada para ambientes que exigem controle rigoroso de contaminação, temperatura e umidade. Projetos para indústrias farmacêuticas, laboratórios, hospitais e fabricação de eletrônicos.</p>
            
            <h3>Especialidades</h3>
            <ul class="service-features">
              <li><strong>Classificação ISO 14644</strong> — Projetos para Classes 5 a 8 conforme requisitos</li>
              <li><strong>Controle de Cascata de Pressão</strong> — Diferenciais de 10-15 Pa entre ambientes</li>
              <li><strong>Filtragem HEPA/ULPA</strong> — Terminais com eficiência 99,97% a 99,999%</li>
              <li><strong>Fluxo Unidirecional</strong> — Sistemas laminares para áreas mais críticas</li>
              <li><strong>Eclusas e Airlocks</strong> — Barreiras de contenção entre zonas</li>
              <li><strong>Monitoramento Contínuo</strong> — Sistemas de partículas e diferenciais de pressão</li>
            </ul>

            <h3>Conformidade Regulatória</h3>
            <div class="norms-grid">
              <span class="norm-badge">ISO 14644</span>
              <span class="norm-badge">ANVISA RDC</span>
              <span class="norm-badge">FDA 21 CFR</span>
              <span class="norm-badge">EU GMP</span>
              <span class="norm-badge">NBR 7256</span>
            </div>
          </div>
          <div class="service-detail__aside fade-in">
            <div class="service-card glass-card">
              <div class="service-card__icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                  <path d="M2 17l10 5 10-5"></path>
                  <path d="M2 12l10 5 10-5"></path>
                </svg>
              </div>
              <h3 class="service-card__title">Classes Atendidas</h3>
              <table class="iso-table">
                <tr><td>ISO 5</td><td>100 partículas/m³</td></tr>
                <tr><td>ISO 6</td><td>1.000 partículas/m³</td></tr>
                <tr><td>ISO 7</td><td>10.000 partículas/m³</td></tr>
                <tr><td>ISO 8</td><td>100.000 partículas/m³</td></tr>
              </table>
              <a href="../artigos/classificacao-salas-limpas-iso-14644.php" class="btn btn--secondary btn--full">Ler Artigo sobre ISO 14644</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Consultoria e Comissionamento -->
    <section class="section section--alt" id="consultoria">
      <div class="container">
        <div class="service-detail service-detail--reverse">
          <div class="service-detail__content fade-in">
            <span class="section__subtitle">Garantia de Performance</span>
            <h2 class="section__title">Consultoria & <span class="gradient-text">Comissionamento</span></h2>
            <p>Serviços de fiscalização técnica e comissionamento para garantir que os sistemas HVAC entreguem a performance projetada. Atuamos desde a fase de instalação até a operação plena.</p>
            
            <h3>Serviços de Consultoria</h3>
            <ul class="service-features">
              <li><strong>Análise de Viabilidade</strong> — Estudos preliminares para novos projetos ou retrofit</li>
              <li><strong>Auditoria Técnica</strong> — Avaliação de sistemas existentes e recomendações</li>
              <li><strong>Especificação de Equipamentos</strong> — Apoio técnico em processos de aquisição</li>
              <li><strong>Fiscalização de Obra</strong> — Acompanhamento da instalação conforme projeto</li>
            </ul>

            <h3>Serviços de Comissionamento</h3>
            <ul class="service-features">
              <li><strong>TAB</strong> — Testes, Ajustes e Balanceamento de vazões</li>
              <li><strong>Start-up de Sistemas</strong> — Verificação de partida e operação inicial</li>
              <li><strong>PMOC</strong> — Plano de Manutenção, Operação e Controle (Lei 13.589/2018)</li>
              <li><strong>Laudos de QAI</strong> — Qualidade do Ar Interior conforme RE nº 9 ANVISA</li>
              <li><strong>Treinamento Operacional</strong> — Capacitação da equipe de manutenção</li>
            </ul>
          </div>
          <div class="service-detail__aside fade-in">
            <div class="service-card glass-card">
              <div class="service-card__icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M9 11l3 3L22 4"></path>
                  <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                </svg>
              </div>
              <h3 class="service-card__title">TAB & Comissionamento</h3>
              <p>Validação de performance, balanceamento de vazões e documentação completa conforme <strong>ASHRAE 111</strong> e <strong>NEBB</strong>.</p>
              <a href="tab-comissionamento.php" class="btn btn--secondary btn--full">Ver Página Completa</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Serviços Adicionais -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Mais Serviços</span>
          <h2 class="section__title">Serviços <span class="gradient-text">Complementares</span></h2>
        </div>
        <div class="services-grid">
          <div class="mini-service-card glass-card fade-in">
            <h3>Retrofit de Sistemas</h3>
            <p>Modernização de instalações existentes para adequação normativa, eficiência energética e redução de custos operacionais.</p>
            <a href="../artigos/retrofit-hvac-quando-fazer.php">Saiba mais →</a>
          </div>
          <div class="mini-service-card glass-card fade-in">
            <h3>Sistemas VRF/VRV</h3>
            <p>Projetos para sistemas de volume de refrigerante variável em edifícios comerciais e corporativos.</p>
            <a href="../artigos/sistemas-vrf.php">Saiba mais →</a>
          </div>
          <div class="mini-service-card glass-card fade-in">
            <h3>Centrais de Água Gelada</h3>
            <p>Dimensionamento e projeto de CAGs com chillers, torres de resfriamento e sistemas de distribuição.</p>
            <a href="../artigos/sistemas-agua-gelada-cag.php">Saiba mais →</a>
          </div>
          <div class="mini-service-card glass-card fade-in">
            <h3>Data Centers</h3>
            <p>Climatização de precisão com redundância Tier III/IV e otimização de PUE.</p>
            <a href="../artigos/climatizacao-data-center.php">Saiba mais →</a>
          </div>
          <div class="mini-service-card glass-card fade-in">
            <h3>Ventilação Industrial</h3>
            <p>Sistemas de exaustão, captação de poluentes e controle de temperatura em processos industriais.</p>
            <a href="../artigos/ventilacao-industrial.php">Saiba mais →</a>
          </div>
          <div class="mini-service-card glass-card fade-in">
            <h3>Pressurização de Escadas</h3>
            <p>Sistemas de segurança contra incêndio conforme IT-18 do Corpo de Bombeiros.</p>
            <a href="../artigos/pressurizacao-escadas.php">Saiba mais →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Processo de Trabalho -->
    <section class="section section--alt">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Metodologia</span>
          <h2 class="section__title">Como <span class="gradient-text">Trabalhamos</span></h2>
        </div>
        <div class="process-timeline">
          <div class="process-step fade-in">
            <div class="process-step__number">01</div>
            <div class="process-step__content">
              <h3>Briefing Técnico</h3>
              <p>Entendimento das necessidades, requisitos normativos e restrições do projeto. Levantamento de dados e visita técnica quando necessário.</p>
            </div>
          </div>
          <div class="process-step fade-in">
            <div class="process-step__number">02</div>
            <div class="process-step__content">
              <h3>Estudo Preliminar</h3>
              <p>Análise de viabilidade, estimativa de carga térmica, seleção de tecnologias e apresentação de conceitos.</p>
            </div>
          </div>
          <div class="process-step fade-in">
            <div class="process-step__number">03</div>
            <div class="process-step__content">
              <h3>Anteprojeto</h3>
              <p>Definição do sistema, dimensionamento de equipamentos principais, layout de casas de máquinas e rotas de dutos.</p>
            </div>
          </div>
          <div class="process-step fade-in">
            <div class="process-step__number">04</div>
            <div class="process-step__content">
              <h3>Projeto Executivo</h3>
              <p>Modelagem BIM, detalhamento completo, memoriais, especificações e quantitativos para execução.</p>
            </div>
          </div>
          <div class="process-step fade-in">
            <div class="process-step__number">05</div>
            <div class="process-step__content">
              <h3>Acompanhamento</h3>
              <p>Suporte durante a instalação, esclarecimento de dúvidas técnicas e ajustes quando necessário.</p>
            </div>
          </div>
          <div class="process-step fade-in">
            <div class="process-step__number">06</div>
            <div class="process-step__content">
              <h3>Comissionamento</h3>
              <p>TAB, verificação de performance, documentação As-Built e treinamento da equipe de operação.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section cta-section">
      <div class="container">
        <div class="cta-card glass-card fade-in">
          <h2>Precisa de engenharia HVAC?</h2>
          <p>Entre em contato para discutir seu projeto. Atendemos todo o Brasil.</p>
          <div class="cta-buttons">
            <a href="../contato/" class="btn btn--primary">Solicitar Orçamento</a>
            <a href="../portfolio/" class="btn btn--secondary">Ver Projetos Realizados</a>
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
