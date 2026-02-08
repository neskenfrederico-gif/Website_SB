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
            <li class="nav__item"><a href="<?= $base . $sep ?>servicos/" class="nav__link<?= nav_active('servicos', $active_page) ?>">Serviços</a></li>
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
        <button class="nav__toggle" id="nav-toggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="nav-menu">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
        </button>
      </nav>
    </header>
