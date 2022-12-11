<?php snippet('head') ?>

<?php snippet('theme-switcher') ?>

<?php snippet('navigation') ?>

<?php snippet('header') ?>

<main id="main">
  <section>
    <h1><?= $page->pageheadline()->or($page->title())->html() ?></h1>
    <p>We're sorry. The page you are looking for can't be found.
    <p>Why not try the <a href="/" aria-label="back to the homepage">Homepage</a>?</p>
    <p>or <script>document.write('<a href="' + document.referrer + '">Go Back</a>');</script> to your previous page.</p>
  </section>
</main>

<?php snippet('footer') ?>
