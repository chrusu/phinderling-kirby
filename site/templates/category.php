<?php snippet("header"); ?>

<header class="category-header">
  <h1><?= $page->title()->html() ?></h1>
</header>

<ul class="projects-grid">
  <?php foreach ($page->children()->listed() as $project): ?>
  <li class="project-card">
    <a href="<?= $project->url() ?>">
      <?php if ($image = $project->images()->first()): ?>
      <figure>
        <img src="<?= $image->url() ?>" alt="<?= $project
    ->title()
    ->html() ?>" loading="lazy">
      </figure>
      <?php endif; ?>
      <h2><?= $project->title()->html() ?></h2>
    </a>
  </li>
  <?php endforeach; ?>
</ul>

<?php snippet("footer"); ?>
