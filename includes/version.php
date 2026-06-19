<?php
/**
 * Fonte única das versões de cache-busting.
 *
 * Incremente estes valores SEMPRE que alterar styles.css ou script.js.
 * Usado por includes/head.php, includes/scripts.php e index.php, garantindo
 * que todas as páginas (inclusive a home) apontem para a mesma versão e o
 * cache do navegador/CDN seja invalidado de forma consistente.
 */
$css_version    = $css_version ?? '107';
$script_version = $script_version ?? '1771000003';
