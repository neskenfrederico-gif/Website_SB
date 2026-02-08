<?php
$base             = '..';
$active_page      = 'setores';
$page_title       = 'Climatização para Data Centers (Precisão e Redundância) | Siqueira e Blanco';
$page_description = 'HVAC de precisão para data centers: redundância Tier III/IV, controle ±0,5°C e ±5% UR, hot/cold aisle e eficiência (PUE). Projetos no Brasil.';
$og_title         = 'Climatização para Data Centers | Siqueira e Blanco';
$og_description   = 'Projetos HVAC de precisão: redundância Tier III/IV, microclima, hot/cold aisle, in-row cooling e otimização de PUE, com base ASHRAE TC 9.9 e TIA-942.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/setores/datacenter.php';
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
        "serviceType": "Climatização de Precisão para Data Centers",
        "provider": {
          "@type": "EngineeringService",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "areaServed": "BR",
        "url": "https://siqueiraeblanco.com.br/setores/datacenter.php",
        "description": "Projeto e retrofit de climatização de precisão para data centers, com redundância, controle fino de temperatura/umidade, contenção hot/cold aisle e eficiência energética (PUE).",
        "availableChannel": {
          "@type": "ServiceChannel",
          "serviceUrl": "https://wa.me/5562992250067?text=Ol%C3%A1!%20Gostaria%20de%20solicitar%20um%20or%C3%A7amento.",
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
    { "@type": "ListItem", "position": 2, "name": "Setores", "item": "https://siqueiraeblanco.com.br/#setores" },
    { "@type": "ListItem", "position": 3, "name": "Data Centers", "item": "https://siqueiraeblanco.com.br/setores/datacenter.php" }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
<!-- Hero (Setor) -->
    <section class="sector-hero" id="topo">
      <div class="container">
        <nav class="breadcrumb" aria-label="Breadcrumb">
          <a href="../">Início</a>
          <span aria-hidden="true">›</span>
          <a href="../setores/">Setores</a>
          <span aria-hidden="true">›</span>
          <span aria-current="page">Data Centers</span>
        </nav>
        <span class="section__subtitle">Setor de Atuação</span>
        <h1 class="page-hero__title">Climatização para <span class="gradient-text">Data Centers</span></h1>
        <p class="page-hero__subtitle">Precisão e redundância para operação contínua</p>
      </div>
    </section>

    <!-- Conteúdo técnico -->
    <section class="section sector-content">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Alta disponibilidade</span>
          <h2 class="section__title">Microclima, <span class="gradient-text">redundância</span> e <span class="gradient-text">eficiência</span></h2>
        </div>

        <div class="sector-content__grid">
          <div class="sector-content__text fade-in">
            <p>
              Data centers exigem climatização de precisão para manter a operação contínua, preservar a vida útil de equipamentos
              e reduzir riscos de indisponibilidade. O projeto HVAC deve considerar a densidade térmica dos racks, a distribuição
              de ar, a recirculação e as condições de operação ao longo do ano.
            </p>
            <p>
              Trabalhamos com arquiteturas de redundância alinhadas a cenários <strong>Tier III/IV</strong>, onde tolerância a falhas,
              manutenção sem parada e estratégia de contingência são parte do escopo. A integração com automação, alarmes e
              monitoramento térmico é essencial para resposta rápida e estabilidade.
            </p>
            <p>
              Para controle de microclima, adotamos metas típicas de <strong>temperatura ±0,5°C</strong> e <strong>umidade ±5%</strong>
              (ajustadas conforme o perfil do cliente e recomendações), além de estratégias de contenção <strong>hot aisle/cold aisle</strong>,
              <strong>in-row cooling</strong> e, quando aplicável, <strong>raised floor</strong> com gerenciamento de vazões e pressões.
            </p>
            <p>
              Também atuamos na otimização de eficiência energética visando redução de <strong>PUE</strong>, por meio de análise de setpoints,
              melhorias de controle, ajuste de fluxo e seleção de equipamentos. O equilíbrio entre resiliência e eficiência é desenhado
              desde o conceito.
            </p>
          </div>

          <aside class="sector-highlights glass-card fade-in" aria-label="Destaques técnicos">
            <h3>Destaques do setor</h3>
            <div class="sector-highlights__list">
              <div class="sector-highlight">
                <div class="sector-highlight__icon">±T</div>
                <div>
                  <div class="sector-highlight__title">Precisão de controle</div>
                  <div class="sector-highlight__desc">Temperatura e umidade com baixa variação para reduzir hotspots.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">N+1</div>
                <div>
                  <div class="sector-highlight__title">Redundância</div>
                  <div class="sector-highlight__desc">Estratégias N+1 / 2N conforme criticidade e Tier.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">PUE</div>
                <div>
                  <div class="sector-highlight__title">Eficiência energética</div>
                  <div class="sector-highlight__desc">Ações para redução de consumo e melhor PUE.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">AIR</div>
                <div>
                  <div class="sector-highlight__title">Distribuição de ar</div>
                  <div class="sector-highlight__desc">Hot/cold aisle, in-row e controle de recirculação.</div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- Normas -->
    <section class="section sector-standards">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Referências técnicas</span>
          <h2 class="section__title">Normas e <span class="gradient-text">guidelines</span></h2>
        </div>

        <div class="standards-grid">
          <div class="standard-badge fade-in"><strong>ASHRAE TC 9.9</strong><span>Recomendações para data centers</span></div>
          <div class="standard-badge fade-in"><strong>TIA-942</strong><span>Infraestrutura de telecom/data centers</span></div>
          <div class="standard-badge fade-in"><strong>Uptime Institute</strong><span>Classificação Tier e resiliência</span></div>
        </div>
      </div>
    </section>

    <!-- Serviços específicos -->
    <section class="section sector-cards" id="servicos-setor">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Escopo especializado</span>
          <h2 class="section__title">Serviços para <span class="gradient-text">Data Centers</span></h2>
        </div>

        <div class="sector-cards__grid">
          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">📐</div>
              <h3>Projeto de climatização de precisão</h3>
            </div>
            <p>Dimensionamento térmico, distribuição de ar e seleção de tecnologia (CRAC/CRAH, in-row, chiller, DX, etc.).</p>
            <ul>
              <li>Mapeamento de densidade por rack</li>
              <li>Estratégia hot aisle/cold aisle</li>
              <li>Integração com BMS e alarmes</li>
            </ul>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🔁</div>
              <h3>Redundância e disponibilidade</h3>
            </div>
            <p>Arquitetura N+1/2N, setorização e estratégias de manutenção sem parada conforme criticidade.</p>
            <ul>
              <li>Análise de pontos únicos de falha</li>
              <li>Contingência e resposta a incidentes</li>
              <li>Comissionamento funcional</li>
            </ul>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">⚡</div>
              <h3>Análise de PUE</h3>
            </div>
            <p>Diagnóstico e plano de melhorias para reduzir consumo, otimizar setpoints e balancear fluxo/pressão.</p>
            <ul>
              <li>Curvas e setpoints de operação</li>
              <li>Otimização de controle e ventilação</li>
              <li>Medição e acompanhamento</li>
            </ul>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🛰️</div>
              <h3>Monitoramento térmico</h3>
            </div>
            <p>Instrumentação e leitura de microclima para identificar hotspots, recirculação e perdas de eficiência.</p>
            <ul>
              <li>Mapas de temperatura por corredor</li>
              <li>Alertas e relatórios</li>
              <li>Suporte a melhorias contínuas</li>
            </ul>
          </article>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="section faq" id="faq-setor">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Dúvidas do setor</span>
          <h2 class="section__title">FAQ — <span class="gradient-text">Data Centers</span></h2>
        </div>

        <div class="faq__grid">
          <div class="faq-item fade-in">
            <button class="faq-question" id="faq-dc-q1" aria-expanded="false" aria-controls="faq-dc-a1">
              Por que a climatização de precisão é tão crítica?
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-dc-a1" role="region" aria-labelledby="faq-dc-q1">
              <p>Porque pequenas variações podem gerar hotspots, aumentar taxa de falhas e reduzir a confiabilidade. O controle fino de temperatura/umidade melhora estabilidade e facilita o gerenciamento do ambiente de TI.</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <button class="faq-question" id="faq-dc-q2" aria-expanded="false" aria-controls="faq-dc-a2">
              O que significa redundância Tier III/IV na prática?
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-dc-a2" role="region" aria-labelledby="faq-dc-q2">
              <p>Envolve tolerância a falhas e possibilidade de manutenção sem parada, com caminhos e capacidades redundantes (N+1/2N) e estratégia de operação/contingência coerente com a criticidade do data center.</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <button class="faq-question" id="faq-dc-q3" aria-expanded="false" aria-controls="faq-dc-a3">
              Como melhorar o PUE sem reduzir a segurança térmica?
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-dc-a3" role="region" aria-labelledby="faq-dc-q3">
              <p>Geralmente começa por contenção de corredores, redução de recirculação, ajuste de setpoints e controle, além de melhorias em ventiladores/serpentinas. Tudo deve ser validado por medições e limites recomendados (ex.: ASHRAE TC 9.9).</p>
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
          <h2 class="section__title">Alta disponibilidade começa no <span class="gradient-text">projeto</span></h2>
        </div>

        <div class="sector-cta__grid">
          <div class="sector-cta__info fade-in">
            <p>Vamos definir a arquitetura de cooling ideal para o seu data center, equilibrando resiliência, precisão e eficiência energética.</p>
            <a href="https://wa.me/5562992250067?text=Ol%C3%A1!%20Gostaria%20de%20solicitar%20um%20or%C3%A7amento." class="btn-cta btn-cta--whatsapp" target="_blank" rel="noopener noreferrer">
              <div class="btn-cta__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
              </div>
              <div class="btn-cta__content">
                <strong>Fale pelo WhatsApp</strong>
                <span>Resposta rápida</span>
              </div>
            </a>
          </div>

    

<?php
$form_sector = 'Data Centers';
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
