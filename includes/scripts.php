<?php
/**
 * Scripts comuns
 *
 * Variáveis esperadas:
 *   $base          — prefixo de caminho ('' para raiz, '..' para subpáginas)
 *   $extra_scripts — array de scripts extras (opcional)
 */
$extra_scripts = $extra_scripts ?? [];
$sep           = ($base === '') ? '' : '/';
?>
    <script src="<?= $base . $sep ?>script.js?v=16" defer></script>
<?php foreach ($extra_scripts as $script): ?>
    <script src="<?= $script ?>"></script>
<?php endforeach; ?>
