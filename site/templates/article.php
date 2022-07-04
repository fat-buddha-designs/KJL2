<?php snippet('head') ?>

<?php snippet('theme-switcher') ?>

<?php snippet('navigation') ?>

<?php snippet('header') ?>

<main id="main" tab-index="-1">
  <section>
    <article class="post--block">
      <?php if($coverimage =  $page->coverImage()->toFile()): ?>
      <picture>
        <source srcset="<?= $coverimage->thumb(['format' => 'avif'])->url() ?>" type="image/avif">
        <source srcset="<?= $coverimage->thumb(['format' => 'webp'])->url() ?>" type="image/webp">
        <img src="<?= $coverimage->thumb(['format' => 'jpg'])->url() ?>" alt="<?= $page->coverimagealt()->html() ?>">
      </picture>
      <?php endif ?>
      <h1><?= $page->title()->html() ?></h1>
      <p class="is--meta">Posted on <span class="is--italic"><?= $page->date()->toDate('d-m-Y') ?></span> by <span
          class="is--italic"><?= html($site->author()) ?></span></p>

      <?= $page->text()->kirbytext() ?>

      <?php snippet('micros/prevnext') ?>
    </article>
  </section>
</main>

<?php snippet('footer') ?>