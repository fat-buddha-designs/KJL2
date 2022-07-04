<?php snippet('head') ?>

<?php snippet('theme-switcher') ?>

<?php snippet('navigation') ?>

<?php snippet('header') ?>

<?php snippet('banner') ?>

<main id="main" tab-index="-1">
    <article>
      <h1><?= $page->pageHeadline()->or($page->title())->html() ?></h1>
      <?= $page->firstpageContent()->kt() ?>
    </article>
    <div class="frontpage--block--container">
      <div class="auto--grid--fit">
        <?php
        $items = $page->Frontpageblockone()->toStructure();
        foreach ($items as $item): ?>
        <div class="frontpage--block">
          <h2><?= $item->headline()->html() ?></h2>
          <p><?= $item->blocktext()->html() ?></p>
          <a href="<?= $item->url()->toLinkObject()->href(); ?>">About Our <?= $item->url()->toLinkObject()->title(); ?>
            Service <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" fill="#fff" /></svg></a>
        </div>
        <?php endforeach ?>
        <?php
        $items = $page->Frontpageblocktwo()->toStructure();
        foreach ($items as $item): ?>
        <div class="frontpage--block">
          <h2><?= $item->headline()->html() ?></h2>
          <p><?= $item->blocktext()->html() ?></p>
          <a href="<?= $item->url()->toLinkObject()->href(); ?>">About Our <?= $item->url()->toLinkObject()->title(); ?>
            Service <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" fill="#fff" /></svg></a>
        </div>
        <?php endforeach ?> 
        <?php
        $items = $page->Frontpageblockthree()->toStructure();
        foreach ($items as $item): ?>
        <div class="frontpage--block">
          <h2><?= $item->headline()->html() ?></h2>
          <p><?= $item->blocktext()->html() ?></p>
          <a href="<?= $item->url()->toLinkObject()->href(); ?>">About Our <?= $item->url()->toLinkObject()->title(); ?>
            Service <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512"><path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" fill="#fff" /></svg></a>
        </div>
        <?php endforeach ?>
      </div>
    </div>
    <article>
      <?= $page->secondpageContent()->kt() ?>
    </article>
</main>

<?php snippet('testimonials-slider') ?>

<?php snippet('footer') ?>