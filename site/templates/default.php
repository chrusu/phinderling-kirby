<?php snippet("header"); ?>

<main class="main">
  <article class="page">
    <h1><?= $page->title()->html() ?></h1>
    <div class="text">
      <?= $page->text()->kirbytext() ?>
    </div>
  </article>
</main>

<?php snippet("footer"); ?>
