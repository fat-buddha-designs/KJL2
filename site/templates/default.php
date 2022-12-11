<?php snippet('head') ?>

<?php snippet('theme-switcher') ?>

<?php snippet('navigation') ?>

<?php snippet('header') ?>

<main id="main">
  <section>
    <article>
    <nav class="breadcrumb" aria-label="breadcrumb">
      <ol>
        <?php foreach($site->breadcrumb() as $crumb): ?>
        <li>
          <a href="<?= $crumb->url() ?>" <?= e($crumb->isActive(), 'aria-current="page"') ?>>
            <?= html($crumb->title()) ?>
          </a>
        </li>
        <?php endforeach ?>
      </ol>
    </nav>
    <h1><?= $page->pageHeadline()->or($page->title())->html() ?></h1>
    <p class="is--meta">Approx Reading Time - <span id="time"></span> minutes</p>
    <div id="reading--block">
      <?= $page->pageContent()->kt() ?>
    </div>
  </article>
  </section>
</main>

<?php snippet('footer') ?>
