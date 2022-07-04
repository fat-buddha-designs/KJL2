<?php snippet('head') ?>

<?php snippet('theme-switcher') ?>

<?php snippet('navigation') ?>

<?php snippet('header') ?>

<main id="main" tab-index="-1">
  <section>
    <div>
      <h1><?= $page->pageheadline()->or($page->title())->html() ?></h1>
      <nav>
        <?php if($site->navigation()->isNotEmpty()): ?>
        <ul class="sitemap--list">
          <?php foreach($site->mainnavigation()->toStructure() as $navigation): ?>
          <li><a aria-label="<?php echo $navigation->text() ?>"
              href="<?php echo $navigation->url(); ?>"><?php echo $navigation->text() ?></a>
            <?php if($navigation->children()->isNotEmpty()): ?>
            <ul class="sitemap--sublist">
              <?php foreach($navigation->children()->toStructure() as $children): ?>
              <li><a aria-label="<?php echo $children->text() ?>"
                  href="<?php echo $children->url() ?>"><?php echo $children->text() ?></a>
                <?php if($children->children()->isNotEmpty()): ?>
                <ul class="sitemap--sublist--sublist">
                  <?php foreach($children->children()->toStructure() as $subchildren): ?>
                  <li><a aria-label="<?php echo $subchildren->text() ?>"
                      href="<?php echo $subchildren->url() ?>"><?php echo $subchildren->text() ?></a>
                  </li>
                  <?php endforeach ?>
                </ul>
                <?php endif ?>
              </li>
              <?php endforeach ?>
            </ul>
            <?php endif ?>
          </li>
          <?php endforeach ?>
        </ul>
        <?php endif ?>
        <?php if($site->secondfooternavigation()->isNotEmpty()): ?>
        <ul class="sitemap--list">
          <?php foreach($site->secondfooternavigation()->toStructure() as $navigation): ?>
          <li>
            <a href="<?php echo $navigation->url(); ?>">
              <?php echo $navigation->text() ?>
            </a>
          </li>
          <?php endforeach ?>
        </ul>
        <?php endif ?>
      </nav>
    </div>
  </section>
</main>

<?php snippet('footer') ?>