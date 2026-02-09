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
        <div class="project-cta">
          <!-- Left: dark card -->
          <div class="project-cta__left">
            <span class="project-cta__badge">💬 Fale Conosco</span>
            <h2 class="project-cta__title">Tem um projeto semelhante?</h2>
            <p class="project-cta__desc"><?= $cta_description ?></p>
            <div class="project-cta__buttons">
              <a href="https://wa.me/5562992250067?text=Olá! Gostaria de solicitar um orçamento." class="project-cta__btn project-cta__btn--whatsapp" target="_blank" rel="noopener noreferrer">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                <span>Falar no WhatsApp</span>
              </a>
              <a href="tel:+5562992250067" class="project-cta__btn project-cta__btn--phone">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>(62) 99225-0067</span>
              </a>
            </div>
          </div>
          <!-- Right: form -->
          <div class="project-cta__right">
            <h3 class="project-cta__form-title">Solicite um orçamento</h3>
            <form class="project-form" action="https://formspree.io/f/mjgropnr" method="POST">
              <input type="hidden" name="origem" value="<?= htmlspecialchars($form_origin) ?>" />
              <div class="project-form__row">
                <div class="form-group"><label for="name">Nome</label><input id="name" name="name" type="text" required placeholder="Seu nome" /></div>
                <div class="form-group"><label for="phone">Telefone</label><input id="phone" name="phone" type="tel" required placeholder="(00) 00000-0000" /></div>
              </div>
              <div class="form-group"><label for="email">E-mail</label><input id="email" name="email" type="email" required placeholder="seu@email.com" /></div>
              <div class="form-group"><label for="message">Mensagem</label><textarea id="message" name="message" rows="3" required placeholder="Descreva seu projeto..."></textarea></div>
              <div class="form-group form-group--honey" aria-hidden="true"><label for="_honey">Não preencha</label><input type="text" id="_honey" name="_gotcha" tabindex="-1" autocomplete="off"></div>
              <button type="submit" class="project-cta__submit">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                <span>Enviar Mensagem</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
