<?php
/**
 * Formulário de contato para páginas de setor
 *
 * Variáveis esperadas:
 *   $form_sector — nome do setor (ex: "Hospitalar & Farmacêutico")
 */
?>
          <form class="contato__form glass-card fade-in" action="https://formspree.io/f/mjgropnr" method="POST">
            <input type="hidden" name="sector" value="<?= htmlspecialchars($form_sector) ?>" />
            <div class="form-group">
              <label for="name">Nome Completo</label>
              <input type="text" id="name" name="name" required placeholder="Seu nome" autocomplete="name" />
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" required placeholder="seu@email.com" autocomplete="email" />
            </div>
            <div class="form-group">
              <label for="phone">Telefone</label>
              <input type="tel" id="phone" name="phone" required placeholder="(00) 00000-0000" autocomplete="tel" />
            </div>
            <div class="form-group form-group--full">
              <label for="message">Mensagem</label>
              <textarea id="message" name="message" rows="4" required placeholder="Descreva seu projeto (área, classe, processo, prazos...)" ></textarea>
            </div>
            <div class="form-group form-group--honey" aria-hidden="true"><label for="_honey">Não preencha</label><input type="text" id="_honey" name="_gotcha" tabindex="-1" autocomplete="off"></div>
            <button type="submit" class="btn-cta btn-cta--primary">
              <div class="btn-cta__icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <line x1="22" y1="2" x2="11" y2="13"></line>
                  <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
              </div>
              <div class="btn-cta__content">
                <strong>Enviar Mensagem</strong>
                <span>Retorno em até 24h</span>
              </div>
            </button>
          </form>
