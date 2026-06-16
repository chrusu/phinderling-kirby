<?php snippet("header"); ?>

<?php
// Hole Featured Project aus Panel-Einstellung oder Fallback zu "Horizon des émotions"
$featured = $page->featuredproject()->toPage();

if (!$featured) {
    // Fallback: Suche "Horizon des émotions"
    foreach ($page->children()->listed() as $category) {
        foreach ($category->children()->listed() as $project) {
            if (str_contains(strtolower($project->title()), "horizon des")) {
                $featured = $project;
                break 2;
            }
        }
    }
}
?>

<?php if ($featured && ($image = $featured->images()->first())): ?>
<div class="featured-project">
  <a href="<?= $featured->url() ?>">
    <img src="<?= $image->url() ?>" alt="<?= $featured->title()->html() ?>">
  </a>
</div>
<?php endif; ?>

<?php snippet("footer"); ?>
