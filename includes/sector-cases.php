<?php
/**
 * Seção de cases reutilizável para páginas de setores.
 *
 * Variável esperada:
 *   $cases — array de ['href' => '...', 'title' => '...', 'specs' => '...', 'desc' => '...']
 */
?>
    <section class="section sector-cards" id="cases">
      <div class="container">
        <div class="section__header">
          <span class="section__subtitle">Experiência comprovada</span>
          <h2 class="section__title"><?= $cases_title ?? 'Cases <span class="gradient-text">relacionados</span>' ?></h2>
        </div>

        <div class="sector-cards__grid">
          <?php foreach ($cases as $case): ?>
          <a href="<?= $case['href'] ?>" class="sector-info-card sector-info-card--link fade-in">
            <div class="sector-info-card__top">
              <h3><?= htmlspecialchars($case['title']) ?></h3>
            </div>
            <p><strong><?= $case['specs'] ?></strong><br><?= $case['desc'] ?></p>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
