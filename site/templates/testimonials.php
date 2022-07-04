<?php snippet('head') ?>

<?php snippet('theme-switcher') ?>

<?php snippet('navigation') ?>

<?php snippet('header') ?>

<main id="main" tab-index="-1">
  <section class="n--wrapper">
    <h1><?= $page->pageheadline()->or($page->title())->html() ?></h1>
    <?= $page->pageContent()->kt() ?>
    <?php foreach($testimonials as $testimonial): ?>
    <div class="testimonial--block">
      <p><?= $testimonial->text() ?></p>
    </div>
    <?php endforeach ?>
    </div>
    <p>A full inspection of our book of recommendations and testimonials are available to be viewed in their original
      state at the office of KJL Solicitors along with many other kind comments not featured here. </p>
    <p>We are implicit about protecting the identity and confidentiality of our clients therefore square brackets have
      been used to mask names
      or sensitive information where appropriate. The snippets featured above are just a small sample of the many thank
      you letters received.</p>
    <p>KJL Solicitors, Blofield Chambers, The Street, Blofield, Norwich, NR13 4AA</p>
  </section>
</main>

<?php snippet('footer') ?>