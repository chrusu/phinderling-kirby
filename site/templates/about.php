<?php snippet('header') ?>

<main class="main about">
  <h1><?= $page->title()->html() ?></h1>

  <?php if($page->bio()->isNotEmpty()): ?>
  <section class="bio">
    <h2>Biographie</h2>
    <?= $page->bio()->kirbytext() ?>
  </section>
  <?php endif ?>

  <?php if($page->cv()->isNotEmpty()): ?>
  <section class="cv">
    <h2>Expositions</h2>
    <?= $page->cv()->kirbytext() ?>
  </section>
  <?php endif ?>

  <?php if($page->contact()->isNotEmpty()): ?>
  <section class="contact">
    <h2>Contact</h2>
    <?= $page->contact()->kirbytext() ?>
  </section>
  <?php endif ?>
</main>

<?php snippet('footer') ?>
