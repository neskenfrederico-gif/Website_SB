<?php
/**
 * Scripts comuns
 *
 * Variáveis esperadas:
 *   $base          — prefixo de caminho ('' para raiz, '..' para subpáginas)
 *   $extra_scripts — array de scripts extras (opcional)
 *   $script_version  — versão para cache busting do script principal (opcional)
 *   $enable_analytics — habilita GA4 (opcional)
 *   $ga_measurement_id — ID de medição GA4 (opcional)
 *   $enable_pwa       — habilita registro do Service Worker (opcional)
 */
$base          = $base ?? '';
$extra_scripts = $extra_scripts ?? [];
$script_version = $script_version ?? '1770969600';
$enable_analytics = $enable_analytics ?? true;
$ga_measurement_id = $ga_measurement_id ?? 'G-HBL037W0QL';
$enable_pwa = $enable_pwa ?? true;
$sep           = ($base === '') ? '' : '/';
?>
    <script src="<?= $base . $sep ?>script.js?v=<?= urlencode($script_version) ?>" defer></script>
<?php foreach ($extra_scripts as $script): ?>
    <script src="<?= $script ?>"></script>
<?php endforeach; ?>
<?php if ($enable_analytics && $ga_measurement_id !== ''): ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= htmlspecialchars($ga_measurement_id) ?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', '<?= htmlspecialchars($ga_measurement_id) ?>');
    </script>
<?php endif; ?>
<?php if ($enable_pwa): ?>
    <script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker.register('<?= $base . $sep ?>sw.js').catch(() => {});
        });
      }
    </script>
<?php endif; ?>
