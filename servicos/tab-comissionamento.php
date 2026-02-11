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
$extra_css        = ['setor.css?v=1770600000'];
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
        "description": "Teste, Ajuste, Balanceamento (TAB) e Comissionamento (Cx) de sistemas HVAC conforme ASHRAE 111, NEBB, ASHRAE Guideline 0 e NBR 16401.",
        "availableChannel": {
          "@type": "ServiceChannel",
          "serviceUrl": "https://wa.me/5562992250067?text=Ol%C3%A1!%20Gostaria%20de%20um%20or%C3%A7amento%20para%20TAB%20e%20Comissionamento.",
          "availableLanguage": "pt-BR"
        }
      }
    </script>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Início", "item": "https://siqueiraeblanco.com.br/" },
          { "@type": "ListItem", "position": 2, "name": "Serviços", "item": "https://siqueiraeblanco.com.br/servicos/" },
          { "@type": "ListItem", "position": 3, "name": "TAB & Comissionamento", "item": "https://siqueiraeblanco.com.br/servicos/tab-comissionamento.php" }
        ]
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

    <!-- TAB & Comissionamento -->
    <section class="section sector-content">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Validação completa de sistemas</span>
          <h2 class="section__title">Teste, Ajuste, Balanceamento &amp; <span class="gradient-text">Comissionamento</span></h2>
        </div>

        <div class="sector-content__grid">
          <div class="sector-content__text fade-in">
            <p>
              <strong>TAB (Teste, Ajuste e Balanceamento)</strong> calibra vazões de ar e água, ajusta dampers e válvulas e garante que o sistema opere conforme projetado. O <strong>Comissionamento (Cx)</strong> vai além: verifica controles, automação, sequências de operação e safeties — do conceito à pós-ocupação.
            </p>
            <p>
              Juntos, eliminam o gap entre projeto e realidade. Sem esse processo, até <strong>30% dos sistemas HVAC</strong> operam abaixo da performance esperada, desperdiçando energia e comprometendo ambientes críticos.
            </p>
          </div>

          <aside class="sector-highlights glass-card fade-in" aria-label="Destaques técnicos">
            <h3>Escopo de atuação</h3>
            <div class="sector-highlights__list">
              <div class="sector-highlight">
                <div class="sector-highlight__icon">01</div>
                <div>
                  <div class="sector-highlight__title">Medição &amp; Balanceamento</div>
                  <div class="sector-highlight__desc">Vazões de ar e água, ajuste de dampers e válvulas de balanceamento.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">02</div>
                <div>
                  <div class="sector-highlight__title">Verificação de Controles</div>
                  <div class="sector-highlight__desc">Automação, sequências de operação, safeties e intertravamentos.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">03</div>
                <div>
                  <div class="sector-highlight__title">Validação de Performance</div>
                  <div class="sector-highlight__desc">Comparação real vs. projeto com critérios de aceitação definidos.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">04</div>
                <div>
                  <div class="sector-highlight__title">Documentação &amp; Treinamento</div>
                  <div class="sector-highlight__desc">Relatórios rastreáveis, manuais e capacitação da equipe de O&amp;M.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">05</div>
                <div>
                  <div class="sector-highlight__title">Conformidade Normativa</div>
                  <div class="sector-highlight__desc">ASHRAE 111, NEBB, Guideline 0, Standard 202 e NBR 16401.</div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- Por que é crítico -->
    <section class="section sector-cards">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Impacto real</span>
          <h2 class="section__title">Por que TAB &amp; Cx são <span class="gradient-text">críticos</span>?</h2>
        </div>

        <div class="sector-cards__grid">
          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">01</div>
              <h3>30% dos sistemas falham</h3>
            </div>
            <p>Sem comissionamento, até 30% dos sistemas HVAC não atingem a performance projetada — problemas invisíveis que geram custos reais.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">02</div>
              <h3>15–25% de economia</h3>
            </div>
            <p>Sistemas balanceados eliminam desperdícios por excesso de vazão e pressão, reduzindo o consumo energético em até 25%.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">03</div>
              <h3>Conformidade regulatória</h3>
            </div>
            <p>Documentação rastreável para auditorias ANVISA, certificações hospitalares e exigências de qualidade industrial.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">04</div>
              <h3>Prevenção de problemas</h3>
            </div>
            <p>Identifica e corrige defeitos antes da operação, reduzindo manutenção corretiva e paradas não programadas.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Nosso Processo -->
    <section class="section sector-content">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Metodologia</span>
          <h2 class="section__title">Nosso <span class="gradient-text">Processo</span></h2>
        </div>

        <div class="sector-cards__grid">
          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">01</div>
              <h3>Planejamento</h3>
            </div>
            <p>Revisão de projeto, critérios de aceitação e plano de comissionamento com cronograma definido.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">02</div>
              <h3>Verificação de Instalação</h3>
            </div>
            <p>Inspeção visual, checklists de montagem e conferência contra o projeto executivo.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">03</div>
              <h3>Testes Funcionais</h3>
            </div>
            <p>Start-up, sequências de automação, safeties e intertravamentos.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">04</div>
              <h3>TAB</h3>
            </div>
            <p>Medição de vazões, ajuste de dampers e válvulas, balanceamento conforme ASHRAE 111 e NEBB.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">05</div>
              <h3>Validação</h3>
            </div>
            <p>Performance real vs. projeto, relatórios de desvio e ajustes finais.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">06</div>
              <h3>Entrega &amp; Treinamento</h3>
            </div>
            <p>Relatório final, manual de O&amp;M e treinamento presencial da equipe técnica.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Equipamentos & Normas -->
    <section class="section sector-standards">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Instrumentação e base normativa</span>
          <h2 class="section__title">Equipamentos &amp; <span class="gradient-text">Normas</span></h2>
        </div>

        <div class="sector-cards__grid" style="margin-bottom: var(--spacing-10);">
          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">A</div>
              <h3>Balômetro</h3>
            </div>
            <p>Vazão direta em difusores e grelhas com leitura instantânea.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">B</div>
              <h3>Anemômetro de Fio Quente</h3>
            </div>
            <p>Velocidade do ar em dutos com resolução de 0,01 m/s.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">C</div>
              <h3>Manômetro &amp; Tubo de Pitot</h3>
            </div>
            <p>Pressão estática/dinâmica e travessia de Pitot conforme ASHRAE 111.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">D</div>
              <h3>Termohigrômetro &amp; Datalogger</h3>
            </div>
            <p>Temperatura, umidade e registro contínuo para verificação de estabilidade.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">E</div>
              <h3>Medidor Ultrassônico</h3>
            </div>
            <p>Vazão não invasiva em circuitos hidráulicos sem interrupção da operação.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">F</div>
              <h3>Tacômetro &amp; Analisador de Energia</h3>
            </div>
            <p>RPM de ventiladores/bombas, consumo elétrico e eficiência energética.</p>
          </article>
        </div>

        <div class="standards-grid">
          <div class="standard-badge fade-in"><strong>ASHRAE 111</strong><span>Testing, Adjusting and Balancing</span></div>
          <div class="standard-badge fade-in"><strong>ASHRAE Guideline 0</strong><span>The Commissioning Process</span></div>
          <div class="standard-badge fade-in"><strong>ASHRAE Standard 202</strong><span>Commissioning Process for Buildings</span></div>
          <div class="standard-badge fade-in"><strong>NEBB</strong><span>Procedural Standards for TAB</span></div>
          <div class="standard-badge fade-in"><strong>NBR 16401</strong><span>Instalações de Ar-Condicionado</span></div>
          <div class="standard-badge fade-in"><strong>SMACNA</strong><span>HVAC Systems TAB</span></div>
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

          <?php
          $form_sector = 'TAB & Comissionamento';
          include '../includes/form-sector.php';
          ?>
        </div>
      </div>
    </section>

    </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/whatsapp-float.php'; ?>
    <?php include '../includes/scripts.php'; ?>
  </body>
</html>
