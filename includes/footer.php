<?php
/**
 * Footer padrão (subpáginas)
 *
 * Variáveis esperadas:
 *   $base — prefixo de caminho ('..' para subpáginas)
 */
$sep = ($base === '') ? '' : '/';
?>
    <footer class="footer">
      <div class="container">
        <div class="footer__content">
          <div class="footer__logo">
            <a href="<?= $base . $sep ?>" class="nav__logo" aria-label="Ir para página inicial">
              <img src="<?= $base . $sep ?>Logomarca.png" alt="Siqueira e Blanco - Engenharia HVAC" class="logo-img" width="180" height="60" loading="lazy">
            </a>
            <p class="logo-text">Soluções de engenharia HVAC de alta performance para indústrias e grandes empreendimentos.</p>
          </div>
          <div class="footer__links">
            <h4>Links Rápidos</h4>
            <ul>
              <li><a href="<?= $base . $sep ?>">Início</a></li>
              <li><a href="<?= $base . $sep ?>sobre/">Sobre Nós</a></li>
              <li><a href="<?= $base . $sep ?>servicos/">Serviços</a></li>
              <li><a href="<?= $base . $sep ?>portfolio/">Portfólio</a></li>
              <li><a href="<?= $base . $sep ?>contato/">Contato</a></li>
            </ul>
          </div>
          <div class="footer__contact">
            <h4>Contato</h4>
            <p>Av. Contorno nº 751, Qd. 12 Lt. A<br>Res. Arco Íris<br>Anápolis – GO</p>
            <p>(62) 99225-0067</p>
            <p>nesken@fluxo.eng.br</p>
          </div>
        </div>
        <div class="footer__bottom">
          <p>&copy; <span id="current-year"><?= date('Y') ?></span> Siqueira e Blanco Ltda. Todos os direitos reservados.</p>
          <p>CNPJ: 16.887.958/0001-86 | <a href="<?= $base . $sep ?>privacidade.php" class="footer__privacy-link">Política de Privacidade</a></p>
        </div>
      </div>
    </footer>
