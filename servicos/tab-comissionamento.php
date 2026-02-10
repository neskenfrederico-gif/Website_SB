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

    <!-- O que é TAB -->
    <section class="section sector-content">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Conceito fundamental</span>
          <h2 class="section__title">O que é <span class="gradient-text">TAB</span>?</h2>
        </div>

        <div class="sector-content__grid">
          <div class="sector-content__text fade-in">
            <p>
              <strong>TAB — Teste, Ajuste e Balanceamento</strong> — é o processo sistemático de medição e ajuste de sistemas HVAC
              para garantir que a <strong>performance real corresponda fielmente ao projeto</strong>. Envolve a medição precisa de
              vazões de ar e água, o ajuste fino de dampers e válvulas, e o balanceamento completo de circuitos aeráulicos e hidráulicos.
            </p>
            <p>
              Sem TAB, um sistema HVAC opera "às cegas": ambientes podem receber ar demais ou de menos, temperaturas ficam fora da
              faixa, e o consumo energético é desnecessariamente alto. O TAB transforma um sistema instalado em um sistema
              <strong>calibrado e eficiente</strong>.
            </p>
            <p>
              O processo é conduzido conforme normas internacionais reconhecidas: <strong>ASHRAE 111</strong> (Practices for Measurement,
              Testing, Adjusting and Balancing), os procedimentos do <strong>NEBB</strong> (National Environmental Balancing Bureau) e a
              <strong>NBR 16401</strong> (Instalações de Ar-Condicionado).
            </p>
          </div>

          <aside class="sector-highlights glass-card fade-in" aria-label="Destaques TAB">
            <h3>Escopo do TAB</h3>
            <div class="sector-highlights__list">
              <div class="sector-highlight">
                <div class="sector-highlight__icon">📐</div>
                <div>
                  <div class="sector-highlight__title">Medição de Vazões</div>
                  <div class="sector-highlight__desc">Ar em difusores e dutos, água em circuitos hidráulicos.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">⚖️</div>
                <div>
                  <div class="sector-highlight__title">Balanceamento</div>
                  <div class="sector-highlight__desc">Ajuste de dampers, válvulas e rotações para distribuição uniforme.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">🌡️</div>
                <div>
                  <div class="sector-highlight__title">Verificação Térmica</div>
                  <div class="sector-highlight__desc">Temperatura, umidade e pressão conforme critérios de projeto.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">📋</div>
                <div>
                  <div class="sector-highlight__title">Documentação</div>
                  <div class="sector-highlight__desc">Relatórios de medição com valores projetados vs. medidos.</div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- O que é Comissionamento -->
    <section class="section sector-content">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Além do TAB</span>
          <h2 class="section__title">O que é <span class="gradient-text">Comissionamento (Cx)</span>?</h2>
        </div>

        <div class="sector-content__grid">
          <div class="sector-content__text fade-in">
            <p>
              O <strong>Comissionamento (Cx)</strong> é um processo abrangente de verificação e documentação que assegura que todos
              os sistemas HVAC estejam instalados, calibrados e operando <strong>exatamente conforme especificado em projeto</strong>.
            </p>
            <p>
              Enquanto o TAB foca em vazões e balanceamento, o Cx vai além: inclui a <strong>verificação de controles e automação</strong>,
              testes de sequências de operação, validação de safeties, e o treinamento da equipe de operação e manutenção.
            </p>
            <p>
              O processo segue as diretrizes da <strong>ASHRAE Guideline 0</strong> (The Commissioning Process) e da
              <strong>ASHRAE Standard 202</strong> (Commissioning Process for Buildings), e se desdobra em cinco fases:
              pré-design, design, construção, aceitação e pós-ocupação.
            </p>
          </div>

          <aside class="sector-highlights glass-card fade-in" aria-label="Fases do Comissionamento">
            <h3>Fases do Cx</h3>
            <div class="sector-highlights__list">
              <div class="sector-highlight">
                <div class="sector-highlight__icon">1</div>
                <div>
                  <div class="sector-highlight__title">Pré-Design</div>
                  <div class="sector-highlight__desc">Definição de OPR (Owner's Project Requirements).</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">2</div>
                <div>
                  <div class="sector-highlight__title">Design</div>
                  <div class="sector-highlight__desc">Revisão de projeto e Basis of Design (BoD).</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">3</div>
                <div>
                  <div class="sector-highlight__title">Construção</div>
                  <div class="sector-highlight__desc">Inspeções, checklists e verificação de instalação.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">4</div>
                <div>
                  <div class="sector-highlight__title">Aceitação</div>
                  <div class="sector-highlight__desc">Testes funcionais, TAB e validação de performance.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">5</div>
                <div>
                  <div class="sector-highlight__title">Pós-Ocupação</div>
                  <div class="sector-highlight__desc">Verificação sazonal e otimização contínua.</div>
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
              <div class="sector-info-card__icon" aria-hidden="true">⚠️</div>
              <h3>30% dos sistemas falham</h3>
            </div>
            <p>Estudos indicam que até <strong>30% dos sistemas HVAC</strong> não atingem a performance projetada sem comissionamento adequado. Problemas passam despercebidos até gerarem custos operacionais elevados.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">⚡</div>
              <h3>15–25% de economia</h3>
            </div>
            <p>Sistemas corretamente balanceados consomem <strong>15 a 25% menos energia</strong>. O TAB elimina desperdícios por excesso de vazão, pressão e operação fora do ponto de projeto.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">📜</div>
              <h3>Conformidade regulatória</h3>
            </div>
            <p>Indispensável para atender exigências da <strong>ANVISA</strong> (farmacêutico), certificações hospitalares e auditorias de qualidade. Documentação rastreável para inspeções e validações.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🔍</div>
              <h3>Prevenção de problemas</h3>
            </div>
            <p>Identifica e corrige defeitos <strong>antes da operação</strong>, reduzindo manutenção corretiva, chamados emergenciais e paradas não programadas.</p>
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
            <p>Revisão detalhada do projeto, definição de critérios de aceitação e elaboração do plano de comissionamento com cronograma e responsabilidades.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">02</div>
              <h3>Verificação de Instalação</h3>
            </div>
            <p>Inspeção visual completa, checklists de montagem, verificação de acessórios, instrumentação, conexões e conformidade com o projeto executivo.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">03</div>
              <h3>Testes Funcionais</h3>
            </div>
            <p>Start-up de equipamentos, verificação de sequências de operação da automação, teste de dispositivos de segurança (safeties) e intertravamentos.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">04</div>
              <h3>TAB</h3>
            </div>
            <p>Medição de vazões de ar e água, ajuste de dampers e válvulas, balanceamento de circuitos hidráulicos e aeráulicos conforme ASHRAE 111 e NEBB.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">05</div>
              <h3>Validação</h3>
            </div>
            <p>Comparação sistemática da performance real vs. projeto, elaboração de relatórios de desvio e execução de ajustes finais até atingir os critérios de aceitação.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">06</div>
              <h3>Documentação & Treinamento</h3>
            </div>
            <p>Relatório final de comissionamento, manual de operação e manutenção, e treinamento presencial da equipe técnica do cliente.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Equipamentos & Instrumentação -->
    <section class="section sector-cards">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Precisão de medição</span>
          <h2 class="section__title">Equipamentos &amp; <span class="gradient-text">Instrumentação</span></h2>
        </div>

        <div class="sector-cards__grid">
          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🔬</div>
              <h3>Balômetro</h3>
            </div>
            <p>Medição direta de vazão em difusores e grelhas — leitura instantânea de CFM/m³/h com alta precisão.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">💨</div>
              <h3>Anemômetro de Fio Quente</h3>
            </div>
            <p>Medição de velocidade do ar em dutos com resolução de 0,01 m/s. Ideal para baixas velocidades e pontos de difícil acesso.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">📊</div>
              <h3>Manômetro Diferencial</h3>
            </div>
            <p>Medição de pressão estática e dinâmica em dutos e ambientes. Essencial para verificação de cascata de pressão.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">📏</div>
              <h3>Tubo de Pitot</h3>
            </div>
            <p>Medição de vazão em dutos por travessia de Pitot. Método de referência conforme ASHRAE 111 e SMACNA.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🌡️</div>
              <h3>Termohigrômetro</h3>
            </div>
            <p>Medição simultânea de temperatura e umidade relativa. Registro de dados para verificação de estabilidade termo-higrométrica.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🌊</div>
              <h3>Medidor Ultrassônico</h3>
            </div>
            <p>Medição não invasiva de vazão em circuitos hidráulicos. Sem necessidade de interromper a operação para instalação.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🔄</div>
              <h3>Tacômetro</h3>
            </div>
            <p>Medição de rotação de ventiladores e bombas (RPM). Verificação de polias, correias e frequência de operação de VFDs.</p>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">⚡</div>
              <h3>Analisador de Energia</h3>
            </div>
            <p>Medição de consumo elétrico, fator de potência e harmônicos. Base para análise de eficiência energética do sistema.</p>
          </article>
        </div>
      </div>
    </section>

    <!-- Normas e Referências -->
    <section class="section sector-standards">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Base normativa</span>
          <h2 class="section__title">Normas e <span class="gradient-text">Referências</span></h2>
        </div>

        <div class="standards-grid">
          <div class="standard-badge fade-in"><strong>ASHRAE 111</strong><span>Testing, Adjusting and Balancing</span></div>
          <div class="standard-badge fade-in"><strong>ASHRAE Guideline 0</strong><span>The Commissioning Process</span></div>
          <div class="standard-badge fade-in"><strong>ASHRAE Standard 202</strong><span>Commissioning Process for Buildings</span></div>
          <div class="standard-badge fade-in"><strong>NEBB</strong><span>Procedural Standards for TAB</span></div>
          <div class="standard-badge fade-in"><strong>NBR 16401</strong><span>Instalações de Ar-Condicionado</span></div>
          <div class="standard-badge fade-in"><strong>SMACNA</strong><span>HVAC Systems Testing, Adjusting and Balancing</span></div>
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
              Conte com a Siqueira e Blanco para validar, balancear e comissionar seu sistema HVAC com rigor técnico,
              instrumentação calibrada e documentação completa para auditorias e certificações.
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
