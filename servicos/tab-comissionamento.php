<?php
$base             = '..';
$active_page      = 'servicos';
$page_title       = 'TAB & Comissionamento HVAC | Siqueira e Blanco';
$page_description = 'Teste, Ajuste, Balanceamento (TAB) e Comissionamento de sistemas HVAC. Conformidade ASHRAE, NEBB e NBR 16401. Validação de performance para indústrias, hospitais e data centers.';
$og_title         = 'TAB & Comissionamento HVAC | Siqueira e Blanco';
$og_description   = $page_description;
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/servicos/tab-comissionamento.php';
$canonical        = $og_url;
$extra_css        = ['../setores/setor.css?v=1770600000'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "TAB e Comissionamento de Sistemas HVAC",
        "provider": {
          "@type": "EngineeringService",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "areaServed": "BR",
        "url": "https://siqueiraeblanco.com.br/servicos/tab-comissionamento.php",
        "description": "Teste, Ajuste, Balanceamento (TAB) e Comissionamento (Cx) de sistemas HVAC conforme ASHRAE 111, NEBB, ASHRAE Guideline 0 e NBR 16401."
      }
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">

    <!-- Hero -->
    <section class="sector-hero" id="topo">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../servicos/">Serviços</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">TAB &amp; Comissionamento</span>
        </nav>
        <span class="section__subtitle">Serviço Especializado</span>
        <h1 class="page-hero__title">TAB &amp; <span class="gradient-text">Comissionamento HVAC</span></h1>
        <p class="page-hero__subtitle">Garantia de performance. Validação de projeto. Conformidade normativa.</p>
      </div>
    </section>

    <!-- TAB -->
    <section class="section" id="tab">
      <div class="container">
        <div class="service-detail">
          <div class="service-detail__content fade-in">
            <span class="section__subtitle">Calibração de Sistemas</span>
            <h2 class="section__title">Teste, Ajuste &amp; <span class="gradient-text">Balanceamento</span></h2>
            <p>O TAB calibra vazões de ar e água, ajusta dampers e válvulas e garante que o sistema opere conforme projetado. Sem esse processo, até <strong>30% dos sistemas HVAC</strong> operam abaixo da performance esperada.</p>

            <ul class="service-features">
              <li><strong>Medição de Vazões</strong> — Ar em difusores/dutos e água em circuitos hidráulicos</li>
              <li><strong>Balanceamento Aeráulico</strong> — Ajuste de dampers para distribuição uniforme</li>
              <li><strong>Balanceamento Hidráulico</strong> — Ajuste de válvulas em circuitos de água gelada</li>
              <li><strong>Verificação Térmica</strong> — Temperatura, umidade e cascata de pressão</li>
              <li><strong>Relatórios</strong> — Valores projetados vs. medidos com critérios de aceitação</li>
            </ul>
          </div>
          <div class="service-detail__aside fade-in">
            <div class="service-card glass-card">
              <div class="service-card__icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M12 20V10"></path>
                  <path d="M18 20V4"></path>
                  <path d="M6 20v-4"></path>
                </svg>
              </div>
              <h3 class="service-card__title">Economia de 15–25%</h3>
              <p>Sistemas balanceados eliminam desperdícios por excesso de vazão e pressão, reduzindo o consumo energético em até <strong>25%</strong>.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Comissionamento -->
    <section class="section section--alt" id="comissionamento">
      <div class="container">
        <div class="service-detail service-detail--reverse">
          <div class="service-detail__content fade-in">
            <span class="section__subtitle">Validação Completa</span>
            <h2 class="section__title"><span class="gradient-text">Comissionamento</span> (Cx)</h2>
            <p>O Cx vai além do TAB: verifica controles, automação, sequências de operação e safeties — do conceito à pós-ocupação. Garante que o sistema entregue exatamente o que foi projetado.</p>

            <h3>Fases do Comissionamento</h3>
            <ul class="service-features">
              <li><strong>Pré-Design</strong> — Definição de OPR (Owner's Project Requirements)</li>
              <li><strong>Design</strong> — Revisão de projeto e Basis of Design (BoD)</li>
              <li><strong>Construção</strong> — Inspeções, checklists e verificação de instalação</li>
              <li><strong>Aceitação</strong> — Testes funcionais, TAB e validação de performance</li>
              <li><strong>Pós-Ocupação</strong> — Verificação sazonal e otimização contínua</li>
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
              <h3 class="service-card__title">Conformidade Regulatória</h3>
              <p>Documentação rastreável para auditorias <strong>ANVISA</strong>, certificações hospitalares e exigências de qualidade industrial.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Nosso Processo -->
    <section class="section" id="processo">
      <div class="container">
        <div class="service-detail">
          <div class="service-detail__content fade-in">
            <span class="section__subtitle">Metodologia</span>
            <h2 class="section__title">Nosso <span class="gradient-text">Processo</span></h2>
            <p>Seis etapas estruturadas para garantir que cada sistema seja validado com rigor técnico e documentação completa.</p>

            <ul class="service-features">
              <li><strong>01 — Planejamento</strong> — Revisão de projeto, critérios de aceitação e plano de Cx</li>
              <li><strong>02 — Verificação de Instalação</strong> — Inspeção visual e conferência contra projeto executivo</li>
              <li><strong>03 — Testes Funcionais</strong> — Start-up, sequências de automação e safeties</li>
              <li><strong>04 — TAB</strong> — Medição de vazões e balanceamento conforme ASHRAE 111</li>
              <li><strong>05 — Validação</strong> — Performance real vs. projeto, relatórios de desvio</li>
              <li><strong>06 — Entrega</strong> — Relatório final, manual de O&amp;M e treinamento da equipe</li>
            </ul>
          </div>
          <div class="service-detail__aside fade-in">
            <div class="service-card glass-card">
              <div class="service-card__icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"></path>
                  <polyline points="14 2 14 8 20 8"></polyline>
                  <line x1="16" y1="13" x2="8" y2="13"></line>
                  <line x1="16" y1="17" x2="8" y2="17"></line>
                  <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
              </div>
              <h3 class="service-card__title">Prevenção de Problemas</h3>
              <p>Identifica e corrige defeitos <strong>antes da operação</strong>, reduzindo manutenção corretiva e paradas não programadas.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Instrumentação & Normas -->
    <section class="section section--alt" id="instrumentacao">
      <div class="container">
        <div class="service-detail service-detail--reverse">
          <div class="service-detail__content fade-in">
            <span class="section__subtitle">Precisão de Medição</span>
            <h2 class="section__title">Instrumentação &amp; <span class="gradient-text">Normas</span></h2>
            <p>Utilizamos instrumentação calibrada e rastreável para cada medição, seguindo normas internacionais reconhecidas.</p>

            <h3>Equipamentos</h3>
            <ul class="service-features">
              <li><strong>Balômetro</strong> — Vazão direta em difusores e grelhas</li>
              <li><strong>Anemômetro de Fio Quente</strong> — Velocidade do ar (resolução 0,01 m/s)</li>
              <li><strong>Manômetro Diferencial</strong> — Pressão estática/dinâmica e cascata de pressão</li>
              <li><strong>Tubo de Pitot</strong> — Travessia em dutos conforme ASHRAE 111</li>
              <li><strong>Termohigrômetro</strong> — Temperatura e umidade com datalogger</li>
              <li><strong>Medidor Ultrassônico</strong> — Vazão não invasiva em circuitos hidráulicos</li>
              <li><strong>Tacômetro</strong> — RPM de ventiladores e bombas</li>
              <li><strong>Analisador de Energia</strong> — Consumo, fator de potência e harmônicos</li>
            </ul>

            <h3>Base Normativa</h3>
            <ul class="service-features">
              <li><strong>ASHRAE 111</strong> — Testing, Adjusting and Balancing</li>
              <li><strong>ASHRAE Guideline 0</strong> — The Commissioning Process</li>
              <li><strong>ASHRAE Standard 202</strong> — Commissioning Process for Buildings</li>
              <li><strong>NEBB</strong> — Procedural Standards for TAB</li>
              <li><strong>NBR 16401</strong> — Instalações de Ar-Condicionado</li>
              <li><strong>SMACNA</strong> — HVAC Systems Testing, Adjusting and Balancing</li>
            </ul>
          </div>
          <div class="service-detail__aside fade-in">
            <div class="service-card glass-card">
              <div class="service-card__icon">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                  <circle cx="12" cy="12" r="10"></circle>
                  <path d="M12 8v4l3 3"></path>
                </svg>
              </div>
              <h3 class="service-card__title">30% dos Sistemas Falham</h3>
              <p>Sem comissionamento, até 30% dos sistemas HVAC não atingem a performance projetada — problemas invisíveis que geram custos reais.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section sector-cta" id="contato">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Solicite um orçamento</span>
          <h2 class="section__title">Garanta a <span class="gradient-text">performance do seu sistema</span></h2>
        </div>

        <div class="sector-cta__grid">
          <div class="sector-cta__info fade-in">
            <p>
              Instrumentação calibrada, documentação completa e rigor técnico para validar, balancear e comissionar seu sistema HVAC.
            </p>
            <a href="https://wa.me/5562992250067?text=Ol%C3%A1!%20Gostaria%20de%20um%20or%C3%A7amento%20para%20TAB%20e%20Comissionamento." class="btn-cta btn-cta--whatsapp" target="_blank" rel="noopener noreferrer">
              <div class="btn-cta__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              </div>
              <div class="btn-cta__content">
                <strong>Solicitar Orçamento</strong>
                <span>Resposta rápida pelo WhatsApp</span>
              </div>
            </a>
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
