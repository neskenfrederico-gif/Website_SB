<?php
/**
 * CTA + Formulário de projeto
 *
 * Variáveis esperadas:
 *   $cta_description — texto descritivo do CTA
 *   $form_origin     — valor do campo hidden "origem"
 */
?>
    <section class="project-section project-section--flush">
      <div class="container">
        <div class="project-cta glass-card">
          <div>
            <h2 class="project-cta__title">Tem um projeto semelhante?</h2>
            <p class="project-text__paragraph"><?= $cta_description ?></p>
            <a href="https://wa.me/5562992250067?text=Olá! Gostaria de solicitar um orçamento." class="btn btn--whatsapp" target="_blank" rel="noopener noreferrer"><span>Falar no WhatsApp</span></a>
          </div>
          <form class="project-form" action="https://formspree.io/f/mjgropnr" method="POST">
            <input type="hidden" name="origem" value="<?= htmlspecialchars($form_origin) ?>" />
            <div class="form-group"><label for="name">Nome</label><input id="name" name="name" type="text" required placeholder="Seu nome" /></div>
            <div class="form-group"><label for="email">E-mail</label><input id="email" name="email" type="email" required placeholder="seu@email.com" /></div>
            <div class="form-group"><label for="phone">Telefone</label><input id="phone" name="phone" type="tel" required placeholder="(00) 00000-0000" /></div>
            <div class="form-group"><label for="message">Mensagem</label><textarea id="message" name="message" rows="4" required placeholder="Descreva seu projeto..."></textarea></div>
            <div class="form-group form-group--honey" aria-hidden="true"><label for="_honey">Não preencha</label><input type="text" id="_honey" name="_gotcha" tabindex="-1" autocomplete="off"></div>
            <button type="submit" class="btn-cta btn-cta--primary">
              <div class="btn-cta__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
              </div>
              <div class="btn-cta__content">
                <strong>Enviar Mensagem</strong>
                <span>Retorno em até 24h</span>
              </div>
            </button>
          </form>
        </div>
      </div>
    </section>
