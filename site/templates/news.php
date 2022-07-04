<?php snippet('head') ?>

<?php snippet('theme-switcher') ?>

<?php snippet('navigation') ?>

<?php snippet('header') ?>

<main id="main" tab-index="-1">
  <section>
  <h1><?= $page->pageheadline()->or($page->title())->html() ?></h1>

    <div class="auto--grid--fit">
    <?php foreach($page->children()->listed()->flip() as $article): ?>

      <article class="post--list--block">
      <h2><?= $article->title()->html() ?></h2>
      <?php if($coverimage =  $article->coverImage()->toFile()): ?>
        <picture>
        <source srcset="<?= $coverimage->thumb(['format' => 'avif'])->url() ?>" type="image/avif">
        <source srcset="<?= $coverimage->thumb(['format' => 'webp'])->url() ?>" type="image/webp">
        <img src="<?= $coverimage->thumb(['format' => 'jpg'])->url() ?>" alt="<?= $page->coverimagealt()->html() ?>">
      </picture>
	    <?php endif ?>
        <p><?= $article->text()->excerpt(300) ?></p>
        <a href="<?= $article->url() ?>">Read more…</a>
      </article>

      <?php endforeach ?>
    </div>

  </section>
</main>

<?php snippet('footer') ?>