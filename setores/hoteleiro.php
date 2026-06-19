<?php
$base             = '..';
$active_page      = 'setores';
$page_title       = 'Climatização para Hotéis e Resorts | Siqueira e Blanco Engenharia';
$page_description = 'Projetos HVAC para hotéis, resorts e apart-hotéis: conforto do hóspede, controle de ruído (NBR 10152), eficiência em ocupação variável e pressurização de escadas (IT-18). Split, VRF e água gelada.';
$og_title         = 'Climatização para Hotéis e Resorts | Siqueira e Blanco';
$og_description   = 'Engenharia HVAC para hotelaria: conforto e silêncio nos quartos, eficiência em ocupação variável, áreas comuns e segurança contra incêndio.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/setores/hoteleiro.php';
$canonical        = $og_url;
$extra_css        = ['setor.css?v=1770973200'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Climatização para Hotéis, Resorts e Apart-Hotéis",
        "provider": {
          "@type": "EngineeringService",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "areaServed": "BR",
        "url": "https://siqueiraeblanco.com.br/setores/hoteleiro.php",
        "description": "Projeto executivo e consultoria HVAC para empreendimentos hoteleiros, com foco no conforto e silêncio do hóspede, eficiência em ocupação variável, climatização de áreas comuns e pressurização de escadas.",
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
    { "@type": "ListItem", "position": 3, "name": "Hoteleiro", "item": "https://siqueiraeblanco.com.br/setores/hoteleiro.php" }
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
          <span aria-current="page">Hoteleiro</span>
        </nav>
        <span class="section__subtitle">Setor de Atuação</span>
        <h1 class="page-hero__title">Climatização para <span class="gradient-text">Hotéis e Resorts</span></h1>
        <p class="page-hero__subtitle">Conforto e silêncio para o hóspede, eficiência para a operação</p>
      </div>
    </section>

    <!-- Conteúdo técnico -->
    <section class="section sector-content">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Hotéis, resorts e apart-hotéis</span>
          <h2 class="section__title">Experiência do <span class="gradient-text">hóspede</span> e eficiência da <span class="gradient-text">operação</span></h2>
        </div>

        <div class="sector-content__grid">
          <div class="sector-content__text fade-in">
            <p>
              Na hotelaria, o sistema de climatização é parte direta da experiência do hóspede: o quarto precisa atingir a
              temperatura desejada rapidamente, manter-se estável e, acima de tudo, ser <strong>silencioso</strong>. Ao mesmo tempo, a
              operação exige eficiência — a ocupação varia ao longo do ano e o consumo não pode acompanhar a capacidade total instalada.
            </p>
            <p>
              Projetamos a climatização de apartamentos e áreas comuns (lobby, restaurante, eventos, spa e academia) equilibrando
              conforto (<strong>ASHRAE 55</strong>), renovação e qualidade do ar (<strong>ASHRAE 62.1</strong> e <strong>NBR 16401</strong>) e níveis
              de ruído adequados ao descanso (<strong>NBR 10152</strong>), com seleção criteriosa de equipamentos e atenuadores.
            </p>
            <p>
              A escolha entre <strong>Split</strong>, <strong>VRF</strong> e sistemas com <strong>água gelada</strong> é definida pelo porte do
              empreendimento, pelo perfil de ocupação e pela relação CAPEX/OPEX. O zoneamento e a automação permitem desligar ou
              recuar áreas desocupadas, reduzindo o consumo sem prejudicar o conforto onde há hóspedes.
            </p>
            <p>
              Integramos ainda os sistemas de segurança contra incêndio, como a <strong>pressurização de escadas</strong> (IT-18 do Corpo de
              Bombeiros), e estruturamos o projeto em <strong>BIM</strong> para compatibilização multidisciplinar, reduzindo interferências e
              retrabalho na obra.
            </p>
          </div>

          <aside class="sector-highlights glass-card fade-in" aria-label="Destaques técnicos">
            <h3>Destaques do setor</h3>
            <div class="sector-highlights__list">
              <div class="sector-highlight">
                <div class="sector-highlight__icon">dB</div>
                <div>
                  <div class="sector-highlight__title">Silêncio nos quartos</div>
                  <div class="sector-highlight__desc">Controle de ruído (NBR 10152) para o descanso do hóspede.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">55</div>
                <div>
                  <div class="sector-highlight__title">Conforto (ASHRAE 55)</div>
                  <div class="sector-highlight__desc">Temperatura estável e controle individual por apartamento.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">%</div>
                <div>
                  <div class="sector-highlight__title">Ocupação variável</div>
                  <div class="sector-highlight__desc">Zoneamento e automação para economizar em baixa ocupação.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">🚨</div>
                <div>
                  <div class="sector-highlight__title">Segurança (IT-18)</div>
                  <div class="sector-highlight__desc">Pressurização de escadas e integração com prevenção de incêndio.</div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- Normas -->
<?php
$norms_title = 'Normas e <span class="gradient-text">referências</span>';
$norms = [
    ['code' => 'NBR 16401',   'desc' => 'Instalações de ar-condicionado'],
    ['code' => 'ASHRAE 55',   'desc' => 'Conforto térmico'],
    ['code' => 'ASHRAE 62.1', 'desc' => 'Ventilação e IAQ'],
    ['code' => 'NBR 10152',   'desc' => 'Níveis de ruído em ambientes'],
    ['code' => 'IT-18',       'desc' => 'Pressurização de escadas'],
];
include '../includes/sector-norms.php';
?>

    <!-- Serviços específicos -->
    <section class="section sector-cards" id="servicos-setor">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Escopo especializado</span>
          <h2 class="section__title">Serviços para <span class="gradient-text">Hotelaria</span></h2>
        </div>

        <div class="sector-cards__grid">
          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">📄</div>
              <h3>Projeto executivo</h3>
            </div>
            <p>Projeto HVAC completo para apartamentos e áreas comuns, com memorial, especificações e compatibilização.</p>
            <ul>
              <li>Dimensionamento e seleção de equipamentos</li>
              <li>Controle individual por apartamento</li>
              <li>Documentação para obra e operação</li>
            </ul>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🔇</div>
              <h3>Conforto acústico</h3>
            </div>
            <p>Soluções para manter o ruído dentro dos limites de descanso, do equipamento à distribuição de ar.</p>
            <ul>
              <li>Seleção de equipamentos silenciosos</li>
              <li>Atenuadores e tratamento de dutos</li>
              <li>Verificação conforme NBR 10152</li>
            </ul>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🏗️</div>
              <h3>Modelagem BIM</h3>
            </div>
            <p>Modelos BIM para coordenação multidisciplinar, reduzindo interferências e retrabalho na obra.</p>
            <ul>
              <li>Clash detection</li>
              <li>As-built e entregáveis</li>
              <li>Maior previsibilidade de instalação</li>
            </ul>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🧪</div>
              <h3>Comissionamento</h3>
            </div>
            <p>Testes funcionais, balanceamento e entrega de documentação para garantir operação conforme projeto.</p>
            <ul>
              <li>Testes e balanceamento (TAB)</li>
              <li>Validação de automação e setpoints</li>
              <li>Treinamento e handover da equipe</li>
            </ul>
          </article>
        </div>
      </div>
    </section>

<?php
$cases = [
    ['href' => '../projetos/projeto-lakeview.php', 'title' => 'Lake View Resort', 'specs' => '19.968 m² • 502 TR', 'desc' => 'Apart-hotel com 246 apartamentos em Brasília, com sistema Split para apartamentos e áreas comuns.'],
    ['href' => '../projetos/projeto-goinn.php', 'title' => 'Estação Goiânia (Hotel GoInn)', 'specs' => '15.199 m² • 326 TR', 'desc' => 'Hotel com 172 apartamentos, incluindo pressurização de escadas (108.960 m³/h).'],
    ['href' => '../projetos/projeto-lineag.php', 'title' => 'Linea G', 'specs' => '14.600 m² • 513 TR', 'desc' => 'Edifício misto comercial/apart-hotel com 208 apartamentos, lojas e áreas administrativas.'],
];
include '../includes/sector-cases.php';
?>

    <!-- FAQ -->
    <section class="section faq" id="faq-setor">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Dúvidas do setor</span>
          <h2 class="section__title">FAQ — <span class="gradient-text">Hotelaria</span></h2>
        </div>

        <div class="faq__grid">
          <div class="faq-item fade-in">
            <button class="faq-question" id="faq-hot-q1" aria-expanded="false" aria-controls="faq-hot-a1">
              Como garantir silêncio nos quartos?
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-hot-a1" role="region" aria-labelledby="faq-hot-q1">
              <p>O ruído é tratado desde a seleção do equipamento até a distribuição de ar: escolhemos máquinas mais silenciosas, dimensionamos dutos com velocidades adequadas e, quando necessário, aplicamos atenuadores acústicos — verificando os limites da NBR 10152 para dormitórios.</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <button class="faq-question" id="faq-hot-q2" aria-expanded="false" aria-controls="faq-hot-a2">
              Split, VRF ou água gelada para hotel?
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-hot-a2" role="region" aria-labelledby="faq-hot-q2">
              <p>Depende do porte, do perfil de ocupação e da relação CAPEX/OPEX. Hotéis menores costumam usar Split; empreendimentos maiores se beneficiam de VRF (controle por zona) ou água gelada (eficiência em grande escala). Fazemos a análise técnica para a melhor escolha.</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <button class="faq-question" id="faq-hot-q3" aria-expanded="false" aria-controls="faq-hot-a3">
              Como lidar com a ocupação variável?
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-hot-a3" role="region" aria-labelledby="faq-hot-q3">
              <p>Com zoneamento e automação, o sistema atende apenas as áreas e apartamentos ocupados, recuando setpoints ou desligando ambientes vazios. Isso reduz o consumo em períodos de baixa ocupação sem comprometer o conforto onde há hóspedes.</p>
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
          <h2 class="section__title">Eleve a experiência do seu <span class="gradient-text">hóspede</span></h2>
        </div>

        <div class="sector-cta__grid">
          <div class="sector-cta__info fade-in">
            <p>Do conceito ao comissionamento, entregamos engenharia HVAC para hotéis e resorts, com foco em conforto, silêncio e eficiência operacional.</p>
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
$form_sector = 'Hoteleiro';
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
