<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page->title() ?> | <?= $site->title() ?></title>
  <meta name="description" content="<?= $site->description() ?>">
  <link rel="stylesheet" href="<?= url("assets/css/style.css") ?>">
</head>
<body>
  <div class="layout">
    <aside class="sidebar">
      <header class="site-header">
        <a href="<?= $site->url() ?>" class="logo"><?= $site
    ->title()
    ->html() ?></a>
      </header>

      <nav class="main-nav">
        <?php
        $home = $site->find("home");
        $categories = $home ? $home->children()->listed() : [];
        ?>

        <?php foreach ($categories as $category): ?>
        <div class="nav-category<?php e($category->isOpen(), " is-open"); ?>">
          <a href="<?= $category->url() ?>" class="nav-category-title<?php e(
    $category->isActive(),
    " is-active",
); ?>">
            <?= $category->title()->html() ?>
          </a>

          <?php if ($category->isOpen()): ?>
          <ul class="nav-projects">
            <?php foreach ($category->children()->listed() as $project): ?>
            <li>
              <a href="<?= $project->url() ?>"<?php e(
    $project->isActive(),
    ' class="is-active"',
); ?>>
                <?= $project->title()->html() ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
      </nav>

      <footer class="site-footer">
        <p>&copy; <?= date("Y") ?> <?= $site->author()->html() ?></p>
        <?php if ($site->email()->isNotEmpty()): ?>
        <p><a href="mailto:<?= $site->email() ?>"><?= $site->email() ?></a></p>
        <?php endif; ?>
      </footer>
    </aside>

    <main class="content">
