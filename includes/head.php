<?php
/**
 * Head partial — elementos comuns do <head>
 *
 * Variáveis esperadas:
 *   $page_title       — <title> da página
 *   $page_description — meta description
 *   $og_title         — og:title (opcional, usa $page_title se vazio)
 *   $og_description   — og:description (opcional, usa $page_description se vazio)
 *   $og_image         — og:image URL completa
 *   $og_url           — og:url URL completa
 *   $canonical        — link rel=canonical URL completa
 *   $base             — prefixo de caminho ('' para raiz, '..' para subpáginas)
 *   $extra_css        — array de CSS extras ['projeto.css?v=123'] (opcional)
 *   $extra_head       — HTML extra para o head (preloads etc.) (opcional)
 */
$og_title       = $og_title ?? $page_title;
$og_description = $og_description ?? $page_description;
$extra_css      = $extra_css ?? [];
$extra_head     = $extra_head ?? '';
$css_version    = '48';
$sep            = ($base === '') ? '' : '/';
?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Siqueira e Blanco Engenharia" />

    <meta property="og:title" content="<?= htmlspecialchars($og_title) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($og_description) ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($og_image) ?>" />
    <meta property="og:url" content="<?= htmlspecialchars($og_url) ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="pt_BR" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="theme-color" content="#1e3a5f" />

    <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>" />
    <link rel="icon" type="image/x-icon" href="<?= $base . $sep ?>favicon.ico" media="(prefers-color-scheme: light)" />
    <link rel="icon" type="image/x-icon" href="<?= $base . $sep ?>favicon-light.ico" media="(prefers-color-scheme: dark)" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $base . $sep ?>apple-touch-icon.png" />

    <title><?= htmlspecialchars($page_title) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'" />
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" /></noscript>

    <link rel="stylesheet" href="<?= $base . $sep ?>styles.css?v=<?= $css_version ?>" />
<?php foreach ($extra_css as $css): ?>
    <link rel="stylesheet" href="<?= $css ?>" />
<?php endforeach; ?>
<?= $extra_head ?>
