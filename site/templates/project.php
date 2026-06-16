<?php snippet("header"); ?>

<article>
  <header class="project-header">
    <h1><?= $page->title()->html() ?></h1>
    <?php if ($page->year()->isNotEmpty()): ?>
    <p class="meta"><?= $page->year() ?></p>
    <?php endif; ?>
  </header>

  <?php if ($page->images()->count() > 0): ?>
  <div class="gallery">
    <?php foreach ($page->images() as $image): ?>
    <figure>
      <img src="<?= $image->url() ?>" alt="<?= $page
    ->title()
    ->html() ?>" loading="lazy">
    </figure>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

  <?php if ($page->text()->isNotEmpty()): ?>
  <div class="description">
    <?= $page->text()->kirbytext() ?>
  </div>
  <?php endif; ?>
</article>

<nav class="project-nav">
  <?php if ($prev = $page->prev()): ?>
  <a href="<?= $prev->url() ?>">&larr; <?= $prev->title()->html() ?></a>
  <?php else: ?>
  <span></span>
  <?php endif; ?>

  <?php if ($next = $page->next()): ?>
  <a href="<?= $next->url() ?>"><?= $next->title()->html() ?> &rarr;</a>
  <?php endif; ?>
</nav>

<?php snippet("footer"); ?>
