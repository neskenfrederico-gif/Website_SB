<?php
$base             = '..';
$active_page      = 'servicos';
$page_title       = 'Conformidade PMOC | Autodiagnóstico Lei 13.589 — Siqueira e Blanco';
$page_description = 'Descubra em 1 minuto se a climatização do seu edifício está em conformidade com o PMOC (Lei 13.589/2018). Autodiagnóstico gratuito e orientação técnica para evitar multas de até R$ 200 mil.';
$og_title         = 'Sua climatização está em conformidade com a Lei do PMOC?';
$og_description   = 'Autodiagnóstico gratuito de conformidade PMOC (Lei 13.589/2018) em 6 perguntas. Evite multas de até R$ 200 mil e garanta a qualidade do ar interior.';
$og_image         = 'https://siqueiraeblanco.com.br/banner_hero.webp';
$og_url           = 'https://siqueiraeblanco.com.br/pmoc/';
$canonical        = $og_url;
$extra_css        = ['pmoc.css?v=1'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <?php include '../includes/head.php'; ?>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    { "@type": "ListItem", "position": 1, "name": "Início", "item": "https://siqueiraeblanco.com.br/" },
    { "@type": "ListItem", "position": 2, "name": "Conformidade PMOC", "item": "https://siqueiraeblanco.com.br/pmoc/" }
  ]
}
    </script>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "O PMOC é obrigatório?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Sim. A Lei Federal 13.589/2018 torna o PMOC (Plano de Manutenção, Operação e Controle) obrigatório para todos os edifícios de uso público e coletivo com sistemas de climatização. A ausência pode gerar multas de até R$ 200 mil."
      }
    },
    {
      "@type": "Question",
      "name": "Quem pode ser o responsável técnico pelo PMOC?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "O PMOC deve ter um responsável técnico habilitado (engenheiro mecânico ou profissional com atribuição), com ART/RRT registrada, responsável pelo plano e pelos laudos de qualidade do ar interior."
      }
    }
  ]
}
    </script>
  </head>

  <body>
    <?php include '../includes/header.php'; ?>

    <main id="main-content">
      <!-- Hero -->
      <section class="page-hero">
        <div class="container">
          <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="../">Início</a>
            <span aria-hidden="true">›</span>
            <span aria-current="page">Conformidade PMOC</span>
          </nav>
          <span class="section__subtitle">Lei 13.589/2018</span>
          <h1 class="page-hero__title">Sua climatização está em <span class="gradient-text">conformidade</span>?</h1>
          <p class="page-hero__subtitle">Faça o autodiagnóstico gratuito de PMOC em 1 minuto e descubra o seu nível de risco legal.</p>
        </div>
      </section>

      <!-- Contexto / risco legal -->
      <section class="section">
        <div class="container">
          <div class="pmoc-risks">
            <div class="pmoc-risk-card glass-card fade-in">
              <span class="pmoc-risk-card__value">Obrigatório</span>
              <span class="pmoc-risk-card__label">Exigido por lei federal para edifícios de uso público e coletivo climatizados.</span>
            </div>
            <div class="pmoc-risk-card glass-card fade-in stagger-1">
              <span class="pmoc-risk-card__value">até R$ 200 mil</span>
              <span class="pmoc-risk-card__label">Valor das multas previstas pela ausência ou irregularidade do PMOC.</span>
            </div>
            <div class="pmoc-risk-card glass-card fade-in stagger-2">
              <span class="pmoc-risk-card__value">Saúde &amp; QAI</span>
              <span class="pmoc-risk-card__label">Previne a Síndrome do Edifício Doente e protege ocupantes e a sua reputação.</span>
            </div>
          </div>
        </div>
      </section>

      <!-- Autodiagnóstico -->
      <section class="section" style="padding-top: 0;">
        <div class="container">
          <div class="section__header">
            <span class="section__subtitle">Autodiagnóstico</span>
            <h2 class="section__title">Avalie sua <span class="gradient-text">conformidade</span></h2>
          </div>

          <form class="pmoc-quiz glass-card" id="pmoc-quiz" novalidate>
            <p class="pmoc-quiz__intro">Responda às 6 perguntas abaixo. Nenhum dado é enviado nesta etapa — o resultado é calculado no seu próprio navegador.</p>

            <?php
            $perguntas = [
              'O edifício possui um PMOC documentado e atualizado?',
              'Existe um responsável técnico (ART/RRT) pelo plano?',
              'A manutenção segue um cronograma periódico registrado?',
              'Há laudos recentes de qualidade do ar interior (QAI)?',
              'Filtros e dutos têm limpeza/troca com registro?',
              'A última avaliação foi há menos de 12 meses?',
            ];
            foreach ($perguntas as $i => $p):
              $n = $i + 1;
            ?>
            <fieldset class="pmoc-q">
              <legend class="pmoc-q__legend"><span class="pmoc-q__num"><?= $n ?>.</span><?= $p ?></legend>
              <div class="pmoc-options">
                <label class="pmoc-opt"><input type="radio" name="q<?= $n ?>" value="1"><span>Sim</span></label>
                <label class="pmoc-opt"><input type="radio" name="q<?= $n ?>" value="0"><span>Não</span></label>
                <label class="pmoc-opt"><input type="radio" name="q<?= $n ?>" value="0"><span>Não sei</span></label>
              </div>
            </fieldset>
            <?php endforeach; ?>

            <div class="pmoc-quiz__actions">
              <button type="submit" class="btn btn--primary">Ver meu diagnóstico</button>
              <span class="pmoc-quiz__hint" id="pmoc-quiz-hint" role="status" aria-live="polite"></span>
            </div>

            <div class="pmoc-result" id="pmoc-result" hidden>
              <h3 class="pmoc-result__title" id="pmoc-result-title"></h3>
              <div class="pmoc-meter" aria-hidden="true"><div class="pmoc-meter__fill" id="pmoc-meter-fill"></div></div>
              <p class="pmoc-result__text" id="pmoc-result-text"></p>
              <div class="pmoc-result__actions">
                <a href="../contato/" class="btn btn--primary" id="pmoc-cta-contato">Falar com um especialista</a>
                <a href="#" class="btn btn--secondary" id="pmoc-cta-whatsapp" target="_blank" rel="noopener">Tirar dúvida no WhatsApp</a>
              </div>
            </div>
          </form>
        </div>
      </section>

      <!-- O que é PMOC -->
      <section class="section" style="padding-top: 0;">
        <div class="container">
          <div class="cta-card glass-card fade-in">
            <h2>O que é o PMOC?</h2>
            <p>O PMOC (Plano de Manutenção, Operação e Controle) é o documento que reúne o cronograma de manutenção, os procedimentos e os responsáveis técnicos pelos sistemas de climatização — garantindo qualidade do ar interior e conformidade com a Lei 13.589/2018.</p>
            <div class="cta-buttons">
              <a href="../artigos/o-que-e-pmoc.php" class="btn btn--secondary">Ler o guia completo</a>
              <a href="../servicos/" class="btn btn--outline">Ver nossos serviços</a>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA final -->
      <section class="section cta-section">
        <div class="container">
          <div class="cta-card glass-card fade-in">
            <h2>Precisa regularizar o PMOC do seu edifício?</h2>
            <p>Nossa equipe elabora o PMOC, executa a manutenção e emite os laudos de qualidade do ar. Atendemos todo o Brasil.</p>
            <div class="cta-buttons">
              <a href="../contato/" class="btn btn--primary">Solicitar Diagnóstico Técnico</a>
              <a href="../portfolio/" class="btn btn--secondary">Ver Projetos Realizados</a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php include '../includes/footer.php'; ?>
    <?php include '../includes/whatsapp-float.php'; ?>
    <?php include '../includes/scripts.php'; ?>

    <script>
      (function () {
        var form = document.getElementById('pmoc-quiz');
        if (!form) return;

        var TOTAL = 6;
        var WHATS = 'https://wa.me/5562992250067';

        var resultBox = document.getElementById('pmoc-result');
        var titleEl = document.getElementById('pmoc-result-title');
        var textEl = document.getElementById('pmoc-result-text');
        var fillEl = document.getElementById('pmoc-meter-fill');
        var hintEl = document.getElementById('pmoc-quiz-hint');
        var waBtn = document.getElementById('pmoc-cta-whatsapp');

        form.addEventListener('submit', function (e) {
          e.preventDefault();

          var score = 0, answered = 0;
          for (var i = 1; i <= TOTAL; i++) {
            var sel = form.querySelector('input[name="q' + i + '"]:checked');
            if (sel) {
              answered++;
              score += parseInt(sel.value, 10) || 0;
            }
          }

          if (answered < TOTAL) {
            hintEl.textContent = 'Responda todas as perguntas para ver o diagnóstico (' + answered + '/' + TOTAL + ').';
            return;
          }
          hintEl.textContent = '';

          var pct = Math.round((score / TOTAL) * 100);
          var tier, title, text, color, waMsg;

          if (score >= 5) {
            tier = 'ok'; color = '#16a34a';
            title = 'Boa conformidade aparente (' + score + '/' + TOTAL + ')';
            text = 'Seu sistema aparenta estar em dia com os principais requisitos do PMOC. Vale uma validação técnica periódica para manter os laudos e registros atualizados.';
            waMsg = 'Olá! Fiz o autodiagnóstico de PMOC e tive boa conformidade. Gostaria de uma validação técnica.';
          } else if (score >= 3) {
            tier = 'warn'; color = '#d97706';
            title = 'Atenção: conformidade parcial (' + score + '/' + TOTAL + ')';
            text = 'Há lacunas que podem expor o edifício a riscos legais e de qualidade do ar. Recomendamos um diagnóstico técnico para priorizar as correções.';
            waMsg = 'Olá! Fiz o autodiagnóstico de PMOC e tive conformidade parcial. Gostaria de orientação para regularizar.';
          } else {
            tier = 'danger'; color = '#dc2626';
            title = 'Risco alto de não conformidade (' + score + '/' + TOTAL + ')';
            text = 'Seu edifício pode estar exposto a multas de até R$ 200 mil e a riscos de saúde dos ocupantes. Recomendamos fortemente a elaboração/atualização do PMOC com responsável técnico.';
            waMsg = 'Olá! Fiz o autodiagnóstico de PMOC e tive risco alto. Preciso regularizar o PMOC do meu edifício.';
          }

          resultBox.className = 'pmoc-result pmoc-result--' + tier;
          titleEl.textContent = title;
          textEl.textContent = text;
          fillEl.style.width = pct + '%';
          fillEl.style.background = color;
          waBtn.href = WHATS + '?text=' + encodeURIComponent(waMsg);
          resultBox.hidden = false;
          resultBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

          // GA4 (usa o helper global de script.js, se disponível)
          if (typeof window.trackEvent === 'function') {
            window.trackEvent('pmoc_diagnostico', { score: score, nivel: tier });
          }
        });
      })();
    </script>
  </body>
</html>
