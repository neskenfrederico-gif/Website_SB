<?php
/**
 * Renderiza um card de projeto.
 * Espera $project (array) e $base_path (string) definidos antes do include.
 * $base_path: '' para index.php, '..' para portfolio/index.php
 */
$href = $base_path . '/projetos/projeto-' . $project['slug'] . '.php';
$spec1_label = 'Área';
$spec1_value = $project['area'];
$spec2_label = 'Capacidade';
$spec2_value = $project['capacity'];
?>
<a class="project-card-link" href="<?= $href ?>" aria-label="Ver detalhes do projeto <?= htmlspecialchars($project['title']) ?>">
  <article class="project-card" data-category="<?= $project['category'] ?>">
    <div class="project-card__image project-card__image--<?= $project['image'] ?>">
      <div class="project-card__overlay">
        <span class="project-card__category"><?= $project['label'] ?></span>
      </div>
    </div>
    <div class="project-card__content">
      <h3 class="project-card__title"><?= htmlspecialchars($project['title']) ?></h3>
      <span class="project-card__client"><?= htmlspecialchars($project['client']) ?></span>
      <div class="project-card__specs">
        <div class="spec">
          <span class="spec__label"><?= $spec1_label ?></span>
          <span class="spec__value"><?= $spec1_value ?></span>
        </div>
        <div class="spec">
          <span class="spec__label"><?= $spec2_label ?></span>
          <span class="spec__value"><?= $spec2_value ?></span>
        </div>
      </div>
      <p class="project-card__description"><?= htmlspecialchars($project['description']) ?></p>
      <span class="project-card__details">Ver detalhes</span>
    </div>
  </article>
</a>
