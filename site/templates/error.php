<?php snippet('header') ?>

<main class="main error">
  <h1><?= $page->title()->html() ?></h1>
  <div class="text">
    <?= $page->text()->kirbytext() ?>
  </div>
  <a href="<?= $site->url() ?>">Retour à l'accueil</a>
</main>

<?php snippet('footer') ?>
