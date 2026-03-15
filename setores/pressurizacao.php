<?php
$base             = '..';
$active_page      = 'setores';
$page_title       = 'Pressurização de Escadas de Emergência | Siqueira e Blanco';
$page_description = 'Projetos de pressurização de escadas conforme IT-18 do Corpo de Bombeiros e NBR 9079. Sistemas que previnem infiltração de fumaça em rotas de fuga.';
$og_title         = 'Pressurização de Escadas de Emergência | Siqueira e Blanco';
$og_description   = 'Engenharia de pressurização de escadas conforme IT-18 e NBR 9079: ventiladores, dampers, bypass e controle de diferencial de pressão para segurança contra incêndio.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/setores/pressurizacao.php';
$og_type        = 'article';
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
        "serviceType": "Pressurização de Escadas de Emergência (Segurança contra Incêndio)",
        "provider": {
          "@type": "EngineeringService",
          "name": "Siqueira e Blanco Engenharia HVAC",
          "url": "https://siqueiraeblanco.com.br/",
          "telephone": "+55 62 99225-0067"
        },
        "areaServed": "BR",
        "url": "https://siqueiraeblanco.com.br/setores/pressurizacao.php",
        "description": "Projeto e dimensionamento de sistemas de pressurização de escadas de emergência conforme IT-18 do Corpo de Bombeiros e NBR 9079, com ventiladores centrífugos, dampers de alívio, bypass e controle de diferencial de pressão.",
        "availableChannel": {
          "@type": "ServiceChannel",
          "serviceUrl": "https://wa.me/5562992250067?text=Ol%C3%A1!%20Gostaria%20de%20solicitar%20um%20or%C3%A7amento%20para%20pressuriza%C3%A7%C3%A3o%20de%20escadas.",
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
    { "@type": "ListItem", "position": 3, "name": "Pressurização de Escadas", "item": "https://siqueiraeblanco.com.br/setores/pressurizacao.php" }
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
          <span aria-current="page">Pressurização de Escadas</span>
        </nav>
        <span class="section__subtitle">Setor de Atuação</span>
        <h1 class="page-hero__title">Pressurização de <span class="gradient-text">Escadas de Emergência</span></h1>
        <p class="page-hero__subtitle">Segurança contra incêndio conforme IT-18 e NBR 9079</p>
      </div>
    </section>

    <!-- Conteúdo técnico -->
    <section class="section sector-content">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Engenharia de segurança</span>
          <h2 class="section__title">Sistemas de <span class="gradient-text">pressurização</span> para rotas de fuga</h2>
        </div>

        <div class="sector-content__grid">
          <div class="sector-content__text fade-in">
            <p>
              A pressurização de escadas de emergência é um dos sistemas mais críticos de segurança contra incêndio em edifícios
              de múltiplos pavimentos. Seu objetivo é manter um <strong>diferencial de pressão positivo</strong> na caixa de escada,
              impedindo que fumaça e gases quentes penetrem na rota de fuga durante um sinistro.
            </p>
            <p>
              O sistema funciona por meio de <strong>ventiladores centrífugos</strong> (ou axiais de alta pressão) que insuflam ar
              externo na escada, criando uma barreira pneumática. Quando uma porta é aberta, o fluxo de ar direcionado para fora
              impede a entrada de fumaça, garantindo visibilidade e respirabilidade para os ocupantes em evacuação.
            </p>
            <p>
              O dimensionamento exige análise criteriosa de <strong>vazão e pressão estática</strong>, considerando o número de
              portas abertas simultaneamente, a altura do edifício, o efeito chaminé (stack effect), a ação do vento e as
              infiltrações naturais da envoltória. Além disso, é necessário prever sistemas de <strong>alívio de pressão</strong>
              (dampers de bypass ou barometric relief) para evitar sobrepressão quando todas as portas estão fechadas.
            </p>
            <p>
              A Siqueira e Blanco possui experiência comprovada em projetos de pressurização para edifícios comerciais, hotéis
              e empreendimentos de uso misto, com vazões que superam <strong>110.000 m³/h</strong> em projetos já executados.
            </p>
          </div>

          <aside class="sector-highlights glass-card fade-in" aria-label="Destaques técnicos">
            <h3>Destaques do setor</h3>
            <div class="sector-highlights__list">
              <div class="sector-highlight">
                <div class="sector-highlight__icon">IT</div>
                <div>
                  <div class="sector-highlight__title">IT-18 Corpo de Bombeiros</div>
                  <div class="sector-highlight__desc">Conformidade com instrução técnica estadual de segurança contra incêndio.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">ΔP</div>
                <div>
                  <div class="sector-highlight__title">Diferencial de pressão controlado</div>
                  <div class="sector-highlight__desc">25 a 80 Pa entre escada e pavimento, conforme cenário de portas abertas.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">m³/h</div>
                <div>
                  <div class="sector-highlight__title">Vazões de projeto elevadas</div>
                  <div class="sector-highlight__desc">Sistemas dimensionados para até 110.000+ m³/h em edifícios de grande porte.</div>
                </div>
              </div>
              <div class="sector-highlight">
                <div class="sector-highlight__icon">NBR</div>
                <div>
                  <div class="sector-highlight__title">NBR 9079 e NBR 14873</div>
                  <div class="sector-highlight__desc">Normas brasileiras para proteção de escadas por pressurização.</div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

    <!-- Normas -->
<?php
$norms_title = 'Normas e guias <span class="gradient-text">aplicáveis</span>';
$norms = [
    ['code' => 'IT-18',         'desc' => 'Instrução Técnica do Corpo de Bombeiros'],
    ['code' => 'NBR 9079',      'desc' => 'Pressurização de escadas de segurança'],
    ['code' => 'NBR 14873',     'desc' => 'Proteção contra incêndio em túneis'],
    ['code' => 'NBR 16401',     'desc' => 'Instalações de ar-condicionado'],
    ['code' => 'NFPA 92',       'desc' => 'Controle de fumaça em edificações'],
    ['code' => 'BS EN 12101-6', 'desc' => 'Pressurização diferencial'],
];
include '../includes/sector-norms.php';
?>

    <!-- Serviços específicos -->
    <section class="section sector-cards" id="servicos-setor">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Escopo especializado</span>
          <h2 class="section__title">Serviços para <span class="gradient-text">Pressurização de Escadas</span></h2>
        </div>

        <div class="sector-cards__grid">
          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">📋</div>
              <h3>Projeto executivo</h3>
            </div>
            <p>Dimensionamento completo do sistema de pressurização, incluindo cálculo de vazão, pressão estática e seleção de equipamentos.</p>
            <ul>
              <li>Cálculo por método de portas abertas/fechadas</li>
              <li>Análise de efeito chaminé e vento</li>
              <li>Memorial de cálculo detalhado</li>
            </ul>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">🔧</div>
              <h3>Seleção de equipamentos</h3>
            </div>
            <p>Especificação de ventiladores, dampers, dutos e acessórios dimensionados para a demanda do edifício.</p>
            <ul>
              <li>Ventiladores centrífugos ou axiais</li>
              <li>Dampers de alívio (bypass) e corta-fogo</li>
              <li>Grelhas e tomadas de ar externo</li>
            </ul>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">✅</div>
              <h3>Comissionamento e TAB</h3>
            </div>
            <p>Verificação de desempenho em campo, medição de diferenciais de pressão e vazão em cenários críticos.</p>
            <ul>
              <li>Testes com portas abertas e fechadas</li>
              <li>Medição de velocidade nas portas</li>
              <li>Ajuste fino de dampers e bypass</li>
            </ul>
          </article>

          <article class="sector-info-card fade-in">
            <div class="sector-info-card__top">
              <div class="sector-info-card__icon" aria-hidden="true">📝</div>
              <h3>Laudo e conformidade</h3>
            </div>
            <p>Documentação técnica para aprovação do Corpo de Bombeiros e habite-se, com laudos de desempenho e ART.</p>
            <ul>
              <li>Laudo de pressurização (IT-18)</li>
              <li>ART de projeto e execução</li>
              <li>Suporte para aprovação PPCI</li>
            </ul>
          </article>
        </div>
      </div>
    </section>

<?php
$cases = [
    ['href' => '../projetos/projeto-lineavitta.php', 'title' => 'Linea Vitta', 'specs' => '27.500 m² • 110.160 m³/h', 'desc' => 'Edifício comercial em Brasília com pressurização de escadas, climatização Split e exaustão mecânica.'],
    ['href' => '../projetos/projeto-lineag.php', 'title' => 'Linea G', 'specs' => '14.600 m² • 93.780 m³/h', 'desc' => 'Empreendimento misto (comercial/apart hotel) em Brasília com 208 apartamentos e pressurização de escadas.'],
    ['href' => '../projetos/projeto-goinn.php', 'title' => 'Hotel GoInn', 'specs' => '15.199 m² • 108.960 m³/h', 'desc' => 'Hotel com 172 apartamentos em Goiânia, pressurização de escadas, climatização e exaustão mecânica.'],
];
include '../includes/sector-cases.php';
?>

    <!-- FAQ -->
    <section class="section faq" id="faq-setor">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Dúvidas do setor</span>
          <h2 class="section__title">FAQ — <span class="gradient-text">Pressurização de Escadas</span></h2>
        </div>

        <div class="faq__grid">
          <div class="faq-item fade-in">
            <button class="faq-question" id="faq-press-q1" aria-expanded="false" aria-controls="faq-press-a1">
              Quando a pressurização de escadas é obrigatória?
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-press-a1" role="region" aria-labelledby="faq-press-q1">
              <p>A exigência varia conforme a legislação estadual (Instruções Técnicas do Corpo de Bombeiros). Em geral, edifícios acima de determinada altura (tipicamente 12 a 30 metros, dependendo do estado e da ocupação) devem possuir escada pressurizada. A IT-18 estabelece os critérios de desempenho que o sistema deve atender.</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <button class="faq-question" id="faq-press-q2" aria-expanded="false" aria-controls="faq-press-a2">
              Qual a diferença entre escada à prova de fumaça e escada pressurizada?
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-press-a2" role="region" aria-labelledby="faq-press-q2">
              <p>A escada à prova de fumaça utiliza antecâmaras ventiladas naturalmente (aberturas para o exterior) como barreira contra fumaça. Já a escada pressurizada usa ventilação mecânica forçada para criar um diferencial de pressão positivo, sendo mais eficaz em edifícios altos onde a ventilação natural é insuficiente ou arquitetonicamente inviável.</p>
            </div>
          </div>

          <div class="faq-item fade-in">
            <button class="faq-question" id="faq-press-q3" aria-expanded="false" aria-controls="faq-press-a3">
              Como funciona o sistema de alívio de pressão (bypass)?
              <span class="faq-icon" aria-hidden="true">+</span>
            </button>
            <div class="faq-answer" id="faq-press-a3" role="region" aria-labelledby="faq-press-q3">
              <p>Quando todas as portas estão fechadas, a pressão na escada tende a subir excessivamente, dificultando a abertura das portas. O sistema de bypass (dampers barométricos ou motorizados) alivia automaticamente o excesso de pressão, mantendo o diferencial dentro da faixa segura (25 a 80 Pa). Isso garante que as portas possam ser abertas com força aceitável conforme norma.</p>
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
          <h2 class="section__title">Vamos projetar a <span class="gradient-text">segurança do seu edifício</span></h2>
        </div>

        <div class="sector-cta__grid">
          <div class="sector-cta__info fade-in">
            <p>
              Conte com a Siqueira e Blanco para dimensionar e projetar o sistema de pressurização de escadas
              do seu empreendimento, com conformidade normativa, desempenho comprovado e documentação completa
              para aprovação junto ao Corpo de Bombeiros.
            </p>
            <a href="https://wa.me/5562992250067?text=Ol%C3%A1!%20Gostaria%20de%20solicitar%20um%20or%C3%A7amento%20para%20pressuriza%C3%A7%C3%A3o%20de%20escadas." class="btn-cta btn-cta--whatsapp" target="_blank" rel="noopener noreferrer">
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
$form_sector = 'Pressurização de Escadas';
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
