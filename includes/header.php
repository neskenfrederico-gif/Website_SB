<?php
/**
 * Header / Navegação
 *
 * Variáveis esperadas:
 *   $base        — prefixo de caminho ('' para raiz, '..' para subpáginas)
 *   $active_page — página ativa: 'home','servicos','sobre','setores','portfolio','artigos','contato'
 */
$active_page = $active_page ?? '';
$is_home     = ($base === '');
$sep         = $is_home ? '' : '/';
$home_link   = $is_home ? '#home' : $base . '/';

function nav_active($page, $current) {
  return $page === $current ? ' active' : '';
}
?>
    <a href="#main-content" class="skip-to-content">Pular para o conteúdo</a>
    <header class="header" id="header">
      <nav class="nav container" aria-label="Menu principal">
        <a href="<?= $home_link ?>" class="nav__logo">
          <img src="<?= $base . $sep ?>Logomarca.png" alt="Siqueira e Blanco - Engenharia HVAC" class="logo-img" width="180" height="48" />
        </a>
        <div class="nav__menu" id="nav-menu" role="navigation" aria-label="Menu principal">
          <ul class="nav__list">
            <li class="nav__item"><a href="<?= $home_link ?>" class="nav__link<?= nav_active('home', $active_page) ?>">Início</a></li>
            <li class="nav__item nav__item--dropdown"><a href="<?= $base . $sep ?>servicos/" class="nav__link<?= nav_active('servicos', $active_page) ?>">Serviços <span class="dropdown-arrow">▼</span></a>
              <ul class="nav__dropdown">
                <li><a href="<?= $base . $sep ?>servicos/" class="nav__dropdown-link">Visão Geral</a></li>
                <li><a href="<?= $base . $sep ?>servicos/tab-comissionamento.php" class="nav__dropdown-link">TAB & Comissionamento</a></li>
              </ul>
            </li>
            <li class="nav__item"><a href="<?= $base . $sep ?>sobre/" class="nav__link<?= nav_active('sobre', $active_page) ?>">Sobre</a></li>
            <li class="nav__item nav__item--dropdown">
              <a href="<?= $base . $sep ?>setores/" class="nav__link<?= nav_active('setores', $active_page) ?>">Setores <span class="dropdown-arrow">▼</span></a>
              <ul class="nav__dropdown">
                <li><a href="<?= $base . $sep ?>setores/farmaceutico.php" class="nav__dropdown-link">🏥 Farmacêutico</a></li>
                <li><a href="<?= $base . $sep ?>setores/datacenter.php" class="nav__dropdown-link">💾 Data Centers</a></li>
                <li><a href="<?= $base . $sep ?>setores/corporativo.php" class="nav__dropdown-link">🏢 Corporativo</a></li>
                <li><a href="<?= $base . $sep ?>setores/industrial.php" class="nav__dropdown-link">🏭 Industrial</a></li>
                <li><a href="<?= $base . $sep ?>setores/pressurizacao.php" class="nav__dropdown-link">🚨 Pressurização</a></li>
                <li><a href="<?= $base . $sep ?>setores/pos-metais.php" class="nav__dropdown-link">⚙️ Pós de Metais</a></li>
              </ul>
            </li>
            <li class="nav__item"><a href="<?= $base . $sep ?>portfolio/" class="nav__link<?= nav_active('portfolio', $active_page) ?>">Portfólio</a></li>
            <li class="nav__item"><a href="<?= $base . $sep ?>artigos/" class="nav__link<?= nav_active('artigos', $active_page) ?>">Artigos</a></li>
            <li class="nav__item"><a href="<?= $base . $sep ?>contato/" class="nav__link<?= nav_active('contato', $active_page) ?>">Contato</a></li>
          </ul>
          <button class="nav__close" id="nav-close" aria-label="Fechar menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
          </button>
        </div>
        <div class="nav__actions">
          <button class="theme-toggle" type="button" data-theme-toggle aria-label="Alternar tema" title="Alternar tema" aria-pressed="false">
            <svg class="theme-toggle__icon theme-toggle__icon--sun" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="12" r="4"></circle>
              <line x1="12" y1="2" x2="12" y2="5"></line>
              <line x1="12" y1="19" x2="12" y2="22"></line>
              <line x1="2" y1="12" x2="5" y2="12"></line>
              <line x1="19" y1="12" x2="22" y2="12"></line>
              <line x1="4.93" y1="4.93" x2="7.05" y2="7.05"></line>
              <line x1="16.95" y1="16.95" x2="19.07" y2="19.07"></line>
              <line x1="16.95" y1="7.05" x2="19.07" y2="4.93"></line>
              <line x1="4.93" y1="19.07" x2="7.05" y2="16.95"></line>
            </svg>
            <svg class="theme-toggle__icon theme-toggle__icon--moon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M21 12.79A9 9 0 1 1 11.21 3c0.03 0.94 0.31 1.85 0.8 2.65A7 7 0 0 0 18.35 13c0.8 0.49 1.71 0.77 2.65 0.79z"></path>
            </svg>
          </button>
          <button class="nav__toggle" id="nav-toggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="nav-menu">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
          </button>
        </div>
      </nav>
    </header>
