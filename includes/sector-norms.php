<?php
/**
 * Seção de normas reutilizável para páginas de setores.
 *
 * Variável esperada:
 *   $norms — array de ['code' => '...', 'desc' => '...']
 */
?>
    <section class="section sector-standards">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle"><?= $norms_subtitle ?? 'Base normativa' ?></span>
          <h2 class="section__title"><?= $norms_title ?? 'Normas e <span class="gradient-text">boas práticas</span>' ?></h2>
        </div>

        <div class="standards-grid">
          <?php foreach ($norms as $norm): ?>
          <div class="standard-badge fade-in"><strong><?= $norm['code'] ?></strong><span><?= $norm['desc'] ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
